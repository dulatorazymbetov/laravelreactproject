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
    }
}
