<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'ADMIN',
            'description_kk' => 'Júıe ákimshisi',
            'description_ru' => 'Администратор системы',
            'description_en' => 'System administrator'
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'STAFF_GENERAL',
            'description_kk' => 'Qyzmetker',
            'description_ru' => 'Сотрудник',
            'description_en' => 'Employee'
        ]);
        DB::table('roles')->insert([
            'id' => '3',
            'name' => 'STAFF_SUPERVISOR',
            'description_kk' => 'Oqytýshy',
            'description_ru' => 'Преподаватель',
            'description_en' => 'Teacher'
        ]);
        DB::table('roles')->insert([
            'id' => '4',
            'name' => 'STUDENT',
            'description_kk' => 'Stýdent',
            'description_ru' => 'Студент',
            'description_en' => 'Student'
        ]);
        DB::table('roles')->insert([
            'id' => '5',
            'name' => 'DEANARY_STAFF',
            'description_kk' => 'Dekanat qyzmetkeri',
            'description_ru' => 'Сотрудник деканата',
            'description_en' => 'Deanary Staff'
        ]);
    }
}
