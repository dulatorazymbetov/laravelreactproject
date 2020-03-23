<?php

use Illuminate\Database\Seeder;

class EducationAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('education_areas')->insert([
            'id' => '1',
            'code' => '',
            'title_kk' => 'Білім',
            'title_ru' => 'Образование',
            'title_ru' => 'Education'
        ]);
        DB::table('education_areas')->insert([
            'id' => '2',
            'code' => '',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_ru' => 'Humanities'
        ]);
        DB::table('education_areas')->insert([
            'id' => '3',
            'code' => '',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_ru' => 'Law'
        ]);
        DB::table('education_areas')->insert([
            'id' => '4',
            'code' => '',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_ru' => 'Arts'
        ]);
		DB::table('education_areas')->insert([
            'id' => '5',
            'code' => '',
            'title_kk' => 'Қоғамдық ғылымдар, экономика және бизнес',
            'title_ru' => 'Социальные науки, экономика и бизнес',
            'title_ru' => 'Social sciences, economics and business'
        ]);
		DB::table('education_areas')->insert([
            'id' => '6',
            'code' => '',
            'title_kk' => 'Табиғи ғылымдар',
            'title_ru' => 'Естественные науки',
            'title_ru' => 'Science'
        ]);
        DB::table('education_areas')->insert([
            'id' => '7',
            'code' => '',
            'title_kk' => 'Техникалық ғылымдар және технология',
            'title_ru' => 'Технические науки и технологии',
            'title_ru' => 'Engineering and Technology'
        ]);
        DB::table('education_areas')->insert([
            'id' => '8',
            'code' => '',
            'title_kk' => 'Ауылшаруашылық ғылымдары',
            'title_ru' => 'Сельскохозяйственные науки',
            'title_ru' => 'Agricultural sciences'
        ]);
        DB::table('education_areas')->insert([
            'id' => '9',
            'code' => '',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_ru' => 'Services'
        ]);
        DB::table('education_areas')->insert([
            'id' => '10',
            'code' => '',
            'title_kk' => 'Әскери қызмет және қауiпсiздiк',
            'title_ru' => 'Военное дело и безопасность',
            'title_ru' => 'Military and Security'
        ]);
        DB::table('education_areas')->insert([
            'id' => '11',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_ru' => 'Health and social care'
        ]);
        DB::table('education_areas')->insert([
            'id' => '12',
            'code' => '',
            'title_kk' => 'Мал дәрігерлік',
            'title_ru' => 'Ветеринария',
            'title_ru' => 'Veterinary Medicine'
        ]);
        DB::table('education_areas')->insert([
            'id' => '13',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_ru' => 'Health and social care'
        ]);
        DB::table('education_areas')->insert([
            'id' => '17',
            'code' => '6B01',
            'title_kk' => 'Педагогикалық ғылымдар',
            'title_ru' => 'Педагогические науки',
            'title_ru' => 'Pedagogical sciences'
        ]);
        DB::table('education_areas')->insert([
            'id' => '18',
            'code' => '6B02',
            'title_kk' => 'Өнер және гуманитарлық ғылымдар',
            'title_ru' => 'Искусство и гуманитарные науки',
            'title_ru' => 'Arts and Humanities'
        ]);
    }
}
