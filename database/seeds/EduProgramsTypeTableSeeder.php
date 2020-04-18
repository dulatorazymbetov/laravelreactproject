<?php

use Illuminate\Database\Seeder;

class EduProgramsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('edu_programs_types')->insert([
            'id' => '1',
            'title_kk' => 'Жаңа ББ',
            'title_ru' => 'Новая ОП',
            'title_en' => 'Новая ОП'
        ]);
		DB::table('edu_programs_types')->insert([
            'id' => '2',
            'title_kk' => 'Инновациялық ББ',
            'title_ru' => 'Инновационная ОП',
            'title_en' => 'Инновационная ОП'
        ]);
    }
}
