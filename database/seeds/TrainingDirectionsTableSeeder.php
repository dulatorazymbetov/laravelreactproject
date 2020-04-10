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
            'education_area_id' => '6B063',
            'code' => '612',
            'code_msko' => '22',
            'title_kk' => 'Ақпараттық қауіпсіздік',
            'title_ru' => 'Информационная безопасность',
            'title_en' => 'Information security'
        ]);
        DB::table('training_directions')->insert([
            'id' => '2',
            'education_area_id' => '6B011',
            'code' => '111',
            'code_msko' => '17',
            'title_kk' => 'Педагогика және психология',
            'title_ru' => 'Педагогика и психология',
            'title_en' => 'Педагогика және психология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '3',
            'education_area_id' => '6B012',
            'code' => '112',
            'code_msko' => '17',
            'title_kk' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы',
            'title_ru' => 'Педагогика дошкольного воспитания и обучения',
            'title_en' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '4',
            'education_area_id' => '6B013',
            'code' => '113',
            'code_msko' => '17',
            'title_kk' => 'Пәндік мамандандырылмаған мұғалімдерді даярлау',
            'title_ru' => 'Подготовка учителей без предметной специализации',
            'title_en' => 'Пәндік мамандандырылмаған мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '5',
            'education_area_id' => '6B014',
            'code' => '114',
            'code_msko' => '17',
            'title_kk' => 'Жалпы дамудың пәндік мамандандырылған мұғалімдерін даярлау',
            'title_ru' => 'Подготовка учителей с предметной специализацией общего развития',
            'title_en' => 'Жалпы дамудың пәндік мамандандырылған мұғалімдерін даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '6',
            'education_area_id' => '6B015',
            'code' => '114',
            'code_msko' => '17',
            'title_kk' => 'Жаратылыстану пәндері бойынша мұғалімдер даярлау',
            'title_ru' => 'Подготовка учителей по естественнонаучным предметам',
            'title_en' => 'Жаратылыстану пәндері бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '7',
            'education_area_id' => '6B016',
            'code' => '114',
            'code_msko' => '17',
            'title_kk' => 'Гуманитарлық пәндер бойынша мұғалімдер даярлау',
            'title_ru' => 'Подготовка учителей по гуманитарным предметам',
            'title_en' => 'Гуманитарлық пәндер бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '8',
            'education_area_id' => '6B017',
            'code' => '114',
            'code_msko' => '17',
            'title_kk' => 'Тілдер және әдебиет бойынша мұғалімдерді даярлау',
            'title_ru' => 'Подготовка учителей по языкам и литературе',
            'title_en' => 'Тілдер және әдебиет бойынша мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '9',
            'education_area_id' => '6B018',
            'code' => '114',
            'code_msko' => '17',
            'title_kk' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по социальной педагогике и самопознанию',
            'title_en' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '10',
            'education_area_id' => '6B019',
            'code' => '113',
            'code_msko' => '17',
            'title_kk' => 'Арнайы педагогика мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по специальной педагогике',
            'title_en' => 'Арнайы педагогика мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '11',
            'education_area_id' => '6B01088',
            'code' => '188',
            'code_msko' => '17',
            'title_kk' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные педагогическими науками',
            'title_en' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '12',
            'education_area_id' => '6B021',
            'code' => '210',
            'code_msko' => '18',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_en' => 'Өнер'
        ]);
        DB::table('training_directions')->insert([
            'id' => '13',
            'education_area_id' => '6B022',
            'code' => '220',
            'code_msko' => '18',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_en' => 'Гуманитарлық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '14',
            'education_area_id' => '6B023',
            'code' => '230',
            'code_msko' => '18',
            'title_kk' => 'Тілдер және әдебиет',
            'title_ru' => 'Языки и литература',
            'title_en' => 'Тілдер және әдебиет'
        ]);
        DB::table('training_directions')->insert([
            'id' => '15',
            'education_area_id' => '6B02088',
            'code' => '288',
            'code_msko' => '18',
            'title_kk' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с искусством и гуманитарными науками',
            'title_en' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '16',
            'education_area_id' => '6B031',
            'code' => '310',
            'code_msko' => '19',
            'title_kk' => 'Әлеуметтік ғылымдар',
            'title_ru' => 'Социальные науки',
            'title_en' => 'Әлеуметтік ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '17',
            'education_area_id' => '6B032',
            'code' => '320',
            'code_msko' => '19',
            'title_kk' => 'Журналистика және ақпарат',
            'title_ru' => 'Журналистика и информация',
            'title_en' => 'Журналистика және ақпарат'
        ]);
        DB::table('training_directions')->insert([
            'id' => '18',
            'education_area_id' => '6B03088',
            'code' => '388',
            'code_msko' => '19',
            'title_kk' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные социальными науками, журналистикой и информацией',
            'title_en' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '19',
            'education_area_id' => '6B041',
            'code' => '410',
            'code_msko' => '20',
            'title_kk' => 'Бизнес және басқару',
            'title_ru' => 'Бизнес и управление',
            'title_en' => 'Бизнес және басқару'
        ]);
        DB::table('training_directions')->insert([
            'id' => '20',
            'education_area_id' => '6B042',
            'code' => '420',
            'code_msko' => '20',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_en' => 'Құқық'
        ]);
        DB::table('training_directions')->insert([
            'id' => '21',
            'education_area_id' => '6B04088',
            'code' => '488',
            'code_msko' => '20',
            'title_kk' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с бизнесом, управлением и право',
            'title_en' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '22',
            'education_area_id' => '6B051',
            'code' => '510',
            'code_msko' => '21',
            'title_kk' => 'Биологиялық және сабақтас ғылымдар',
            'title_ru' => 'Биологические и смежные науки',
            'title_en' => 'Биологиялық және сабақтас ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '23',
            'education_area_id' => '6B052',
            'code' => '520',
            'code_msko' => '21',
            'title_kk' => 'Қоршаған орта',
            'title_ru' => 'Окружающая среда',
            'title_en' => 'Қоршаған орта'
        ]);
        DB::table('training_directions')->insert([
            'id' => '24',
            'education_area_id' => '6B053',
            'code' => '530',
            'code_msko' => '21',
            'title_kk' => 'Физикалық және химиялық ғылымдар',
            'title_ru' => 'Физические и химические науки',
            'title_en' => 'Физикалық және химиялық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '25',
            'education_area_id' => '6B054',
            'code' => '540',
            'code_msko' => '21',
            'title_kk' => 'Математика және статистика',
            'title_ru' => 'Математика и статистика',
            'title_en' => 'Математика және статистика'
        ]);
        DB::table('training_directions')->insert([
            'id' => '26',
            'education_area_id' => '6B055',
            'code' => '532',
            'code_msko' => '21',
            'title_kk' => 'Геология',
            'title_ru' => 'Геология',
            'title_en' => 'Геология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '27',
            'education_area_id' => '6B05088',
            'code' => '588',
            'code_msko' => '21',
            'title_kk' => 'Жаратылыстану ғылымдарымен, математикамен, статистикамен және геологиямен байланысты пәнаралық байланыстар',
            'title_ru' => 'Междисциплинарные программы, связанные с естественными науками, математикой, статистикой и геологией',
            'title_en' => 'Жаратылыстану ғылымдарымен, математикамен, статистикамен және геологиямен байланысты пәнаралық байланыстар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '28',
            'education_area_id' => '6B061',
            'code' => '610',
            'code_msko' => '22',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '29',
            'education_area_id' => '6B062',
            'code' => '714',
            'code_msko' => '22',
            'title_kk' => 'Телекоммуникациялар',
            'title_ru' => 'Телекоммуникации',
            'title_en' => 'Телекоммуникациялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '30',
            'education_area_id' => '6B06088',
            'code' => '688',
            'code_msko' => '22',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с информационно-коммуникационными технологиями',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '31',
            'education_area_id' => '6B071',
            'code' => '710',
            'code_msko' => '23',
            'title_kk' => 'Инженерия және инженерлік іс',
            'title_ru' => 'Инженерия и инженерное дело',
            'title_en' => 'Инженерия және инженерлік іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '32',
            'education_area_id' => '6B072',
            'code' => '720',
            'code_msko' => '23',
            'title_kk' => 'Өндірістік және өңдеу салалары',
            'title_ru' => 'Производственные и обрабатывающие отрасли',
            'title_en' => 'Өндірістік және өңдеу салалары'
        ]);
        DB::table('training_directions')->insert([
            'id' => '33',
            'education_area_id' => '6B073',
            'code' => '730',
            'code_msko' => '23',
            'title_kk' => 'Сәулет және құрылыс',
            'title_ru' => 'Архитектура и строительство',
            'title_en' => 'Сәулет және құрылыс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '34',
            'education_area_id' => '6B074',
            'code' => '732',
            'code_msko' => '23',
            'title_kk' => 'Су шаруашылығы',
            'title_ru' => 'Водное хозяйство',
            'title_en' => 'Су шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '35',
            'education_area_id' => '6B075',
            'code' => '788',
            'code_msko' => '23',
            'title_kk' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)',
            'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
            'title_en' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)'
        ]);
        DB::table('training_directions')->insert([
            'id' => '36',
            'education_area_id' => '6B07088',
            'code' => '788',
            'code_msko' => '23',
            'title_kk' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с инженерными, обрабатывающими строительными отраслями',
            'title_en' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '37',
            'education_area_id' => '6B081',
            'code' => '812',
            'code_msko' => '24',
            'title_kk' => 'Агрономия',
            'title_ru' => 'Агрономия',
            'title_en' => 'Agronomy'
        ]);
        DB::table('training_directions')->insert([
            'id' => '38',
            'education_area_id' => '6B082',
            'code' => '811',
            'code_msko' => '24',
            'title_kk' => 'Мал шаруашылығы',
            'title_ru' => 'Животноводство',
            'title_en' => 'Мал шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '39',
            'education_area_id' => '6B083',
            'code' => '821',
            'code_msko' => '24',
            'title_kk' => 'Орман шаруашылығы',
            'title_ru' => 'Лесное хозяйство',
            'title_en' => 'Орман шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '40',
            'education_area_id' => '6B084',
            'code' => '811',
            'code_msko' => '24',
            'title_kk' => 'Балық шаруашылығы',
            'title_ru' => 'Рыбное хозяйство',
            'title_en' => 'Балық шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '41',
            'education_area_id' => '6B085',
            'code' => '731',
            'code_msko' => '24',
            'title_kk' => 'Жерге орналастыру',
            'title_ru' => 'Землеустройство',
            'title_en' => 'Жерге орналастыру'
        ]);
        DB::table('training_directions')->insert([
            'id' => '42',
            'education_area_id' => '6B086',
            'code' => '522',
            'code_msko' => '24',
            'title_kk' => 'Су ресурстары және суды пайдалану',
            'title_ru' => 'Водные ресурсы и водопользования',
            'title_en' => 'Су ресурстары және суды пайдалану'
        ]);
        DB::table('training_directions')->insert([
            'id' => '43',
            'education_area_id' => '6B08088',
            'code' => '888',
            'code_msko' => '24',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с сельским хозяйством и биоресурсами',
            'title_en' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '44',
            'education_area_id' => '6B091',
            'code' => '841',
            'code_msko' => '25',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Ветеринария'
        ]);
        DB::table('training_directions')->insert([
            'id' => '45',
            'education_area_id' => '6B09088',
            'code' => '888',
            'code_msko' => '25',
            'title_kk' => 'Ветеринариямен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные ветеринарией',
            'title_en' => 'Ветеринариямен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '46',
            'education_area_id' => '6B101',
            'code' => '910',
            'code_msko' => '26',
            'title_kk' => 'Денсаулық сақтау',
            'title_ru' => 'Здравоохранение',
            'title_en' => 'Денсаулық сақтау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '47',
            'education_area_id' => '6B102',
            'code' => '920',
            'code_msko' => '26',
            'title_kk' => 'Әлеуметтік қамтамасыз ету',
            'title_ru' => 'Социальное обеспечение',
            'title_en' => 'Әлеуметтік қамтамасыз ету'
        ]);
        DB::table('training_directions')->insert([
            'id' => '48',
            'education_area_id' => '6B10088',
            'code' => '988',
            'code_msko' => '26',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные со здравоохранением и социальным обеспечением (медицина)',
            'title_en' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '49',
            'education_area_id' => '6B111',
            'code' => '1010',
            'code_msko' => '27',
            'title_kk' => 'Қызмет көрсету саласы',
            'title_ru' => 'Сфера обслуживания',
            'title_en' => 'Қызмет көрсету саласы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '50',
            'education_area_id' => '6B112',
            'code' => '1020',
            'code_msko' => '27',
            'title_kk' => 'Гигиена және өндірісте еңбекті қорғау',
            'title_ru' => 'Гигиена и охрана труда на производстве',
            'title_en' => 'Гигиена және өндірісте еңбекті қорғау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '51',
            'education_area_id' => '6B113',
            'code' => '1040',
            'code_msko' => '27',
            'title_kk' => 'Көлік қызметтері',
            'title_ru' => 'Транспортные услуги',
            'title_en' => 'Көлік қызметтері'
        ]);
        DB::table('training_directions')->insert([
            'id' => '52',
            'education_area_id' => '6B11088',
            'code' => '1088',
            'code_msko' => '27',
            'title_kk' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с услугами',
            'title_en' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '53',
            'education_area_id' => '6B121',
            'code' => '1031',
            'code_msko' => '28',
            'title_kk' => 'Әскери іс',
            'title_ru' => 'Военное дело',
            'title_en' => 'Әскери іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '54',
            'education_area_id' => '6B122',
            'code' => '1031',
            'code_msko' => '28',
            'title_kk' => 'Ұлттық қауіпсіздік',
            'title_ru' => 'Национальная безопасность',
            'title_en' => 'Ұлттық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '55',
            'education_area_id' => '6B123',
            'code' => '1032',
            'code_msko' => '28',
            'title_kk' => 'Қоғамдық қауіпсіздік',
            'title_ru' => 'Общественная безопасность',
            'title_en' => 'Қоғамдық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '56',
            'education_area_id' => '6B12088',
            'code' => '1088',
            'code_msko' => '28',
            'title_kk' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с национальной безопасностью и военным делом',
            'title_en' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '57',
            'education_area_id' => '7M011',
            'code' => '111',
            'code_msko' => '29',
            'title_kk' => 'Педагогика және психология',
            'title_ru' => 'Педагогика и психология',
            'title_en' => 'Педагогика және психология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '58',
            'education_area_id' => '7M012',
            'code' => '112',
            'code_msko' => '29',
            'title_kk' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы',
            'title_ru' => 'Педагогика дошкольного воспитания и обучения',
            'title_en' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '59',
            'education_area_id' => '7M013',
            'code' => '113',
            'code_msko' => '29',
            'title_kk' => 'Пәндік мамандандырылмаған педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов без предметной специализации',
            'title_en' => 'Пәндік мамандандырылмаған мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '60',
            'education_area_id' => '7M014',
            'code' => '114',
            'code_msko' => '29',
            'title_kk' => 'Жалпы дамудың пәндік мамандандырылған педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов с предметной специализацией общего развития',
            'title_en' => 'Жалпы дамудың пәндік мамандандырылған мұғалімдерін даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '61',
            'education_area_id' => '7M015',
            'code' => '114',
            'code_msko' => '29',
            'title_kk' => 'Жаратылыстану пәндері бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по естественнонаучным предметам',
            'title_en' => 'Жаратылыстану пәндері бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '62',
            'education_area_id' => '7M016',
            'code' => '114',
            'code_msko' => '29',
            'title_kk' => 'Гуманитарлық пәндер бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по гуманитарным предметам',
            'title_en' => 'Гуманитарлық пәндер бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '63',
            'education_area_id' => '7M017',
            'code' => '114',
            'code_msko' => '29',
            'title_kk' => 'Тілдер және әдебиет бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по языкам и литературе',
            'title_en' => 'Тілдер және әдебиет бойынша мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '64',
            'education_area_id' => '7M018',
            'code' => '114',
            'code_msko' => '29',
            'title_kk' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по социальной педагогике и самопознанию',
            'title_en' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '65',
            'education_area_id' => '7M019',
            'code' => '113',
            'code_msko' => '29',
            'title_kk' => 'Арнайы педагогика мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по специальной педагогике',
            'title_en' => 'Арнайы педагогика мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '66',
            'education_area_id' => '7M01088',
            'code' => '188',
            'code_msko' => '29',
            'title_kk' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные педагогическими науками',
            'title_en' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '67',
            'education_area_id' => '7M021',
            'code' => '210',
            'code_msko' => '30',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_en' => 'Өнер'
        ]);
        DB::table('training_directions')->insert([
            'id' => '68',
            'education_area_id' => '7M022',
            'code' => '220',
            'code_msko' => '30',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_en' => 'Гуманитарлық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '69',
            'education_area_id' => '7M023',
            'code' => '230',
            'code_msko' => '30',
            'title_kk' => 'Тілдер және әдебиет',
            'title_ru' => 'Языки и литература',
            'title_en' => 'Тілдер және әдебиет'
        ]);
        DB::table('training_directions')->insert([
            'id' => '70',
            'education_area_id' => '7M02088',
            'code' => '288',
            'code_msko' => '30',
            'title_kk' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с искусством и гуманитарными науками',
            'title_en' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '71',
            'education_area_id' => '7M031',
            'code' => '310',
            'code_msko' => '31',
            'title_kk' => 'Әлеуметтік ғылымдар',
            'title_ru' => 'Социальные науки',
            'title_en' => 'Әлеуметтік ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '72',
            'education_area_id' => '7M032',
            'code' => '320',
            'code_msko' => '31',
            'title_kk' => 'Журналистика және ақпарат',
            'title_ru' => 'Журналистика и информация',
            'title_en' => 'Журналистика және ақпарат'
        ]);
        DB::table('training_directions')->insert([
            'id' => '73',
            'education_area_id' => '7M03088',
            'code' => '388',
            'code_msko' => '31',
            'title_kk' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные социальными науками, журналистикой и информацией',
            'title_en' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '74',
            'education_area_id' => '7M041',
            'code' => '410',
            'code_msko' => '32',
            'title_kk' => 'Бизнес және басқару',
            'title_ru' => 'Бизнес и управление',
            'title_en' => 'Бизнес және басқару'
        ]);
        DB::table('training_directions')->insert([
            'id' => '75',
            'education_area_id' => '7M042',
            'code' => '420',
            'code_msko' => '32',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_en' => 'Құқық'
        ]);
        DB::table('training_directions')->insert([
            'id' => '76',
            'education_area_id' => '7M04088',
            'code' => '488',
            'code_msko' => '32',
            'title_kk' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с бизнесом, управлением и право',
            'title_en' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '77',
            'education_area_id' => '7M051',
            'code' => '510',
            'code_msko' => '33',
            'title_kk' => 'Биологиялық және сабақтас ғылымдар',
            'title_ru' => 'Биологические и смежные науки',
            'title_en' => 'Биологиялық және сабақтас ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '78',
            'education_area_id' => '7M052',
            'code' => '520',
            'code_msko' => '33',
            'title_kk' => 'Қоршаған орта',
            'title_ru' => 'Окружающая среда',
            'title_en' => 'Қоршаған орта'
        ]);
        DB::table('training_directions')->insert([
            'id' => '79',
            'education_area_id' => '7M053',
            'code' => '530',
            'code_msko' => '33',
            'title_kk' => 'Физикалық және химиялық ғылымдар',
            'title_ru' => 'Физические и химические науки',
            'title_en' => 'Физикалық және химиялық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '80',
            'education_area_id' => '7M054',
            'code' => '540',
            'code_msko' => '33',
            'title_kk' => 'Математика және статистика',
            'title_ru' => 'Математика и статистика',
            'title_en' => 'Математика және статистика'
        ]);
        DB::table('training_directions')->insert([
            'id' => '81',
            'education_area_id' => '7M055',
            'code' => '532',
            'code_msko' => '33',
            'title_kk' => 'Геология',
            'title_ru' => 'Геология',
            'title_en' => 'Геология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '82',
            'education_area_id' => '7M05088',
            'code' => '588',
            'code_msko' => '33',
            'title_kk' => 'Жаратылыстану ғылымдарымен, математикамен және статистикамен байланысты пәнаралық байланыстар',
            'title_ru' => 'Междисциплинарные программы, связанные с естественными науками, математикой и статистикой',
            'title_en' => 'Жаратылыстану ғылымдарымен, математикамен және статистикамен байланысты пәнаралық байланыстар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '83',
            'education_area_id' => '7M061',
            'code' => '610',
            'code_msko' => '34',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '84',
            'education_area_id' => '7M062',
            'code' => '714',
            'code_msko' => '34',
            'title_kk' => 'Телекоммуникациялар',
            'title_ru' => 'Телекоммуникации',
            'title_en' => 'Телекоммуникациялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '85',
            'education_area_id' => '7M06088',
            'code' => '688',
            'code_msko' => '34',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с информационно-коммуникационными технологиями',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '86',
            'education_area_id' => '7M071',
            'code' => '710',
            'code_msko' => '35',
            'title_kk' => 'Инженерия және инженерлік іс',
            'title_ru' => 'Инженерия и инженерное дело',
            'title_en' => 'Инженерия және инженерлік іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '87',
            'education_area_id' => '7M072',
            'code' => '720',
            'code_msko' => '35',
            'title_kk' => 'Өндірістік және өңдеу салалары',
            'title_ru' => 'Производственные и обрабатывающие отрасли',
            'title_en' => 'Өндірістік және өңдеу салалары'
        ]);
        DB::table('training_directions')->insert([
            'id' => '88',
            'education_area_id' => '7M073',
            'code' => '730',
            'code_msko' => '35',
            'title_kk' => 'Сәулет және құрылыс',
            'title_ru' => 'Архитектура и строительство',
            'title_en' => 'Сәулет және құрылыс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '89',
            'education_area_id' => '7M074',
            'code' => '732',
            'code_msko' => '35',
            'title_kk' => 'Су шаруашылығы',
            'title_ru' => 'Водное хозяйство',
            'title_en' => 'Су шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '90',
            'education_area_id' => '7M075',
            'code' => '788',
            'code_msko' => '35',
            'title_kk' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)',
            'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
            'title_en' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)'
        ]);
        DB::table('training_directions')->insert([
            'id' => '91',
            'education_area_id' => '7M07088',
            'code' => '788',
            'code_msko' => '35',
            'title_kk' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с инженерными, обрабатывающими строительными отраслями',
            'title_en' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '92',
            'education_area_id' => '7M081',
            'code' => '812',
            'code_msko' => '36',
            'title_kk' => 'Агрономия',
            'title_ru' => 'Агрономия',
            'title_en' => 'Agronomy'
        ]);
        DB::table('training_directions')->insert([
            'id' => '93',
            'education_area_id' => '7M082',
            'code' => '811',
            'code_msko' => '36',
            'title_kk' => 'Мал шаруашылығы',
            'title_ru' => 'Животноводство',
            'title_en' => 'Мал шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '94',
            'education_area_id' => '7M083',
            'code' => '821',
            'code_msko' => '36',
            'title_kk' => 'Орман шаруашылығы',
            'title_ru' => 'Лесное хозяйство',
            'title_en' => 'Орман шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '95',
            'education_area_id' => '7M084',
            'code' => '811',
            'code_msko' => '36',
            'title_kk' => 'Балық шаруашылығы',
            'title_ru' => 'Рыбное хозяйство',
            'title_en' => 'Балық шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '96',
            'education_area_id' => '7M085',
            'code' => '731',
            'code_msko' => '36',
            'title_kk' => 'Жерге орналастыру',
            'title_ru' => 'Землеустройство',
            'title_en' => 'Жерге орналастыру'
        ]);
        DB::table('training_directions')->insert([
            'id' => '97',
            'education_area_id' => '7M086',
            'code' => '522',
            'code_msko' => '36',
            'title_kk' => 'Су ресурстары және суды пайдалану',
            'title_ru' => 'Водные ресурсы и водопользование',
            'title_en' => 'Су ресурстары және суды пайдалану'
        ]);
        DB::table('training_directions')->insert([
            'id' => '98',
            'education_area_id' => '7M08088',
            'code' => '888',
            'code_msko' => '36',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с сельским хозяйством и биоресурсами',
            'title_en' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '99',
            'education_area_id' => '7M091',
            'code' => '841',
            'code_msko' => '37',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Ветеринария'
        ]);
        DB::table('training_directions')->insert([
            'id' => '100',
            'education_area_id' => '7M09088',
            'code' => '888',
            'code_msko' => '37',
            'title_kk' => 'Ветеринариямен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные ветеринарией',
            'title_en' => 'Ветеринариямен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '101',
            'education_area_id' => '7M101',
            'code' => '910',
            'code_msko' => '38',
            'title_kk' => 'Денсаулық сақтау',
            'title_ru' => 'Здравоохранение',
            'title_en' => 'Денсаулық сақтау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '102',
            'education_area_id' => '7M102',
            'code' => '920',
            'code_msko' => '38',
            'title_kk' => 'Әлеуметтік қамтамасыз ету',
            'title_ru' => 'Социальное обеспечение',
            'title_en' => 'Әлеуметтік қамтамасыз ету'
        ]);
        DB::table('training_directions')->insert([
            'id' => '103',
            'education_area_id' => '7M10088',
            'code' => '988',
            'code_msko' => '38',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные со здравоохранением и социальным обеспечением (медицина)',
            'title_en' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '104',
            'education_area_id' => '7M111',
            'code' => '1010',
            'code_msko' => '39',
            'title_kk' => 'Қызмет көрсету саласы',
            'title_ru' => 'Сфера обслуживания',
            'title_en' => 'Қызмет көрсету саласы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '105',
            'education_area_id' => '7M112',
            'code' => '1020',
            'code_msko' => '39',
            'title_kk' => 'Гигиена және өндірісте еңбекті қорғау',
            'title_ru' => 'Гигиена и охрана труда на производстве',
            'title_en' => 'Гигиена және өндірісте еңбекті қорғау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '106',
            'education_area_id' => '7M113',
            'code' => '1040',
            'code_msko' => '39',
            'title_kk' => 'Көлік қызметтері',
            'title_ru' => 'Транспортные услуги',
            'title_en' => 'Көлік қызметтері'
        ]);
        DB::table('training_directions')->insert([
            'id' => '107',
            'education_area_id' => '7M11088',
            'code' => '1088',
            'code_msko' => '39',
            'title_kk' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с услугами',
            'title_en' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '108',
            'education_area_id' => '7M121',
            'code' => '1031',
            'code_msko' => '40',
            'title_kk' => 'Әскери іс',
            'title_ru' => 'Военное дело',
            'title_en' => 'Әскери іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '109',
            'education_area_id' => '7M122',
            'code' => '1031',
            'code_msko' => '40',
            'title_kk' => 'Ұлттық қауіпсіздік',
            'title_ru' => 'Национальная безопасность',
            'title_en' => 'Ұлттық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '110',
            'education_area_id' => '7M123',
            'code' => '1032',
            'code_msko' => '40',
            'title_kk' => 'Қоғамдық қауіпсіздік',
            'title_ru' => 'Общественная безопасность',
            'title_en' => 'Қоғамдық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '111',
            'education_area_id' => '7M12088',
            'code' => '1088',
            'code_msko' => '40',
            'title_kk' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с национальной безопасностью и военным делом',
            'title_en' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '112',
            'education_area_id' => '7R091',
            'code' => '910',
            'code_msko' => '41',
            'title_kk' => 'Денсаулық сақтау',
            'title_ru' => 'Здравоохранение',
            'title_en' => 'Денсаулық сақтау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '113',
            'education_area_id' => '8D011',
            'code' => '111',
            'code_msko' => '42',
            'title_kk' => 'Педагогика және психология',
            'title_ru' => 'Педагогика и психология',
            'title_en' => 'Педагогика және психология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '114',
            'education_area_id' => '8D012',
            'code' => '112',
            'code_msko' => '42',
            'title_kk' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы',
            'title_ru' => 'Педагогика дошкольного воспитания и обучения',
            'title_en' => 'Мектепке дейінгі тәрбиелеу және оқыту педагогикасы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '115',
            'education_area_id' => '8D013',
            'code' => '113',
            'code_msko' => '42',
            'title_kk' => 'Пәндік мамандандырылмаған педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов без предметной специализации',
            'title_en' => 'Пәндік мамандандырылмаған мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '116',
            'education_area_id' => '8D014',
            'code' => '114',
            'code_msko' => '42',
            'title_kk' => 'Жалпы дамудың пәндік мамандандырылған педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов с предметной специализацией общего развития',
            'title_en' => 'Жалпы дамудың пәндік мамандандырылған мұғалімдерін даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '117',
            'education_area_id' => '8D015',
            'code' => '114',
            'code_msko' => '42',
            'title_kk' => 'Жаратылыстану пәндері бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по естественнонаучным предметам',
            'title_en' => 'Жаратылыстану пәндері бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '118',
            'education_area_id' => '8D016',
            'code' => '114',
            'code_msko' => '42',
            'title_kk' => 'Гуманитарлық пәндер бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по гуманитарным предметам',
            'title_en' => 'Гуманитарлық пәндер бойынша мұғалімдер даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '119',
            'education_area_id' => '8D017',
            'code' => '114',
            'code_msko' => '42',
            'title_kk' => 'Тілдер және әдебиет бойынша педагогтарды даярлау',
            'title_ru' => 'Подготовка педагогов по языкам и литературе',
            'title_en' => 'Тілдер және әдебиет бойынша мұғалімдерді даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '120',
            'education_area_id' => '8D018',
            'code' => '114',
            'code_msko' => '42',
            'title_kk' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по социальной педагогике и самопознанию',
            'title_en' => 'Әлеуметік педагогика және өзін-өзі тану мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '121',
            'education_area_id' => '8D019',
            'code' => '113',
            'code_msko' => '42',
            'title_kk' => 'Арнайы педагогика мамандарын даярлау',
            'title_ru' => 'Подготовка специалистов по специальной педагогике',
            'title_en' => 'Арнайы педагогика мамандарын даярлау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '122',
            'education_area_id' => '8D01088',
            'code' => '188',
            'code_msko' => '42',
            'title_kk' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные педагогическими науками',
            'title_en' => 'Педагогикалық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '123',
            'education_area_id' => '8D021',
            'code' => '210',
            'code_msko' => '43',
            'title_kk' => 'Өнер',
            'title_ru' => 'Искусство',
            'title_en' => 'Өнер'
        ]);
        DB::table('training_directions')->insert([
            'id' => '124',
            'education_area_id' => '8D022',
            'code' => '220',
            'code_msko' => '43',
            'title_kk' => 'Гуманитарлық ғылымдар',
            'title_ru' => 'Гуманитарные науки',
            'title_en' => 'Гуманитарлық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '125',
            'education_area_id' => '8D023',
            'code' => '230',
            'code_msko' => '43',
            'title_kk' => 'Тілдер және әдебиет',
            'title_ru' => 'Языки и литература',
            'title_en' => 'Тілдер және әдебиет'
        ]);
        DB::table('training_directions')->insert([
            'id' => '126',
            'education_area_id' => '8D02088',
            'code' => '288',
            'code_msko' => '43',
            'title_kk' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с искусством и гуманитарными науками',
            'title_en' => 'Өнер және гуманитарлық ғылымдармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '127',
            'education_area_id' => '8D031',
            'code' => '310',
            'code_msko' => '44',
            'title_kk' => 'Әлеуметтік ғылымдар',
            'title_ru' => 'Социальные науки',
            'title_en' => 'Әлеуметтік ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '128',
            'education_area_id' => '8D032',
            'code' => '320',
            'code_msko' => '44',
            'title_kk' => 'Журналистика және ақпарат',
            'title_ru' => 'Журналистика и информация',
            'title_en' => 'Журналистика және ақпарат'
        ]);
        DB::table('training_directions')->insert([
            'id' => '129',
            'education_area_id' => '8D03088',
            'code' => '388',
            'code_msko' => '44',
            'title_kk' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные социальными науками, журналистикой и информацией',
            'title_en' => 'Әлеуметтік ғылымдармен, журналистикамен және ақпаратпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '130',
            'education_area_id' => '8D041',
            'code' => '410',
            'code_msko' => '45',
            'title_kk' => 'Бизнес және басқару',
            'title_ru' => 'Бизнес и управление',
            'title_en' => 'Бизнес және басқару'
        ]);
        DB::table('training_directions')->insert([
            'id' => '131',
            'education_area_id' => '8D042',
            'code' => '420',
            'code_msko' => '45',
            'title_kk' => 'Құқық',
            'title_ru' => 'Право',
            'title_en' => 'Құқық'
        ]);
        DB::table('training_directions')->insert([
            'id' => '132',
            'education_area_id' => '8D04088',
            'code' => '488',
            'code_msko' => '45',
            'title_kk' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с бизнесом, управлением и право',
            'title_en' => 'Бизнес, басқару және құқықпен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '133',
            'education_area_id' => '8D051',
            'code' => '510',
            'code_msko' => '46',
            'title_kk' => 'Биологиялық және сабақтас ғылымдар',
            'title_ru' => 'Биологические и смежные науки',
            'title_en' => 'Биологиялық және сабақтас ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '134',
            'education_area_id' => '8D052',
            'code' => '520',
            'code_msko' => '46',
            'title_kk' => 'Қоршаған орта',
            'title_ru' => 'Окружающая среда',
            'title_en' => 'Қоршаған орта'
        ]);
        DB::table('training_directions')->insert([
            'id' => '135',
            'education_area_id' => '8D053',
            'code' => '530',
            'code_msko' => '46',
            'title_kk' => 'Физикалық және химиялық ғылымдар',
            'title_ru' => 'Физические и химические науки',
            'title_en' => 'Физикалық және химиялық ғылымдар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '136',
            'education_area_id' => '8D054',
            'code' => '540',
            'code_msko' => '46',
            'title_kk' => 'Математика және статистика',
            'title_ru' => 'Математика и статистика',
            'title_en' => 'Математика және статистика'
        ]);
        DB::table('training_directions')->insert([
            'id' => '137',
            'education_area_id' => '8D055',
            'code' => '532',
            'code_msko' => '46',
            'title_kk' => 'Геология',
            'title_ru' => 'Геология',
            'title_en' => 'Геология'
        ]);
        DB::table('training_directions')->insert([
            'id' => '138',
            'education_area_id' => '8D05088',
            'code' => '588',
            'code_msko' => '46',
            'title_kk' => 'Жаратылыстану ғылымдарымен, математикамен және статистикамен байланысты пәнаралық байланыстар',
            'title_ru' => 'Междисциплинарные программы, связанные с естественными науками, математикой и статистикой',
            'title_en' => 'Жаратылыстану ғылымдарымен, математикамен және статистикамен байланысты пәнаралық байланыстар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '139',
            'education_area_id' => '8D061',
            'code' => '610',
            'code_msko' => '47',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялар',
            'title_ru' => 'Информационно-коммуникационные технологии',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '140',
            'education_area_id' => '8D062',
            'code' => '714',
            'code_msko' => '47',
            'title_kk' => 'Телекоммуникациялар',
            'title_ru' => 'Телекоммуникации',
            'title_en' => 'Телекоммуникациялар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '141',
            'education_area_id' => '8D06088',
            'code' => '688',
            'code_msko' => '47',
            'title_kk' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с информационно-коммуникационными технологиями',
            'title_en' => 'Ақпараттық-коммуникациялық технологиялармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '142',
            'education_area_id' => '8D071',
            'code' => '710',
            'code_msko' => '48',
            'title_kk' => 'Инженерия және инженерлік іс',
            'title_ru' => 'Инженерия и инженерное дело',
            'title_en' => 'Инженерия және инженерлік іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '143',
            'education_area_id' => '8D072',
            'code' => '720',
            'code_msko' => '48',
            'title_kk' => 'Өндірістік және өңдеу салалары',
            'title_ru' => 'Производственные и обрабатывающие отрасли',
            'title_en' => 'Өндірістік және өңдеу салалары'
        ]);
        DB::table('training_directions')->insert([
            'id' => '144',
            'education_area_id' => '8D073',
            'code' => '730',
            'code_msko' => '48',
            'title_kk' => 'Сәулет және құрылыс',
            'title_ru' => 'Архитектура и строительство',
            'title_en' => 'Сәулет және құрылыс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '145',
            'education_area_id' => '8D074',
            'code' => '732',
            'code_msko' => '48',
            'title_kk' => 'Су шаруашылығы',
            'title_ru' => 'Водное хозяйство',
            'title_en' => 'Су шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '146',
            'education_area_id' => '8D075',
            'code' => '788',
            'code_msko' => '48',
            'title_kk' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)',
            'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
            'title_en' => 'Стандарттау, сертификаттау және метрология (салалар бойынша)'
        ]);
        DB::table('training_directions')->insert([
            'id' => '147',
            'education_area_id' => '8D07088',
            'code' => '788',
            'code_msko' => '48',
            'title_kk' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с инженерными, обрабатывающими строительными отраслями',
            'title_en' => 'Инженерлік, өңдейтін және құрылыс салаларымен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '148',
            'education_area_id' => '8D081',
            'code' => '812',
            'code_msko' => '49',
            'title_kk' => 'Агрономия',
            'title_ru' => 'Агрономия',
            'title_en' => 'Agronomy'
        ]);
        DB::table('training_directions')->insert([
            'id' => '149',
            'education_area_id' => '8D082',
            'code' => '811',
            'code_msko' => '49',
            'title_kk' => 'Мал шаруашылығы',
            'title_ru' => 'Животноводство',
            'title_en' => 'Мал шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '150',
            'education_area_id' => '8D083',
            'code' => '821',
            'code_msko' => '49',
            'title_kk' => 'Орман шаруашылығы',
            'title_ru' => 'Лесное хозяйство',
            'title_en' => 'Орман шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '151',
            'education_area_id' => '8D084',
            'code' => '811',
            'code_msko' => '49',
            'title_kk' => 'Балық шаруашылығы',
            'title_ru' => 'Рыбное хозяйство',
            'title_en' => 'Балық шаруашылығы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '152',
            'education_area_id' => '8D085',
            'code' => '731',
            'code_msko' => '49',
            'title_kk' => 'Жерге орналастыру',
            'title_ru' => 'Землеустройство',
            'title_en' => 'Жерге орналастыру'
        ]);
        DB::table('training_directions')->insert([
            'id' => '153',
            'education_area_id' => '8D086',
            'code' => '522',
            'code_msko' => '49',
            'title_kk' => 'Су ресурстары және суды пайдалану',
            'title_ru' => 'Водные ресурсы и водопользование',
            'title_en' => 'Су ресурстары және суды пайдалану'
        ]);
        DB::table('training_directions')->insert([
            'id' => '154',
            'education_area_id' => '8D08088',
            'code' => '888',
            'code_msko' => '49',
            'title_kk' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с сельским хозяйством и биоресурсами',
            'title_en' => 'Ауыл шаруашылығы және биоресурстармен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '155',
            'education_area_id' => '8D091',
            'code' => '841',
            'code_msko' => '50',
            'title_kk' => 'Ветеринария',
            'title_ru' => 'Ветеринария',
            'title_en' => 'Ветеринария'
        ]);
        DB::table('training_directions')->insert([
            'id' => '156',
            'education_area_id' => '8D09088',
            'code' => '888',
            'code_msko' => '50',
            'title_kk' => 'Ветеринариямен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные ветеринарией',
            'title_en' => 'Ветеринариямен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '157',
            'education_area_id' => '8D101',
            'code' => '910',
            'code_msko' => '51',
            'title_kk' => 'Денсаулық сақтау',
            'title_ru' => 'Здравоохранение',
            'title_en' => 'Денсаулық сақтау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '158',
            'education_area_id' => '8D102',
            'code' => '920',
            'code_msko' => '51',
            'title_kk' => 'Әлеуметтік қамтамасыз ету',
            'title_ru' => 'Социальное обеспечение',
            'title_en' => 'Әлеуметтік қамтамасыз ету'
        ]);
        DB::table('training_directions')->insert([
            'id' => '159',
            'education_area_id' => '8D10088',
            'code' => '988',
            'code_msko' => '51',
            'title_kk' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные со здравоохранением и социальным обеспечением (медицина)',
            'title_en' => 'Денсаулық сақтау және әлеуметтік қамтамасыз етумен (медицина) байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '160',
            'education_area_id' => '8D111',
            'code' => '1010',
            'code_msko' => '52',
            'title_kk' => 'Қызмет көрсету саласы',
            'title_ru' => 'Сфера обслуживания',
            'title_en' => 'Қызмет көрсету саласы'
        ]);
        DB::table('training_directions')->insert([
            'id' => '161',
            'education_area_id' => '8D112',
            'code' => '1020',
            'code_msko' => '52',
            'title_kk' => 'Гигиена және өндірісте еңбекті қорғау',
            'title_ru' => 'Гигиена и охрана труда на производстве',
            'title_en' => 'Гигиена және өндірісте еңбекті қорғау'
        ]);
        DB::table('training_directions')->insert([
            'id' => '162',
            'education_area_id' => '8D113',
            'code' => '1040',
            'code_msko' => '52',
            'title_kk' => 'Көлік қызметтері',
            'title_ru' => 'Транспортные услуги',
            'title_en' => 'Көлік қызметтері'
        ]);
        DB::table('training_directions')->insert([
            'id' => '163',
            'education_area_id' => '8D11088',
            'code' => '1088',
            'code_msko' => '52',
            'title_kk' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с услугами',
            'title_en' => 'Қызмет көрсетумен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '164',
            'education_area_id' => '8D121',
            'code' => '1031',
            'code_msko' => '53',
            'title_kk' => 'Әскери іс',
            'title_ru' => 'Военное дело',
            'title_en' => 'Әскери іс'
        ]);
        DB::table('training_directions')->insert([
            'id' => '165',
            'education_area_id' => '8D122',
            'code' => '1031',
            'code_msko' => '53',
            'title_kk' => 'Ұлттық қауіпсіздік',
            'title_ru' => 'Национальная безопасность',
            'title_en' => 'Ұлттық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '166',
            'education_area_id' => '8D123',
            'code' => '1032',
            'code_msko' => '53',
            'title_kk' => 'Қоғамдық қауіпсіздік',
            'title_ru' => 'Общественная безопасность',
            'title_en' => 'Қоғамдық қауіпсіздік'
        ]);
        DB::table('training_directions')->insert([
            'id' => '167',
            'education_area_id' => '8D12088',
            'code' => '1088',
            'code_msko' => '53',
            'title_kk' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар',
            'title_ru' => 'Междисциплинарные программы, связанные с национальной безопасностью и военным делом',
            'title_en' => 'Ұлттық қауіпсіздікпен және әскери іспен байланысты пәнаралық бағдарламалар'
        ]);
        DB::table('training_directions')->insert([
            'id' => '168',
            'education_area_id' => '7M063',
            'code' => '612',
            'code_msko' => '34',
            'title_kk' => 'Ақпараттық қауіпсіздік',
            'title_ru' => 'Информационная безопасность',
            'title_en' => 'Information security'
        ]);
        DB::table('training_directions')->insert([
            'id' => '169',
            'education_area_id' => '8D063',
            'code' => '612',
            'code_msko' => '47',
            'title_kk' => 'Ақпараттық қауіпсіздік',
            'title_ru' => 'Информационная безопасность',
            'title_en' => 'Information security'
        ]);
        DB::table('training_directions')->insert([
            'id' => '170',
            'education_area_id' => '6B087',
            'code' => '710',
            'code_msko' => '24',
            'title_kk' => 'Агроинженерия',
            'title_ru' => 'Агроинженерия',
            'title_en' => 'Agroengineering'
        ]);
        DB::table('training_directions')->insert([
            'id' => '171',
            'education_area_id' => '7M087',
            'code' => '710',
            'code_msko' => '36',
            'title_kk' => 'Агроинженерия',
            'title_ru' => 'Агроинженерия',
            'title_en' => 'Agroengineering'
        ]);
        DB::table('training_directions')->insert([
            'id' => '172',
            'education_area_id' => '8D087',
            'code' => '710',
            'code_msko' => '49',
            'title_kk' => 'Агроинженерия',
            'title_ru' => 'Агроинженерия',
            'title_en' => 'Agroengineering'
        ]);
    }
}
