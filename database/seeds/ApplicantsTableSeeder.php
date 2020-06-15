<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\Applicant\Applicant;
use App\Models\User\Role;

class ApplicantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();
        \DB::table('applicants')->truncate();
        \DB::table('role_user')->truncate();
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
                'application.first_name_kk',
                'application.last_name_kk',
                'application.middle_name_kk',
                'application.first_name_en',
                'application.last_name_en',
                'application.middle_name_en'

            )
            ->leftJoin('application', 'application.user_id', '=', 'user.user_id')
            ->orderBy('user.user_id')
            ->whereNotNull('applicant_apply_year')
            ->chunk(100, function ($rows) {
            	foreach ($rows as $key => $value) {
                    $user = new User;
            		$user->login = $value->iin."-".$value->applicant_apply_year;
            		$user->lastname = $value->lastname;
            		$user->firstname = $value->firstname;
            		$user->patronymic = $value->middlename;
                    $user->tel = $value->phone;
                    $user->birthdate = $value->birthdate;
                    $user->iin = $value->iin;
            		$user->save();
            		$user->roles()->attach(Role::find(7));

            		$applicant = new Applicant;
            		$applicant->user_id = $user->id;
                    $applicant->apply_year = $value->applicant_apply_year;
                    $applicant->firstname_kk = $value->first_name_kk;
                    $applicant->lastname_kk = $value->last_name_kk;
                    $applicant->patronymic_kk = $value->middle_name_kk;
                    $applicant->firstname_en = $value->first_name_en;
                    $applicant->lastname_en = $value->last_name_en;
                    $applicant->patronymic_en = $value->middle_name_en;
            		$applicant->save();
            	}
            });
    }
}
