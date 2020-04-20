<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('genders')->insert([
            'id' => '1',
            'description_kk' => 'Әйел',
            'description_ru' => 'Женский',
            'description_en' => 'Female'
        ]);
		DB::table('genders')->insert([
            'id' => '2',
            'description_kk' => 'Еркек',
            'description_ru' => 'Мужской',
            'description_en' => 'Male'
        ]);
    }
}
