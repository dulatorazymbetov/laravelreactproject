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
            'title_kk' => 'Емтихан',
            'title_ru' => 'Экзамен',
            'title_en' => 'Examination',
            'title_short_kk' => 'емт.',
            'title_short_ru' => 'экз.',
            'title_short_en' => 'exam.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '2',
            'title_kk' => 'Курстық жұмыс/Жоба',
            'title_ru' => 'Курсовая работа/Проект',
            'title_en' => 'Term work/Project',
            'title_short_kk' => 'кур.',
            'title_short_ru' => 'кур.',
            'title_short_en' => 't.w.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '3',
            'title_kk' => 'Емтихан және курстық жұмыс/Жоба',
            'title_ru' => 'Экзамен и курсовая работа/проект',
            'title_en' => 'Examination and term work/Project',
            'title_short_kk' => 'емт. жэне кур.',
            'title_short_ru' => 'экз. и кур.',
            'title_short_en' => 'exam. and t.w.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '4',
            'title_kk' => 'Мемлекеттік емтихан',
            'title_ru' => 'Государственная аттестация',
            'title_en' => 'Qualification examination',
            'title_short_kk' => 'мем.емт.',
            'title_short_ru' => 'гос.экз.',
            'title_short_en' => 'q. exam'
        ]);
		DB::table('control_forms')->insert([
            'id' => '8',
            'title_kk' => 'Практика бойынша қорытынды баға',
            'title_ru' => 'Итоговая оценка по практике',
            'title_en' => 'Total mark on practice',
            'title_short_kk' => 'практ.',
            'title_short_ru' => 'практ.',
            'title_short_en' => 'pract'
        ]);
		DB::table('control_forms')->insert([
            'id' => '16',
            'title_kk' => 'Сынақ',
            'title_ru' => 'Зачет',
            'title_en' => 'Passed',
            'title_short_kk' => 'сын.',
            'title_short_ru' => 'зач.',
            'title_short_en' => 'pas.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '32',
            'title_kk' => 'Бақылаусыз',
            'title_ru' => 'Без контроля',
            'title_en' => 'Without control',
            'title_short_kk' => '',
            'title_short_ru' => '',
            'title_short_en' => ''
        ]);
		DB::table('control_forms')->insert([
            'id' => '128',
            'title_kk' => 'Дифференциалдық сынақ',
            'title_ru' => 'Дифференцированный зачет',
            'title_en' => 'Differentiated attestation',
            'title_short_kk' => 'диф.сын.',
            'title_short_ru' => 'диф.зач.',
            'title_short_en' => 'dif.att.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '256',
            'title_kk' => 'Эссе',
            'title_ru' => 'Эссе',
            'title_en' => 'Essay',
            'title_short_kk' => 'эссе',
            'title_short_ru' => 'эссе',
            'title_short_en' => 'essay'
        ]);
		DB::table('control_forms')->insert([
            'id' => '512',
            'title_kk' => 'Реферат',
            'title_ru' => 'Реферат',
            'title_en' => 'Abstract',
            'title_short_kk' => 'реф.',
            'title_short_ru' => 'реф.',
            'title_short_en' => 'abs.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '1024',
            'title_kk' => 'Жоба',
            'title_ru' => 'Проект',
            'title_en' => 'Project',
            'title_short_kk' => 'жоба',
            'title_short_ru' => 'проект',
            'title_short_en' => 'proj.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '2048',
            'title_kk' => 'Портфолио',
            'title_ru' => 'Портфолио',
            'title_en' => 'Portfolio',
            'title_short_kk' => 'пфл.',
            'title_short_ru' => 'пфл.',
            'title_short_en' => 'pfl.'
        ]);
		DB::table('control_forms')->insert([
            'id' => '4096',
            'title_kk' => 'Ғылыми-зерттеу жұмысы',
            'title_ru' => 'Исследовательская работа',
            'title_en' => 'Research work',
            'title_short_kk' => 'ғ.з.ж',
            'title_short_ru' => 'и.р.',
            'title_short_en' => 'r.w.'
        ]);
    }
}
