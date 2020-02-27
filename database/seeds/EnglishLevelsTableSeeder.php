<?php

use Illuminate\Database\Seeder;

class EnglishLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('english_levels')->insert([
            'id' => '1',
            'name' => 'None',
            'description_kk' => 'None',
            'description_ru' => 'None',
            'description_en' => 'None'
        ]);
        DB::table('english_levels')->insert([
            'id' => '2',
            'name' => 'A1',
            'description_kk' => 'A1',
            'description_ru' => 'A1',
            'description_en' => 'A1'
        ]);
        DB::table('english_levels')->insert([
            'id' => '3',
            'name' => 'A2',
            'description_kk' => 'A2',
            'description_ru' => 'A2',
            'description_en' => 'A2'
        ]);
        DB::table('english_levels')->insert([
            'id' => '4',
            'name' => 'B1',
            'description_kk' => 'B1',
            'description_ru' => 'B1',
            'description_en' => 'B1'
        ]);
        DB::table('english_levels')->insert([
            'id' => '5',
            'name' => 'B2',
            'description_kk' => 'B2',
            'description_ru' => 'B2',
            'description_en' => 'B2'
        ]);
        DB::table('english_levels')->insert([
            'id' => '6',
            'name' => 'C1',
            'description_kk' => 'C1',
            'description_ru' => 'C1',
            'description_en' => 'C1'
        ]);
        DB::table('english_levels')->insert([
            'id' => '7',
            'name' => 'C2',
            'description_kk' => 'C2',
            'description_ru' => 'C2',
            'description_en' => 'C2'
        ]);


    }
}
