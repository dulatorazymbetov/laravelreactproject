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
            'name_kk' => 'Бакалавр',
            'name_ru' => 'Бакалавр',
            'name_en' => 'Bachelor'
        ]);
		DB::table('degree_types')->insert([
            'id' => '2',
            'name_kk' => 'Магистр ғылыми-педагогикалық бағыт бойынша',
            'name_ru' => 'Магистрант по научно-педагогическому направлению',
            'name_en' => 'Master of scientific and pedagogical direction'
        ]);
		DB::table('degree_types')->insert([
            'id' => '3',
            'name_kk' => 'Бейіндік бағыт бойынша магистр',
            'name_ru' => 'Магистрант по профильному направлению',
            'name_en' => 'Master of the core area'
        ]);
		DB::table('degree_types')->insert([
            'id' => '6',
            'name_kk' => 'PhD докторы',
            'name_ru' => 'Докторант PhD',
            'name_en' => 'Doctor PhD'
        ]);
		
    }
}
