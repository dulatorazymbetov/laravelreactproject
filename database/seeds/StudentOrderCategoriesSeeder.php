<?php

use Illuminate\Database\Seeder;

class StudentOrderCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('student_order_categories')->insert([
            'id' => '1',
			'student_order_type_id' => '3',
            'description_kz' => 'шығарылу',
            'description_ru' => 'выпуск',
            'description_en' => 'release'
        ]);
    }
}
