<?php

use Illuminate\Database\Seeder;

class SubjectComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('subject_components')->insert([
            'id' => '1',
            'title_kk' => 'Вузовский компонент',
            'title_ru' => 'Вузовский компонент',
            'title_en' => 'Вузовский компонент',
			'short_title_kk' => 'ВК',
			'short_title_ru' => 'ВК',
			'short_title_en' => 'ВК'
			
        ]);
    }
}
