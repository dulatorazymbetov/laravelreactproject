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
        DB::table('study_statuses')->insert([
            'id' => '1',
            'name' => 'STUDENT',
            'description_kk' => 'Bilim alýshy',
            'description_ru' => 'Обучающийся',
            'description_en' => 'Student'
        ]);
        DB::table('study_statuses')->insert([
            'id' => '2',
            'name' => 'ENROLLEE',
            'description_kk' => 'Talapker',
            'description_ru' => 'Абитуриент',
            'description_en' => 'Enrollee'
        ]);
        DB::table('study_statuses')->insert([
            'id' => '3',
            'name' => 'EXPELLED',
            'description_kk' => 'Oqýdan shyǵaryldy',
            'description_ru' => 'Отчислен',
            'description_en' => 'Expelled'
        ]);
        DB::table('study_statuses')->insert([
            'id' => '4',
            'name' => 'GRADUATE',
            'description_kk' => 'Bitirýshi',
            'description_ru' => 'Выпускник',
            'description_en' => 'Graduate'
        ]);
        DB::table('study_statuses')->insert([
            'id' => '5',
            'name' => 'ACADEMIC_LEAVE',
            'description_kk' => 'Akademıalyq demalys',
            'description_ru' => 'Академический отпуск',
            'description_en' => 'Academic leave'
        ]);
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
            ->where('user_id', '<', '1000')
            ->orderBy('user_id')
            ->chunk(100, function ($rows) {
                foreach ($rows as $row) {
                    $student = new Student;
                    $student->study_status_id = $row->status_id;
                    $student->study_form_id = $row->edu_form_id;
                    $student->study_lang_id = $row->lang_id;
                    $student->course = $row->course;
                    $student->save();

                    if(User::where('login', $row->username)->first()){
                        $row->username = $row->username."_duplicate";
                    }

                    $user = new User;
                    $user->firstname = $row->firstname;
                    $user->lastname = $row->lastname;
                    $user->patronymic = $row->middlename;
                    $user->login = $row->username;
                    $user->gender = $row->gender;
                    $user->email = $row->email;
                    $user->birthdate = $row->birthdate;
                    $user->student_id = $student->id;
                    $user->iin = $row->iin;
                    $user->save();
                    $user->roles()->attach(Role::find(4));
                }
            });

    }
}
