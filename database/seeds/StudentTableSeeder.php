<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
use App\Models\User\Role;
use App\Models\Student\Student;

class StudentTableSeeder extends Seeder
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
                'user.firstname',
                'user.lastname',
                'user.middlename',
                'user.username',
                'user.gender',
                'user.email',
                'user.birthdate',
                'user.iin',
                'student_card.status_id',
                'student_card.edu_form_id',
                'student_card.lang_id',
                'student_card.course'
            )
            ->join('student_card', 'student_card.student_id', '=', 'user.user_id')
            ->join('student_status', 'student_status.id', '=', 'student_card.status_id')
            ->orderBy('user_id')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $user = User::where('login', $row->username)->first();
                    if(!$user){
                        //$row->username = $row->username."_duplicate";
                        $user = new User;
                    }
                    
                    if($row->gender === 0){$row->gender = 1;}
                    else if($row->gender === 1){$row->gender = 2;}

                    $user->firstname = $row->firstname;
                    $user->lastname = $row->lastname;
                    $user->patronymic = $row->middlename;
                    $user->login = $row->username;
                    $user->gender = $row->gender;
                    $user->email = $row->email;
                    $user->birthdate = $row->birthdate;
                    $user->iin = $row->iin;
                    $user->save();
                    $user->roles()->sync(Role::find(4));

                    $student = Student::where('user_id', $user->id)->first();

                    if(!$student){
                        $student = new Student;
                    }

                    $student->user_id = $user->id;
                    $student->study_status_id = $row->status_id;
                    $student->study_form_id = $row->edu_form_id;
                    $student->study_lang_id = $row->lang_id;
                    $student->course = $row->course;
                    $student->save();
                    echo $student->id." | ";
                }
            });

    }
}
