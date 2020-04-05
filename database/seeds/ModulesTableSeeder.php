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
            'url' => 'list_of_applicants',
            'description_kk' => 'Talapker',
            'description_ru' => 'Абитуриенты',
            'description_en' => 'Applicants',
            'icon' => 'business_center'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '6'
        ]);

        DB::table('modules')->insert([
            'id' => '7',
            'url' => 'certificates',
            'description_kk' => 'Anyqtama tizimi',
            'description_ru' => 'Журнал справок',
            'description_en' => 'List of certificates',
            'icon' => 'assignment'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '7',
            'module_id' => '7'
        ]);

        DB::table('modules')->insert([
            'id' => '8',
            'url' => 'educational_programs',
            'description_kk' => 'Обр. программы',
            'description_ru' => 'Обр. программы',
            'description_en' => 'Educational programs',
            'icon' => 'chrome_reader_mode'
        ]);
        DB::table('module_role')->insert([
            'role_id' => '5',
            'module_id' => '8'
        ]);
    }
}
