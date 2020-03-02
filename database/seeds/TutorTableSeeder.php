<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\Student\Student;
use App\Models\Staff\Staff;

class TutosTableSeeder extends Seeder
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
                'user.user_id',
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.username',
                'user.gender',
                'user.email',
                'user.birthdate',
                'user.iin',
                'staff_card.staff_degree_id'
            )
            ->join('staff_card', 'staff_card.user_id', '=', 'user.user_id')
            ->orderBy('user_id')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    if(!User::where('login', $row->username)->first()){
                        $user = new User;
                        $user->firstname = $row->firstname;
                        $user->lastname = $row->lastname;
                        $user->patronymic = $row->middlename;
                        $user->login = $row->username;
                        $user->gender = $row->gender;
                        $user->email = $row->email;
                        $user->birthdate = $row->birthdate;
                        $user->iin = $row->iin;
                        $user->save();
                        $user->roles()->attach(Role::find(3));

                        $staff = new Staff;
                        $staff->user_id = $user->id;
                        $staff->academic_degree_id = $row->staff_degree_id;
                        $staff->save();
                    } 
                }
            });
    }
}
