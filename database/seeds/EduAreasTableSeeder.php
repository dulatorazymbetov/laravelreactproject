<?php

use Illuminate\Database\Seeder;

class EduAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('edu_areas')->insert([
            'id' => '1',
            'code' => '',
            'title_kk' => 'Білім',
            'title_ru' => 'Образование',
            'title_en' => 'Education'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '2',
            'code' => '',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_en' => 'Humanities'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '3',
            'code' => '',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_en' => 'Law'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '4',
            'code' => '',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_en' => 'Arts'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '5',
            'code' => '',
            'title_kk' => 'Қоғамдық ғылымдар, экономика және бизнес',
            'title_ru' => 'Социальные науки, экономика и бизнес',
            'title_en' => 'Social sciences, economics and business'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '6',
            'code' => '',
            'title_kk' => 'Табиғи ғылымдар',
            'title_ru' => 'Естественные науки',
            'title_en' => 'Science'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '7',
            'code' => '',
            'title_kk' => 'Техникалық ғылымдар және технология',
            'title_ru' => 'Технические науки и технологии',
            'title_en' => 'Engineering and Technology'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '8',
            'code' => '',
            'title_kk' => 'Ауылшаруашылық ғылымдары',
            'title_ru' => 'Сельскохозяйственные науки',
            'title_en' => 'Agricultural sciences'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '9',
            'code' => '',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_en' => 'Services'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '10',
            'code' => '',
            'title_kk' => 'Әскери қызмет және қауiпсiздiк',
            'title_ru' => 'Военное дело и безопасность',
            'title_en' => 'Military and Security'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '11',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_en' => 'Health and social care'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '12',
            'code' => '',
            'title_kk' => 'Мал дәрігерлік',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Veterinary Medicine'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '13',
            'code' => '',
            'title_kk' => 'Денсаулық сақтау және қоғамдық қамтамасыз ету',
            'title_ru' => 'Здравоохранение и социальное обеспечение (медицина)',
            'title_en' => 'Health and social care'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '17',
            'code' => '6B01',
            'title_kk' => 'Педагогикалық ғылымдар',
            'title_ru' => 'Педагогические науки',
            'title_en' => 'Pedagogical sciences'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '18',
            'code' => '6B02',
            'title_kk' => 'Өнер және гуманитарлық ғылымдар',
            'title_ru' => 'Искусство и гуманитарные науки',
            'title_en' => 'Arts and Humanities'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '19',
            'code' => '6B03',
            'title_kk' => 'Әлеуметтік ғылымдар, журналистика және ақпарат',
            'title_ru' => 'Социальные науки, журналистика и информация',
            'title_en' => 'Social Sciences, Journalism and Information'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '20',
            'code' => '6B04',
            'title_kk' => 'Бизнес, басқару және құқық',
            'title_ru' => 'Бизнес, управление и право',
            'title_en' => 'Business, Management and Law'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '21',
            'code' => '6B05',
            'title_kk' => 'Жаратылыстану ғылымдары, математика және статистика',
            'title_ru' => 'Естественные науки, математика и статистика',
            'title_en' => 'Natural sciences, mathematics and statistics'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '22',
            'code' => '6B06',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Information and communication technology'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '23',
            'code' => '6B07',
            'title_kk' => 'Инженерлік, өңдеу және құрылыс салалары',
            'title_ru' => 'Инженерные, обрабатывающие и строительные отрасли',
            'title_en' => 'Engineering, manufacturing and construction industries'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '24',
            'code' => '6B08',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстар',
            'title_ru' => 'Сельское хозяйство и биоресурсы',
            'title_en' => 'Agriculture and bioresources'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '25',
            'code' => '6B09',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Veterinary science'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '26',
            'code' => '6B10',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз ету (медицина)',
            'title_ru' => 'Здравоохранение и социальное обеспечение ( медицина)',
            'title_en' => 'Health and social care'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '27',
            'code' => '6B11',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_en' => 'Services'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '28',
            'code' => '6B12',
            'title_kk' => 'Ұлттық қауіпсіздік және әскери іс',
            'title_ru' => 'Национальная безопасность и военное дело',
            'title_en' => 'National Security and Warfare'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '29',
            'code' => '7M01',
            'title_kk' => 'Педагогикалық ғылымдар',
            'title_ru' => 'Педагогические науки',
            'title_en' => 'Pedagogical sciences'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '30',
            'code' => '7M02',
            'title_kk' => 'Өнер және гуманитарлық ғылымдар',
            'title_ru' => 'Искусство и гуманитарные науки',
            'title_en' => 'Arts and Humanities'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '31',
            'code' => '7M03',
            'title_kk' => 'Әлеуметтік ғылымдар, журналистика және ақпарат',
            'title_ru' => 'Социальные науки, журналистика и информация',
            'title_en' => 'Social Sciences, Journalism and Information'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '32',
            'code' => '7M04',
            'title_kk' => 'Бизнес, басқару және құқық',
            'title_ru' => 'Бизнес, управление и право',
            'title_en' => 'Business, Management and Law'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '33',
            'code' => '7M05',
            'title_kk' => 'Жаратылыстану ғылымдары, математика және статистика',
            'title_ru' => 'Естественные науки, математика и статистика',
            'title_en' => 'Natural sciences, mathematics and statistics'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '34',
            'code' => '7M06',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Information and communication technology'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '35',
            'code' => '7M07',
            'title_kk' => 'Инженерлік, өңдеу және құрылыс салалары',
            'title_ru' => 'Инженерные, обрабатывающие и строительные отрасли',
            'title_en' => 'Engineering, manufacturing and construction industries'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '36',
            'code' => '7M08',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстар',
            'title_ru' => 'Сельское хозяйство и биоресурсы',
            'title_en' => 'Agriculture and bioresources'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '37',
            'code' => '7M09',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Veterinary science'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '38',
            'code' => '7M10',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз ету (медицина)',
            'title_ru' => 'Здравоохранение и социальное обеспечение ( медицина)',
            'title_en' => 'Health and social welfare (medicine)'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '39',
            'code' => '7M11',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_en' => 'Services'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '40',
            'code' => '7M12',
            'title_kk' => 'Ұлттық қауіпсіздік және әскери іс',
            'title_ru' => 'Национальная безопасность и военное дело',
            'title_en' => 'National Security and Warfare'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '41',
            'code' => '7R09',
            'title_kk' => 'Денсаулық сақтау (медицина)',
            'title_ru' => 'Здравоохранение ( медицина)',
            'title_en' => 'Health care (medicine)'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '42',
            'code' => '8D01',
            'title_kk' => 'Педагогикалық ғылымдар',
            'title_ru' => 'Педагогические науки',
            'title_en' => 'Pedagogical sciences'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '43',
            'code' => '8D02',
            'title_kk' => 'Өнер және гуманитарлық ғылымдар',
            'title_ru' => 'Искусство и гуманитарные науки',
            'title_en' => 'Arts and Humanities'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '44',
            'code' => '8D03',
            'title_kk' => 'Әлеуметтік ғылымдар, журналистика және ақпарат',
            'title_ru' => 'Социальные науки, журналистика и информация',
            'title_en' => 'Social Sciences, Journalism and Information'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '45',
            'code' => '8D04',
            'title_kk' => 'Бизнес, басқару және құқық',
            'title_ru' => 'Бизнес, управление и право',
            'title_en' => 'Business, Management and Law'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '46',
            'code' => '8D05',
            'title_kk' => 'Жаратылыстану ғылымдары, математика және статистика',
            'title_ru' => 'Естественные науки, математика и статистика',
            'title_en' => 'Natural sciences, mathematics and statistics'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '47',
            'code' => '8D06',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Information and communication technology'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '48',
            'code' => '8D07',
            'title_kk' => 'Инженерлік, өңдеу және құрылыс салалары',
            'title_ru' => 'Инженерные, обрабатывающие и строительные отрасли',
            'title_en' => 'Engineering, manufacturing and construction industries'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '49',
            'code' => '8D08',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстар',
            'title_ru' => 'Сельское хозяйство и биоресурсы',
            'title_en' => 'Agriculture and bioresources'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '50',
            'code' => '8D09',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Veterinary science'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '51',
            'code' => '8D10',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз ету (медицина)',
            'title_ru' => 'Здравоохранение и социальное обеспечение ( медицина)',
            'title_en' => 'Health and social welfare (medicine)'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '52',
            'code' => '8D11',
            'title_kk' => 'Қызмет көрсету',
            'title_ru' => 'Услуги',
            'title_en' => 'Services'
        ]);
        DB::table('edu_areas')->insert([
            'id' => '53',
            'code' => '8D12',
            'title_kk' => 'Ұлттық қауіпсіздік және әскери іс',
            'title_ru' => 'Национальная безопасность и военное дело',
            'title_en' => 'National Security and Warfare'
        ]);
    }
}
