<?php

use Illuminate\Database\Seeder;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('modules')->truncate();
		DB::table('module_role')->truncate();	
		
		//МЕНЕДЖЕР РОЛЕЙ --НАЧАЛО
        DB::table('modules')->insert([
            'id' => '1',
            'url' => 'role_manager',
            'description_kk' => 'Rólder menedjmenti',
            'description_ru' => 'Менеджмент ролей',
            'description_en' => 'Role management',
            'icon' => 'assignment_ind'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '1',
            'module_id' => '1'
        ]);
        //МЕНЕДЖЕР РОЛЕЙ --КОНЕЦ

        DB::table('modules')->insert([
            'id' => '2',
            'url' => 'academic_calendar',
            'description_kk' => 'Akadem. kúntizbe',
            'description_ru' => 'Академ. календарь',
            'description_en' => 'Academic calendar',
            'icon' => 'calendar_today'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '1',
            'module_id' => '2'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '2',
            'module_id' => '2'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '3',
            'module_id' => '2'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '4',
            'module_id' => '2'
        ]);

        DB::table('modules')->insert([
            'id' => '3',
            'url' => 'individual_study_plan',
            'description_kk' => 'Oqý jospary',
            'description_ru' => 'Учебный план',
            'description_en' => 'Study plan',
            'icon' => 'import_contacts'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '4',
            'module_id' => '3'
        ]);

        DB::table('modules')->insert([
            'id' => '4',
            'url' => 'list_of_students',
            'description_kk' => 'Stýdentter tizimi',
            'description_ru' => 'Студенты',
            'description_en' => 'List of students',
            'icon' => 'people_alt'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '4'
        ]);

        DB::table('modules')->insert([
            'id' => '5',
            'url' => 'list_of_staff',
            'description_kk' => 'Qyzmetkerler tizimi',
            'description_ru' => 'Сотрудники',
            'description_en' => 'List of staff',
            'icon' => 'assignment_ind'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '11',
            'module_id' => '5'
        ]);
        DB::table('modules')->insert([
            'id' => '6',
            'url' => 'list_of_staff/:id',
            'without_params' => 'list_of_staff'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '11',
            'module_id' => '6'
        ]);
        DB::table('modules')->insert([
            'id' => '7',
            'url' => 'list_of_applicants',
            'description_kk' => 'Talapker',
            'description_ru' => 'Абитуриенты',
            'description_en' => 'Applicants',
            'icon' => 'business_center'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '7'
        ]);
        DB::table('modules')->insert([
            'id' => '8',
            'url' => 'list_of_applicants/:id',
            'without_params' => 'list_of_applicants'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '8'
        ]);

        DB::table('modules')->insert([
            'id' => '9',
            'url' => 'certificates',
            'description_kk' => 'Anyqtama tizimi',
            'description_ru' => 'Журнал справок',
            'description_en' => 'List of certificates',
            'icon' => 'assignment'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '4',
            'module_id' => '9'
        ]);
        //ОБРАЗОВАТЕЛЬНЫЕ ПРОГРАММЫ --НАЧАЛО
        DB::table('modules')->insert([
            'id' => '10',
            'url' => 'edu_programs',
            'description_kk' => 'Обр. программы',
            'description_ru' => 'Обр. программы',
            'description_en' => 'Educational programs',
            'icon' => 'chrome_reader_mode'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '10'
        ]);
        DB::table('modules')->insert([
            'id' => '11',
            'url' => 'edu_programs/:id',
            'without_params' => 'edu_programs'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '11'
        ]);
		//ОБРАЗОВАТЕЛЬНЫЕ ПРОГРАММЫ --КОНЕЦ
		DB::table('modules')->insert([
            'id' => '12',
            'url' => 'hr_orders',
            'description_kk' => 'Приказы сотруников',
            'description_ru' => 'Приказы сотруников',
            'description_en' => 'Приказы сотруников',
            'icon' => 'assignment_ind'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '11',
            'module_id' => '12'
        ]);
		
		//User_profile
		DB::table('modules')->insert([
            'id' => '13',
            'url' => 'student_profile',
            'description_kk' => 'Менің профилім',
            'description_ru' => 'Мой профиль',
            'description_en' => 'My profile',
            'icon' => 'assignment_ind'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '2',
            'module_id' => '13'
        ]);

        DB::table('modules')->insert([
            'id' => '14',
            'url' => 'diploma_supplement',
            'description_kk' => 'Diplom qosymshasy',
            'description_ru' => 'Приложение к диплому',
            'description_en' => 'Diploma Supplement',
            'icon' => 'description'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '14'
        ]);

        DB::table('modules')->insert([
            'id' => '15',
            'url' => 'diploma_supplement/:id',
            'without_params' => 'diploma_supplement'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '15'
        ]);

        DB::table('modules')->insert([
            'id' => '16',
            'url' => 'course_apps',
            'description_kk' => 'Заявки от кафедр',
            'description_ru' => 'Заявки от кафедр',
            'description_en' => 'Заявки от кафедр',
            'icon' => 'chrome_reader_mode'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '16'
        ]);

        DB::table('modules')->insert([
            'id' => '17',
            'url' => 'students_statements',
            'description_kk' => 'Исходящие заявки',
            'description_ru' => 'Исходящие заявки',
            'description_en' => 'Исходящие заявки',
            'icon' => 'ballot'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '17'
        ]);
    }
}
