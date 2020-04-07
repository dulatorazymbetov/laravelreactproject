<?php

use Illuminate\Database\Seeder;

class StudyFormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('study_forms')->insert([
            'id' => '1',
            'description_kz' => 'Күндізгі 4 жыл',
            'description_ru' => 'Очное 4 года',
            'description_en' => 'Full 4 year',
			'course_count' => '4',
			'degree_id' => '',
			'department_type_id' => ''
        ]);
    }
}
