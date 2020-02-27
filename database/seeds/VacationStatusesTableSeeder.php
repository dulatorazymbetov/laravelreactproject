<?php

use Illuminate\Database\Seeder;

class VacationStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vacation_statuses')->insert([
            'id' => '1',
            'description_kk' => 'Ежегодный трудовой отпуск',
            'description_ru' => 'Ежегодный трудовой отпуск',
            'description_en' => 'Ежегодный трудовой отпуск'
        ]);
        DB::table('vacation_statuses')->insert([
            'id' => '2',
            'description_kk' => 'Отпуск без содержания',
            'description_ru' => 'Отпуск без содержания',
            'description_en' => 'Отпуск без содержания'
        ]);
        DB::table('vacation_statuses')->insert([
            'id' => '3',
            'description_kk' => 'Отпуск по беременности и родам',
            'description_ru' => 'Отпуск по беременности и родам',
            'description_en' => 'Отпуск по беременности и родам'
        ]);
        DB::table('vacation_statuses')->insert([
            'id' => '4',
            'description_kk' => 'Отпуск по уходу за ребенком до 3-х лет',
            'description_ru' => 'Отпуск по уходу за ребенком до 3-х лет',
            'description_en' => 'Отпуск по уходу за ребенком до 3-х лет'
        ]);
        DB::table('vacation_statuses')->insert([
            'id' => '5',
            'description_kk' => 'Твороческий отпуск',
            'description_ru' => 'Твороческий отпуск',
            'description_en' => 'Твороческий отпуск'
        ]);
        DB::table('vacation_statuses')->insert([
            'id' => '6',
            'description_kk' => 'Отпуск для прохождения службы в ВС РК',
            'description_ru' => 'Отпуск для прохождения службы в ВС РК',
            'description_en' => 'Отпуск для прохождения службы в ВС РК'
        ]);
    }
}
