<?php

use Illuminate\Database\Seeder;

class SubjectCyclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('subject_cycles')->insert([
            'id' => '1',
            'title_kk' => 'Жалпы білім беру пәндері',
            'title_ru' => 'Общеобразовательные дисциплины',
            'title_en' => 'GER',
			'short_title_kk' => 'ЖББП',
			'short_title_ru' => 'ООД',
			'short_title_en' => 'GER'
			
        ]);
		DB::table('subject_cycles')->insert([
            'id' => '2',
            'title_kk' => 'Базалық пәндер',
            'title_ru' => 'Базовые дисциплины',
            'title_en' => 'Basic subjects',
			'short_title_kk' => 'БП',
			'short_title_ru' => 'БД',
			'short_title_en' => 'BS'
			
        ]);
		DB::table('subject_cycles')->insert([
            'id' => '3',
            'title_kk' => 'Кәсіптік пәндер',
            'title_ru' => 'Профильные дисциплины',
            'title_en' => 'AS',
			'short_title_kk' => 'КП',
			'short_title_ru' => 'ПД',
			'short_title_en' => 'AS'
			
        ]);
		DB::table('subject_cycles')->insert([
            'id' => '4',
            'title_kk' => 'Пәндердің қосымша циклы',
            'title_ru' => 'Дополнительный цикл дисциплин',
            'title_en' => 'Additional subjects',
			'short_title_kk' => 'ПҚЦ',
			'short_title_ru' => 'ДопЦД',
			'short_title_en' => 'AdS'
			
        ]);
    }
}
