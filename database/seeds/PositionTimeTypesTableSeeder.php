<?php

use Illuminate\Database\Seeder;

class PositionTimeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('position_time_types')->insert([
            'id' => '1',
            'title_kk' => 'Штатный',
            'title_ru' => 'Штатный',
            'title_en' => 'Штатный'
        ]);
        DB::table('position_time_types')->insert([
            'id' => '2',
            'title_kk' => 'Внутренний совместитель',
            'title_ru' => 'Внутренний совместитель',
            'title_en' => 'Внутренний совместитель'
        ]);
        DB::table('position_time_types')->insert([
            'id' => '3',
            'title_kk' => 'Совместитель со стороны',
            'title_ru' => 'Совместитель со стороны',
            'title_en' => 'Совместитель со стороны'
        ]);
    }
}
