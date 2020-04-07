<?php

use Illuminate\Database\Seeder;

class StudentOrderTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('student_order_types')->insert([
            'id' => '1',
            'description_kz' => 'Көшірме',
            'description_ru' => 'Переводной',
            'description_en' => 'Order to transfer'
        ]);
		DB::table('student_order_types')->insert([
            'id' => '2',
            'description_kz' => 'Қабылдау туралы бұйрық',
            'description_ru' => 'Приказ о зачислении',
            'description_en' => 'Order to enroll'
        ]);
		DB::table('student_order_types')->insert([
            'id' => '3',
            'description_kz' => 'Шығару туралы бұйрық',
            'description_ru' => 'Приказ об отчислении',
            'description_en' => 'Order to deduct'
        ]);
		DB::table('student_order_types')->insert([
            'id' => '4',
            'description_kz' => 'Көшіру туралы бұйрық',
            'description_ru' => 'Приказ о переводе',
            'description_en' => 'Order to move'
        ]);
    }
}
