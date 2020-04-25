<?php

use Illuminate\Database\Seeder;

class ExamTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('exam_types')->insert([
            'id' => '1',
            'name_kk' => 'Компьютерлік тестілеу',
            'name_ru' => 'Компьютерное тестирование',
            'name_en' => 'Computer testing'
        ]);
		DB::table('exam_types')->insert([
            'id' => '2',
            'name_kk' => 'Матрицалық тестілеу',
            'name_ru' => 'Матричное тестирование',
            'name_en' => 'Matrix testing'
        ]);
		DB::table('exam_types')->insert([
            'id' => '3',
            'name_kk' => 'Ауызша',
            'name_ru' => 'Устный',
            'name_en' => 'Oral exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '4',
            'name_kk' => 'Жазбаша',
            'name_ru' => 'Письменный',
            'name_en' => 'Written exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '5',
            'name_kk' => 'Аралас',
            'name_ru' => 'Комбинированный',
            'name_en' => 'Composite exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '6',
            'name_kk' => 'Шығармашылық',
            'name_ru' => 'Творческий',
            'name_en' => 'Constructive exam	'
        ]);
		DB::table('exam_types')->insert([
            'id' => '7',
            'name_kk' => 'Басқа',
            'name_ru' => 'Другое',
            'name_en' => 'Other exam'
        ]);
    }
}
