<?php

use Illuminate\Database\Seeder;

class TeachingLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teaching_languages')->insert([
            'id' => '1',
            'name' => 'kz',
            'description_kk' => 'Qazaqsha',
            'description_ru' => 'Казахский',
            'description_en' => 'Kazakh'
        ]);
        DB::table('teaching_languages')->insert([
            'id' => '2',
            'name' => 'ru',
            'description_kk' => 'Орысша',
            'description_ru' => 'Русский',
            'description_en' => 'Russian'
        ]);
        DB::table('teaching_languages')->insert([
            'id' => '3',
            'name' => 'en',
            'description_kk' => 'Aǵylshyn',
            'description_ru' => 'Английский',
            'description_en' => 'English'
        ]);
    }
}
