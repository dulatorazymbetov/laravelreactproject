<?php

use Illuminate\Database\Seeder;

class UniversityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('university_types')->insert([
            'id' => '1',
            'name_kz' => 'Ұлттық ЖОО',
            'name_ru' => 'Национальные высшие учебные заведения',
            'name_en' => 'National high universities'
        ]);
		DB::table('university_types')->insert([
            'id' => '2',
            'name_kz' => 'Халықаралық ЖОО',
            'name_ru' => 'Международный вуз',
            'name_en' => 'International university'
        ]);
		DB::table('university_types')->insert([
            'id' => '3',
            'name_kz' => 'Автономды білім беру ұйымы',
            'name_ru' => 'Автономная организация образования',
            'name_en' => 'Autonomous educational organization'
        ]);
		DB::table('university_types')->insert([
            'id' => '4',
            'name_kz' => 'Мемлекеттік ЖОО',
            'name_ru' => 'Государственные вузы',
            'name_en' => 'State universities'
        ]);
		DB::table('university_types')->insert([
            'id' => '5',
            'name_kz' => 'Азаматтық емес ЖОО',
            'name_ru' => 'Негражданские вузы',
            'name_en' => 'Non-civil universities'
        ]);
		DB::table('university_types')->insert([
            'id' => '6',
            'name_kz' => 'Акционерлік ЖОО',
            'name_ru' => 'Акционированные вузы',
            'name_en' => 'Public universities'
        ]);
		DB::table('university_types')->insert([
            'id' => '7',
            'name_kz' => 'Жеке ЖОО',
            'name_ru' => 'Частные вузы',
            'name_en' => 'Private universities'
        ]);
    }
}
