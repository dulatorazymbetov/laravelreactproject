<?php
namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User\User;
use App\Models\User\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class LoginController extends Controller {
    use AuthenticatesUsers;
    
    public function __construct(){
        $this->middleware('guest', ['except' => ['logout', 'status']]);
    }

    public function login(Request $request){
        //$user = Adldap::search()->where('sAMAccountName', '=', 'amazhenov')->first();
        //return response()->json($user, 201);
        $user = auth()->user();
        if($user){
            dd($user);
        }
        $validator = Validator::make($request->all(),[
                'login' => 'required',
                'password' => 'required',
            ],
            [
                'login.required' => 'login required',
                'password.required' => 'password required',
            ]
        );
        $login = $request->login;
        $password = $request->password;
        if($validator->fails()){
            $error = $validator->errors();
            return response()->json($error, 406);
        }
        try {
            if (Adldap::auth()->attempt($login."@iitu.kz", $password)) {
                $user = User::where('login', $login)->with('roles')->first();
                if ( !$user ){
                    $user = $this->registerUser($login, $password);
                }
                $token = auth()->login($user);
                return ['token' => $this->respondWithToken($token), 'user' => $this->respondUserInfo($user)];
            }
            else{
                return response()->json('invalid login or password', 400);
            }
        }
        catch (\Adldap\Exceptions\Auth\BindException $e){
            
        }
    }

    public function registerUser($login, $password){
        $ldap_user = Adldap::search()->where('sAMAccountName', '=', $login)->first();
        $old_info = $this->getInfoFromOldCampus($login);
        $user = new User();
        $user->login     = strtolower($login);
        $user->firstname    = $ldap_user->givenname[0];
        $user->lastname     = $ldap_user->sn[0];
        $user->password     = Hash::make($password);
        $user->gender = $old_info->gender;
        $user->email = $old_info->email;
        $user->birthdate = $old_info->birthdate;
        $user->iin = $old_info->iin;
        $user->save();
        $user->roles()->attach(Role::find($old_info->roles));
        return $user;
    }

    public function status(){
        $user = User::with('roles')->find(auth()->id());
        if($user){return $this->respondUserInfo($user);}
        
    }
    protected function respondWithToken($token){
        return ([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
    protected function respondUserInfo($user){
        return [
            'id' => $user->id,
            'firstname' => $user->firstname,
            'lastname' => $user->lastname,
            'login' => $user->login,
            'modules' => $user->modules
        ];
    }
    protected function getInfoFromOldCampus($login){
        $user = \DB::connection('old')
            ->table('user')
            ->where('username', $login)
            ->first();
        $user->roles = \DB::connection('old')
            ->table('user_role_mapper')
            ->select('role_id')
            ->where('user_id', $user->user_id)
            ->get()->pluck('role_id');
        return $user;
    }
}
