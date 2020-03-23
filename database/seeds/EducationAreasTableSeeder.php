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
            'title_en' => 'Education'
        ]);
        DB::table('education_areas')->insert([
            'id' => '2',
            'code' => '',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_en' => 'Humanities'
        ]);
        DB::table('education_areas')->insert([
            'id' => '3',
            'code' => '',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_en' => 'Law'
        ]);
        DB::table('education_areas')->insert([
            'id' => '4',
            'code' => '',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_en' => 'Arts'
        ]);
		DB::table('education_areas')->insert([
            'id' => '5',
            'code' => '',
            'title_kk' => 'Қоғамдық ғылымдар, экономика және бизнес',
            'title_ru' => 'Социальные науки, экономика и бизнес',
            'title_en' => 'Social sciences, economics and business'
        ]);
		DB::table('education_areas')->insert([
            'id' => '6',
            'code' => '',
            'title_kk' => 'Табиғи ғылымдар',
            'title_ru' => 'Естественные науки',
            'title_en' => 'Science'
        ]);
        DB::table('education_areas')->insert([
            'id' => '7',
            'code' => '',
            'title_kk' => 'Техникалық ғылымдар және технология',
            'title_ru' => 'Технические науки и технологии',
            'title_en' => 'Engineering and Technology'
        ]);
        DB::table('education_areas')->insert([
            'id' => '8',
            'code' => '',
            'title_kk' => 'Ауылшаруашылық ғылымдары',
            'title_ru' => 'Сельскохозяйственные науки',
            'title_en' => 'Agricultural sciences'
        ]);
        DB::table('education_areas')->insert([
            'id' => '9',
            'code' => '',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_en' => 'Services'
        ]);
        DB::table('education_areas')->insert([
            'id' => '10',
            'code' => '',
            'title_kk' => 'Әскери қызмет және қауiпсiздiк',
            'title_ru' => 'Военное дело и безопасность',
            'title_en' => 'Military and Security'
        ]);
        DB::table('education_areas')->insert([
            'id' => '11',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_en' => 'Health and social care'
        ]);
        DB::table('education_areas')->insert([
            'id' => '12',
            'code' => '',
            'title_kk' => 'Мал дәрігерлік',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Veterinary Medicine'
        ]);
        DB::table('education_areas')->insert([
            'id' => '13',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_en' => 'Health and social care'
        ]);
        DB::table('education_areas')->insert([
            'id' => '17',
            'code' => '6B01',
            'title_kk' => 'Педагогикалық ғылымдар',
            'title_ru' => 'Педагогические науки',
            'title_en' => 'Pedagogical sciences'
        ]);
        DB::table('education_areas')->insert([
            'id' => '18',
            'code' => '6B02',
            'title_kk' => 'Өнер және гуманитарлық ғылымдар',
            'title_ru' => 'Искусство и гуманитарные науки',
            'title_en' => 'Arts and Humanities'
        ]);
		
		//надо дополнить
    }
}
