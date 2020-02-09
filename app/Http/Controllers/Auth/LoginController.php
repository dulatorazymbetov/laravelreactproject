<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout')->except('status');
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
            if (Adldap::auth()->attempt($login, $password)) {

            }
            else{
                return response()->json('invalid username or password', 400);
            }
        }
        catch (\Adldap\Exceptions\Auth\BindException $e){
            
        }
    }
    public function status(){
        $user = Auth::user();
        return $user;
    }
}
