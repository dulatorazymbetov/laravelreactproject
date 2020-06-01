<?php

use Illuminate\Database\Seeder;

class DiplomDetailTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('diplom_detail_types')->insert([
            'id' => '1',
            'name_kz' => 'Профессиональная практика',
            'name_ru' => 'Профессиональная практика',
            'name_en' => 'Профессиональная практика'
        ]);
		DB::table('diplom_detail_types')->insert([
            'id' => '2',
            'name_kz' => 'Итоговая аттестация',
            'name_ru' => 'Итоговая аттестация',
            'name_en' => 'Итоговая аттестация'
        ]);
		DB::table('diplom_detail_types')->insert([
            'id' => '3',
            'name_kz' => 'Выполнение и защита',
            'name_ru' => 'Выполнение и защита',
            'name_en' => 'Выполнение и защита'
        ]);
		DB::table('diplom_detail_types')->insert([
            'id' => '4',
            'name_kz' => 'Теоритическое обучение',
            'name_ru' => 'Теоритическое обучение',
            'name_en' => 'Теоритическое обучение'
        ]);
    }
}
