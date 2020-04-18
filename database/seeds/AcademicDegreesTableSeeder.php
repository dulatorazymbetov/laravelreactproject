<?php

use Illuminate\Database\Seeder;

class AcademicDegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('academic_degrees')->insert([
            'id' => '1',
            'sort_order' => '1',
            'title_kk' => 'Жоқ',
            'title_ru' => 'Не имеет степени',
            'title_en' => 'None'
        ]);
        
        DB::table('academic_degrees')->insert([
            'id' => '2',
            'sort_order' => '2',
            'title_kk' => 'Магистр',
            'title_ru' => 'Магистр',
            'title_en' => 'Master'
        ]);
        
        DB::table('academic_degrees')->insert([
            'id' => '3',
            'sort_order' => '3',
            'title_kk' => 'Ғылымдар кандидаты',
            'title_ru' => 'Кандидат наук',
            'title_en' => 'Кандидат наук'
        ]);

        DB::table('academic_degrees')->insert([
            'id' => '4',
            'sort_order' => '4',
            'title_kk' => 'Ғылымдар докторы',
            'title_ru' => 'Доктор наук',
            'title_en' => 'Доктор наук'
        ]);
        
        DB::table('academic_degrees')->insert([
            'id' => '5',
            'sort_order' => '5',
            'title_kk' => 'Доктор PhD',
            'title_ru' => 'Доктор PhD',
            'title_en' => 'Доктор PhD'
        ]);
        
        DB::table('academic_degrees')->insert([
            'id' => '6',
            'sort_order' => '6',
            'title_kk' => 'Доктор по профилю',
            'title_ru' => 'Доктор по профилю',
            'title_en' => 'Доктор по профилю'
        ]);

        DB::table('academic_degrees')->insert([
            'id' => '7',
            'sort_order' => '7',
            'title_kk' => 'Доктор философии PhD',
            'title_ru' => 'Доктор философии PhD',
            'title_en' => 'Доктор философии PhD'
        ]);
    }
}
