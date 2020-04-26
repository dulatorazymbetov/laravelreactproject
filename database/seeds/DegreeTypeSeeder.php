<?php

use Illuminate\Database\Seeder;

class DegreeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('degree_types')->insert([
            'id' => '1',
            'title_kk' => 'Бакалавр',
            'title_ru' => 'Бакалавр',
            'title_en' => 'Bachelor'
        ]);
		DB::table('degree_types')->insert([
            'id' => '2',
            'title_kk' => 'Магистр ғылыми-педагогикалық бағыт бойынша',
            'title_ru' => 'Магистрант по научно-педагогическому направлению',
            'title_en' => 'Master of scientific and pedagogical direction'
        ]);
		DB::table('degree_types')->insert([
            'id' => '3',
            'title_kk' => 'Бейіндік бағыт бойынша магистр',
            'title_ru' => 'Магистрант по профильному направлению',
            'title_en' => 'Master of the core area'
        ]);
		DB::table('degree_types')->insert([
            'id' => '6',
            'title_kk' => 'PhD докторы',
            'title_ru' => 'Докторант PhD',
            'title_en' => 'Doctor PhD'
        ]);
		
    }
}
