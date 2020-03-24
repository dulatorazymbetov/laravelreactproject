<?php

use Illuminate\Database\Seeder;

class PositionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('position_types')->insert([
            'id' => '1',
            'staff_type_id' => '1',
            'description_kk' => 'Ректор',
            'description_ru' => 'Ректор',
            'description_en' => 'Rector'
        ]);
        DB::table('position_types')->insert([
            'id' => '2',
            'staff_type_id' => '1',
            'description_kk' => 'Первый проректор',
            'description_ru' => 'Первый проректор',
            'description_en' => 'Первый проректор'
        ]);
        DB::table('position_types')->insert([
            'id' => '3',
            'staff_type_id' => '1',
            'description_kk' => 'Заведующая кафедрой',
            'description_ru' => 'Заведующая кафедрой',
            'description_en' => 'Заведующая кафедрой'
        ]);
        DB::table('position_types')->insert([
            'id' => '4',
            'staff_type_id' => '1',
            'description_kk' => 'Преподаватель',
            'description_ru' => 'Преподаватель',
            'description_en' => 'Teacher'
        ]);
        DB::table('position_types')->insert([
            'id' => '5',
            'staff_type_id' => '1',
            'description_kk' => 'Инженер',
            'description_ru' => 'Инженер',
            'description_en' => 'Engineer'
        ]);

    }
}
