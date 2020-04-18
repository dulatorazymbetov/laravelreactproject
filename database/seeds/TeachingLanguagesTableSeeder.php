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
            'title_kk' => 'Qazaqsha',
            'title_ru' => 'Казахский',
            'title_en' => 'Kazakh'
        ]);
        DB::table('teaching_languages')->insert([
            'id' => '2',
            'name' => 'ru',
            'title_kk' => 'Орысша',
            'title_ru' => 'Русский',
            'title_en' => 'Russian'
        ]);
        DB::table('teaching_languages')->insert([
            'id' => '3',
            'name' => 'en',
            'title_kk' => 'Aǵylshyn',
            'title_ru' => 'Английский',
            'title_en' => 'English'
        ]);
    }
}
