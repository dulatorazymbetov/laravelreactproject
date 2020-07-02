<?php

use Illuminate\Database\Seeder;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use GuzzleHttp\Client;
//MODELS
use App\Models\User\User;
use App\Models\Applicant\Applicant;
use App\Models\User\Role;
//MAIL
use Illuminate\Support\Facades\Mail;
use App\Mail\Send365;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::connection('old')
            ->table('user')
            ->select(
                'user.iin',
                'user.lastname',
                'user.firstname',
                'user.middlename',
                'user.phone',
                'user.birthdate',
                'user.applicant_apply_year',
                'user.gender',
                'user.email',
                'user.create_date'
            )
            ->leftJoin('student_card', 'student_card.student_id', '=', 'user.user_id')
            ->where('applicant_apply_year', '2020')
            ->where('create_date', '>', '2020-06-01')
            ->orderBy('user.user_id')
            ->chunk(100, function ($rows) {
            	foreach ($rows as $key => $value) {
                    $login = $value->iin."-".$value->applicant_apply_year;
                    $user = User::where('login', $login)->first();
                    if(!$user){
                        $user = new User;
                    }
                    if(!$user->password){
                        echo "login:".$login."|";
                        $password = 'IITU-applicant-'.date('Y');
                        $name = $user->lastname." ".$user->firstname;
                        $this->getGraph($login, $password, $name);
                        $this->sendMail($value->email, $login, $name);
                        $user->password = Hash::make($password);
                    }
                    if($value->gender === 0){$value->gender = 1;}
                    else if($value->gender === 1){$value->gender = 2;}

            		$user->login = $login;
            		$user->lastname = $value->lastname;
            		$user->firstname = $value->firstname;
            		$user->patronymic = $value->middlename;
                    $user->tel = $value->phone;
                    $user->birthdate = $value->birthdate;
                    $user->iin = $value->iin;
                    $user->gender = $value->gender;
                    $user->email = $value->email;
            		$user->save();
            		$user->roles()->sync(Role::find(7));

                    $applicant = Applicant::where('user_id', $user->id)->first();
                    if(!$applicant){
                        $applicant = new Applicant;
                    }
            		
            		$applicant->user_id = $user->id;
                    $applicant->apply_year = $value->applicant_apply_year;
                    $applicant->save();
                    
                    $password = 'IITU-applicant-2020';
                    $name = $user->lastname." ".$user->firstname;
                    

                    echo $applicant->id." | ";
            	}
            });
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
            "password": "IITU-applicant-'.date('Y').'"
          }
        }';
        $getCreateUrl = '/users';
        $createres = $graph->createRequest('POST', $getCreateUrl)
          ->attachBody($queryParams)
          ->setReturnType(Model\User::class)
          ->execute();

    }
    function sendMail($email, $login, $fio){
        $params = [
            'login' => $login,
            'fio' => $fio,
            'password' => "IITU-applicant-".date('Y')
        ];
        Mail::to($email)->send(new Send365($params));
    }
}
