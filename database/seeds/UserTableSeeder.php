<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$old = \DB::connection('old')
        	->table('user')
        	->where('is_student', 1)
        	->get()
        	->unique('username');
        $students = [];
        foreach ($old as $key => $value) {
        	$students[] = [
        		'firstname' => $value->firstname,
        		'lastname' => $value->lastname,
        		'patronymic' => $value->middlename,
        		'login' => $value->username,
        		'gender' => $value->gender,
        		'email' => $value->email,
        		'birthdate' => $value->birthdate,
        		'is_student' => $value->is_student
        	];
        }
        User::insert($students);

    }
}
