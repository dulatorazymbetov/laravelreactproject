<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('departments')->insert([
            'id' => '1',
            'department_type_id' => '2',
            'title_kk' => 'Кафедра "Компьютерная Инженерия и Информационная Безопасность"',
            'title_ru' => 'Кафедра "Компьютерная Инженерия и Информационная Безопасность"',
            'title_en' => 'Кафедра "Компьютерная Инженерия и Информационная Безопасность"',
            'include_staff' => true
        ]);
        DB::table('departments')->insert([
            'id' => '2',
            'department_type_id' => '2',
            'title_kk' => 'Кафедра "Информационные системы"',
            'title_ru' => 'Кафедра "Информационные системы"',
            'title_en' => 'Кафедра "Информационные системы"',
            'include_staff' => true
        ]);
        DB::table('departments')->insert([
            'id' => '3',
            'department_type_id' => '2',
            'title_kk' => 'Кафедра "Математическое и компьютерное моделирование"',
            'title_ru' => 'Кафедра "Математическое и компьютерное моделирование"',
            'title_en' => 'Кафедра "Математическое и компьютерное моделирование"',
            'include_staff' => true
        ]);
    }
}
