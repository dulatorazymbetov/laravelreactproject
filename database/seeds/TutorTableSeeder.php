<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\Student\Student;
use App\Models\Employee\Employee;

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
                'user.iin'
            )
            ->where('role_id', '3')
            ->orderBy('user_id')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $employee = new Employee;
                    $employee->save();
                    
                    if(User::where('login', $row->username)->first()){
                        $row->username = $row->username."_duplicate_".$row->user_id;
                    }
                    
                    $user = new User;
                    $user->firstname = $row->firstname;
                    $user->lastname = $row->lastname;
                    $user->patronymic = $row->middlename;
                    $user->login = $row->username;
                    $user->gender = $row->gender;
                    $user->email = $row->email;
                    $user->birthdate = $row->birthdate;
                    $user->employee_id = $employee->id;
                    $user->iin = $row->iin;
                    $user->save();
                    $user->roles()->attach(Role::find(3));
                }
            });
    }
}
