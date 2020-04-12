<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('departments')->insert([
            'id' => '1',
            'department_type_id' => '2',
            'title_kk' => 'Компьютерлік Инженерия және Ақпараттық Қауіпсіздік',
            'title_ru' => 'Компьютерная Инженерия и Информационная Безопасность',
            'title_en' => 'Computer Engineering  and Information Securiry',
            'title_short_kk' => 'КИжАҚ',
            'title_short_ru' => 'КИиИБ',
            'title_short_en' => 'CE&IS',
            'include_staff' => true
        ]);
        DB::table('departments')->insert([
            'id' => '2',
            'department_type_id' => '2',
            'title_kk' => 'Информационные системы',
            'title_ru' => 'Ақпараттык жүйелер',
            'title_en' => 'Information System ',
            'title_short_kk' => 'АЖ',
            'title_short_ru' => 'ИС',
            'title_short_en' => 'IS',
            'include_staff' => true
        ]);
        DB::table('departments')->insert([
            'id' => '3',
            'department_type_id' => '2',
            'title_kk' => 'Математикалық және компьютерлік модельдеу',
            'title_ru' => 'Математическое и компьютерное моделирование',
            'title_en' => 'Mathematical and Computer Modeling',
            'title_short_kk' => 'МжКМ',
            'title_short_ru' => 'МиКМ',
            'title_short_en' => 'MCM',
            'include_staff' => true
        ]);
		 DB::table('departments')->insert([
            'id' => '4',
            'department_type_id' => '2',
            'title_kk' => 'Медиакомуникация және Қазақстан тарихы',
            'title_ru' => 'Медиакомуникации и История Казахстана',
            'title_en' => 'Media communications and History of Kazakhstan',
            'title_short_kk' => 'МжҚТ',
            'title_short_ru' => 'МиИК',
            'title_short_en' => 'MKH',
            'include_staff' => true
        ]);
		 DB::table('departments')->insert([
            'id' => '5',
            'department_type_id' => '2',
            'title_kk' => 'Экономика және Бизнес',
            'title_ru' => 'Экономики и Бизнеса',
            'title_en' => 'Economics and Business',
            'title_short_kk' => 'ЭжБ',
            'title_short_ru' => 'ЭиБ',
            'title_short_en' => 'EB',
            'include_staff' => true
        ]);
		 DB::table('departments')->insert([
            'id' => '6',
            'department_type_id' => '2',
            'title_kk' => 'Тілдер кафедрасы',
            'title_ru' => 'Языков',
            'title_en' => 'Department of Lanuages',
            'title_short_kk' => 'ТК',
            'title_short_ru' => 'КЯз',
            'title_short_en' => 'LANGUAGES',
            'include_staff' => true
        ]);
		 DB::table('departments')->insert([
            'id' => '7',
            'department_type_id' => '2',
            'title_kk' => 'Радиотехника, электроника және телекоммуникациялар',
            'title_ru' => 'Радиотехника, электроника и телекоммуникации	',
            'title_en' => 'Radiotechnics6 electronics and telecommunication',
            'title_short_kk' => 'РЭТ',
            'title_short_ru' => 'РЭТ',
            'title_short_en' => 'RET',
            'include_staff' => true
        ]);

    }
}
