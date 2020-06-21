<?php
namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use Redirect;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use GuzzleHttp\Client;
//MODELS
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\Applicant\Applicant;
//REQUESTS
use App\Http\Requests\ApplicantRegistration;
//MAIL
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmMail;

class LoginController extends Controller {
    use AuthenticatesUsers;
    
    public function __construct(){
        $this->middleware('guest', ['except' => ['logout', 'status']]);
    }

    public function login(Request $request){
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
                return [
                    'token' => $this->respondWithToken($token), 
                    'user' => $this->respondUserInfo($user)
                ];
            }
            else{
                $user = User::where('login', $login)->with('roles','applicant')->first();
                if (Hash::check($password, $user->password, [])) {
                    $token = auth()->login($user);
                    return [
                        'token' => $this->respondWithToken($token), 
                        'user' => $this->respondUserInfo($user)
                    ];
                }
                else {
                    return response()->json('invalid login or password', 400);
                }
            }
        }
        catch (\Adldap\Exceptions\Auth\BindException $e){
            
        }
    }

    public function registerUser($login, $password){
        $ldap_user = Adldap::search()->where('sAMAccountName', '=', $login)->first();
        $old_info = $this->getInfoFromOldCampus($login);
        $user = new User();
        $user->login = strtolower($login);
        $user->firstname = $ldap_user->givenname[0];
        $user->lastname = $ldap_user->sn[0];
        $user->password = Hash::make($password);
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
            'modules' => $user->modules,
            'token' => auth()->login($user)
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
    public function registerApplicant(ApplicantRegistration $request){
        $data = $request->validated();
        $login = $data['iin']."-".date('Y');
        if(User::select('login')->where('login', $login)->first()){
            return response()->json([
                'errors' => [
                    'iin' => 'The iin has already been taken.'
                ],
                'message' => 'The given data was invalid.'
            ], 422);
        }
        else {
            $user = new User;
            $user->lastname = $data['lastname'];
            $user->firstname = $data['firstname'];
            $user->patronymic = $data['patronymic'];
            $user->login = $data['iin']."-".date('Y');
            $user->tel = $data['tel'];
            $user->email = $data['email'];
            $user->iin = $data['iin'];
            $user->password = $data['password'];
            $user->save();
            $user->roles()->sync(Role::find(7));

            $applicant = new Applicant;
            $applicant->user_id = $user->id;
            $applicant->apply_year = date('Y');
            $applicant->additional = $data['parent_fio']."\n".$data['parent_tel'];
            $applicant->confirm_token = md5($user->id.date('Y'));
            $applicant->save();
            $params = [
                'confirm_token' => md5($user->id.date('Y')),
                'login' => $login,
                'password' => $data['password'],
                'fio' => $data['lastname']." ".$data['firstname']
            ];
            Mail::to($data['email'])->send(new ConfirmMail($params));
        }
    }
    public function confirmEmail(Request $request){
        $applicant = Applicant::where('confirm_token', $request->token)->with('user')->first();
        if($applicant){
            //$applicant->confirm_token = null;
            $login = $applicant->user->login;
            $password = $applicant->user->password;
            $name = $applicant->user->lastname." ".$applicant->user->firstname;
            $applicant->user()->update([
                'password' => Hash::make($password)
            ]);
            $applicant->save();
            $this->getGraph($login, $password, $name);
            return ("
                <h2>Ученая запись подтверждена</h2>
                <p>
                    Учетная запись для входа в портал: <b>".$applicant->user->login."</b><br/>
                    Пароль: <b>".$password."</b>
                </p>
                <p>
                    Учетная запись для входа в 365: <b>".$applicant->user->login."@admission.iitu.kz</b><br/>
                    Пароль: <b>".$password."</b>
                </p>
                <a href='/'>На главную страницу</a>
            ");
        }
        else {
            return "Вы уже подтвердили учетную запись или ссылка не активна";
        }
    }
    public function getGraph($login, $password, $name){
        $tenantId = 'e069c2fa-e067-469c-bc76-8143afce1ec7';
        $guzzle = new \GuzzleHttp\Client();
        $url = 'https://login.microsoftonline.com/' . $tenantId . '/oauth2/token?api-version=1.0';
        $token = json_decode($guzzle->post($url, [
            'form_params' => [
                'client_id' => '67ec9117-9658-4daa-b77d-65aeb23a20ef',
                'client_secret' => 'CImRkYWYEsMy37-2O-8r0MH~v-QFqyBEp9',
                'resource' => 'https://graph.microsoft.com/',
                'grant_type' => 'client_credentials',
            ],
        ])->getBody()->getContents());
        $accessToken = $token->access_token;

        $graph = new Graph();
        $graph->setAccessToken($accessToken);

        $queryParams='{
          "accountEnabled": true,
          "displayName": "'.$name.'",
          "mailNickname": "'.$login.'",
          "userPrincipalName": "'.$login.'@admission.iitu.kz",
          "passwordProfile" : {
            "forceChangePasswordNextSignIn": true,
            "password": "'.$password.'"
          }
        }';
        $getCreateUrl = '/users';
        $createres = $graph->createRequest('POST', $getCreateUrl)
          ->attachBody($queryParams)
          ->setReturnType(Model\User::class)
          ->execute();

    }
}
