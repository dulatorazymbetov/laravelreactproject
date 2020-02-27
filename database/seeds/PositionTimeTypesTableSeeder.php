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
            'description_kk' => 'Штатный',
            'description_ru' => 'Штатный',
            'description_en' => 'Штатный'
        ]);
        DB::table('position_time_types')->insert([
            'id' => '2',
            'description_kk' => 'Внутренний совместитель',
            'description_ru' => 'Внутренний совместитель',
            'description_en' => 'Внутренний совместитель'
        ]);
        DB::table('position_time_types')->insert([
            'id' => '3',
            'description_kk' => 'Совместитель со стороны',
            'description_ru' => 'Совместитель со стороны',
            'description_en' => 'Совместитель со стороны'
        ]);
    }
}
