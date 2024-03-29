<?php

use Illuminate\Database\Seeder;

class AcademicRanksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('academic_ranks')->insert([
            'id' => '1',
            'sort_order' => '1',
            'description_kk' => 'Жоқ',
            'description_ru' => 'Не имеет',
            'description_en' => 'None'
        ]);
        DB::table('academic_ranks')->insert([
            'id' => '2',
            'sort_order' => '2',
            'description_kk' => 'Доцент',
            'description_ru' => 'Доцент',
            'description_en' => 'Доцент'
        ]);
        DB::table('academic_ranks')->insert([
            'id' => '3',
            'sort_order' => '3',
            'description_kk' => 'Ассоциированный профессор',
            'description_ru' => 'Ассоциированный профессор',
            'description_en' => 'Ассоциированный профессор'
        ]);
        DB::table('academic_ranks')->insert([
            'id' => '4',
            'sort_order' => '4',
            'description_kk' => 'Профессор',
            'description_ru' => 'Профессор',
            'description_en' => 'Профессор'
        ]);
    }
}
