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
            ->where('create_date', '>', '2020-05-01')
            ->orderBy('user.user_id')
            ->chunk(100, function ($rows) {
            	foreach ($rows as $key => $value) {
                    
            	}
            });
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
