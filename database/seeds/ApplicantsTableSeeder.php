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
            ->orderBy('user_id')
            ->whereNotNull('applicant_apply_year')
            ->chunk(100, function ($rows) {
            	foreach ($rows as $key => $value) {
            		$user = new User;
            		$user->login = $value->iin."-".$value->applicant_apply_year;
            		$user->lastname = $value->lastname;
            		$user->firstname = $value->firstname;
            		$user->patronymic = $value->middlename;
            		$user->save();
            		$user->roles()->attach(Role::find(7));

            		$applicant = new Applicant;
            		$applicant->user_id = $user->id;
            		$applicant->save();
            	}
            });
    }
}
