<?php

use Illuminate\Database\Seeder;

class EducationAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('education_areas')->insert([
            'id' => '1',
            'code' => '',
            'title_kk' => 'Білім',
            'title_ru' => 'Образование',
            'title_ru' => 'Education'
        ]);
    }
}
