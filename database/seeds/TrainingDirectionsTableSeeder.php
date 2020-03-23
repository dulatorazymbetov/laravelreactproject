<?php

use Illuminate\Database\Seeder;

class TrainingDirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('training_directions')->insert([
            'id' => '1',
            'education_area_id' => '22',	//в таблицах ЕСУВО - profession_type_id	
			'code' => '6B063',				//в таблицах ЕСУВО - code_direction
			'code_msko' => '612',			//в таблицах ЕСУВО - code_msko
            'title_kk' => 'Ақпараттық қауіпсіздік',
            'title_ru' => 'Информационная безопасность',
            'title_en' => 'Information security'
        ]);
		
		DB::table('training_directions')->insert([
            'id' => '2',
            'education_area_id' => '17',
			'code' => '6B011',
			'code_msko' => '0111',
            'title_kk' => 'Педагогика және психология',
            'title_ru' => 'Педагогика и психология',
            'title_en' => 'Педагогика және психология'
        ]);
		
		//надо дополнить
    }
}
