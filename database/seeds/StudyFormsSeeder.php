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
			'degree_id' => '1',
			'department_type_id' => '1'
        ]);
		DB::table('study_forms')->insert([
            'id' => '3',
            'description_kz' => 'Сырттай 3 жыл',
            'description_ru' => 'Заочное 3 года',
            'description_en' => 'Distance 3 year',
			'course_count' => '3',
			'degree_id' => '1',
			'department_type_id' => '2'
        ]);
		DB::table('study_forms')->insert([
            'id' => '4',
            'description_kz' => 'Сырттай 2 жыл',
            'description_ru' => 'Заочное 2 года',
            'description_en' => 'Distance 2 year',
			'course_count' => '2',
			'degree_id' => '1',
			'department_type_id' => '2'
        ]);
		DB::table('study_forms')->insert([
            'id' => '5',
            'description_kz' => 'Магистр',
            'description_ru' => 'Магистр',
            'description_en' => 'Master',
			'course_count' => '2',
			'degree_id' => '2',
			'department_type_id' => '1'
        ]);
		DB::table('study_forms')->insert([
            'id' => '6',
            'description_kz' => 'Магистр (1.5)',
            'description_ru' => 'Магистр (1.5)',
            'description_en' => 'Master (1,5)',
			'course_count' => '2',
			'degree_id' => '3',
			'department_type_id' => '1'
        ]);
		DB::table('study_forms')->insert([
            'id' => '7',
            'description_kz' => 'Күндізгі 3 жыл',
            'description_ru' => 'Очное 3 года',
            'description_en' => 'CCO 3 year',
			'course_count' => '3',
			'degree_id' => '1',
			'department_type_id' => '1'
        ]);
		DB::table('study_forms')->insert([
            'id' => '8',
            'description_kz' => 'Докторантура күндізгі',
            'description_ru' => 'Докторантура очное',
            'description_en' => 'PhD',
			'course_count' => '3',
			'degree_id' => '6',
			'department_type_id' => '1'
        ]);
    }
}
