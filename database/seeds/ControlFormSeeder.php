<?php

use Illuminate\Database\Seeder;

class ControlFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('control_forms')->insert([
            'id' => '1',
            'name_kk' => 'Емтихан',
            'name_ru' => 'Экзамен',
            'name_en' => 'Examination',
            'name_short_kk' => 'емт.',
            'name_short_ru' => 'экз.',
            'name_short_en' => 'exam.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '2',
            'name_kk' => 'Курстық жұмыс/Жоба',
            'name_ru' => 'Курсовая работа/Проект',
            'name_en' => 'Term work/Project',
            'name_short_kk' => 'кур.',
            'name_short_ru' => 'кур.',
            'name_short_en' => 't.w.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '3',
            'name_kk' => 'Емтихан және курстық жұмыс/Жоба',
            'name_ru' => 'Экзамен и курсовая работа/проект',
            'name_en' => 'Examination and term work/Project',
            'name_short_kk' => 'емт. жэне кур.',
            'name_short_ru' => 'экз. и кур.',
            'name_short_en' => 'exam. and t.w.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '4',
            'name_kk' => 'Мемлекеттік емтихан',
            'name_ru' => 'Государственная аттестация',
            'name_en' => 'Qualification examination',
            'name_short_kk' => 'мем.емт.',
            'name_short_ru' => 'гос.экз.',
            'name_short_en' => 'q. exam'
        ]);
		DB::table('control_forms')->insert([
            'id' => '8',
            'name_kk' => 'Практика бойынша қорытынды баға',
            'name_ru' => 'Итоговая оценка по практике',
            'name_en' => 'Total mark on practice',
            'name_short_kk' => 'практ.',
            'name_short_ru' => 'практ.',
            'name_short_en' => 'pract'
        ]);
		DB::table('control_forms')->insert([
            'id' => '16',
            'name_kk' => 'Сынақ',
            'name_ru' => 'Зачет',
            'name_en' => 'Passed',
            'name_short_kk' => 'сын.',
            'name_short_ru' => 'зач.',
            'name_short_en' => 'pas.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '32',
            'name_kk' => 'Бақылаусыз',
            'name_ru' => 'Без контроля',
            'name_en' => 'Without control',
            'name_short_kk' => '',
            'name_short_ru' => '',
            'name_short_en' => ''
        ]);
		DB::table('control_forms')->insert([
            'id' => '128',
            'name_kk' => 'Дифференциалдық сынақ',
            'name_ru' => 'Дифференцированный зачет',
            'name_en' => 'Differentiated attestation',
            'name_short_kk' => 'диф.сын.',
            'name_short_ru' => 'диф.зач.',
            'name_short_en' => 'dif.att.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '256',
            'name_kk' => 'Эссе',
            'name_ru' => 'Эссе',
            'name_en' => 'Essay',
            'name_short_kk' => 'эссе',
            'name_short_ru' => 'эссе',
            'name_short_en' => 'essay'
        ]);
		DB::table('control_forms')->insert([
            'id' => '512',
            'name_kk' => 'Реферат',
            'name_ru' => 'Реферат',
            'name_en' => 'Abstract',
            'name_short_kk' => 'реф.',
            'name_short_ru' => 'реф.',
            'name_short_en' => 'abs.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '1024',
            'name_kk' => 'Жоба',
            'name_ru' => 'Проект',
            'name_en' => 'Project',
            'name_short_kk' => 'жоба',
            'name_short_ru' => 'проект',
            'name_short_en' => 'proj.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '2048',
            'name_kk' => 'Портфолио',
            'name_ru' => 'Портфолио',
            'name_en' => 'Portfolio',
            'name_short_kk' => 'пфл.',
            'name_short_ru' => 'пфл.',
            'name_short_en' => 'pfl.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '4096',
            'name_kk' => 'Ғылыми-зерттеу жұмысы',
            'name_ru' => 'Исследовательская работа',
            'name_en' => 'Research work',
            'name_short_kk' => 'ғ.з.ж',
            'name_short_ru' => 'и.р.',
            'name_short_en' => 'r.w.'
        ]);
    }
}
