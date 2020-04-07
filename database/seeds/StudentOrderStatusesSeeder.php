<?php

use Illuminate\Database\Seeder;

class StudentOrderStatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('student_order_statuses')->insert([
            'id' => '1',
            'description_kz' => 'Даярлау',
            'description_ru' => 'Подготовка',
            'description_en' => 'Preparing'
        ]);
		DB::table('student_order_statuses')->insert([
            'id' => '2',
            'description_kz' => 'Тексеру',
            'description_ru' => 'На проверке',
            'description_en' => 'Checking'
        ]);
		DB::table('student_order_statuses')->insert([
            'id' => '3',
            'description_kz' => 'Қол қою',
            'description_ru' => 'На подписи',
            'description_en' => 'On signing'
        ]);
		DB::table('student_order_statuses')->insert([
            'id' => '4',
            'description_kz' => 'Орындау',
            'description_ru' => 'На исполнении',
            'description_en' => 'On executing'
        ]);
		DB::table('student_order_statuses')->insert([
            'id' => '5',
            'description_kz' => 'Орындалды',
            'description_ru' => 'Исполнен',
            'description_en' => 'Executed'
        ]);
    }
}
