<?php

use Illuminate\Database\Seeder;

class EduProgramTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('edu_program_types')->insert([
            'id' => '1',
            'description_kk' => 'Жаңа ББ',
            'description_ru' => 'Новая ОП',
            'description_en' => 'Новая ОП'
        ]);
		DB::table('edu_program_types')->insert([
            'id' => '2',
            'description_kk' => 'Инновациялық ББ',
            'description_ru' => 'Инновационная ОП',
            'description_en' => 'Инновационная ОП'
        ]);
    }
}
