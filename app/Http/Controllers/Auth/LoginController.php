<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use Illuminate\Support\Facades\Hash;

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
                $user = User::where('login', $login)->first();
                if ( !$user ){
                    $user = $this->registerUser($login, $password);
                }
                $token = auth()->login($user);
                return $this->respondWithToken($token);
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
        $user = new User();
        $user->login     = strtolower($login);
        $user->firstname    = $ldap_user->givenname[0];
        $user->lastname     = $ldap_user->sn[0];
        $user->password     = Hash::make($password);
        $user->save();
        return $user;
    }

    public function status(Request $request){
        $user = auth()->user();
        if($user){
            return response()->json([
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'login' => $user->login
            ], 200);
        }
        
    }
    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
