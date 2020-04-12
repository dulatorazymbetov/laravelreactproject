<?php

use Illuminate\Database\Seeder;

class EduProgramsGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edu_programs_groups')->insert([
		'id' => '1827',
		'training_direction_id' => '2'
		'code' => 'B001',
		'title_kk' => 'Педагогика және психология',
		'title_ru' => 'Педагогика и психология',
		'title_en' => ''
		]);
		
		DB::table('edu_programs_groups')->insert([
		'id' => '1828',
		'training_direction_id' => '3'
		'code' => 'B002',
		'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
		'title_ru' => 'Дошкольное обучение и воспитание',
		'title_en' => ''
		]);
		
		DB::table('edu_programs_groups')->insert([
		'id' => '1829',
		'training_direction_id' => '4'
		'code' => 'B003',
		'title_kk' => 'Бастауышта оқыту педагогикасы мен әдістемесі',
		'title_ru' => 'Педагогика и методика начального обучения',
		'title_en' => ''
		]);
		
		//Продолжить по образцу!
		
    }
}
