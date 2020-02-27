<?php

use Illuminate\Database\Seeder;

class DepartmentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('department_types')->insert([
            'id' => '1',
            'description_kk' => 'Факультет',
            'description_ru' => 'Факультет',
            'description_en' => 'Faculty'
        ]);
        DB::table('department_types')->insert([
            'id' => '2',
            'description_kk' => 'Кафедра',
            'description_ru' => 'Кафедра',
            'description_en' => 'Cafedra'
        ]);
        DB::table('department_types')->insert([
            'id' => '3',
            'description_kk' => 'Департамент',
            'description_ru' => 'Департамент',
            'description_en' => 'Department'
        ]);
        DB::table('department_types')->insert([
            'id' => '4',
            'description_kk' => 'Отдел',
            'description_ru' => 'Отдел',
            'description_en' => 'Division'
        ]);
    }
}
