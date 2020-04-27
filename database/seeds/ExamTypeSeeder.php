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
            'title_kk' => 'Компьютерлік тестілеу',
            'title_ru' => 'Компьютерное тестирование',
            'title_en' => 'Computer testing'
        ]);
		DB::table('exam_types')->insert([
            'id' => '2',
            'title_kk' => 'Матрицалық тестілеу',
            'title_ru' => 'Матричное тестирование',
            'title_en' => 'Matrix testing'
        ]);
		DB::table('exam_types')->insert([
            'id' => '3',
            'title_kk' => 'Ауызша',
            'title_ru' => 'Устный',
            'title_en' => 'Oral exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '4',
            'title_kk' => 'Жазбаша',
            'title_ru' => 'Письменный',
            'title_en' => 'Written exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '5',
            'title_kk' => 'Аралас',
            'title_ru' => 'Комбинированный',
            'title_en' => 'Composite exam'
        ]);
		DB::table('exam_types')->insert([
            'id' => '6',
            'title_kk' => 'Шығармашылық',
            'title_ru' => 'Творческий',
            'title_en' => 'Constructive exam	'
        ]);
		DB::table('exam_types')->insert([
            'id' => '7',
            'title_kk' => 'Басқа',
            'title_ru' => 'Другое',
            'title_en' => 'Other exam'
        ]);
    }
}
