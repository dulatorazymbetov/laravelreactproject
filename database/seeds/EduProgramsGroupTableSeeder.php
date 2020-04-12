<?php

use Illuminate\Database\Seeder;

class EduProgramsGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('edu_programs_groups')->insert([
        'id' => '1827',
        'training_direction_id' => '2',
        'code' => 'B001',
        'title_kk' => 'Педагогика және психология',
        'title_ru' => 'Педагогика и психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1828',
        'training_direction_id' => '3',
        'code' => 'B002',
        'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
        'title_ru' => 'Дошкольное обучение и воспитание',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1829',
        'training_direction_id' => '4',
        'code' => 'B003',
        'title_kk' => 'Бастауышта оқыту педагогикасы мен әдістемесі',
        'title_ru' => 'Педагогика и методика начального обучения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1830',
        'training_direction_id' => '5',
        'code' => 'B004',
        'title_kk' => 'Бастапқы әскери дайындық мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей начальной военной подготовки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1831',
        'training_direction_id' => '5',
        'code' => 'B005',
        'title_kk' => 'Дене шынықтыру мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей физической культуры',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1832',
        'training_direction_id' => '5',
        'code' => 'B006',
        'title_kk' => 'Музыка мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей музыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1833',
        'training_direction_id' => '5',
        'code' => 'B007',
        'title_kk' => 'Көркем еңбек және сызу мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей художественного труда и черчения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1834',
        'training_direction_id' => '5',
        'code' => 'B008',
        'title_kk' => 'Құқық және экономика негіздері мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей основы права и экономики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1835',
        'training_direction_id' => '6',
        'code' => 'B009',
        'title_kk' => 'Математика мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей математики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1836',
        'training_direction_id' => '6',
        'code' => 'B010',
        'title_kk' => 'Физика мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей физики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1837',
        'training_direction_id' => '6',
        'code' => 'B011',
        'title_kk' => 'Информатика мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей информатики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1838',
        'training_direction_id' => '6',
        'code' => 'B012',
        'title_kk' => 'Химия мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей химии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1839',
        'training_direction_id' => '6',
        'code' => 'B013',
        'title_kk' => 'Биология мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей биологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1840',
        'training_direction_id' => '6',
        'code' => 'B014',
        'title_kk' => 'География мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей географии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1841',
        'training_direction_id' => '7',
        'code' => 'B015',
        'title_kk' => 'Гуманитарлық пәндер мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей по гуманитарным предметам',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1842',
        'training_direction_id' => '8',
        'code' => 'B016',
        'title_kk' => 'Қазақ тілі мен әдебиеті мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей казахского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1843',
        'training_direction_id' => '8',
        'code' => 'B017',
        'title_kk' => 'Орыс тілі мен әдебиеті мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей русского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1844',
        'training_direction_id' => '8',
        'code' => 'B018',
        'title_kk' => 'Шет тілі мұғалімдерін даярлау',
        'title_ru' => 'Подготовка учителей иностранного языка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1845',
        'training_direction_id' => '9',
        'code' => 'B019',
        'title_kk' => 'Әлеуметтік педагогика және өзін-өзі тану мамандарын даярлау',
        'title_ru' => 'Подготовка специалистов по социальной педагогике и самопознанию',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1846',
        'training_direction_id' => '10',
        'code' => 'B020',
        'title_kk' => 'Арнайы педагогика мамандарын даярлау',
        'title_ru' => 'Подготовка специалистов по специальной педагогике',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1847',
        'training_direction_id' => '12',
        'code' => 'B021',
        'title_kk' => 'Орындаушылық өнер',
        'title_ru' => 'Исполнительское искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1848',
        'training_direction_id' => '12',
        'code' => 'B022',
        'title_kk' => 'Эстрада өнері',
        'title_ru' => 'Искусство эстрады',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1849',
        'training_direction_id' => '12',
        'code' => 'B023',
        'title_kk' => 'Аспапта орындаушылық',
        'title_ru' => 'Инструментальное исполнительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1850',
        'training_direction_id' => '12',
        'code' => 'B024',
        'title_kk' => 'Музыкатану және өнертану',
        'title_ru' => 'Музыковедение и искусствоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1851',
        'training_direction_id' => '12',
        'code' => 'B025',
        'title_kk' => 'Дәстүрлі музыка өнері',
        'title_ru' => 'Традиционное музыкальное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1852',
        'training_direction_id' => '12',
        'code' => 'B026',
        'title_kk' => 'Дирижерлеу және композиция',
        'title_ru' => 'Дирижирование и композиция',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1853',
        'training_direction_id' => '12',
        'code' => 'B027',
        'title_kk' => 'Театр өнері',
        'title_ru' => 'Театральное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1854',
        'training_direction_id' => '12',
        'code' => 'B028',
        'title_kk' => 'Хореография',
        'title_ru' => 'Хореография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1855',
        'training_direction_id' => '12',
        'code' => 'B029',
        'title_kk' => 'Аудиовизуалды құрылғылар және медиа өндіріс',
        'title_ru' => 'Аудиовизуальные средства и медиа производство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1856',
        'training_direction_id' => '12',
        'code' => 'B030',
        'title_kk' => 'Бейнелеу өнері',
        'title_ru' => 'Изобразительное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1857',
        'training_direction_id' => '12',
        'code' => 'B031',
        'title_kk' => 'Сән, интерьер дизайны және өнеркәсіп дизайны',
        'title_ru' => 'Мода, дизайн интерьера и промышленный дизайн',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1858',
        'training_direction_id' => '13',
        'code' => 'B032',
        'title_kk' => 'Философия және этика',
        'title_ru' => 'Философия и этика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1859',
        'training_direction_id' => '13',
        'code' => 'B033',
        'title_kk' => 'Дінтану және теология',
        'title_ru' => 'Религия и теология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1860',
        'training_direction_id' => '13',
        'code' => 'B034',
        'title_kk' => 'Тарих және археология',
        'title_ru' => 'История и археология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1861',
        'training_direction_id' => '13',
        'code' => 'B035',
        'title_kk' => 'Түркітану және шығыстану',
        'title_ru' => 'Тюркология и востоковедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1862',
        'training_direction_id' => '14',
        'code' => 'B036',
        'title_kk' => 'Аударма ісі',
        'title_ru' => 'Переводческое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1863',
        'training_direction_id' => '14',
        'code' => 'B037',
        'title_kk' => 'Филология',
        'title_ru' => 'Филология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1864',
        'training_direction_id' => '16',
        'code' => 'B038',
        'title_kk' => 'Әлеуметтану',
        'title_ru' => 'Социология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1865',
        'training_direction_id' => '16',
        'code' => 'B039',
        'title_kk' => 'Мәдениеттану',
        'title_ru' => 'Культурология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1866',
        'training_direction_id' => '16',
        'code' => 'B040',
        'title_kk' => 'Саясаттану және азаматтық құқықтану',
        'title_ru' => 'Политология и граждановедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1867',
        'training_direction_id' => '16',
        'code' => 'B041',
        'title_kk' => 'Психология',
        'title_ru' => 'Психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1868',
        'training_direction_id' => '17',
        'code' => 'B042',
        'title_kk' => 'Журналистика және репортер ісі',
        'title_ru' => 'Журналистика и репортерское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1869',
        'training_direction_id' => '17',
        'code' => 'B043',
        'title_kk' => 'Кітапхана ісі, ақпараттарды өңдеу және мұрағат ісі',
        'title_ru' => 'Библиотечное дело, обработка информации и архивное дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1870',
        'training_direction_id' => '19',
        'code' => 'B044',
        'title_kk' => 'Менеджмент және басқару',
        'title_ru' => 'Менеджмент и управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1871',
        'training_direction_id' => '19',
        'code' => 'B045',
        'title_kk' => 'Аудит және салық салу',
        'title_ru' => 'Аудит и налогообложение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1872',
        'training_direction_id' => '19',
        'code' => 'B046',
        'title_kk' => 'Қаржы, экономика, банк және сақтандыру ісі',
        'title_ru' => 'Финансы, экономика, банковское и страховое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1873',
        'training_direction_id' => '19',
        'code' => 'B047',
        'title_kk' => 'Маркетинг және жарнама',
        'title_ru' => 'Маркетинг и реклама',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1874',
        'training_direction_id' => '19',
        'code' => 'B048',
        'title_kk' => 'Еңбек дағдылары',
        'title_ru' => 'Трудовые навыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1875',
        'training_direction_id' => '20',
        'code' => 'B049',
        'title_kk' => 'Құқық',
        'title_ru' => 'Право',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1876',
        'training_direction_id' => '22',
        'code' => 'B050',
        'title_kk' => 'Биологиялық және сабақтас ғылымдар',
        'title_ru' => 'Биологические и смежные науки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1877',
        'training_direction_id' => '23',
        'code' => 'B051',
        'title_kk' => 'Қоршаған орта',
        'title_ru' => 'Окружающая среда',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1878',
        'training_direction_id' => '23',
        'code' => 'B052',
        'title_kk' => 'Жер туралы ғылым',
        'title_ru' => 'Наука о земле',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1879',
        'training_direction_id' => '24',
        'code' => 'B053',
        'title_kk' => 'Химия',
        'title_ru' => 'Химия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1880',
        'training_direction_id' => '24',
        'code' => 'B054',
        'title_kk' => 'Физика',
        'title_ru' => 'Физика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1881',
        'training_direction_id' => '25',
        'code' => 'B055',
        'title_kk' => 'Математика және статистика',
        'title_ru' => 'Математика и статистика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1882',
        'training_direction_id' => '25',
        'code' => 'B056',
        'title_kk' => 'Механика',
        'title_ru' => 'Механика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1883',
        'training_direction_id' => '28',
        'code' => 'B057',
        'title_kk' => 'Ақпараттық технологиялар',
        'title_ru' => 'Информационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1884',
        'training_direction_id' => '1',
        'code' => 'B058',
        'title_kk' => 'Ақпараттық қауіпсіздік',
        'title_ru' => 'Информационная безопасность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1885',
        'training_direction_id' => '29',
        'code' => 'B059',
        'title_kk' => 'Коммуникациялар және коммуникациялық технологиялар',
        'title_ru' => 'Коммуникации и коммуникационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1886',
        'training_direction_id' => '31',
        'code' => 'B060',
        'title_kk' => 'Химиялық инженерия және процестер',
        'title_ru' => 'Химическая инженерия и процессы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1887',
        'training_direction_id' => '31',
        'code' => 'B061',
        'title_kk' => 'Материалтану және технологиялар',
        'title_ru' => 'Материаловедение и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1888',
        'training_direction_id' => '31',
        'code' => 'B062',
        'title_kk' => 'Электр техникасы және энергетика',
        'title_ru' => 'Электротехника и энергетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1889',
        'training_direction_id' => '31',
        'code' => 'B063',
        'title_kk' => 'Электр техникасы және автоматтандыру',
        'title_ru' => 'Электротехника и автоматизация',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1890',
        'training_direction_id' => '31',
        'code' => 'B064',
        'title_kk' => 'Механика және металл өңдеу',
        'title_ru' => 'Механика и металлообработка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1891',
        'training_direction_id' => '31',
        'code' => 'B065',
        'title_kk' => 'Автокөлік құралдары',
        'title_ru' => 'Автотранспортные средства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1892',
        'training_direction_id' => '31',
        'code' => 'B066',
        'title_kk' => 'Теңіз көлігі және технологиялары',
        'title_ru' => 'Морской транспорт и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1893',
        'training_direction_id' => '31',
        'code' => 'B067',
        'title_kk' => 'Әуе көлігі және технологиялары',
        'title_ru' => 'Воздушный транспорт и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1894',
        'training_direction_id' => '32',
        'code' => 'B068',
        'title_kk' => 'Азық-түлік өнімдерінің өндірісі',
        'title_ru' => 'Производство продуктов питания',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1895',
        'training_direction_id' => '32',
        'code' => 'B069',
        'title_kk' => 'Материалдар өндірісі (шыны, қағаз, пластик, ағаш)',
        'title_ru' => 'Производство материалов (стекло, бумага, пластик, дерево)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1896',
        'training_direction_id' => '32',
        'code' => 'B070',
        'title_kk' => 'Тоқыма: киім, аяқ киім және былғары бұйымдары',
        'title_ru' => 'Текстиль: одежда, обувь и кожаные изделия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1897',
        'training_direction_id' => '32',
        'code' => 'B071',
        'title_kk' => 'Тау-кен ісі және пайдалы қазбаларды өндіру',
        'title_ru' => 'Горное дело и добыча полезных ископаемых',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1898',
        'training_direction_id' => '32',
        'code' => 'B072',
        'title_kk' => 'Фармацевтикалық өндіріс технологиясы',
        'title_ru' => 'Технология фармацевтического производства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1899',
        'training_direction_id' => '33',
        'code' => 'B073',
        'title_kk' => 'Сәулет',
        'title_ru' => 'Архитектура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1900',
        'training_direction_id' => '33',
        'code' => 'B074',
        'title_kk' => 'Қала құрылысы, құрылыс жұмыстары және азаматтық құрылыс',
        'title_ru' => 'Градостроительство, строительные работы и гражданское строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1901',
        'training_direction_id' => '33',
        'code' => 'B075',
        'title_kk' => 'Кадастр және жерге орналастыру',
        'title_ru' => 'Кадастр и землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1902',
        'training_direction_id' => '35',
        'code' => 'B076',
        'title_kk' => 'Стандарттау, сертификаттау және метрология (сала бойынша)',
        'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1903',
        'training_direction_id' => '37',
        'code' => 'B077',
        'title_kk' => 'Өсімдік шаруашылығы',
        'title_ru' => 'Растениеводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1904',
        'training_direction_id' => '38',
        'code' => 'B078',
        'title_kk' => 'Мал шаруашылығы',
        'title_ru' => 'Животноводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1905',
        'training_direction_id' => '39',
        'code' => 'B079',
        'title_kk' => 'Орман шаруашылығы',
        'title_ru' => 'Лесное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1906',
        'training_direction_id' => '40',
        'code' => 'B080',
        'title_kk' => 'Балық шаруашылығы',
        'title_ru' => 'Рыбное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1907',
        'training_direction_id' => '41',
        'code' => 'B081',
        'title_kk' => 'Жерге орналастыру',
        'title_ru' => 'Землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1908',
        'training_direction_id' => '42',
        'code' => 'B082',
        'title_kk' => 'Су ресурстары және суды пайдалану',
        'title_ru' => 'Водные ресурсы и водопользования',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1909',
        'training_direction_id' => '44',
        'code' => 'B083',
        'title_kk' => 'Ветеринария',
        'title_ru' => 'Ветеринария',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1910',
        'training_direction_id' => '46',
        'code' => 'B084',
        'title_kk' => 'Мейірбике ісі',
        'title_ru' => 'Сестринское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1911',
        'training_direction_id' => '46',
        'code' => 'B085',
        'title_kk' => 'Фармация',
        'title_ru' => 'Фармация',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1912',
        'training_direction_id' => '46',
        'code' => 'B086',
        'title_kk' => 'Жалпы медицина',
        'title_ru' => 'Общая медицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1913',
        'training_direction_id' => '46',
        'code' => 'B087',
        'title_kk' => 'Стоматология',
        'title_ru' => 'Стоматология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1914',
        'training_direction_id' => '46',
        'code' => 'B088',
        'title_kk' => 'Педиатрия',
        'title_ru' => 'Педиатрия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1915',
        'training_direction_id' => '46',
        'code' => 'B089',
        'title_kk' => 'Қоғамдық денсаулық сақтау',
        'title_ru' => 'Общественное здравоохранение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1916',
        'training_direction_id' => '47',
        'code' => 'B090',
        'title_kk' => 'Әлеуметтік жұмыс',
        'title_ru' => 'Социальная работа',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1917',
        'training_direction_id' => '49',
        'code' => 'B091',
        'title_kk' => 'Туризм',
        'title_ru' => 'Туризм',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1918',
        'training_direction_id' => '49',
        'code' => 'B092',
        'title_kk' => 'Тынығу',
        'title_ru' => 'Досуг',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1919',
        'training_direction_id' => '49',
        'code' => 'B093',
        'title_kk' => 'Мейрамхана ісі және мейманхана бизнесі',
        'title_ru' => 'Ресторанное дело и гостиничный бизнес',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1920',
        'training_direction_id' => '50',
        'code' => 'B094',
        'title_kk' => 'Санитарлық-профилактикалық іс-шаралар',
        'title_ru' => 'Санитарно-профилактические мероприятия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1921',
        'training_direction_id' => '51',
        'code' => 'B095',
        'title_kk' => 'Көлік қызметтері',
        'title_ru' => 'Транспортные услуги',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1922',
        'training_direction_id' => '55',
        'code' => 'B096',
        'title_kk' => 'Құқық қорғау қызметі',
        'title_ru' => 'Правоохранительная деятельность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1923',
        'training_direction_id' => '55',
        'code' => 'B097',
        'title_kk' => 'Өрт қауіпсіздігі',
        'title_ru' => 'Пожарная безопасность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1924',
        'training_direction_id' => '31',
        'code' => 'B162',
        'title_kk' => 'Жылу энергетикасы',
        'title_ru' => 'Теплоэнергетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1925',
        'training_direction_id' => '31',
        'code' => 'B164',
        'title_kk' => 'Аспап жасау',
        'title_ru' => 'Приборостроение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1926',
        'training_direction_id' => '32',
        'code' => 'B171',
        'title_kk' => 'Металлургия',
        'title_ru' => 'Металлургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1927',
        'training_direction_id' => '32',
        'code' => 'B271',
        'title_kk' => 'Мұнай-газ ісі',
        'title_ru' => 'Нефтегазовое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1928',
        'training_direction_id' => '33',
        'code' => 'B174',
        'title_kk' => 'Геодезия және картография',
        'title_ru' => 'Геодезия и картография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1929',
        'training_direction_id' => '39',
        'code' => 'B179',
        'title_kk' => 'Аңшылықтану және аң шаруашылығы',
        'title_ru' => 'Охотоведение и звероводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1930',
        'training_direction_id' => '113',
        'code' => 'D001',
        'title_kk' => 'Педагогика және психология',
        'title_ru' => 'Педагогика и психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1931',
        'training_direction_id' => '114',
        'code' => 'D002',
        'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
        'title_ru' => 'Дошкольное обучение и воспитание',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1932',
        'training_direction_id' => '115',
        'code' => 'D003',
        'title_kk' => 'Пәнсіз мамандандырылған педагогтерді даярлау',
        'title_ru' => 'Подготовка педагогов без предметной специализации',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1933',
        'training_direction_id' => '116',
        'code' => 'D004',
        'title_kk' => 'Бастапқы әскери дайындық педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов начальной военной подготовки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1934',
        'training_direction_id' => '116',
        'code' => 'D005',
        'title_kk' => 'Дене шынықтыру педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов физической культуры',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1935',
        'training_direction_id' => '116',
        'code' => 'D006',
        'title_kk' => 'Музыка педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов музыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1936',
        'training_direction_id' => '116',
        'code' => 'D007',
        'title_kk' => 'Көркем еңбек, графика және жобалау педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов художественного труда, графики и проектирования',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1937',
        'training_direction_id' => '116',
        'code' => 'D008',
        'title_kk' => 'Кәсіптік оқыту педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов профессионального обучения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1938',
        'training_direction_id' => '116',
        'code' => 'D009',
        'title_kk' => 'Құқық және экономика негіздері',
        'title_ru' => 'Основы права и экономики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1939',
        'training_direction_id' => '117',
        'code' => 'D010',
        'title_kk' => 'Математика педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов математики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1940',
        'training_direction_id' => '117',
        'code' => 'D011',
        'title_kk' => 'Физика педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов физики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1941',
        'training_direction_id' => '117',
        'code' => 'D012',
        'title_kk' => 'Информатика педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов информатики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1942',
        'training_direction_id' => '117',
        'code' => 'D013',
        'title_kk' => 'Химия педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов химии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1943',
        'training_direction_id' => '117',
        'code' => 'D014',
        'title_kk' => 'Биология педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов биологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1944',
        'training_direction_id' => '117',
        'code' => 'D015',
        'title_kk' => 'География педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов географии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1945',
        'training_direction_id' => '118',
        'code' => 'D016',
        'title_kk' => 'Тарих педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов истории',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1946',
        'training_direction_id' => '119',
        'code' => 'D017',
        'title_kk' => 'Қазақ тілі мен әдебиетінің педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов казахского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1947',
        'training_direction_id' => '119',
        'code' => 'D018',
        'title_kk' => 'Орыс тілі мен әдебиетінің педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов русского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1948',
        'training_direction_id' => '119',
        'code' => 'D019',
        'title_kk' => 'Шет тілдері педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов иностранного языка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1949',
        'training_direction_id' => '120',
        'code' => 'D020',
        'title_kk' => 'Әлеуметтік педагогика және өзін-өзі тану бойынша кадрларын даярлау',
        'title_ru' => 'Подготовка кадров по социальной педагогике и самопознанию',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1950',
        'training_direction_id' => '121',
        'code' => 'D021',
        'title_kk' => 'Арнайы педагогика кадрларын даярлау',
        'title_ru' => 'Подготовка кадров по специальной педагогике',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1951',
        'training_direction_id' => '123',
        'code' => 'D022',
        'title_kk' => 'Музыкатану',
        'title_ru' => 'Музыковедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1952',
        'training_direction_id' => '123',
        'code' => 'D023',
        'title_kk' => 'Аспаптық орындаушылық',
        'title_ru' => 'Инструментальное исполнительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1953',
        'training_direction_id' => '123',
        'code' => 'D024',
        'title_kk' => 'Вокалдық өнер',
        'title_ru' => 'Вокальное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1954',
        'training_direction_id' => '123',
        'code' => 'D025',
        'title_kk' => 'Дәстүрлі музыка өнері',
        'title_ru' => 'Традиционное музыкальное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1955',
        'training_direction_id' => '123',
        'code' => 'D026',
        'title_kk' => 'Композиция',
        'title_ru' => 'Композиция',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1956',
        'training_direction_id' => '123',
        'code' => 'D027',
        'title_kk' => 'Дирижирлеу',
        'title_ru' => 'Дирижирование',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1957',
        'training_direction_id' => '123',
        'code' => 'D028',
        'title_kk' => 'Театр режиссурасы',
        'title_ru' => 'Режиссура театра',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1958',
        'training_direction_id' => '123',
        'code' => 'D029',
        'title_kk' => 'Кино режиссурасы',
        'title_ru' => 'Режиссура кино',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1959',
        'training_direction_id' => '123',
        'code' => 'D030',
        'title_kk' => 'Анимация режиссурасы',
        'title_ru' => 'Режиссура анимации',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1960',
        'training_direction_id' => '123',
        'code' => 'D031',
        'title_kk' => 'Хореография режиссурасы',
        'title_ru' => 'Режиссура хореографии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1961',
        'training_direction_id' => '123',
        'code' => 'D032',
        'title_kk' => 'Дыбыс режиссурасы',
        'title_ru' => 'Звукорежиссура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1962',
        'training_direction_id' => '123',
        'code' => 'D033',
        'title_kk' => 'Актер өнері',
        'title_ru' => 'Актерское искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1963',
        'training_direction_id' => '123',
        'code' => 'D034',
        'title_kk' => 'Эстрада өнері',
        'title_ru' => 'Искусство эстрады',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1964',
        'training_direction_id' => '123',
        'code' => 'D035',
        'title_kk' => 'Хореография',
        'title_ru' => 'Хореография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1965',
        'training_direction_id' => '123',
        'code' => 'D036',
        'title_kk' => 'Сценография',
        'title_ru' => 'Сценография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1966',
        'training_direction_id' => '123',
        'code' => 'D037',
        'title_kk' => 'Операторлық өнер',
        'title_ru' => 'Операторское искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1967',
        'training_direction_id' => '123',
        'code' => 'D038',
        'title_kk' => 'Аудиовизуалды құралдар және медиа өндіріс',
        'title_ru' => 'Аудиовизуальные средства и медиа производство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1968',
        'training_direction_id' => '123',
        'code' => 'D039',
        'title_kk' => 'Кескіндеме',
        'title_ru' => 'Живопись',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1969',
        'training_direction_id' => '123',
        'code' => 'D040',
        'title_kk' => 'Графика',
        'title_ru' => 'Графика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1970',
        'training_direction_id' => '123',
        'code' => 'D041',
        'title_kk' => 'Мүсін',
        'title_ru' => 'Скульптура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1971',
        'training_direction_id' => '123',
        'code' => 'D042',
        'title_kk' => 'Сәндік-қолданбалы өнер',
        'title_ru' => 'Декоративное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1972',
        'training_direction_id' => '123',
        'code' => 'D043',
        'title_kk' => 'Сән, интерьер дизайны және өнеркәсіптік дизайн',
        'title_ru' => 'Мода, дизайн интерьера и промышленный дизайн',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1973',
        'training_direction_id' => '123',
        'code' => 'D044',
        'title_kk' => 'Полиграфия',
        'title_ru' => 'Полиграфия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1974',
        'training_direction_id' => '123',
        'code' => 'D045',
        'title_kk' => 'Өнертану',
        'title_ru' => 'Искусствоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1975',
        'training_direction_id' => '123',
        'code' => 'D046',
        'title_kk' => 'Театртану',
        'title_ru' => 'Театроведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1976',
        'training_direction_id' => '123',
        'code' => 'D047',
        'title_kk' => 'Кинотану',
        'title_ru' => 'Киноведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1977',
        'training_direction_id' => '123',
        'code' => 'D048',
        'title_kk' => 'Кинотеледраматургия',
        'title_ru' => 'Кинотеледраматургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1978',
        'training_direction_id' => '123',
        'code' => 'D049',
        'title_kk' => 'Арт-менеджмент',
        'title_ru' => 'Арт-менеджмент',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1979',
        'training_direction_id' => '124',
        'code' => 'D050',
        'title_kk' => 'Философия және әдеп',
        'title_ru' => 'Философия и этика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1980',
        'training_direction_id' => '124',
        'code' => 'D051',
        'title_kk' => 'Дінтану және теология',
        'title_ru' => 'Религия и теология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1981',
        'training_direction_id' => '124',
        'code' => 'D052',
        'title_kk' => 'Исламтану',
        'title_ru' => 'Исламоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1982',
        'training_direction_id' => '124',
        'code' => 'D053',
        'title_kk' => 'Тарих және археология',
        'title_ru' => 'История и археология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1983',
        'training_direction_id' => '124',
        'code' => 'D054',
        'title_kk' => 'Түркітану',
        'title_ru' => 'Тюркология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1984',
        'training_direction_id' => '124',
        'code' => 'D055',
        'title_kk' => 'Шығыстану',
        'title_ru' => 'Востоковедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1985',
        'training_direction_id' => '125',
        'code' => 'D056',
        'title_kk' => 'Аударма ісі, ілеспе аударма',
        'title_ru' => 'Переводческое дело, синхронный перевод',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1986',
        'training_direction_id' => '125',
        'code' => 'D057',
        'title_kk' => 'Лингвистика',
        'title_ru' => 'Лингвистика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1987',
        'training_direction_id' => '125',
        'code' => 'D058',
        'title_kk' => 'Әдебиет',
        'title_ru' => 'Литература',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1988',
        'training_direction_id' => '125',
        'code' => 'D059',
        'title_kk' => 'Шетел филологиясы',
        'title_ru' => 'Иностранная филология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1989',
        'training_direction_id' => '125',
        'code' => 'D060',
        'title_kk' => 'Филология',
        'title_ru' => 'Филология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1990',
        'training_direction_id' => '127',
        'code' => 'D061',
        'title_kk' => 'Әлеуметтану',
        'title_ru' => 'Социология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1991',
        'training_direction_id' => '127',
        'code' => 'D062',
        'title_kk' => 'Мәдениеттану',
        'title_ru' => 'Культурология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1992',
        'training_direction_id' => '127',
        'code' => 'D063',
        'title_kk' => 'Саясаттану және конфликтология',
        'title_ru' => 'Политология и конфликтология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1993',
        'training_direction_id' => '127',
        'code' => 'D064',
        'title_kk' => 'Халықаралық қатынастар',
        'title_ru' => 'Международные отношения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1994',
        'training_direction_id' => '127',
        'code' => 'D065',
        'title_kk' => 'Аймақтану',
        'title_ru' => 'Регионоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1995',
        'training_direction_id' => '127',
        'code' => 'D066',
        'title_kk' => 'Психология',
        'title_ru' => 'Психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1996',
        'training_direction_id' => '128',
        'code' => 'D067',
        'title_kk' => 'Журналистика және репортерлық іс',
        'title_ru' => 'Журналистика и репортерское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1997',
        'training_direction_id' => '128',
        'code' => 'D068',
        'title_kk' => 'Қоғаммен байланыс',
        'title_ru' => 'Связь с общественностью',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1998',
        'training_direction_id' => '128',
        'code' => 'D069',
        'title_kk' => 'Кітапхана ісі, ақпаратты өңдеу және архив ісі',
        'title_ru' => 'Библиотечное дело, обработка информации и архивное дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '1999',
        'training_direction_id' => '130',
        'code' => 'D070',
        'title_kk' => 'Экономика',
        'title_ru' => 'Экономика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2000',
        'training_direction_id' => '130',
        'code' => 'D071',
        'title_kk' => 'Мемлекеттік және жергілікті басқару',
        'title_ru' => 'Государственное и местное управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2001',
        'training_direction_id' => '130',
        'code' => 'D072',
        'title_kk' => 'Менеджмент және басқару',
        'title_ru' => 'Менеджмент и управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2002',
        'training_direction_id' => '130',
        'code' => 'D073',
        'title_kk' => 'Аудит және салық салу',
        'title_ru' => 'Аудит и налогообложение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2003',
        'training_direction_id' => '130',
        'code' => 'D074',
        'title_kk' => 'Қаржы, банктік және сақтандыру ісі',
        'title_ru' => 'Финансы, банковское и страховое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2004',
        'training_direction_id' => '130',
        'code' => 'D075',
        'title_kk' => 'Маркетинг және жарнама',
        'title_ru' => 'Маркетинг и реклама',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2005',
        'training_direction_id' => '130',
        'code' => 'D076',
        'title_kk' => 'Еңбек дағдылары',
        'title_ru' => 'Трудовые навыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2006',
        'training_direction_id' => '130',
        'code' => 'D077',
        'title_kk' => 'Бағалау',
        'title_ru' => 'Оценка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2007',
        'training_direction_id' => '131',
        'code' => 'D078',
        'title_kk' => 'Құқық',
        'title_ru' => 'Право',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2008',
        'training_direction_id' => '131',
        'code' => 'D079',
        'title_kk' => 'Сот сараптамасы',
        'title_ru' => 'Судебная экспертиза',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2009',
        'training_direction_id' => '133',
        'code' => 'D080',
        'title_kk' => 'Биология',
        'title_ru' => 'Биология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2010',
        'training_direction_id' => '133',
        'code' => 'D081',
        'title_kk' => 'Генетика',
        'title_ru' => 'Генетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2011',
        'training_direction_id' => '133',
        'code' => 'D082',
        'title_kk' => 'Биотехнология',
        'title_ru' => 'Биотехнология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2012',
        'training_direction_id' => '133',
        'code' => 'D083',
        'title_kk' => 'Геоботаника',
        'title_ru' => 'Геоботаника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2013',
        'training_direction_id' => '134',
        'code' => 'D084',
        'title_kk' => 'География',
        'title_ru' => 'География',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2014',
        'training_direction_id' => '134',
        'code' => 'D085',
        'title_kk' => 'Гидрология',
        'title_ru' => 'Гидрология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2015',
        'training_direction_id' => '134',
        'code' => 'D086',
        'title_kk' => 'Метеорология',
        'title_ru' => 'Метеорология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2016',
        'training_direction_id' => '134',
        'code' => 'D087',
        'title_kk' => 'Қоршаған ортаны қорғау технологиясы',
        'title_ru' => 'Технология охраны окружающей среды',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2017',
        'training_direction_id' => '134',
        'code' => 'D088',
        'title_kk' => 'Гидрогеология және инженерлік геология',
        'title_ru' => 'Гидрогеология и инженерная геология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2018',
        'training_direction_id' => '135',
        'code' => 'D089',
        'title_kk' => 'Химия',
        'title_ru' => 'Химия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2019',
        'training_direction_id' => '135',
        'code' => 'D090',
        'title_kk' => 'Физика',
        'title_ru' => 'Физика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2020',
        'training_direction_id' => '135',
        'code' => 'D091',
        'title_kk' => 'Сейсмология',
        'title_ru' => 'Сейсмология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2021',
        'training_direction_id' => '136',
        'code' => 'D092',
        'title_kk' => 'Математика және статистика',
        'title_ru' => 'Математика и статистика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2022',
        'training_direction_id' => '136',
        'code' => 'D093',
        'title_kk' => 'Механика',
        'title_ru' => 'Механика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2023',
        'training_direction_id' => '139',
        'code' => 'D094',
        'title_kk' => 'Ақпараттық технологиялар',
        'title_ru' => 'Информационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2024',
        'training_direction_id' => '169',
        'code' => 'D095',
        'title_kk' => 'Ақпараттық қауіпсіздік',
        'title_ru' => 'Информационная безопасность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2025',
        'training_direction_id' => '140',
        'code' => 'D096',
        'title_kk' => 'Коммуникация және коммуникациялық технологиялар',
        'title_ru' => 'Коммуникации и коммуникационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2026',
        'training_direction_id' => '142',
        'code' => 'D097',
        'title_kk' => 'Химиялық инженерия және процесстер',
        'title_ru' => 'Химическая инженерия и процессы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2027',
        'training_direction_id' => '142',
        'code' => 'D098',
        'title_kk' => 'Жылу энергетикасы',
        'title_ru' => 'Теплоэнергетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2028',
        'training_direction_id' => '142',
        'code' => 'D099',
        'title_kk' => 'Энергетика және электр техникасы',
        'title_ru' => 'Энергетика и электротехника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2029',
        'training_direction_id' => '142',
        'code' => 'D100',
        'title_kk' => 'Автоматтандыру және басқару',
        'title_ru' => 'Автоматизация и управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2030',
        'training_direction_id' => '142',
        'code' => 'D101',
        'title_kk' => 'Материалтану және жаңа материалдар технологиясы',
        'title_ru' => 'Материаловедение и технология новых материалов',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2031',
        'training_direction_id' => '142',
        'code' => 'D102',
        'title_kk' => 'Роботты техника және мехатроника',
        'title_ru' => 'Робототехника и мехатроника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2032',
        'training_direction_id' => '142',
        'code' => 'D103',
        'title_kk' => 'Механика және металл өңдеу',
        'title_ru' => 'Механика и металлообработка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2033',
        'training_direction_id' => '142',
        'code' => 'D104',
        'title_kk' => 'Көлік, көліктік техника және технология',
        'title_ru' => 'Транспорт, транспортная техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2034',
        'training_direction_id' => '142',
        'code' => 'D105',
        'title_kk' => 'Авиациалық техника және технологиялар',
        'title_ru' => 'Авиационная техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2035',
        'training_direction_id' => '142',
        'code' => 'D106',
        'title_kk' => 'Ұшатын аппараттар мен қозғалтқыштарды ұшуда пайдалану',
        'title_ru' => 'Летная эксплуатация летательных аппаратов и двигателей',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2036',
        'training_direction_id' => '142',
        'code' => 'D107',
        'title_kk' => 'Ғарыштық инженерия',
        'title_ru' => 'Космическая инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2037',
        'training_direction_id' => '142',
        'code' => 'D108',
        'title_kk' => 'Наноматериалдар және нанотехнологиялар',
        'title_ru' => 'Наноматериалы и нанотехнологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2038',
        'training_direction_id' => '142',
        'code' => 'D109',
        'title_kk' => 'Мұнай және кен геофизикасы',
        'title_ru' => 'Нефтяная и рудная геофизика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2039',
        'training_direction_id' => '142',
        'code' => 'D110',
        'title_kk' => 'Теңіз техникасы және технологиялары',
        'title_ru' => 'Морская техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2040',
        'training_direction_id' => '143',
        'code' => 'D111',
        'title_kk' => 'Тамақ өнімдерін өндіру',
        'title_ru' => 'Производство продуктов питания',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2041',
        'training_direction_id' => '143',
        'code' => 'D112',
        'title_kk' => 'Ағаш өңдеу технологиясы (қолдану саласы бойынша)',
        'title_ru' => 'Технология деревообработки (по областям применения)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2042',
        'training_direction_id' => '143',
        'code' => 'D113',
        'title_kk' => 'Материалдарды қысыммен өңдеу технологиясы',
        'title_ru' => 'Технология обработки материалов давлением',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2043',
        'training_direction_id' => '143',
        'code' => 'D114',
        'title_kk' => 'Тоқыма: киім, аяқ-киім және былғары бұйымдар',
        'title_ru' => 'Текстиль: одежда, обувь и кожаные изделия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2044',
        'training_direction_id' => '143',
        'code' => 'D115',
        'title_kk' => 'Мұнай инженериясы',
        'title_ru' => 'Нефтяная инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2045',
        'training_direction_id' => '143',
        'code' => 'D116',
        'title_kk' => 'Тау-кен инженериясы',
        'title_ru' => 'Горная инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2046',
        'training_direction_id' => '143',
        'code' => 'D117',
        'title_kk' => 'Металлургиялық инженерия',
        'title_ru' => 'Металлургическая инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2047',
        'training_direction_id' => '143',
        'code' => 'D118',
        'title_kk' => 'Пайдалы қазбалар байыту',
        'title_ru' => 'Обогащение полезных ископаемых',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2048',
        'training_direction_id' => '143',
        'code' => 'D119',
        'title_kk' => 'Фармацевтикалық өндіріс технологиясы',
        'title_ru' => 'Технология фармацевтического производства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2049',
        'training_direction_id' => '143',
        'code' => 'D120',
        'title_kk' => 'Маркшейдерлік іс',
        'title_ru' => 'Маркшейдерское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2050',
        'training_direction_id' => '143',
        'code' => 'D121',
        'title_kk' => 'Геология',
        'title_ru' => 'Геология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2051',
        'training_direction_id' => '144',
        'code' => 'D122',
        'title_kk' => 'Сәулет',
        'title_ru' => 'Архитектура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2052',
        'training_direction_id' => '144',
        'code' => 'D123',
        'title_kk' => 'Геодезия',
        'title_ru' => 'Геодезия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2053',
        'training_direction_id' => '144',
        'code' => 'D124',
        'title_kk' => 'Құрылыс',
        'title_ru' => 'Строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2054',
        'training_direction_id' => '144',
        'code' => 'D125',
        'title_kk' => 'Құрылыс материалдарының, бұйымдарының және құрастырылымдарының өндірісі',
        'title_ru' => 'Производство строительных материалов, изделий и конструкций',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2055',
        'training_direction_id' => '144',
        'code' => 'D126',
        'title_kk' => 'Көлік құрылысы',
        'title_ru' => 'Транспортное строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2056',
        'training_direction_id' => '144',
        'code' => 'D127',
        'title_kk' => 'Инженерлік жүйелер мен желілер',
        'title_ru' => 'Инженерные системы и сети',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2057',
        'training_direction_id' => '144',
        'code' => 'D128',
        'title_kk' => 'Жерге орналастыру',
        'title_ru' => 'Землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2058',
        'training_direction_id' => '145',
        'code' => 'D129',
        'title_kk' => 'Гидротехникалық құрылыс',
        'title_ru' => 'Гидротехническое строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2059',
        'training_direction_id' => '146',
        'code' => 'D130',
        'title_kk' => 'Стандарттау, сертификаттау және метрология (сала бойынша)',
        'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2060',
        'training_direction_id' => '148',
        'code' => 'D131',
        'title_kk' => 'Өсімдік шаруашылығы',
        'title_ru' => 'Растениеводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2061',
        'training_direction_id' => '149',
        'code' => 'D132',
        'title_kk' => 'Мал шаруашылығы',
        'title_ru' => 'Животноводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2062',
        'training_direction_id' => '150',
        'code' => 'D133',
        'title_kk' => 'Орман шаруашылығы',
        'title_ru' => 'Лесное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2063',
        'training_direction_id' => '151',
        'code' => 'D134',
        'title_kk' => 'Балық шаруашылығы',
        'title_ru' => 'Рыбное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2064',
        'training_direction_id' => '172',
        'code' => 'D135',
        'title_kk' => 'Ауыл шаруашылығын энергиямен қамтамасыз ету',
        'title_ru' => 'Энергообеспечение сельского хозяйства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2065',
        'training_direction_id' => '172',
        'code' => 'D136',
        'title_kk' => 'Автокөлік құралдары',
        'title_ru' => 'Автотранспортные средства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2066',
        'training_direction_id' => '153',
        'code' => 'D137',
        'title_kk' => 'Су ресурстары және суды пайдалану',
        'title_ru' => 'Водные ресурсы и водопользования',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2067',
        'training_direction_id' => '155',
        'code' => 'D138',
        'title_kk' => 'Ветеринария',
        'title_ru' => 'Ветеринария',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2068',
        'training_direction_id' => '157',
        'code' => 'D139',
        'title_kk' => 'Қоғамдық денсаулық сақтау',
        'title_ru' => 'Общественное здравоохранение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2069',
        'training_direction_id' => '157',
        'code' => 'D140',
        'title_kk' => 'Фармация',
        'title_ru' => 'Фармация',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2070',
        'training_direction_id' => '157',
        'code' => 'D141',
        'title_kk' => 'Медицина',
        'title_ru' => 'Медицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2071',
        'training_direction_id' => '158',
        'code' => 'D142',
        'title_kk' => 'Әлеуметтік жұмыс',
        'title_ru' => 'Социальная работа',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2072',
        'training_direction_id' => '160',
        'code' => 'D143',
        'title_kk' => 'Туризм',
        'title_ru' => 'Туризм',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2073',
        'training_direction_id' => '160',
        'code' => 'D144',
        'title_kk' => 'Бос уақыт',
        'title_ru' => 'Досуг',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2074',
        'training_direction_id' => '160',
        'code' => 'D145',
        'title_kk' => 'Мейрамхана ісі және мейманхана бизнесі',
        'title_ru' => 'Ресторанное дело и гостиничный бизнес',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2075',
        'training_direction_id' => '161',
        'code' => 'D146',
        'title_kk' => 'Санитарлық-профилактикалық іс-шаралар',
        'title_ru' => 'Санитарно-профилактические мероприятия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2076',
        'training_direction_id' => '162',
        'code' => 'D147',
        'title_kk' => 'Көлік қызметі',
        'title_ru' => 'Транспортные услуги',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2077',
        'training_direction_id' => '162',
        'code' => 'D148',
        'title_kk' => 'Логистика (сала бойынша)',
        'title_ru' => 'Логистика по отраслям',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2078',
        'training_direction_id' => '166',
        'code' => 'D149',
        'title_kk' => 'Құқық қорғау қызметі',
        'title_ru' => 'Правоохранительная деятельность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2079',
        'training_direction_id' => '166',
        'code' => 'D150',
        'title_kk' => 'Өрт қауіпсіздігі',
        'title_ru' => 'Пожарная безопасность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2080',
        'training_direction_id' => '57',
        'code' => 'M001',
        'title_kk' => 'Педагогика және психология',
        'title_ru' => 'Педагогика и психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2081',
        'training_direction_id' => '58',
        'code' => 'M002',
        'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
        'title_ru' => 'Дошкольное обучение и воспитание',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2082',
        'training_direction_id' => '59',
        'code' => 'M003',
        'title_kk' => 'Пәнсіз мамандандырылған педагогтерді даярлау',
        'title_ru' => 'Подготовка педагогов без предметной специализации',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2083',
        'training_direction_id' => '60',
        'code' => 'M004',
        'title_kk' => 'Бастапқы әскери дайындық педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов начальной военной подготовки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2084',
        'training_direction_id' => '60',
        'code' => 'M005',
        'title_kk' => 'Дене шынықтыру педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов физической культуры',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2085',
        'training_direction_id' => '60',
        'code' => 'M006',
        'title_kk' => 'Музыка педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов музыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2086',
        'training_direction_id' => '60',
        'code' => 'M007',
        'title_kk' => 'Көркем еңбек, графика және жобалау педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов художественного труда, графики и проектирования',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2087',
        'training_direction_id' => '60',
        'code' => 'M008',
        'title_kk' => 'Кәсіптік оқыту педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов профессионального обучения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2088',
        'training_direction_id' => '60',
        'code' => 'M009',
        'title_kk' => 'Құқық және экономика негіздері',
        'title_ru' => 'Основы права и экономики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2089',
        'training_direction_id' => '61',
        'code' => 'M010',
        'title_kk' => 'Математика педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов математики',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2090',
        'training_direction_id' => '61',
        'code' => 'M011',
        'title_kk' => 'Физика педагогтерін даярлау (қазақ, орыс, ағылшын тілі)',
        'title_ru' => 'Подготовка педагогов физики (казахский, русский, английский языки)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2091',
        'training_direction_id' => '61',
        'code' => 'M012',
        'title_kk' => 'Информатика педагогтерін даярлау (қазақ, орыс, ағылшын тілі)',
        'title_ru' => 'Подготовка педагогов информатики (казахский, русский, английский языки)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2092',
        'training_direction_id' => '61',
        'code' => 'M013',
        'title_kk' => 'Химия педагогтерін даярлау (қазақ, орыс, ағылшын тілі)',
        'title_ru' => 'Подготовка педагогов химии (казахский, русский, английский языки)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2093',
        'training_direction_id' => '61',
        'code' => 'M014',
        'title_kk' => 'Биология педагогтерін даярлау (қазақ, орыс, ағылшын тілі)',
        'title_ru' => 'Подготовка педагогов биологии (казахский, русский, английский языки)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2094',
        'training_direction_id' => '61',
        'code' => 'M015',
        'title_kk' => 'География педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов географии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2095',
        'training_direction_id' => '62',
        'code' => 'M016',
        'title_kk' => 'Тарих педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов истории',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2096',
        'training_direction_id' => '63',
        'code' => 'M017',
        'title_kk' => 'Қазақ тілі мен әдебиетінің педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов казахского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2097',
        'training_direction_id' => '63',
        'code' => 'M018',
        'title_kk' => 'Орыс тілі мен әдебиетінің педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов русского языка и литературы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2098',
        'training_direction_id' => '63',
        'code' => 'M019',
        'title_kk' => 'Шет тілдері педагогтерін даярлау',
        'title_ru' => 'Подготовка педагогов иностранного языка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2099',
        'training_direction_id' => '64',
        'code' => 'M020',
        'title_kk' => 'Әлеуметтік педагогика және өзін-өзі тану бойынша кадрларын даярлау',
        'title_ru' => 'Подготовка кадров по социальной педагогике и самопознанию',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2100',
        'training_direction_id' => '65',
        'code' => 'M021',
        'title_kk' => 'Арнайы педагогика кадрларын даярлау',
        'title_ru' => 'Подготовка кадров по специальной педагогике',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2101',
        'training_direction_id' => '67',
        'code' => 'M022',
        'title_kk' => 'Музыкатану',
        'title_ru' => 'Музыковедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2102',
        'training_direction_id' => '67',
        'code' => 'M023',
        'title_kk' => 'Аспаптық орындаушылық',
        'title_ru' => 'Инструментальное исполнительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2103',
        'training_direction_id' => '67',
        'code' => 'M024',
        'title_kk' => 'Вокалдық өнер',
        'title_ru' => 'Вокальное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2104',
        'training_direction_id' => '67',
        'code' => 'M025',
        'title_kk' => 'Дәстүрлі музыка өнері',
        'title_ru' => 'Традиционное музыкальное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2105',
        'training_direction_id' => '67',
        'code' => 'M026',
        'title_kk' => 'Композиция',
        'title_ru' => 'Композиция',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2106',
        'training_direction_id' => '67',
        'code' => 'M027',
        'title_kk' => 'Дирижирлеу',
        'title_ru' => 'Дирижирование',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2107',
        'training_direction_id' => '67',
        'code' => 'M028',
        'title_kk' => 'Театр режиссурасы',
        'title_ru' => 'Режиссура театра',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2108',
        'training_direction_id' => '67',
        'code' => 'M029',
        'title_kk' => 'Кино режиссурасы',
        'title_ru' => 'Режиссура кино',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2109',
        'training_direction_id' => '67',
        'code' => 'M030',
        'title_kk' => 'Анимация режиссурасы',
        'title_ru' => 'Режиссура анимации',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2110',
        'training_direction_id' => '67',
        'code' => 'M031',
        'title_kk' => 'Хореография режиссурасы',
        'title_ru' => 'Режиссура хореографии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2111',
        'training_direction_id' => '67',
        'code' => 'M032',
        'title_kk' => 'Дыбыс режиссурасы',
        'title_ru' => 'Звукорежиссура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2112',
        'training_direction_id' => '67',
        'code' => 'M033',
        'title_kk' => 'Актер өнері',
        'title_ru' => 'Актерское искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2113',
        'training_direction_id' => '67',
        'code' => 'M034',
        'title_kk' => 'Эстрада өнері',
        'title_ru' => 'Искусство эстрады',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2114',
        'training_direction_id' => '67',
        'code' => 'M035',
        'title_kk' => 'Хореография',
        'title_ru' => 'Хореография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2115',
        'training_direction_id' => '67',
        'code' => 'M036',
        'title_kk' => 'Сценография',
        'title_ru' => 'Сценография',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2116',
        'training_direction_id' => '67',
        'code' => 'M037',
        'title_kk' => 'Операторлық өнер',
        'title_ru' => 'Операторское искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2117',
        'training_direction_id' => '67',
        'code' => 'M038',
        'title_kk' => 'Аудиовизуалды құралдар және медиа өндіріс',
        'title_ru' => 'Аудиовизуальные средства и медиа производство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2118',
        'training_direction_id' => '67',
        'code' => 'M039',
        'title_kk' => 'Кескіндеме',
        'title_ru' => 'Живопись',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2119',
        'training_direction_id' => '67',
        'code' => 'M040',
        'title_kk' => 'Графика',
        'title_ru' => 'Графика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2120',
        'training_direction_id' => '67',
        'code' => 'M041',
        'title_kk' => 'Мүсін',
        'title_ru' => 'Скульптура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2121',
        'training_direction_id' => '67',
        'code' => 'M042',
        'title_kk' => 'Сәндік-қолданбалы өнер',
        'title_ru' => 'Декоративное искусство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2122',
        'training_direction_id' => '67',
        'code' => 'M043',
        'title_kk' => 'Сән, интерьер дизайны және өнеркәсіптік дизайн',
        'title_ru' => 'Мода, дизайн интерьера и промышленный дизайн',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2123',
        'training_direction_id' => '67',
        'code' => 'M044',
        'title_kk' => 'Полиграфия',
        'title_ru' => 'Полиграфия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2124',
        'training_direction_id' => '67',
        'code' => 'M045',
        'title_kk' => 'Өнертану',
        'title_ru' => 'Искусствоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2125',
        'training_direction_id' => '67',
        'code' => 'M046',
        'title_kk' => 'Театртану',
        'title_ru' => 'Театроведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2126',
        'training_direction_id' => '67',
        'code' => 'M047',
        'title_kk' => 'Кинотану',
        'title_ru' => 'Киноведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2127',
        'training_direction_id' => '67',
        'code' => 'M048',
        'title_kk' => 'Кинотеледраматургия',
        'title_ru' => 'Кинотеледраматургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2128',
        'training_direction_id' => '67',
        'code' => 'M049',
        'title_kk' => 'Арт-менеджмент',
        'title_ru' => 'Арт-менеджмент',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2129',
        'training_direction_id' => '68',
        'code' => 'M050',
        'title_kk' => 'Философия және әдеп',
        'title_ru' => 'Философия и этика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2130',
        'training_direction_id' => '68',
        'code' => 'M051',
        'title_kk' => 'Дінтану және теология',
        'title_ru' => 'Религия и теология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2131',
        'training_direction_id' => '68',
        'code' => 'M052',
        'title_kk' => 'Исламтану',
        'title_ru' => 'Исламоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2132',
        'training_direction_id' => '68',
        'code' => 'M053',
        'title_kk' => 'Тарих және археология',
        'title_ru' => 'История и археология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2133',
        'training_direction_id' => '68',
        'code' => 'M054',
        'title_kk' => 'Түркітану',
        'title_ru' => 'Тюркология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2134',
        'training_direction_id' => '68',
        'code' => 'M055',
        'title_kk' => 'Шығыстану',
        'title_ru' => 'Востоковедение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2135',
        'training_direction_id' => '69',
        'code' => 'M056',
        'title_kk' => 'Аударма ісі, ілеспе аударма',
        'title_ru' => 'Переводческое дело, синхронный перевод',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2136',
        'training_direction_id' => '69',
        'code' => 'M057',
        'title_kk' => 'Лингвистика',
        'title_ru' => 'Лингвистика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2137',
        'training_direction_id' => '69',
        'code' => 'M058',
        'title_kk' => 'Әдебиет',
        'title_ru' => 'Литература',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2138',
        'training_direction_id' => '69',
        'code' => 'M059',
        'title_kk' => 'Шетел филологиясы',
        'title_ru' => 'Иностранная филология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2139',
        'training_direction_id' => '69',
        'code' => 'M060',
        'title_kk' => 'Филология',
        'title_ru' => 'Филология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2140',
        'training_direction_id' => '71',
        'code' => 'M061',
        'title_kk' => 'Әлеуметтану',
        'title_ru' => 'Социология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2141',
        'training_direction_id' => '71',
        'code' => 'M062',
        'title_kk' => 'Мәдениеттану',
        'title_ru' => 'Культурология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2142',
        'training_direction_id' => '71',
        'code' => 'M063',
        'title_kk' => 'Саясаттану және конфликтология',
        'title_ru' => 'Политология и конфликтология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2143',
        'training_direction_id' => '71',
        'code' => 'M064',
        'title_kk' => 'Халықаралық қатынастар',
        'title_ru' => 'Международные отношения',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2144',
        'training_direction_id' => '71',
        'code' => 'M065',
        'title_kk' => 'Аймақтану',
        'title_ru' => 'Регионоведение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2145',
        'training_direction_id' => '71',
        'code' => 'M066',
        'title_kk' => 'Психология',
        'title_ru' => 'Психология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2146',
        'training_direction_id' => '72',
        'code' => 'M067',
        'title_kk' => 'Журналистика және репортерлық іс',
        'title_ru' => 'Журналистика и репортерское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2147',
        'training_direction_id' => '72',
        'code' => 'M068',
        'title_kk' => 'Қоғаммен байланыс',
        'title_ru' => 'Связь с общественностью',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2148',
        'training_direction_id' => '72',
        'code' => 'M069',
        'title_kk' => 'Кітапхана ісі, ақпаратты өңдеу және архив ісі',
        'title_ru' => 'Библиотечное дело, обработка информации и архивное дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2149',
        'training_direction_id' => '74',
        'code' => 'M070',
        'title_kk' => 'Экономика',
        'title_ru' => 'Экономика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2150',
        'training_direction_id' => '74',
        'code' => 'M071',
        'title_kk' => 'Мемлекеттік және жергілікті басқару',
        'title_ru' => 'Государственное и местное управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2151',
        'training_direction_id' => '74',
        'code' => 'M072',
        'title_kk' => 'Менеджмент және басқару',
        'title_ru' => 'Менеджмент и управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2152',
        'training_direction_id' => '74',
        'code' => 'M073',
        'title_kk' => 'Аудит және салық салу',
        'title_ru' => 'Аудит и налогообложение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2153',
        'training_direction_id' => '74',
        'code' => 'M074',
        'title_kk' => 'Қаржы, банктік және сақтандыру ісі',
        'title_ru' => 'Финансы, банковское и страховое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2154',
        'training_direction_id' => '74',
        'code' => 'M075',
        'title_kk' => 'Маркетинг және жарнама',
        'title_ru' => 'Маркетинг и реклама',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2155',
        'training_direction_id' => '74',
        'code' => 'M076',
        'title_kk' => 'Еңбек дағдылары',
        'title_ru' => 'Трудовые навыки',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2156',
        'training_direction_id' => '74',
        'code' => 'M077',
        'title_kk' => 'Бағалау',
        'title_ru' => 'Оценка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2157',
        'training_direction_id' => '75',
        'code' => 'M078',
        'title_kk' => 'Құқық',
        'title_ru' => 'Право',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2158',
        'training_direction_id' => '75',
        'code' => 'M079',
        'title_kk' => 'Сот сараптамасы',
        'title_ru' => 'Судебная экспертиза',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2159',
        'training_direction_id' => '77',
        'code' => 'M080',
        'title_kk' => 'Биология',
        'title_ru' => 'Биология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2160',
        'training_direction_id' => '77',
        'code' => 'M081',
        'title_kk' => 'Генетика',
        'title_ru' => 'Генетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2161',
        'training_direction_id' => '77',
        'code' => 'M082',
        'title_kk' => 'Биотехнология',
        'title_ru' => 'Биотехнология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2162',
        'training_direction_id' => '77',
        'code' => 'M083',
        'title_kk' => 'Геоботаника',
        'title_ru' => 'Геоботаника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2163',
        'training_direction_id' => '78',
        'code' => 'M084',
        'title_kk' => 'География',
        'title_ru' => 'География',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2164',
        'training_direction_id' => '78',
        'code' => 'M085',
        'title_kk' => 'Гидрология',
        'title_ru' => 'Гидрология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2165',
        'training_direction_id' => '78',
        'code' => 'M086',
        'title_kk' => 'Метеорология',
        'title_ru' => 'Метеорология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2166',
        'training_direction_id' => '78',
        'code' => 'M087',
        'title_kk' => 'Қоршаған ортаны қорғау технологиясы',
        'title_ru' => 'Технология охраны окружающей среды',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2167',
        'training_direction_id' => '78',
        'code' => 'M088',
        'title_kk' => 'Гидрогеология және инженерлік геология',
        'title_ru' => 'Гидрогеология и инженерная геология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2168',
        'training_direction_id' => '79',
        'code' => 'M089',
        'title_kk' => 'Химия',
        'title_ru' => 'Химия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2169',
        'training_direction_id' => '79',
        'code' => 'M090',
        'title_kk' => 'Физика',
        'title_ru' => 'Физика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2170',
        'training_direction_id' => '79',
        'code' => 'M091',
        'title_kk' => 'Сейсмология',
        'title_ru' => 'Сейсмология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2171',
        'training_direction_id' => '80',
        'code' => 'M092',
        'title_kk' => 'Математика және статистика',
        'title_ru' => 'Математика и статистика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2172',
        'training_direction_id' => '80',
        'code' => 'M093',
        'title_kk' => 'Механика',
        'title_ru' => 'Механика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2173',
        'training_direction_id' => '83',
        'code' => 'M094',
        'title_kk' => 'Ақпараттық технологиялар',
        'title_ru' => 'Информационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2174',
        'training_direction_id' => '168',
        'code' => 'M095',
        'title_kk' => 'Ақпараттық қауіпсіздік',
        'title_ru' => 'Информационная безопасность',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2175',
        'training_direction_id' => '84',
        'code' => 'M096',
        'title_kk' => 'Коммуникация және коммуникациялық технологиялар',
        'title_ru' => 'Коммуникации и коммуникационные технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2176',
        'training_direction_id' => '86',
        'code' => 'M097',
        'title_kk' => 'Химиялық инженерия және процесстер',
        'title_ru' => 'Химическая инженерия и процессы',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2177',
        'training_direction_id' => '86',
        'code' => 'M098',
        'title_kk' => 'Жылу энергетикасы',
        'title_ru' => 'Теплоэнергетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2178',
        'training_direction_id' => '86',
        'code' => 'M099',
        'title_kk' => 'Энергетика және электр техникасы',
        'title_ru' => 'Энергетика и электротехника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2179',
        'training_direction_id' => '86',
        'code' => 'M100',
        'title_kk' => 'Автоматтандыру және басқару',
        'title_ru' => 'Автоматизация и управление',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2180',
        'training_direction_id' => '86',
        'code' => 'M101',
        'title_kk' => 'Материалтану және жаңа материалдар технологиясы',
        'title_ru' => 'Материаловедение и технология новых материалов',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2181',
        'training_direction_id' => '86',
        'code' => 'M102',
        'title_kk' => 'Роботты техника және мехатроника',
        'title_ru' => 'Робототехника и мехатроника',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2182',
        'training_direction_id' => '86',
        'code' => 'M103',
        'title_kk' => 'Механика және металл өңдеу',
        'title_ru' => 'Механика и металлообработка',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2183',
        'training_direction_id' => '86',
        'code' => 'M104',
        'title_kk' => 'Көлік, көліктік техника және технология',
        'title_ru' => 'Транспорт, транспортная техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2184',
        'training_direction_id' => '86',
        'code' => 'M105',
        'title_kk' => 'Авиациалық техника және технологиялар',
        'title_ru' => 'Авиационная техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2185',
        'training_direction_id' => '86',
        'code' => 'M106',
        'title_kk' => 'Ұшатын аппараттар мен қозғалтқыштарды ұшуда пайдалану',
        'title_ru' => 'Летная эксплуатация летательных аппаратов и двигателей',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2186',
        'training_direction_id' => '86',
        'code' => 'M107',
        'title_kk' => 'Ғарыштық инженерия',
        'title_ru' => 'Космическая инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2187',
        'training_direction_id' => '86',
        'code' => 'M108',
        'title_kk' => 'Наноматериалдар және нанотехнологиялар (сала бойынша)',
        'title_ru' => 'Наноматериалы и нанотехнологии (по областям применения)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2188',
        'training_direction_id' => '86',
        'code' => 'M109',
        'title_kk' => 'Мұнай және кен геофизикасы',
        'title_ru' => 'Нефтяная и рудная геофизика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2189',
        'training_direction_id' => '86',
        'code' => 'M110',
        'title_kk' => 'Теңіз техникасы және технологиялары',
        'title_ru' => 'Морская техника и технологии',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2190',
        'training_direction_id' => '87',
        'code' => 'M111',
        'title_kk' => 'Тамақ өнімдерін өндіру',
        'title_ru' => 'Производство продуктов питания',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2191',
        'training_direction_id' => '87',
        'code' => 'M112',
        'title_kk' => 'Ағаш өңдеу және ағаштан жасалған бұйымдар технологиясы (қолдану саласы бойынша)',
        'title_ru' => 'Технология деревообработки и изделий из дерева (по областям применения)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2192',
        'training_direction_id' => '87',
        'code' => 'M113',
        'title_kk' => 'Материалдарды қысыммен өңдеу технологиясы',
        'title_ru' => 'Технология обработки материалов давлением',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2193',
        'training_direction_id' => '87',
        'code' => 'M114',
        'title_kk' => 'Тоқыма: киім, аяқ-киім және былғары бұйымдар',
        'title_ru' => 'Текстиль: одежда, обувь и кожаные изделия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2194',
        'training_direction_id' => '87',
        'code' => 'M115',
        'title_kk' => 'Мұнай инженериясы',
        'title_ru' => 'Нефтяная инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2195',
        'training_direction_id' => '87',
        'code' => 'M116',
        'title_kk' => 'Тау-кен инженериясы',
        'title_ru' => 'Горная инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2196',
        'training_direction_id' => '87',
        'code' => 'M117',
        'title_kk' => 'Металлургиялық инженерия',
        'title_ru' => 'Металлургическая инженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2197',
        'training_direction_id' => '87',
        'code' => 'M118',
        'title_kk' => 'Пайдалы қазбалар байыту',
        'title_ru' => 'Обогащение полезных ископаемых',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2198',
        'training_direction_id' => '87',
        'code' => 'M119',
        'title_kk' => 'Фармацевтикалық өндіріс технологиясы',
        'title_ru' => 'Технология фармацевтического производства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2199',
        'training_direction_id' => '87',
        'code' => 'M120',
        'title_kk' => 'Маркшейдерлік іс',
        'title_ru' => 'Маркшейдерское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2200',
        'training_direction_id' => '87',
        'code' => 'M121',
        'title_kk' => 'Геология',
        'title_ru' => 'Геология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2201',
        'training_direction_id' => '88',
        'code' => 'M122',
        'title_kk' => 'Сәулет',
        'title_ru' => 'Архитектура',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2202',
        'training_direction_id' => '88',
        'code' => 'M123',
        'title_kk' => 'Геодезия',
        'title_ru' => 'Геодезия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2203',
        'training_direction_id' => '88',
        'code' => 'M124',
        'title_kk' => 'Құрылыс',
        'title_ru' => 'Строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2204',
        'training_direction_id' => '88',
        'code' => 'M125',
        'title_kk' => 'Құрылыс материалдарының, бұйымдарының және құрастырылымдарының өндірісі',
        'title_ru' => 'Производство строительных материалов, изделий и конструкций',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2205',
        'training_direction_id' => '88',
        'code' => 'M126',
        'title_kk' => 'Көлік құрылысы',
        'title_ru' => 'Транспортное строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2206',
        'training_direction_id' => '88',
        'code' => 'M127',
        'title_kk' => 'Инженерлік жүйелер мен желілер',
        'title_ru' => 'Инженерные системы и сети',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2207',
        'training_direction_id' => '88',
        'code' => 'M128',
        'title_kk' => 'Жерге орналастыру',
        'title_ru' => 'Землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2208',
        'training_direction_id' => '89',
        'code' => 'M129',
        'title_kk' => 'Гидротехникалық құрылыс',
        'title_ru' => 'Гидротехническое строительство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2209',
        'training_direction_id' => '90',
        'code' => 'M130',
        'title_kk' => 'Стандарттау, сертификаттау және метрология (сала бойынша)',
        'title_ru' => 'Стандартизация, сертификация и метрология (по отраслям)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2210',
        'training_direction_id' => '92',
        'code' => 'M131',
        'title_kk' => 'Өсімдік шаруашылығы',
        'title_ru' => 'Растениеводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2211',
        'training_direction_id' => '93',
        'code' => 'M132',
        'title_kk' => 'Мал шаруашылығы',
        'title_ru' => 'Животноводство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2212',
        'training_direction_id' => '94',
        'code' => 'M133',
        'title_kk' => 'Орман шаруашылығы',
        'title_ru' => 'Лесное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2213',
        'training_direction_id' => '95',
        'code' => 'M134',
        'title_kk' => 'Балық шаруашылығы',
        'title_ru' => 'Рыбное хозяйство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2214',
        'training_direction_id' => '171',
        'code' => 'M135',
        'title_kk' => 'Ауыл шаруашылығын энергиямен қамтамасыз ету',
        'title_ru' => 'Энергообеспечение сельского хозяйства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2215',
        'training_direction_id' => '171',
        'code' => 'M136',
        'title_kk' => 'Автокөлік құралдары',
        'title_ru' => 'Автотранспортные средства',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2216',
        'training_direction_id' => '97',
        'code' => 'M137',
        'title_kk' => 'Су ресурстары және суды пайдалану',
        'title_ru' => 'Водные ресурсы и водопользования',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2217',
        'training_direction_id' => '99',
        'code' => 'M138',
        'title_kk' => 'Ветеринария',
        'title_ru' => 'Ветеринария',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2218',
        'training_direction_id' => '101',
        'code' => 'M139',
        'title_kk' => 'Денсаулық сақтау саласындағы менеджмент',
        'title_ru' => 'Менеджмент в здравоохранении',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2219',
        'training_direction_id' => '101',
        'code' => 'M140',
        'title_kk' => 'Қоғамдық денсаулық сақтау',
        'title_ru' => 'Общественное здравоохранение',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2220',
        'training_direction_id' => '101',
        'code' => 'M141',
        'title_kk' => 'Мейірбике ісі',
        'title_ru' => 'Сестринское дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2221',
        'training_direction_id' => '101',
        'code' => 'M142',
        'title_kk' => 'Фармация',
        'title_ru' => 'Фармация',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2222',
        'training_direction_id' => '101',
        'code' => 'M143',
        'title_kk' => 'Биомедицина',
        'title_ru' => 'Биомедицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2223',
        'training_direction_id' => '101',
        'code' => 'M144',
        'title_kk' => 'Медицина',
        'title_ru' => 'Медицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2224',
        'training_direction_id' => '101',
        'code' => 'M145',
        'title_kk' => 'Медициналық-профилактикалық іс',
        'title_ru' => 'Медико-профилактическое дело',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2225',
        'training_direction_id' => '102',
        'code' => 'M146',
        'title_kk' => 'Әлеуметтік жұмыс',
        'title_ru' => 'Социальная работа',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2226',
        'training_direction_id' => '104',
        'code' => 'M147',
        'title_kk' => 'Туризм',
        'title_ru' => 'Туризм',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2227',
        'training_direction_id' => '104',
        'code' => 'M148',
        'title_kk' => 'Бос уақыт',
        'title_ru' => 'Досуг',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2228',
        'training_direction_id' => '104',
        'code' => 'M149',
        'title_kk' => 'Мейрамхана ісі және мейманхана бизнесі',
        'title_ru' => 'Ресторанное дело и гостиничный бизнес',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2229',
        'training_direction_id' => '105',
        'code' => 'M150',
        'title_kk' => 'Санитарлық-профилактикалық іс-шаралар',
        'title_ru' => 'Санитарно-профилактические мероприятия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2230',
        'training_direction_id' => '106',
        'code' => 'M151',
        'title_kk' => 'Көлік қызметі',
        'title_ru' => 'Транспортные услуги',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2231',
        'training_direction_id' => '106',
        'code' => 'M152',
        'title_kk' => 'Логистика (сала бойынша)',
        'title_ru' => 'Логистика (по отраслям)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2232',
        'training_direction_id' => '170',
        'code' => 'B183',
        'title_kk' => 'Агроинженерия',
        'title_ru' => 'Агроинженерия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2237',
        'training_direction_id' => '96',
        'code' => 'M236',
        'title_kk' => 'Жерге орналастыру',
        'title_ru' => 'Землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2238',
        'training_direction_id' => '152',
        'code' => 'D236',
        'title_kk' => 'Жерге орналастыру',
        'title_ru' => 'Землеустройство',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2258',
        'training_direction_id' => '112',
        'code' => 'R001',
        'title_kk' => 'Кардиология, соның ішінде балалар кардиологиясы',
        'title_ru' => 'Кардиология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2259',
        'training_direction_id' => '112',
        'code' => 'R002',
        'title_kk' => 'Ревматология, соның ішінде балалар ревматологиясы',
        'title_ru' => 'Ревматология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2260',
        'training_direction_id' => '112',
        'code' => 'R003',
        'title_kk' => 'Аллергология және иммунология, соның ішінде балалар аллергологиясы және иммунологиясы',
        'title_ru' => 'Аллергология и иммунология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2261',
        'training_direction_id' => '112',
        'code' => 'R004',
        'title_kk' => 'Гастроэнтерология, соның ішінде балалар гастроэнтерологиясы',
        'title_ru' => 'Гастроэнтерология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2262',
        'training_direction_id' => '112',
        'code' => 'R005',
        'title_kk' => 'Гематология (ересектердің)',
        'title_ru' => 'Гематология (взрослая)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2263',
        'training_direction_id' => '112',
        'code' => 'R006',
        'title_kk' => 'Балалар онкологиясы және гематологиясы',
        'title_ru' => 'Онкология и гематология детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2264',
        'training_direction_id' => '112',
        'code' => 'R007',
        'title_kk' => 'Пульмонология, соның ішінде балалар пульмонологиясы',
        'title_ru' => 'Пульмонология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2265',
        'training_direction_id' => '112',
        'code' => 'R008',
        'title_kk' => 'Эндокринология, соның ішінде балалар эндокринологиясы',
        'title_ru' => 'Эндокринология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2266',
        'training_direction_id' => '112',
        'code' => 'R009',
        'title_kk' => 'Нефрология, соның ішінде балалар нефрологиясы',
        'title_ru' => 'Нефрология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2267',
        'training_direction_id' => '112',
        'code' => 'R010',
        'title_kk' => 'Кәсіби дерттер',
        'title_ru' => 'Профессиональная патология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2268',
        'training_direction_id' => '112',
        'code' => 'R011',
        'title_kk' => 'Жұқпалы аурулар, соның ішінде балалар жұқпалы аурулары',
        'title_ru' => 'Инфекционные болезни, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2269',
        'training_direction_id' => '112',
        'code' => 'R012',
        'title_kk' => 'Дерматовенерология, соның ішінде балалар дерматовенерологиясы',
        'title_ru' => 'Дерматовенерология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2270',
        'training_direction_id' => '112',
        'code' => 'R013',
        'title_kk' => 'Психиатрия, соның ішінде балалар психиатриясы',
        'title_ru' => 'Психиатрия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2271',
        'training_direction_id' => '112',
        'code' => 'R014',
        'title_kk' => 'Сәулелі диагностика',
        'title_ru' => 'Лучевая диагностика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2272',
        'training_direction_id' => '112',
        'code' => 'R015',
        'title_kk' => 'Сәулелі терапия',
        'title_ru' => 'Лучевая терапия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2273',
        'training_direction_id' => '112',
        'code' => 'R016',
        'title_kk' => 'Спорттық медицина',
        'title_ru' => 'Спортивная медицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2274',
        'training_direction_id' => '112',
        'code' => 'R017',
        'title_kk' => 'Анестезиология және реаниматология, соның ішінде балалар анестезиологиясы және реаниматологисы',
        'title_ru' => 'Анестезиология и реаниматология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2275',
        'training_direction_id' => '112',
        'code' => 'R018',
        'title_kk' => 'Кардиохирургия, соның ішінде балалар кардиохирургиясы',
        'title_ru' => 'Кардиохирургия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2276',
        'training_direction_id' => '112',
        'code' => 'R019',
        'title_kk' => 'Ангиохирургия, соның ішінде балалар ангиохирургиясы',
        'title_ru' => 'Ангиохирургия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2277',
        'training_direction_id' => '112',
        'code' => 'R020',
        'title_kk' => 'Нейрохирургия, соның ішінде балалар нейрохирургиясы',
        'title_ru' => 'Нейрохирургия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2278',
        'training_direction_id' => '112',
        'code' => 'R021',
        'title_kk' => 'Жақсүйек-бет хирургиясы, соның ішінде балалар жақсүйек-бет хирургиясы',
        'title_ru' => 'Челюстно-лицевая хирургия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2279',
        'training_direction_id' => '112',
        'code' => 'R022',
        'title_kk' => 'Пластикалық хирургия',
        'title_ru' => 'Пластическая хирургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2280',
        'training_direction_id' => '112',
        'code' => 'R023',
        'title_kk' => 'Балалар хирургиясы',
        'title_ru' => 'Детская хирургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2281',
        'training_direction_id' => '112',
        'code' => 'R024',
        'title_kk' => 'Онкология (ересектердің)',
        'title_ru' => 'Онкология (взрослая)',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2282',
        'training_direction_id' => '112',
        'code' => 'R025',
        'title_kk' => 'Травматология-ортопедия, соның ішінде балалар травматология-ортопедиясы',
        'title_ru' => 'Травматология-ортопедия, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2283',
        'training_direction_id' => '112',
        'code' => 'R026',
        'title_kk' => 'Урология және андрология, соның ішінде балалар урологиясы және андрологиясы',
        'title_ru' => 'Урология и андрология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2284',
        'training_direction_id' => '112',
        'code' => 'R027',
        'title_kk' => 'Офтальмология, соның ішінде балалар офтальмологиясы',
        'title_ru' => 'Офтальмология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2285',
        'training_direction_id' => '112',
        'code' => 'R028',
        'title_kk' => 'Оториноларингология, соның ішінде балалар оториноларингологиясы',
        'title_ru' => 'Оториноларингология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2286',
        'training_direction_id' => '112',
        'code' => 'R029',
        'title_kk' => 'Токсикология, соның ішінде балалар токсикологиясы',
        'title_ru' => 'Токсикология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2287',
        'training_direction_id' => '112',
        'code' => 'R030',
        'title_kk' => 'Педиатрия',
        'title_ru' => 'Педиатрия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2288',
        'training_direction_id' => '112',
        'code' => 'R031',
        'title_kk' => 'Неонатология',
        'title_ru' => 'Неонатология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2289',
        'training_direction_id' => '112',
        'code' => 'R032',
        'title_kk' => 'Акушерства және гинекология, соның ішінде балалар гинекологиясы',
        'title_ru' => 'Акушерства и гинекология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2290',
        'training_direction_id' => '112',
        'code' => 'R033',
        'title_kk' => 'Медициналық генетика',
        'title_ru' => 'Медицинская генетика',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2291',
        'training_direction_id' => '112',
        'code' => 'R034',
        'title_kk' => 'Сот-медициналық сараптама',
        'title_ru' => 'Судебно-медицинская экспертиза',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2292',
        'training_direction_id' => '112',
        'code' => 'R035',
        'title_kk' => 'Төтенше жағдайлар мен апаттар медицинасы',
        'title_ru' => 'Медицина чрезвычайных ситуаций и катастроф',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2293',
        'training_direction_id' => '112',
        'code' => 'R036',
        'title_kk' => 'Жалпы хирургия',
        'title_ru' => 'Общая хирургия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2294',
        'training_direction_id' => '112',
        'code' => 'R037',
        'title_kk' => 'Неврология, соның ішінде балалар неврологиясы',
        'title_ru' => 'Неврология, в том числе детская',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2295',
        'training_direction_id' => '112',
        'code' => 'R038',
        'title_kk' => 'Отбасылық медицина',
        'title_ru' => 'Семейная медицина',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2296',
        'training_direction_id' => '112',
        'code' => 'R039',
        'title_kk' => 'Терапия',
        'title_ru' => 'Терапия',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2297',
        'training_direction_id' => '112',
        'code' => 'R040',
        'title_kk' => 'Дене медицинасы және оңалту',
        'title_ru' => 'Физическая медицина и реабилитация',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2298',
        'training_direction_id' => '112',
        'code' => 'R041',
        'title_kk' => 'Жедел кезек күттірмейтін медициналық көмек',
        'title_ru' => 'Скорая и неотложная медицинская помощь',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2299',
        'training_direction_id' => '112',
        'code' => 'R042',
        'title_kk' => 'Клиникалық фармакология',
        'title_ru' => 'Клиническая фармакология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2300',
        'training_direction_id' => '112',
        'code' => 'R043',
        'title_kk' => 'Терапиялық стоматология',
        'title_ru' => 'Терапевтическая стоматология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2301',
        'training_direction_id' => '112',
        'code' => 'R044',
        'title_kk' => 'Хирургиялық стоматология',
        'title_ru' => 'Хирургическая стоматология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2302',
        'training_direction_id' => '112',
        'code' => 'R045',
        'title_kk' => 'Ортопедиялық стоматология',
        'title_ru' => 'Ортопедическая стоматология',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2303',
        'training_direction_id' => '112',
        'code' => 'R046',
        'title_kk' => 'Балалар стоматологиясы',
        'title_ru' => 'Стоматология детского возраста',
        'title_en' => ''
        ]);
        DB::table('edu_programs_groups')->insert([
        'id' => '2304',
        'training_direction_id' => '112',
        'code' => 'R047',
        'title_kk' => 'Ортодонтия',
        'title_ru' => 'Ортодонтия',
        'title_en' => ''
        ]); 
    }
}
