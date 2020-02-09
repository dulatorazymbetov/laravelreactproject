<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct(){
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    public function login(Request $request){
        //$user = Adldap::search()->where('sAMAccountName', '=', 'amazhenov')->first();
        //return response()->json($user, 201);
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
                    $this->registerUser($login, $password);
                    
                }
                else {
                    Auth::loginUsingId($user->id, true);
                    return response()->json($user, 200);
                }
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
        $user->password     = bcrypt($password);
        $user->save();

        Auth::loginUsingId($user->id, true);
        return response()->json($user, 200);
    }

    public function status(Request $request){
        dd(Auth::user());
    }
}
