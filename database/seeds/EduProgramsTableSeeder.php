<?php

use Illuminate\Database\Seeder;

class EduProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education_programs')->insert([
		'id' => '1',
		'code' => '0717*',
		'title_kk' => 'Тұрмыстық қызмет көрсетуді ұйымдастыру және жоспарлау',
		'title_ru' => 'Организация и планирование бытового обслуживания',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '2',
		'code' => '0707*',
		'title_kk' => 'Кең тұтынатын заттар өндірісінің экономикасы мен ұйымдастыруы',
		'title_ru' => 'Экономика и организация промышленности предметов широкого потребления',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '3',
		'code' => '360100',
		'title_kk' => 'Автоматизация и информатизация в системах управления (по отраслям и областям применения)',
		'title_ru' => 'Автоматизация и информатизация в системах управления (по отраслям и областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '4',
		'code' => '360200',
		'title_kk' => 'Автоматизация технологических процессов и производств (по отраслям)',
		'title_ru' => 'Автоматизация технологических процессов и производств (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '5',
		'code' => '360240',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '6',
		'code' => '360300',
		'title_kk' => 'Автоматика, телемеханика и связь (по отраслям)',
		'title_ru' => 'Автоматика, телемеханика и связь (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '7',
		'code' => '360340',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '8',
		'code' => '370100',
		'title_kk' => 'Компьютерные системы обработки информации и управления',
		'title_ru' => 'Компьютерные системы обработки информации и управления',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '9',
		'code' => '370140',
		'title_kk' => 'Инженер-системотехник',
		'title_ru' => 'Инженер-системотехник',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '10',
		'code' => '370200',
		'title_kk' => 'Системы автоматизированного проектирования',
		'title_ru' => 'Системы автоматизированного проектирования',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '11',
		'code' => '370300',
		'title_kk' => 'Организация и технология защиты информации',
		'title_ru' => 'Организация и технология защиты информации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '12',
		'code' => '370341',
		'title_kk' => 'Специалист по защите информации',
		'title_ru' => 'Специалист по защите информации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '13',
		'code' => '370342',
		'title_kk' => 'Инженер-системотехник',
		'title_ru' => 'Инженер-системотехник',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '14',
		'code' => '207',
		'title_kk' => 'Социология и демография',
		'title_ru' => 'Социология и демография',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '15',
		'code' => '370400',
		'title_kk' => 'Программное и аппаратное обеспечение вычислительной техники и сетей',
		'title_ru' => 'Программное и аппаратное обеспечение вычислительной техники и сетей',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '16',
		'code' => '370441',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '17',
		'code' => '380100',
		'title_kk' => 'Сети связи и системы коммутации',
		'title_ru' => 'Сети связи и системы коммутации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '18',
		'code' => '380140',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '19',
		'code' => '380200',
		'title_kk' => 'Многоканальные телекоммуникационные системы',
		'title_ru' => 'Многоканальные телекоммуникационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '20',
		'code' => '380240',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '21',
		'code' => '380300',
		'title_kk' => 'Радиотехника',
		'title_ru' => 'Радиотехника',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '22',
		'code' => '380340',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '23',
		'code' => '380500',
		'title_kk' => 'Радиосвязь, радиовещание и телевидение',
		'title_ru' => 'Радиосвязь, радиовещание и телевидение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '24',
		'code' => '380540',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '25',
		'code' => '380700',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '26',
		'code' => '380900',
		'title_kk' => 'Радиосвязь и радионавигация',
		'title_ru' => 'Радиосвязь и радионавигация',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '27',
		'code' => '390100',
		'title_kk' => 'Химическая технология органических веществ и материалов',
		'title_ru' => 'Химическая технология органических веществ и материалов',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '28',
		'code' => '390140',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '29',
		'code' => '390300',
		'title_kk' => 'Химическая электротехнология и плазмохимия',
		'title_ru' => 'Химическая электротехнология и плазмохимия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '30',
		'code' => '390340',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '31',
		'code' => '390400',
		'title_kk' => 'Химическая технология тугоплавких неметаллических и силикатных материалов',
		'title_ru' => 'Химическая технология тугоплавких неметаллических и силикатных материалов',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '32',
		'code' => '390440',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '33',
		'code' => '390500',
		'title_kk' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'title_ru' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '34',
		'code' => '390540',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '35',
		'code' => '390600',
		'title_kk' => 'Химическая технология нефти, газа и угля',
		'title_ru' => 'Химическая технология нефти, газа и угля',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '36',
		'code' => '390640',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '37',
		'code' => '5B051800',
		'title_kk' => 'Жобаны басқару',
		'title_ru' => 'Управление проектами',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '38',
		'code' => '5B051600',
		'title_kk' => 'Халықаралық журналистика',
		'title_ru' => 'Международная журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '39',
		'code' => '6M021300',
		'title_kk' => 'Лингвистика',
		'title_ru' => 'Лингвистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '40',
		'code' => '6M050400',
		'title_kk' => 'Журналистика',
		'title_ru' => 'Журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '41',
		'code' => '6M012300',
		'title_kk' => 'әлеуметтік педагогика және өзін-өзі тану',
		'title_ru' => 'Социальная педагогика и самопознание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '42',
		'code' => '6M011700',
		'title_kk' => 'Қазақ тілі мен әдебиеті',
		'title_ru' => 'Казахский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '43',
		'code' => '6M012100',
		'title_kk' => 'Қазақ тілінде оқытпайтын мектептердегі қазақ тілі мен әдебиеті',
		'title_ru' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '44',
		'code' => '6M041900',
		'title_kk' => 'Мұражай ісі және ескерткіштерді қорғау',
		'title_ru' => 'Музейное дело и охрана памятников',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '45',
		'code' => '6M010200',
		'title_kk' => 'Бастауыш оқытудың педагогикасы мен әдістемесі',
		'title_ru' => 'Педагогика и методика начального обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '46',
		'code' => '390700',
		'title_kk' => 'Химия и технология фармацевтического производства',
		'title_ru' => 'Химия и технология фармацевтического производства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '47',
		'code' => '390740',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '48',
		'code' => '390800',
		'title_kk' => 'Химическая технология производства и переработки полимеров',
		'title_ru' => 'Химическая технология производства и переработки полимеров',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '49',
		'code' => '390840',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '50',
		'code' => '390900',
		'title_kk' => 'Ядерно-химическая технология',
		'title_ru' => 'Ядерно-химическая технология',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '51',
		'code' => '390940',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '52',
		'code' => '391500',
		'title_kk' => 'Машины и аппараты химических производств',
		'title_ru' => 'Машины и аппараты химических производств',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '53',
		'code' => '391540',
		'title_kk' => 'Инженер-механик',
		'title_ru' => 'Инженер-механик',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '54',
		'code' => '400100',
		'title_kk' => 'Технология и оборудования производства натуральных и химических волокон',
		'title_ru' => 'Технология и оборудования производства натуральных и химических волокон',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '55',
		'code' => '400140',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '56',
		'code' => '400200',
		'title_kk' => 'Технология и оборудования отделочного производства',
		'title_ru' => 'Технология и оборудования отделочного производства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '57',
		'code' => '400240',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '58',
		'code' => '400300',
		'title_kk' => 'Технология кожи и меха',
		'title_ru' => 'Технология кожи и меха',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '59',
		'code' => '400340',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '60',
		'code' => '400400',
		'title_kk' => 'Технология деревообработки и изделий из дерева',
		'title_ru' => 'Технология деревообработки и изделий из дерева',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '61',
		'code' => '400440',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '62',
		'code' => '400500',
		'title_kk' => 'Технология и проектирование текстильных изделий',
		'title_ru' => 'Технология и проектирование текстильных изделий',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '63',
		'code' => '400540',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '64',
		'code' => '400600',
		'title_kk' => 'Технология и конструирование швейных изделий',
		'title_ru' => 'Технология и конструирование швейных изделий',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '65',
		'code' => '400640',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '66',
		'code' => '400700',
		'title_kk' => 'Технология и конструирование изделий из кожи и меха',
		'title_ru' => 'Технология и конструирование изделий из кожи и меха',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '67',
		'code' => '400740',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '68',
		'code' => '400800',
		'title_kk' => 'Художественное оформление и моделирование изделий текстильной и легкой промышленности',
		'title_ru' => 'Художественное оформление и моделирование изделий текстильной и легкой промышленности',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '69',
		'code' => '400840',
		'title_kk' => 'Художник-модельер',
		'title_ru' => 'Художник-модельер',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '70',
		'code' => '420100',
		'title_kk' => 'Технология переработки зерна и хлебопекарного производства',
		'title_ru' => 'Технология переработки зерна и хлебопекарного производства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '71',
		'code' => '420140',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '72',
		'code' => '420200',
		'title_kk' => 'Технология кондитерских и сахаристых продуктов',
		'title_ru' => 'Технология кондитерских и сахаристых продуктов',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '73',
		'code' => '6M090100',
		'title_kk' => 'Көлікті пайдалану және жүк қозғалысы мен тасымалдауды ұйымдастыру',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транспорта',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '74',
		'code' => '6M040900',
		'title_kk' => 'Хореография',
		'title_ru' => 'Хореография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '75',
		'code' => '6M072000',
		'title_kk' => 'Бейорганикалық заттардың химиялық технологиясы',
		'title_ru' => 'Химическая технология неорганических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '76',
		'code' => '420240',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '77',
		'code' => '420300',
		'title_kk' => 'Технология консервов, пищеконцентратов и субтропических продуктов',
		'title_ru' => 'Технология консервов, пищеконцентратов и субтропических продуктов',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '78',
		'code' => '420400',
		'title_kk' => 'Технология бродильных производств и виноделие',
		'title_ru' => 'Технология бродильных производств и виноделие',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '79',
		'code' => '420440',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '80',
		'code' => '420500',
		'title_kk' => 'Технология мясных и молочных продуктов',
		'title_ru' => 'Технология мясных и молочных продуктов',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '81',
		'code' => '420540',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '82',
		'code' => '420600',
		'title_kk' => 'Технология рыбных продуктов и жиров',
		'title_ru' => 'Технология рыбных продуктов и жиров',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '83',
		'code' => '420640',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '84',
		'code' => '420700',
		'title_kk' => 'Технология продуктов общественного питания и специального назначения',
		'title_ru' => 'Технология продуктов общественного питания и специального назначения',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '85',
		'code' => '420740',
		'title_kk' => 'Инженер-технолог',
		'title_ru' => 'Инженер-технолог',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '86',
		'code' => '430100',
		'title_kk' => 'Промышленное и гражданское строительство и городское хозяйство',
		'title_ru' => 'Промышленное и гражданское строительство и городское хозяйство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '87',
		'code' => '430140',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '88',
		'code' => '430200',
		'title_kk' => 'Гидротехническое строительство',
		'title_ru' => 'Гидротехническое строительство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '89',
		'code' => '430240',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '90',
		'code' => '50727',
		'title_kk' => 'Технология продовольственных продуктов',
		'title_ru' => 'Технология продовольственных продуктов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '91',
		'code' => '50728',
		'title_kk' => 'Технология перерабатывающих производств',
		'title_ru' => 'Технология перерабатывающих производств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '92',
		'code' => '50732',
		'title_kk' => 'Стандартизация, метрология и сертификация',
		'title_ru' => 'Стандартизация, метрология и сертификация',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '93',
		'code' => '50802',
		'title_kk' => 'Зоотехния',
		'title_ru' => 'Зоотехния',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '94',
		'code' => '50803',
		'title_kk' => 'Охотоведение и звероводство',
		'title_ru' => 'Охотоведение и звероводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '95',
		'code' => '50804',
		'title_kk' => 'Рыбное хозяйство',
		'title_ru' => 'Рыбное хозяйство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '96',
		'code' => '50806',
		'title_kk' => 'Агроинженерия',
		'title_ru' => 'Агроинженерия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '97',
		'code' => '50807',
		'title_kk' => 'Лесохозяйственное дело',
		'title_ru' => 'Лесохозяйственное дело',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '98',
		'code' => '50808',
		'title_kk' => 'Почвоведение и агрохимия',
		'title_ru' => 'Почвоведение и агрохимия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '99',
		'code' => '50901',
		'title_kk' => 'Организация перевозок, движения и эксплуатация транпорта',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транпорта',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '100',
		'code' => '50903',
		'title_kk' => 'Землеустройство и кадастр',
		'title_ru' => 'Землеустройство и кадастр',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '101',
		'code' => '50904',
		'title_kk' => 'Бытовые услуги и сервис',
		'title_ru' => 'Бытовые услуги и сервис',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '102',
		'code' => '6N0507',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '103',
		'code' => '3804',
		'title_kk' => 'Автоматическая электросвязь',
		'title_ru' => 'Автоматическая электросвязь',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '104',
		'code' => '109',
		'title_kk' => 'Экология и природопользование',
		'title_ru' => 'Экология и природопользование',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '105',
		'code' => '112',
		'title_kk' => 'Метеорология и гидрология',
		'title_ru' => 'Метеорология и гидрология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '106',
		'code' => '310',
		'title_kk' => 'Валеология',
		'title_ru' => 'Валеология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '107',
		'code' => '201',
		'title_kk' => 'Философия и культурология',
		'title_ru' => 'Философия и культурология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '108',
		'code' => '206',
		'title_kk' => 'Страноведение (по регионам)',
		'title_ru' => 'Страноведение (по регионам)',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '109',
		'code' => '210',
		'title_kk' => 'Журналистика',
		'title_ru' => 'Журналистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '110',
		'code' => '212',
		'title_kk' => 'Казахский язык и литература',
		'title_ru' => 'Казахский язык и литература',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '111',
		'code' => '215',
		'title_kk' => 'Иностранная филология: два иностранных языка',
		'title_ru' => 'Иностранная филология: два иностранных языка',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '112',
		'code' => '217',
		'title_kk' => 'Прикладная лингвистика',
		'title_ru' => 'Прикладная лингвистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '113',
		'code' => '5B071400',
		'title_kk' => 'Авиациялық техника және технологиялар',
		'title_ru' => 'Авиационная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '114',
		'code' => '6D071400',
		'title_kk' => 'Авиациялық техника және технологиялар',
		'title_ru' => 'Авиационная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '115',
		'code' => '6D070200',
		'title_kk' => 'Автоматтандыру және басқару',
		'title_ru' => 'Автоматизация и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '116',
		'code' => '6M080600',
		'title_kk' => 'Аграрлық техника және технология',
		'title_ru' => 'Аграрная техника и технология',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '117',
		'code' => '1502',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '118',
		'code' => '208',
		'title_kk' => 'Археология және этнология',
		'title_ru' => 'Археология и этнология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '119',
		'code' => '6M051500',
		'title_kk' => 'Мұрағаттану, құжаттар жүргізу және құжаттамалық қамтамасыз ету',
		'title_ru' => 'Архивоведение, документоведение и документационное обеспечение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '120',
		'code' => '6M120100',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '121',
		'code' => '512001',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '122',
		'code' => '219',
		'title_kk' => 'Архивоведение',
		'title_ru' => 'Архивоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '123',
		'code' => '301',
		'title_kk' => 'Математика и физика',
		'title_ru' => 'Математика и физика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '124',
		'code' => '302',
		'title_kk' => 'Физика и информатика',
		'title_ru' => 'Физика и информатика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '125',
		'code' => '303',
		'title_kk' => 'Биология и химия',
		'title_ru' => 'Биология и химия',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '126',
		'code' => '306',
		'title_kk' => 'История и география',
		'title_ru' => 'История и география',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '127',
		'code' => '312',
		'title_kk' => 'Начальная военная и физическая подготовка',
		'title_ru' => 'Начальная военная и физическая подготовка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '128',
		'code' => '209',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '129',
		'code' => '220',
		'title_kk' => 'Әдебиеттану',
		'title_ru' => 'Литературоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '130',
		'code' => '202',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '131',
		'code' => '50801',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '132',
		'code' => '512002',
		'title_kk' => 'Ветеринарлық санитария',
		'title_ru' => 'Ветеринарная санитария',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '133',
		'code' => '607',
		'title_kk' => 'Операторлық өнер',
		'title_ru' => 'Операторское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '134',
		'code' => '214',
		'title_kk' => 'Аударма ісі',
		'title_ru' => 'Переводческое дело',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '135',
		'code' => '313',
		'title_kk' => 'Профессиональное обучение и труд',
		'title_ru' => 'Профессиональное обучение и труд',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '136',
		'code' => '315',
		'title_kk' => 'Педагогика и методика начального обучения',
		'title_ru' => 'Педагогика и методика начального обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '137',
		'code' => '21140',
		'title_kk' => 'Международная журналистика',
		'title_ru' => 'Международная журналистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '138',
		'code' => '203',
		'title_kk' => 'Всемирная история',
		'title_ru' => 'Всемирная история',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '139',
		'code' => '317',
		'title_kk' => 'Музыка и пение',
		'title_ru' => 'Музыка и пение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '140',
		'code' => '2501',
		'title_kk' => 'Технология машиностроения, металлорежущие станки и инструменты.',
		'title_ru' => 'Технология машиностроения, металлорежущие станки и инструменты',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '141',
		'code' => '602',
		'title_kk' => 'Инструментальное исполнительство, Исполнительское искусство',
		'title_ru' => 'Инструментальное исполнительство, Исполнительское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '142',
		'code' => '603',
		'title_kk' => 'Режиссура',
		'title_ru' => 'Режиссура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '143',
		'code' => '604',
		'title_kk' => 'Хореография',
		'title_ru' => 'Хореография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '144',
		'code' => '1102',
		'title_kk' => 'Техника и физика низких температур',
		'title_ru' => 'Техника и физика низких температур',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '145',
		'code' => '1103',
		'title_kk' => 'Техника и физика высоких напряжений',
		'title_ru' => 'Техника и физика высоких напряжений',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '146',
		'code' => '1104',
		'title_kk' => 'Ядерные реакторы и энергетические установки',
		'title_ru' => 'Ядерные реакторы и энергетические установки',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '147',
		'code' => '1106',
		'title_kk' => 'Гидроаэродинамика',
		'title_ru' => 'Гидроаэродинамика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '148',
		'code' => '1107',
		'title_kk' => 'Радиофизика и электроника',
		'title_ru' => 'Радиофизика и электроника',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '149',
		'code' => '1201',
		'title_kk' => 'Биотехнология (по отраслям)',
		'title_ru' => 'Биотехнология (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '150',
		'code' => '6M074000',
		'title_kk' => 'Наноматериалдар және нанотехнологиялар (өтінім бойынша)',
		'title_ru' => 'Наноматериалы и нанотехнологии (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '151',
		'code' => '6M074400',
		'title_kk' => 'Гидравлика және құрылыс',
		'title_ru' => 'Гидротехническое строительство и сооружение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '152',
		'code' => '6M074900',
		'title_kk' => 'Маркшейдерлік жұмыстар',
		'title_ru' => 'Маркшейдерское дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '153',
		'code' => '5B075100',
		'title_kk' => 'Информатика, есептеу техникасы және басқару',
		'title_ru' => 'Информатика, вычислительная техника и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '154',
		'code' => '6D041800',
		'title_kk' => 'Кітапханалық ғылым және библиография',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '155',
		'code' => '521400',
		'title_kk' => 'Лингвистика',
		'title_ru' => 'Лингвистика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '156',
		'code' => '5B021300',
		'title_kk' => 'Лингвистика',
		'title_ru' => 'Лингвистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '157',
		'code' => '6D021300',
		'title_kk' => 'Лингвистика',
		'title_ru' => 'Лингвистика',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '158',
		'code' => '6M050300',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '159',
		'code' => '6N0503',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '160',
		'code' => '6D050300',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '161',
		'code' => '50503',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '162',
		'code' => '5B050300',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '163',
		'code' => '6D073600',
		'title_kk' => 'Азық-түлік емес заттар және бұйымдар қауіпсіздігі',
		'title_ru' => 'Безопасность непродовольственных товаров и изделий',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '164',
		'code' => '6M073600',
		'title_kk' => 'Азық-түлік емес заттар және бұйымдар қауіпсіздігі',
		'title_ru' => 'Безопасность непродовольственных товаров и изделий',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '165',
		'code' => '6R114200',
		'title_kk' => 'Педиатрия',
		'title_ru' => 'Педиатрия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '166',
		'code' => '402',
		'title_kk' => 'Педиатрия',
		'title_ru' => 'Педиатрия',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '167',
		'code' => '40200',
		'title_kk' => 'Педиатрия',
		'title_ru' => 'Педиатрия',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '168',
		'code' => '50805',
		'title_kk' => 'Су ресурстары және суды пайдалану',
		'title_ru' => 'Водные ресурсы и водопользование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '169',
		'code' => '6N0805',
		'title_kk' => 'Су ресурстары және суды пайдалану',
		'title_ru' => 'Водные ресурсы и водопользование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '170',
		'code' => '5B080500',
		'title_kk' => 'Су ресурстары және суды пайдалану',
		'title_ru' => 'Водные ресурсы и водопользование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '171',
		'code' => '6N0403',
		'title_kk' => 'Вокалдық өнер',
		'title_ru' => 'Вокальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '172',
		'code' => '6D040300',
		'title_kk' => 'Вокалдық өнер',
		'title_ru' => 'Вокальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '173',
		'code' => '6D040200',
		'title_kk' => 'Аспаптық орындаушылық',
		'title_ru' => 'Инструментальное исполнительство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '174',
		'code' => '50402',
		'title_kk' => 'Аспаптық орындаушылық',
		'title_ru' => 'Инструментальное исполнительство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '175',
		'code' => '6N0402',
		'title_kk' => 'Аспаптық орындаушылық',
		'title_ru' => 'Инструментальное исполнительство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '176',
		'code' => '10700',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '177',
		'code' => '5B050500',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '178',
		'code' => '50508',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '179',
		'code' => '6D012200',
		'title_kk' => 'Орыс тілінде тілінде оқытпайтын мектептердегі орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература в школах с нерусским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '180',
		'code' => '6M012200',
		'title_kk' => 'Орыс тілінде тілінде оқытпайтын мектептердегі орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература в школах с нерусским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '181',
		'code' => '6N0122',
		'title_kk' => 'Орыс тілінде тілінде оқытпайтын мектептердегі орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература в школах с нерусским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '182',
		'code' => '50122',
		'title_kk' => 'Орыс тілінде тілінде оқытпайтын мектептердегі орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература в школах с нерусским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '183',
		'code' => '5B012200',
		'title_kk' => 'Орыс тілінде тілінде оқытпайтын мектептердегі орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература в школах с нерусским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '184',
		'code' => '6D051000',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '185',
		'code' => '50510',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '186',
		'code' => '5B051000',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '187',
		'code' => '70400',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '188',
		'code' => '50511',
		'title_kk' => 'Маркетинг',
		'title_ru' => 'Маркетинг',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '189',
		'code' => '6N0714',
		'title_kk' => 'Авиациялық техника және технологиялар',
		'title_ru' => 'Авиационная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '190',
		'code' => '6M073400',
		'title_kk' => 'Жарылғыш заттар мен пиротехникалық құралдардың химиялық технологиясы',
		'title_ru' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '191',
		'code' => '5B073400',
		'title_kk' => 'Жарылғыш заттар мен пиротехникалық құралдардың химиялық технологиясы',
		'title_ru' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '192',
		'code' => '6M080200',
		'title_kk' => 'Мал шаруашылығы өнімдерін өндіру технологиясы',
		'title_ru' => 'Технология производства продуктов животноводства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '193',
		'code' => '6M041700',
		'title_kk' => 'Сән өнері',
		'title_ru' => 'Декоративное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '194',
		'code' => '6M072700',
		'title_kk' => 'Азық - түлік өнімдерінің технологиясы (сала бойынша)',
		'title_ru' => 'Технология продовольственных продуктов (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '195',
		'code' => '6M073800',
		'title_kk' => 'Материалдарды қысыммен өңдеу технологиясы',
		'title_ru' => 'Технология обработки материалов давлением',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '196',
		'code' => '6M072600',
		'title_kk' => 'Жеңіл өнеркәсіп бұйымдарының технологиясы және құрастырылуы (сала бойынша)',
		'title_ru' => 'Технология и конструирование изделий легкой промышленности (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '197',
		'code' => '6M072400',
		'title_kk' => 'Технологиялық машиналар және жабдықтар (сала бойынша)',
		'title_ru' => 'Технологические машины и оборудование (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '198',
		'code' => '1202',
		'title_kk' => 'Өнеркәсіптік және азаматтық құрылыс',
		'title_ru' => 'Промышленное и гражданское строительство',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '199',
		'code' => '1203',
		'title_kk' => 'Өзен құрылыстар мен гидроэлектрстанциялардың гидротехникалық құрылысы',
		'title_ru' => 'Гидротехническое строительство речных сооружений и гидроэлектростанций',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '200',
		'code' => '1205',
		'title_kk' => 'Ауыл шаруашылық құрылысы',
		'title_ru' => 'Строительство сельского хозяйства',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '201',
		'code' => '1744',
		'title_kk' => 'Ауыл шаруашылығын ұйымдастыруы мен экономикасы',
		'title_ru' => 'Экономика и организация водного хозяйства',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '202',
		'code' => '2904',
		'title_kk' => 'Гидротехникалық құрылыс',
		'title_ru' => 'Гидротехническое строительство',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '203',
		'code' => '2908',
		'title_kk' => 'Сумен жабдықтау, канализация, су ресурстарын ұтымды пайдалану және қорғау',
		'title_ru' => 'Водоснабжение, канализация, рациональное использование и охрана водных ресурсов',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '204',
		'code' => '3110',
		'title_kk' => 'Гидромелиорация. Гидромелиоративтік жүйелерді пайдалану',
		'title_ru' => 'Гидромелиорация. Эксплуатация гидромелиоративных систем',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '205',
		'code' => '3111',
		'title_kk' => 'Мелиоративтік жұмыстарды механикаландыру',
		'title_ru' => 'Механизация мелиоративных работ',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '206',
		'code' => '1511',
		'title_kk' => 'Гидромелиорация',
		'title_ru' => 'Гидромелиорация',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '207',
		'code' => '1514',
		'title_kk' => 'Гидромелиоративтік жұмыстарын механикаландыру',
		'title_ru' => 'Механизация гидромелиоративных работ',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '208',
		'code' => '6M070400',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '209',
		'code' => '50704',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '210',
		'code' => '5B074700',
		'title_kk' => 'Геофизикалық іздеу әдістері және пайдалы қазбалар кен орындарын барлау',
		'title_ru' => 'Геофизические методы поисков и разведки МПИ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '211',
		'code' => '6D074700',
		'title_kk' => 'Геофизикалық іздеу әдістері және пайдалы қазбалар кен орындарын барлау',
		'title_ru' => 'Геофизические методы поисков и разведки МПИ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '212',
		'code' => '6N0904',
		'title_kk' => 'Жерге орналастыру',
		'title_ru' => 'Землеустройство',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '213',
		'code' => '3109',
		'title_kk' => 'Жерге орналастыру',
		'title_ru' => 'Землеустройство',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '214',
		'code' => '6M042200',
		'title_kk' => 'Баспа ісі',
		'title_ru' => 'Издательское дело',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '215',
		'code' => '91100',
		'title_kk' => 'Баспа ісі',
		'title_ru' => 'Издательское дело',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '216',
		'code' => '6N0107',
		'title_kk' => 'Бейнелеу өнері және сызу',
		'title_ru' => 'Изобразительное искусство и черчение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '217',
		'code' => '6D010700',
		'title_kk' => 'Бейнелеу өнері және сызу',
		'title_ru' => 'Изобразительное искусство и черчение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '218',
		'code' => '6D051700',
		'title_kk' => 'Инновациялық менеджмент',
		'title_ru' => 'Инновационный менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '219',
		'code' => '5B021022',
		'title_kk' => 'Шетел филологиясы',
		'title_ru' => 'Иностранная филология',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '220',
		'code' => '5B090600',
		'title_kk' => 'Мәдени-тынығу жұмысы',
		'title_ru' => 'Культурно-досуговая работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '221',
		'code' => '6N0908',
		'title_kk' => 'Мәдени-тынығу жұмысы',
		'title_ru' => 'Культурно-досуговая работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '222',
		'code' => '6M074300',
		'title_kk' => 'Ұшатын аппараттар мен қозғалтқыштарды ұшуда пайдалану',
		'title_ru' => 'Летная эксплуатация летательных аппаратов и двигателей',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '223',
		'code' => '6D074300',
		'title_kk' => 'Ұшатын аппараттар мен қозғалтқыштарды ұшуда пайдалану',
		'title_ru' => 'Летная эксплуатация летательных аппаратов и двигателей',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '224',
		'code' => '6M090900',
		'title_kk' => 'Логистика (сала бойынша)',
		'title_ru' => 'Логистика (по отраслям)',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '225',
		'code' => '5B070500',
		'title_kk' => 'Математикалық және компьютерлік модельдеу',
		'title_ru' => 'Математическое и компьютерное моделирование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '226',
		'code' => '6N0710',
		'title_kk' => 'Материал тану және жаңа материалдар технологиясы',
		'title_ru' => 'Материаловедение и технология новых материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '227',
		'code' => '6M071000',
		'title_kk' => 'Материал тану және жаңа материалдар технологиясы',
		'title_ru' => 'Материаловедение и технология новых материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '228',
		'code' => '601',
		'title_kk' => 'Музыкатану',
		'title_ru' => 'Музыковедение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '229',
		'code' => '240500',
		'title_kk' => 'Пайдалы қазбаларды байыту',
		'title_ru' => 'Обогащение полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '230',
		'code' => '51102',
		'title_kk' => 'Қоғамдық денсаулық сақтау',
		'title_ru' => 'Общественное здравоохранение',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '231',
		'code' => '6M110200',
		'title_kk' => 'Қоғамдық денсаулық сақтау',
		'title_ru' => 'Общественное здравоохранение',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '232',
		'code' => '6M051900',
		'title_kk' => 'Еңбекті ұйымдастыру және нормалау',
		'title_ru' => 'Организация и нормирование труда',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '233',
		'code' => '6M012400',
		'title_kk' => 'Педагогикалық өлшемдер',
		'title_ru' => 'Педагогические измерения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '234',
		'code' => '6M073500',
		'title_kk' => 'Тағам қауіпсіздігі',
		'title_ru' => 'Пищевая безопасность',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '235',
		'code' => '380740',
		'title_kk' => 'Ұялы байланыс жүйелерi мен құралдары',
		'title_ru' => 'Системы и средства подвижной связи',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '236',
		'code' => '3807',
		'title_kk' => 'Ұялы байланыс жүйелерi мен құралдары',
		'title_ru' => 'Системы и средства подвижной связи',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '237',
		'code' => '6M081000',
		'title_kk' => 'Жерді мелиорациялау, баптау және қорғау',
		'title_ru' => 'Мелиорации, рекультивация и охрана земель',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '238',
		'code' => '6M080400',
		'title_kk' => 'Балық шаруашылығы және өнеркәсіптік балық аулау',
		'title_ru' => 'Рыбное хозяйство и промышленное рыболовство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '239',
		'code' => '360140',
		'title_kk' => 'Инженер',
		'title_ru' => 'Автоматизация и информатизация в системах управления',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '240',
		'code' => '714',
		'title_kk' => 'Международные экономические отношения',
		'title_ru' => 'Международные экономические отношения',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '241',
		'code' => '70740',
		'title_kk' => 'Бухгалтерский учет и аудит',
		'title_ru' => 'Бухгалтерский учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '242',
		'code' => '30540',
		'title_kk' => 'История, основы права и экономики',
		'title_ru' => 'История, основы права и экономики',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '243',
		'code' => '716',
		'title_kk' => 'Организация производства',
		'title_ru' => 'Организация производства',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '244',
		'code' => '6M021500',
		'title_kk' => 'Исламтану',
		'title_ru' => 'Исламоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '245',
		'code' => '5B052100',
		'title_kk' => 'Государственный аудит',
		'title_ru' => 'Государственный аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '246',
		'code' => '6M052100',
		'title_kk' => 'Мемлекеттік аудит',
		'title_ru' => 'Государственный аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '247',
		'code' => '30940',
		'title_kk' => 'Русский язык и литература',
		'title_ru' => 'Русский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '248',
		'code' => '31940',
		'title_kk' => 'Иностранный язык: два иностранных языка',
		'title_ru' => 'Иностранный язык: два иностранных языка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '249',
		'code' => '510230',
		'title_kk' => 'Прикладная математика и информатика',
		'title_ru' => 'Прикладная математика и информатика',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '250',
		'code' => '5B012600',
		'title_kk' => 'Математика-Физика',
		'title_ru' => 'Математика-Физика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '251',
		'code' => '5B012700',
		'title_kk' => 'Математика-Информатика',
		'title_ru' => 'Математика-Информатика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '252',
		'code' => '5B012500',
		'title_kk' => 'Химия-Биология',
		'title_ru' => 'Химия-Биология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '253',
		'code' => '5B012900',
		'title_kk' => 'География-Тарих',
		'title_ru' => 'География-История',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '254',
		'code' => '5B013000',
		'title_kk' => 'Тарих-Дінтану',
		'title_ru' => 'История-Религиоведение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '255',
		'code' => '5B012800',
		'title_kk' => 'Физика-Информатика',
		'title_ru' => 'Физика-Информатика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '256',
		'code' => '551730',
		'title_kk' => 'Безопасность жизнедеятельности',
		'title_ru' => 'Безопасность жизнедеятельности',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '257',
		'code' => '50110',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '258',
		'code' => '6M075100',
		'title_kk' => 'Информатика, Есептеу техникасы және басқару',
		'title_ru' => 'Информатика, вычислительная техника и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '259',
		'code' => '5B074000',
		'title_kk' => 'Наноматериалдар және нанотехнологиялар (өтінім бойынша)',
		'title_ru' => 'Наноматериалы и нанотехнологии (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '260',
		'code' => '5B074400',
		'title_kk' => 'Гидравлика және құрылыс',
		'title_ru' => 'Гидротехническое строительство и сооружение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '261',
		'code' => '5B074900',
		'title_kk' => 'Маркшейдерлік жұмыстар',
		'title_ru' => 'Маркшейдерское дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '262',
		'code' => '6M041800',
		'title_kk' => 'Кітапханалық ғылым және библиография',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '263',
		'code' => '6M050600',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '264',
		'code' => '6M091000',
		'title_kk' => 'Кітапхана ісі',
		'title_ru' => 'Библиотечное дело',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '265',
		'code' => '5B130300',
		'title_kk' => 'Педиатрия',
		'title_ru' => 'Педиатрия',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '266',
		'code' => '6M080500',
		'title_kk' => 'Су ресурстары және суды пайдалану',
		'title_ru' => 'Водные ресурсы и водопользование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '267',
		'code' => '6M040300',
		'title_kk' => 'Вокалдық өнер',
		'title_ru' => 'Вокальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '268',
		'code' => '50403',
		'title_kk' => 'Вокалдық өнер',
		'title_ru' => 'Вокальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '269',
		'code' => '6M040200',
		'title_kk' => 'Аспаптық орындаушылық',
		'title_ru' => 'Инструментальное исполнительство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '270',
		'code' => '5B040200',
		'title_kk' => 'Аспаптық орындаушылық',
		'title_ru' => 'Инструментальное исполнительство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '271',
		'code' => '5B042300',
		'title_kk' => 'Арт-менеджмент',
		'title_ru' => 'Арт-менеджмент',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '272',
		'code' => '6D011300',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '273',
		'code' => '50701',
		'title_kk' => 'Биотехнология',
		'title_ru' => 'Биотехнология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '274',
		'code' => '5B070400',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '275',
		'code' => '6N0704',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '276',
		'code' => '6D010500',
		'title_kk' => 'Дефектология',
		'title_ru' => 'Дефектология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '277',
		'code' => '6D010400',
		'title_kk' => 'Алғашқы әскери дайындық',
		'title_ru' => 'Начальная военная подготовка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '278',
		'code' => '2404',
		'title_kk' => 'Пайдалы қазбаларды байыту',
		'title_ru' => 'Обогащение полезных ископаемых',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '279',
		'code' => '6D010300',
		'title_kk' => 'Педагогика және психология',
		'title_ru' => 'Педагогика и психология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '280',
		'code' => '6D012100',
		'title_kk' => 'Қазақ тілінде оқытпайтын мектептердегі қазақ тілі мен әдебиеті',
		'title_ru' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '281',
		'code' => '6D074000',
		'title_kk' => 'Наноматериалдар және нанотехнологиялар (сала бойынша)',
		'title_ru' => 'Наноматериалы и нанотехнологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '282',
		'code' => '50901',
		'title_kk' => 'Организация перевозок, движения и эксплуатация транспорта',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транспорта',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '283',
		'code' => '5B090100',
		'title_kk' => 'Көлікті пайдалану және жүк қозғалысы мен тасымалдауды ұйымдастыру',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транспорта',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '284',
		'code' => '6N0901',
		'title_kk' => 'Организация перевозок, движения и эксплуатация транспорта',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транспорта',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '285',
		'code' => '50726',
		'title_kk' => 'Технология и конструирование изделий легкой промышленности',
		'title_ru' => 'Технология и конструирование изделий легкой промышленности',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '286',
		'code' => '5B072600',
		'title_kk' => 'Жеңіл өнеркәсіп бұйымдарының технологиясы және құрастырылуы',
		'title_ru' => 'Технология и конструирование изделий легкой промышленности',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '287',
		'code' => '3703',
		'title_kk' => 'Системы автоматизированного проектирования',
		'title_ru' => 'Системы автоматизированного проектирования',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '288',
		'code' => '140200',
		'title_kk' => 'Горные машины и оборудования',
		'title_ru' => 'Горные машины и оборудование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '289',
		'code' => '340200',
		'title_kk' => 'Физические методы и приборы контроля и анализа веществ и изделий',
		'title_ru' => 'Физические методы и приборы контроля и анализа веществ и изделий',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '290',
		'code' => '6R111000',
		'title_kk' => '',
		'title_ru' => 'Нефрология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '291',
		'code' => '6R111100',
		'title_kk' => '',
		'title_ru' => 'Фтизиатрия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '292',
		'code' => '6R111400',
		'title_kk' => '',
		'title_ru' => 'Дерматовенерология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '293',
		'code' => '50807',
		'title_kk' => 'Лесохозяйственное дело',
		'title_ru' => 'Лесохозяйственное дело',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '294',
		'code' => '31140',
		'title_kk' => 'Физическая культура и спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '295',
		'code' => '540330',
		'title_kk' => 'Педагогика',
		'title_ru' => 'Педагогика',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '296',
		'code' => '10140',
		'title_kk' => 'Математик',
		'title_ru' => 'Математик',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '297',
		'code' => '50418',
		'title_kk' => 'Библиотековедение и библиография',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '298',
		'code' => '50420',
		'title_kk' => 'Архитектура*',
		'title_ru' => 'Архитектура*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '299',
		'code' => '6D060500',
		'title_kk' => 'Ядролық физика',
		'title_ru' => 'Ядерная физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '300',
		'code' => '6D060800',
		'title_kk' => 'Экология',
		'title_ru' => 'Экология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '301',
		'code' => '50902',
		'title_kk' => 'Туризм',
		'title_ru' => 'Туризм',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '302',
		'code' => '520930',
		'title_kk' => 'Психология',
		'title_ru' => 'Психология',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '303',
		'code' => '522000',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '304',
		'code' => '520800',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '305',
		'code' => '6M060600',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '306',
		'code' => '6M021400',
		'title_kk' => 'Әдебиеттану',
		'title_ru' => 'Литературоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '307',
		'code' => '6M050200',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '308',
		'code' => '6M050500',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '309',
		'code' => '6M050800',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '310',
		'code' => '6M050900',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '311',
		'code' => '6M051000',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '312',
		'code' => '6M051100',
		'title_kk' => 'Маркетинг',
		'title_ru' => 'Маркетинг',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '313',
		'code' => '6M051200',
		'title_kk' => 'Статистика',
		'title_ru' => 'Статистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '314',
		'code' => '6M051300',
		'title_kk' => 'Әлемдік экономика',
		'title_ru' => 'Мировая экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '315',
		'code' => '50702',
		'title_kk' => 'Автоматтандыру және басқару',
		'title_ru' => 'Автоматизация и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '316',
		'code' => '510830',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '317',
		'code' => '6D060700',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '318',
		'code' => '6D060900',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '319',
		'code' => '50417',
		'title_kk' => 'Сән өнері',
		'title_ru' => 'Декоративное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '320',
		'code' => '6M051700',
		'title_kk' => 'Инновациялық менеджмент',
		'title_ru' => 'Инновационный менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '321',
		'code' => '50416',
		'title_kk' => 'Өнертану',
		'title_ru' => 'Искусствоведение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '322',
		'code' => '6D011400',
		'title_kk' => 'Тарих',
		'title_ru' => 'История',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '323',
		'code' => '521232',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '324',
		'code' => '10100',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '325',
		'code' => '6M051400',
		'title_kk' => 'Қоғамдық байланыс',
		'title_ru' => 'Связь с общественностью',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '326',
		'code' => '90200',
		'title_kk' => 'Халықаралық құқық',
		'title_ru' => 'Международное право',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '327',
		'code' => '6M050700',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '328',
		'code' => '6D072000',
		'title_kk' => 'Бейорганикалық заттардың химиялық технологиясы',
		'title_ru' => 'Химическая технология неорганических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '329',
		'code' => '6D072100',
		'title_kk' => 'Органикалық заттардың химиялық технологиясы',
		'title_ru' => 'Химическая технология органических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '330',
		'code' => '6D072300',
		'title_kk' => 'Техникалық физика',
		'title_ru' => 'Техническая физика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '331',
		'code' => '6D070100',
		'title_kk' => 'Биотехнология (сала бойынша)',
		'title_ru' => 'Биотехнология (по отраслям и областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '332',
		'code' => '6D071900',
		'title_kk' => 'Радиотехника, электроника және телекоммуникациялар',
		'title_ru' => 'Радиотехника, электроника и телекоммуникации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '333',
		'code' => '6D072400',
		'title_kk' => 'Техникалық машиналар және жабдықтар (сала бойынша)',
		'title_ru' => 'Технологические машины и оборудование (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '334',
		'code' => '6D072700',
		'title_kk' => 'Азық - түлік өнімдерінің технологиясы (сала бойынша)',
		'title_ru' => 'Технология продовольственных продуктов (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '335',
		'code' => '6D072800',
		'title_kk' => 'Қайта өңдеу өндірістерінің технологиясы (сала бойынша)',
		'title_ru' => 'Технология перерабатывающих производств (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '336',
		'code' => '6D072900',
		'title_kk' => 'Құрылыс',
		'title_ru' => 'Строительство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '337',
		'code' => '6D072600',
		'title_kk' => 'Жеңіл өнеркәсіп бұйымдарының технологиясы және құрастырылуы (сала бойынша)',
		'title_ru' => 'Технология и конструирование изделий легкой промышленности',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '338',
		'code' => '5B050600',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '339',
		'code' => '6N0206',
		'title_kk' => 'Религиоведение',
		'title_ru' => 'Религиоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '340',
		'code' => '610',
		'title_kk' => 'Скульптура',
		'title_ru' => 'Скульптура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '341',
		'code' => '6N0406',
		'title_kk' => 'Режиссура',
		'title_ru' => 'Режиссура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '342',
		'code' => '6N0415',
		'title_kk' => 'Скульптура',
		'title_ru' => 'Скульптура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '343',
		'code' => '6N0410',
		'title_kk' => 'Сценография',
		'title_ru' => 'Сценография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '344',
		'code' => '6N0409',
		'title_kk' => 'Хореография',
		'title_ru' => 'Хореография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '345',
		'code' => '6M070200',
		'title_kk' => 'Автоматтандыру және басқару',
		'title_ru' => 'Автоматизация и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '346',
		'code' => '6N0407',
		'title_kk' => 'Актерлік өнер',
		'title_ru' => 'Актерское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '347',
		'code' => '6N0208',
		'title_kk' => 'Археология және этнология',
		'title_ru' => 'Археология и этнология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '348',
		'code' => '6D061100',
		'title_kk' => 'Астрономия',
		'title_ru' => 'Астрономия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '349',
		'code' => '6D070400',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '350',
		'code' => '6D061300',
		'title_kk' => 'Геоботаника',
		'title_ru' => 'Геоботаника',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '351',
		'code' => '6M061300',
		'title_kk' => 'Геоботаника',
		'title_ru' => 'Геоботаника',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '352',
		'code' => '6D070600',
		'title_kk' => 'Геология және пайдалы қазбалар кен орнын барлау',
		'title_ru' => 'Геология и разведка месторождений полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '353',
		'code' => '6D061000',
		'title_kk' => 'Гидрология',
		'title_ru' => 'Гидрология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '354',
		'code' => '6D070700',
		'title_kk' => 'Тау-кен ісі',
		'title_ru' => 'Горное дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '355',
		'code' => '6N0414',
		'title_kk' => 'Графика',
		'title_ru' => 'Графика',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '356',
		'code' => '6N0417',
		'title_kk' => 'Сән өнері',
		'title_ru' => 'Декоративное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '357',
		'code' => '6N0413',
		'title_kk' => 'Кескіндеме',
		'title_ru' => 'Живопись',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '358',
		'code' => '6M070300',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '359',
		'code' => '6N0408',
		'title_kk' => 'Эстрада өнері',
		'title_ru' => 'Искусство эстрады',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '360',
		'code' => '6N0416',
		'title_kk' => 'Өнертану',
		'title_ru' => 'Искусствоведение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '361',
		'code' => '6N0203',
		'title_kk' => 'Тарих',
		'title_ru' => 'История',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '362',
		'code' => '6N0411',
		'title_kk' => 'Композиция',
		'title_ru' => 'Композиция',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '363',
		'code' => '6D070500',
		'title_kk' => 'Математикалық және компьютерлік модельдеу',
		'title_ru' => 'Математическое и компьютерное моделирование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '364',
		'code' => '6N0204',
		'title_kk' => 'Мәдениеттану',
		'title_ru' => 'Культурология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '365',
		'code' => '6N0202',
		'title_kk' => 'Халықаралық қатынастар',
		'title_ru' => 'Международные отношения',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '366',
		'code' => '6D070900',
		'title_kk' => 'Металлургия',
		'title_ru' => 'Металлургия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '367',
		'code' => '6D061200',
		'title_kk' => 'Метеорология',
		'title_ru' => 'Метеорология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '368',
		'code' => '6D070800',
		'title_kk' => 'Мұнай-газ ісі',
		'title_ru' => 'Нефтегазовое дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '369',
		'code' => '6D073700',
		'title_kk' => 'Пайдалы қазбаларды байыту',
		'title_ru' => 'Обогащение полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '370',
		'code' => '6N0412',
		'title_kk' => 'Операторлық өнер',
		'title_ru' => 'Операторское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '371',
		'code' => '6N0207',
		'title_kk' => 'Аударма ісі',
		'title_ru' => 'Переводческое дело',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '372',
		'code' => '6D072200',
		'title_kk' => 'Полиграфия',
		'title_ru' => 'Полиграфия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '373',
		'code' => '4603',
		'title_kk' => 'Селекция в животноводстве (Сельскохозяйственная биотехнология и селекция)',
		'title_ru' => 'Селекция в животноводстве (Сельскохозяйственная биотехнология и селекция)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '374',
		'code' => '10240',
		'title_kk' => 'Математик, системный программист',
		'title_ru' => 'Математик, системный программист',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '375',
		'code' => '5B041800',
		'title_kk' => '',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '376',
		'code' => '5B130100',
		'title_kk' => 'Жалпы медицина',
		'title_ru' => 'Общая медицина',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '377',
		'code' => '5B130200',
		'title_kk' => 'Стоматология',
		'title_ru' => 'Стоматология',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '378',
		'code' => '6N0719',
		'title_kk' => 'Радиотехника, электроника и телекоммуникации',
		'title_ru' => 'Радиотехника, электроника и телекоммуникации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '379',
		'code' => '6N0729',
		'title_kk' => 'Строительство',
		'title_ru' => 'Строительство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '380',
		'code' => '6N0717',
		'title_kk' => 'Теплоэнергетика',
		'title_ru' => 'Теплоэнергетика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '381',
		'code' => '6N0725',
		'title_kk' => 'Технология деревообработки',
		'title_ru' => 'Технология деревообработки',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '382',
		'code' => '6N0713',
		'title_kk' => 'Транспорт, транспортная техника и технологии',
		'title_ru' => 'Транспорт, транспортная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '383',
		'code' => '6N0716',
		'title_kk' => 'Приборостроение',
		'title_ru' => 'Приборостроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '384',
		'code' => '6N0718',
		'title_kk' => 'Электроэнергетика',
		'title_ru' => 'Электроэнергетика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '385',
		'code' => '6N0720',
		'title_kk' => 'Химическая технология неорганических веществ',
		'title_ru' => 'Химическая технология неорганических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '386',
		'code' => '6N0721',
		'title_kk' => 'Химическая технология органических веществ',
		'title_ru' => 'Химическая технология органических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '387',
		'code' => '6N0723',
		'title_kk' => 'Техническая физика',
		'title_ru' => 'Техническая физика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '388',
		'code' => '6N0724',
		'title_kk' => 'Технологические машины и оборудование (по отраслям)',
		'title_ru' => 'Технологические машины и оборудование (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '389',
		'code' => '6N0726',
		'title_kk' => 'Технология и конструирование изделий легкой промышленности',
		'title_ru' => 'Технология и конструирование изделий легкой промышленности',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '390',
		'code' => '6D073000',
		'title_kk' => 'Құрылыс материалдарын, бұйымдарын және құрастырылымдарын өндіру',
		'title_ru' => 'Производство строительных материалов, изделий и конструкций',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '391',
		'code' => '6D051600',
		'title_kk' => 'Халықаралық журналистика',
		'title_ru' => 'Международная журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '392',
		'code' => '6D051800',
		'title_kk' => 'Жобаны басқару',
		'title_ru' => 'Управление проектами',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '393',
		'code' => '50101',
		'title_kk' => 'Дошкольное обучение и воспитание',
		'title_ru' => 'Дошкольное обучение и воспитание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '394',
		'code' => '50102',
		'title_kk' => 'Педагогика и методика начального обучения',
		'title_ru' => 'Педагогика и методика начального обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '395',
		'code' => '6M030100',
		'title_kk' => 'Құқықтану',
		'title_ru' => 'Юриспруденция',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '396',
		'code' => '6D042000',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '397',
		'code' => '5B120100',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '398',
		'code' => '5B120200',
		'title_kk' => 'Ветеринарлық санитария',
		'title_ru' => 'Ветеринарная санитария',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '399',
		'code' => '5B091100',
		'title_kk' => 'Геодезия және картография',
		'title_ru' => 'Геодезия и картография',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '400',
		'code' => '6M070600',
		'title_kk' => 'Геология және пайдалы қазбалар кен орнын барлау',
		'title_ru' => 'Геология и разведка месторождений полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '401',
		'code' => '6M070700',
		'title_kk' => 'Тау-кен ісі',
		'title_ru' => 'Горное дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '402',
		'code' => '6M040500',
		'title_kk' => 'Дирижерлау',
		'title_ru' => 'Дирижирование',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '403',
		'code' => '6D060200',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '404',
		'code' => '6D060100',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '405',
		'code' => '50109',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '406',
		'code' => '6M070500',
		'title_kk' => 'Математикалық және компьютерлік модельдеу',
		'title_ru' => 'Математическое и компьютерное моделирование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '407',
		'code' => '6N0712',
		'title_kk' => 'Машина жасау',
		'title_ru' => 'Машиностроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '408',
		'code' => '6M020200',
		'title_kk' => 'Халықаралық қатынастар',
		'title_ru' => 'Международные отношения',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '409',
		'code' => '6M070900',
		'title_kk' => 'Металлургия',
		'title_ru' => 'Металлургия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '410',
		'code' => '6D060300',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '411',
		'code' => '6N0715',
		'title_kk' => 'Теңіз техникасы және технологиясы*',
		'title_ru' => 'Морская техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '412',
		'code' => '6M070800',
		'title_kk' => 'Мұнай-газ ісі',
		'title_ru' => 'Нефтегазовое дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '413',
		'code' => '50103',
		'title_kk' => 'Педагогика және психология',
		'title_ru' => 'Педагогика и психология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '414',
		'code' => '6D051900',
		'title_kk' => 'Еңбекті ұйымдастыру және нормалау',
		'title_ru' => 'Организация и нормирование труда',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '415',
		'code' => '6N0722',
		'title_kk' => 'Полиграфия',
		'title_ru' => 'Полиграфия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '416',
		'code' => '6N0118',
		'title_kk' => 'Русский язык и литература',
		'title_ru' => 'Русский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '417',
		'code' => '6N0119',
		'title_kk' => 'Иностранный язык: два иностранных языка',
		'title_ru' => 'Иностранный язык: два иностранных языка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '418',
		'code' => '6N0121',
		'title_kk' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'title_ru' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '419',
		'code' => '451300',
		'title_kk' => 'Механизация сельскохозяйственного производства',
		'title_ru' => 'Механизация сельскохозяйственного производства',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '420',
		'code' => '451700',
		'title_kk' => 'Стандартизация и сертификация сельскохозяйственной продукций',
		'title_ru' => 'Стандартизация и сертификация сельскохозяйственной продукций',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '421',
		'code' => '4505',
		'title_kk' => 'Агрохимия және өсімдіктерді қорғау',
		'title_ru' => 'Агрохимия және өсімдіктерді қорғау',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '422',
		'code' => '450800',
		'title_kk' => 'Технологияпроизводства и переработки продукции животноводства',
		'title_ru' => 'Технологияпроизводства и переработки продукции животноводства',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '423',
		'code' => '6N0711',
		'title_kk' => 'Геодезия и картография',
		'title_ru' => 'Геодезия и картография',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '424',
		'code' => '915',
		'title_kk' => 'Управление трудовыми ресурсами',
		'title_ru' => 'Управление трудовыми ресурсами',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '425',
		'code' => '10540',
		'title_kk' => 'Информатик',
		'title_ru' => 'Информатик',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '426',
		'code' => '10640',
		'title_kk' => 'Астроном',
		'title_ru' => 'Астроном',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '427',
		'code' => '10740',
		'title_kk' => 'Химик',
		'title_ru' => 'Химик',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '428',
		'code' => '10840',
		'title_kk' => 'Биолог',
		'title_ru' => 'Биолог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '429',
		'code' => '10900',
		'title_kk' => 'Экология и природопользование',
		'title_ru' => 'Экология и природопользование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '430',
		'code' => '10940',
		'title_kk' => 'Эколог',
		'title_ru' => 'Эколог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '431',
		'code' => '11040',
		'title_kk' => 'Географ',
		'title_ru' => 'Географ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '432',
		'code' => '11140',
		'title_kk' => 'Картограф',
		'title_ru' => 'Картограф',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '433',
		'code' => '70840',
		'title_kk' => 'Экономика и управление на предприятии',
		'title_ru' => 'Экономика и управление на предприятии',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '434',
		'code' => '520530',
		'title_kk' => 'Коммерция/Маркетинг',
		'title_ru' => 'Коммерция/Маркетинг',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '435',
		'code' => '430640',
		'title_kk' => 'Водоснабжение водоотведение и охрана водных ресурсов',
		'title_ru' => 'Водоснабжение, водоотведение и охрана водных ресурсов',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '436',
		'code' => '554330',
		'title_kk' => 'Строительство ',
		'title_ru' => 'Строительство ',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '437',
		'code' => '1301',
		'title_kk' => 'Материаловедение и технология новых материалов (по отраслям и областям применения)',
		'title_ru' => 'Материаловедение и технология новых материалов (по отраслям и областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '438',
		'code' => '1402',
		'title_kk' => 'Технологические машины и оборудования (по отраслям)',
		'title_ru' => 'Технологические машины и оборудования (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '439',
		'code' => '1401',
		'title_kk' => 'Эксплуатация технологических машин и оборудования (по отраслям)',
		'title_ru' => 'Эксплуатация технологических машин и оборудования (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '440',
		'code' => '613',
		'title_kk' => 'Дизайн (по профилю)',
		'title_ru' => 'Дизайн (по профилю)',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '441',
		'code' => '615',
		'title_kk' => 'Библиотековедение и библиография',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '442',
		'code' => '330740',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '443',
		'code' => '330840',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '444',
		'code' => '6N0112',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '445',
		'code' => '10600',
		'title_kk' => 'Астрономия',
		'title_ru' => 'Астрономия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '446',
		'code' => '6N0113',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '447',
		'code' => '10800',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '448',
		'code' => '6N0116',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '449',
		'code' => '11000',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '450',
		'code' => '612',
		'title_kk' => 'Сән өнері',
		'title_ru' => 'Декоративное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '451',
		'code' => '50105',
		'title_kk' => 'Дефектология',
		'title_ru' => 'Дефектология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '452',
		'code' => '4002',
		'title_kk' => 'Земельный кадастр и оценка недвижимости',
		'title_ru' => 'Земельный кадастр и оценка недвижимости',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '453',
		'code' => '10500',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '454',
		'code' => '611',
		'title_kk' => 'Өнертану',
		'title_ru' => 'Искусствоведение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '455',
		'code' => '6N0114',
		'title_kk' => 'Тарих',
		'title_ru' => 'История',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '456',
		'code' => '50106',
		'title_kk' => 'Музыкалық білім',
		'title_ru' => 'Музыкальное образование',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '457',
		'code' => '50104',
		'title_kk' => 'Алғашқы әскери дайындық',
		'title_ru' => 'Начальная военная подготовка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '458',
		'code' => '6N0115',
		'title_kk' => 'Құқық және экономика негіздері',
		'title_ru' => 'Основы права и экономики',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '459',
		'code' => '5B073500',
		'title_kk' => 'Тағам қауіпсіздігі',
		'title_ru' => 'Пищевая безопасность',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '460',
		'code' => '701',
		'title_kk' => 'Политэкономия',
		'title_ru' => 'Политэкономия',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '461',
		'code' => '440240',
		'title_kk' => 'Строительство автомобильных дорог и аэродромов',
		'title_ru' => 'Строительство автомобильных дорог и аэродромов',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '462',
		'code' => '520830',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '463',
		'code' => '2802',
		'title_kk' => 'Сельскохозяйственные машиностроение',
		'title_ru' => 'Сельскохозяйственные машиностроение',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '464',
		'code' => '4506',
		'title_kk' => 'Селекция сельскохояйственных культур',
		'title_ru' => 'Селекция сельскохояйственных культур',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '465',
		'code' => '4104',
		'title_kk' => 'Технология швейных изделий',
		'title_ru' => 'Технология швейных изделий',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '466',
		'code' => '1905',
		'title_kk' => 'Горные машины и оборудование',
		'title_ru' => 'Горные машины и оборудование',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '467',
		'code' => '4303',
		'title_kk' => 'Городское строительство и хозяйство',
		'title_ru' => 'Городское строительство и хозяйство',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '468',
		'code' => '4211',
		'title_kk' => 'Машины и аппараты пищевых производств',
		'title_ru' => 'Машины и аппараты пищевых производств',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '469',
		'code' => '2906',
		'title_kk' => 'Производство строительных изделий и конструкций',
		'title_ru' => 'Производство строительных изделий и конструкций',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '470',
		'code' => '1504',
		'title_kk' => 'Подъемно-транспортные машины',
		'title_ru' => 'Подъемно-транспортные машины',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '471',
		'code' => '3603',
		'title_kk' => 'Автоматизация технологических процессов и производств',
		'title_ru' => 'Автоматизация технологических процессов и производств',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '472',
		'code' => '2104',
		'title_kk' => 'Электроснабжение и электрификация (по отраслям)',
		'title_ru' => 'Электроснабжение и электрификация (по отраслям)',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '473',
		'code' => '1903',
		'title_kk' => 'Открытая разработка месторождений полезных ископаемых',
		'title_ru' => 'Открытая разработка месторождений полезных ископаемых',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '474',
		'code' => '6D090200',
		'title_kk' => 'Туризм',
		'title_ru' => 'Туризм',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '475',
		'code' => '6R111200',
		'title_kk' => '',
		'title_ru' => 'Профессиональная патология',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '476',
		'code' => '6R110300',
		'title_kk' => 'Кардиология, соның ішінде балалар кардиологиясы',
		'title_ru' => 'Кардиология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '477',
		'code' => '6R111600',
		'title_kk' => '',
		'title_ru' => 'Психиатрия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '478',
		'code' => '6R111900',
		'title_kk' => 'Сәулелі диагностика',
		'title_ru' => 'Лучевая диагностика',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '479',
		'code' => '6R112000',
		'title_kk' => '',
		'title_ru' => 'Лучевая терапия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '480',
		'code' => '6R112600',
		'title_kk' => '',
		'title_ru' => 'Анестезиология и реаниматология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '481',
		'code' => '6R112800',
		'title_kk' => '',
		'title_ru' => 'Кардиохирургия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '482',
		'code' => '6R113300',
		'title_kk' => 'Балалар хирургиясы',
		'title_ru' => 'Детская хирургия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '483',
		'code' => '4509',
		'title_kk' => 'Охотоведение и звереводство',
		'title_ru' => 'Охотоведение и звереводство',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '484',
		'code' => '4510',
		'title_kk' => 'Ихтиология, промышленное рыболовство и рыбохозяйство',
		'title_ru' => 'Ихтиология, промышленное рыболовство и рыбохозяйство',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '485',
		'code' => '4606',
		'title_kk' => 'Менеджмент в животнодстве',
		'title_ru' => 'Менеджмент в животнодстве',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '486',
		'code' => '70440',
		'title_kk' => 'Менеджер',
		'title_ru' => 'Менеджер',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '487',
		'code' => '6R112100',
		'title_kk' => '',
		'title_ru' => 'Функциональная диагностика',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '488',
		'code' => '50303',
		'title_kk' => 'Правоохранительная деятельность',
		'title_ru' => 'Правоохранительная деятельность',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '489',
		'code' => '50211',
		'title_kk' => 'Теология',
		'title_ru' => 'Теология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '490',
		'code' => '50301',
		'title_kk' => 'Юриспруденция',
		'title_ru' => 'Юриспруденция',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '491',
		'code' => '50304',
		'title_kk' => 'Таможенное дело',
		'title_ru' => 'Таможенное дело',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '492',
		'code' => '522430',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '493',
		'code' => '522530',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '494',
		'code' => '70640',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '495',
		'code' => '50208',
		'title_kk' => 'Археология және этнология',
		'title_ru' => 'Археология и этнология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '496',
		'code' => '620',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '497',
		'code' => '50140',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '498',
		'code' => '50209',
		'title_kk' => 'Шығыстану',
		'title_ru' => 'Востоковедение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '499',
		'code' => '609',
		'title_kk' => 'Графика',
		'title_ru' => 'Графика',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '500',
		'code' => '608',
		'title_kk' => 'Кескіндеме',
		'title_ru' => 'Живопись',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '501',
		'code' => '6M041300',
		'title_kk' => 'Кескіндеме',
		'title_ru' => 'Живопись',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '502',
		'code' => '4501',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '503',
		'code' => '50713',
		'title_kk' => 'Транспорт, транспортная техника и технологии',
		'title_ru' => 'Транспорт, транспортная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '504',
		'code' => '50210',
		'title_kk' => 'Шетел филологиясы',
		'title_ru' => 'Иностранная филология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '505',
		'code' => '5B070300',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '506',
		'code' => '50203',
		'title_kk' => 'Тарих',
		'title_ru' => 'История',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '507',
		'code' => '50302',
		'title_kk' => 'Халықаралық құқық',
		'title_ru' => 'Международное право',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '508',
		'code' => '50401',
		'title_kk' => 'Музыкатану',
		'title_ru' => 'Музыковедение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '509',
		'code' => '5B073900',
		'title_kk' => 'Мұнай химиясы',
		'title_ru' => 'Нефтехимия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '510',
		'code' => '50717',
		'title_kk' => 'Теплоэнергетика',
		'title_ru' => 'Теплоэнергетика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '511',
		'code' => '50711',
		'title_kk' => 'Геодезия и картография',
		'title_ru' => 'Геодезия и картография',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '512',
		'code' => '50713',
		'title_kk' => 'Транспорт, транспортная техника и технологии',
		'title_ru' => 'Транспорт, транспортная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '513',
		'code' => '50716',
		'title_kk' => 'Приборостроение',
		'title_ru' => 'Приборостроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '514',
		'code' => '50718',
		'title_kk' => 'Электроэнергетика',
		'title_ru' => 'Электроэнергетика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '515',
		'code' => '3201',
		'title_kk' => 'Прикладная геодезия',
		'title_ru' => 'Прикладная геодезия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '516',
		'code' => '3301',
		'title_kk' => 'Электромеханика',
		'title_ru' => 'Электромеханика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '517',
		'code' => '50730',
		'title_kk' => 'Производство строительных материалов, изделий и конструкций',
		'title_ru' => 'Производство строительных материалов, изделий и конструкций',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '518',
		'code' => '50732',
		'title_kk' => 'Стандартизация, метрология и сертификация',
		'title_ru' => 'Стандартизация, метрология и сертификация',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '519',
		'code' => '50733',
		'title_kk' => 'Технология и проектирование текстильных материалов',
		'title_ru' => 'Технология и проектирование текстильных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '520',
		'code' => '50802',
		'title_kk' => 'Зоотехния',
		'title_ru' => 'Зоотехния',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '521',
		'code' => '180340',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '522',
		'code' => '50421',
		'title_kk' => 'Дизайн*',
		'title_ru' => 'Дизайн*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '523',
		'code' => '6D050400',
		'title_kk' => 'Журналистика',
		'title_ru' => 'Журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '524',
		'code' => '50415',
		'title_kk' => 'Скульптура*',
		'title_ru' => 'Скульптура*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '525',
		'code' => '6D050600',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '526',
		'code' => '6D041900',
		'title_kk' => 'Мұражай ісі және ескерткіштерді қорғау',
		'title_ru' => 'Музейное дело и охрана памятников',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '527',
		'code' => '6D050100',
		'title_kk' => 'Әлеуметтану',
		'title_ru' => 'Социология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '528',
		'code' => '6D050700',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '529',
		'code' => '370240',
		'title_kk' => 'Системы автоматизированного проектирования',
		'title_ru' => 'Системы автоматизированного проектирования',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '530',
		'code' => '51201',
		'title_kk' => 'Ветеринарная медицина (Общая медицина)',
		'title_ru' => 'Ветеринарная медицина (Общая медицина)',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '531',
		'code' => '5B073600',
		'title_kk' => 'Азық-түлік емес заттар және бұйымдар қауіпсіздігі',
		'title_ru' => 'Безопасность непродовольственных товаров и изделий',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '532',
		'code' => '6D050200',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '533',
		'code' => '6D050500',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '534',
		'code' => '6D050800',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '535',
		'code' => '50714',
		'title_kk' => 'Авиациялық техника және технологиялар',
		'title_ru' => 'Авиационная техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '536',
		'code' => '50801',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '537',
		'code' => '6M040700',
		'title_kk' => 'Актерлік өнер',
		'title_ru' => 'Актерское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '538',
		'code' => '6D042300',
		'title_kk' => 'Арт-менеджмент',
		'title_ru' => 'Арт-менеджмент',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '539',
		'code' => '50731',
		'title_kk' => 'Қоршаған ортаны қорғау және өмір тіршілігінің қауіпсіздігі',
		'title_ru' => 'Безопасность жизнедеятельности и защита окружающей среды',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '540',
		'code' => '50704',
		'title_kk' => 'Есептеу техникасы және бағдарламалық қамтамасыз ету',
		'title_ru' => 'Вычислительная техника и программное обеспечение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '541',
		'code' => '50706',
		'title_kk' => 'Геология және пайдалы қазбалар кен орнын барлау',
		'title_ru' => 'Геология и разведка месторождений полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '542',
		'code' => '50707',
		'title_kk' => 'Тау-кен ісі',
		'title_ru' => 'Горное дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '543',
		'code' => '6D041700',
		'title_kk' => 'Сән өнері',
		'title_ru' => 'Декоративное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '544',
		'code' => '6M042100',
		'title_kk' => 'Дизайн',
		'title_ru' => 'Дизайн',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '545',
		'code' => '6D042100',
		'title_kk' => 'Дизайн',
		'title_ru' => 'Дизайн',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '546',
		'code' => '6N0421',
		'title_kk' => 'Дизайн',
		'title_ru' => 'Дизайн',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '547',
		'code' => '6D042200',
		'title_kk' => 'Баспа ісі',
		'title_ru' => 'Издательское дело',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '548',
		'code' => '50703',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '549',
		'code' => '6D041600',
		'title_kk' => 'Өнертану',
		'title_ru' => 'Искусствоведение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '550',
		'code' => '3501',
		'title_kk' => 'Электронные системы и технологии',
		'title_ru' => 'Электронные системы и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '551',
		'code' => '50705',
		'title_kk' => 'Математикалық және компьютерлік модельдеу',
		'title_ru' => 'Математическое и компьютерное моделирование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '552',
		'code' => '50710',
		'title_kk' => 'Материал тану және жаңа материалдар технологиясы',
		'title_ru' => 'Материаловедение и технология новых материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '553',
		'code' => '50712',
		'title_kk' => 'Машина жасау',
		'title_ru' => 'Машиностроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '554',
		'code' => '50709',
		'title_kk' => 'Металлургия',
		'title_ru' => 'Металлургия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '555',
		'code' => '50715',
		'title_kk' => 'Теңіз техникасы және технологиясы*',
		'title_ru' => 'Морская техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '556',
		'code' => '50708',
		'title_kk' => 'Мұнай-газ ісі',
		'title_ru' => 'Нефтегазовое дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '557',
		'code' => '6D090800',
		'title_kk' => 'Бағалау',
		'title_ru' => 'Оценка',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '558',
		'code' => '50501',
		'title_kk' => 'Социология',
		'title_ru' => 'Социология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '559',
		'code' => '50604',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '560',
		'code' => '50605',
		'title_kk' => 'Ядерная физика*',
		'title_ru' => 'Ядерная физика*',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '561',
		'code' => '6D010800',
		'title_kk' => 'Дене шынықтыру және спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '562',
		'code' => '50610',
		'title_kk' => 'Гидрометеорология',
		'title_ru' => 'Гидрометеорология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '563',
		'code' => '6D072500',
		'title_kk' => 'Ағаш өңдеу және ағаштан бұйымдар жасау технологиясы (сала бойынша)',
		'title_ru' => 'Технология деревообработки и изделий из дерева (по областям применения)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '564',
		'code' => '6N0211',
		'title_kk' => 'Теология',
		'title_ru' => 'Теология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '565',
		'code' => '6N0301',
		'title_kk' => 'Юриспруденция',
		'title_ru' => 'Юриспруденция',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '566',
		'code' => '110600',
		'title_kk' => 'Гидроаэродинамика',
		'title_ru' => 'Гидроаэродинамика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '567',
		'code' => '6N0303',
		'title_kk' => 'Правоохранительная деятельность',
		'title_ru' => 'Правоохранительная деятельность',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '568',
		'code' => '6N0304',
		'title_kk' => 'Таможенное дело',
		'title_ru' => 'Таможенное дело',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '569',
		'code' => '5B110300',
		'title_kk' => 'Фармация *',
		'title_ru' => 'Фармация*',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '570',
		'code' => '6N0404',
		'title_kk' => 'Традиционное музыкальное искусство',
		'title_ru' => 'Традиционное музыкальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '571',
		'code' => '6N0418',
		'title_kk' => 'Библиотековедение и библиография',
		'title_ru' => 'Библиотековедение и библиография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '572',
		'code' => '6N0419',
		'title_kk' => 'Музейное дело и охрана памятников',
		'title_ru' => 'Музейное дело и охрана памятников',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '573',
		'code' => '50502',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '574',
		'code' => '50505',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '575',
		'code' => '50508',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '576',
		'code' => '50509',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '577',
		'code' => '70400',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '578',
		'code' => '6D051100',
		'title_kk' => 'Маркетинг',
		'title_ru' => 'Маркетинг',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '579',
		'code' => '50511',
		'title_kk' => 'Маркетинг',
		'title_ru' => 'Маркетинг',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '580',
		'code' => '6D051200',
		'title_kk' => 'Статистика',
		'title_ru' => 'Статистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '581',
		'code' => '6D051300',
		'title_kk' => 'Әлемдік экономика',
		'title_ru' => 'Мировая экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '582',
		'code' => '6M060500',
		'title_kk' => 'Ядролық физика',
		'title_ru' => 'Ядерная физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '583',
		'code' => '6D051500',
		'title_kk' => 'Мұрағаттану, құжаттар жүргізу және құжаттамалық қамтамасыз ету',
		'title_ru' => 'Архивоведение, документоведение и документационное обеспечение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '584',
		'code' => '6N0420',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '585',
		'code' => '50611',
		'title_kk' => 'Астрономия',
		'title_ru' => 'Астрономия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '586',
		'code' => '6M061100',
		'title_kk' => 'Астрономия',
		'title_ru' => 'Астрономия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '587',
		'code' => '50607',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '588',
		'code' => '6M060700',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '589',
		'code' => '6M070100',
		'title_kk' => 'Биотехнология',
		'title_ru' => 'Биотехнология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '590',
		'code' => '6N0209',
		'title_kk' => 'Шығыстану',
		'title_ru' => 'Востоковедение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '591',
		'code' => '50609',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '592',
		'code' => '6M060900',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '593',
		'code' => '6M060400',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '594',
		'code' => '6M051800',
		'title_kk' => 'Жобаны басқару',
		'title_ru' => 'Управление проектами',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '595',
		'code' => '6M061000',
		'title_kk' => 'Гидрология',
		'title_ru' => 'Гидрология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '596',
		'code' => '6M040400',
		'title_kk' => 'Дәстүрлі музыка өнері',
		'title_ru' => 'Традиционное музыкальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '597',
		'code' => '50422',
		'title_kk' => 'Баспа ісі',
		'title_ru' => 'Издательское дело',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '598',
		'code' => '6N0422',
		'title_kk' => 'Баспа ісі',
		'title_ru' => 'Издательское дело',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '599',
		'code' => '6N0210',
		'title_kk' => 'Шетел филологиясы',
		'title_ru' => 'Иностранная филология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '600',
		'code' => '50602',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '601',
		'code' => '6M060200',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '602',
		'code' => '6M030400',
		'title_kk' => 'Кеден ісі',
		'title_ru' => 'Таможенное дело',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '603',
		'code' => '6N0302',
		'title_kk' => 'Халықаралық құқық',
		'title_ru' => 'Международное право',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '604',
		'code' => '6M030200',
		'title_kk' => 'Халықаралық құқық',
		'title_ru' => 'Международное право',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '605',
		'code' => '6M061200',
		'title_kk' => 'Метеорология',
		'title_ru' => 'Метеорология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '606',
		'code' => '50603',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '607',
		'code' => '6M060300',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '608',
		'code' => '6D010600',
		'title_kk' => 'Музыкалық білім',
		'title_ru' => 'Музыкальное образование',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '609',
		'code' => '6N0401',
		'title_kk' => 'Музыкатану',
		'title_ru' => 'Музыковедение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '610',
		'code' => '6M040100',
		'title_kk' => 'Музыкатану',
		'title_ru' => 'Музыковедение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '611',
		'code' => '50608',
		'title_kk' => 'Экология',
		'title_ru' => 'Экология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '612',
		'code' => '50506',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '613',
		'code' => '6N0501',
		'title_kk' => 'Социология',
		'title_ru' => 'Социология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '614',
		'code' => '6N0605',
		'title_kk' => 'Ядерная физика',
		'title_ru' => 'Ядерная физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '615',
		'code' => '6N0610',
		'title_kk' => 'Гидрометеорология',
		'title_ru' => 'Гидрометеорология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '616',
		'code' => '4507',
		'title_kk' => 'Фермерское дело',
		'title_ru' => 'Фермерское дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '617',
		'code' => '50108',
		'title_kk' => 'Физическая культура и спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '618',
		'code' => '50117',
		'title_kk' => 'Казахский язык и литература',
		'title_ru' => 'Казахский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '619',
		'code' => '50118',
		'title_kk' => 'Русский язык и литература',
		'title_ru' => 'Русский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '620',
		'code' => '50119',
		'title_kk' => 'Иностранный язык: два иностранных языка',
		'title_ru' => 'Иностранный язык: два иностранных языка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '621',
		'code' => '450640',
		'title_kk' => 'Селекция и биотехнология в растениеводстве',
		'title_ru' => 'Селекция и биотехнология в растениеводстве',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '622',
		'code' => '50121',
		'title_kk' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'title_ru' => 'Казахский язык и литература в школах с неказахским языком обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '623',
		'code' => '50201',
		'title_kk' => 'Философия',
		'title_ru' => 'Философия',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '624',
		'code' => '10340',
		'title_kk' => 'Механик',
		'title_ru' => 'Механик',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '625',
		'code' => '10400',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '626',
		'code' => '10440',
		'title_kk' => 'Физик',
		'title_ru' => 'Физик',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '627',
		'code' => '6N0101',
		'title_kk' => 'Дошкольное обучение и воспитание',
		'title_ru' => 'Дошкольное обучение и воспитание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '628',
		'code' => '6N0504',
		'title_kk' => 'Журналистика',
		'title_ru' => 'Журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '629',
		'code' => '50606',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '630',
		'code' => '107',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '631',
		'code' => '6N0502',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '632',
		'code' => '6N0505',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '633',
		'code' => '6N0508',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '634',
		'code' => '6N0509',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '635',
		'code' => '6N0510',
		'title_kk' => 'Мемлекеттік және жергілікті басқару',
		'title_ru' => 'Государственное и местное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '636',
		'code' => '6N0511',
		'title_kk' => 'Маркетинг',
		'title_ru' => 'Маркетинг',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '637',
		'code' => '6N0702',
		'title_kk' => 'Автоматтандыру және басқару',
		'title_ru' => 'Автоматизация и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '638',
		'code' => '6N0611',
		'title_kk' => 'Астрономия',
		'title_ru' => 'Астрономия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '639',
		'code' => '6D073100',
		'title_kk' => 'Қоршаған ортаны қорғау және өмір тіршілігінің қауіпсіздігі',
		'title_ru' => 'Безопасность жизнедеятельности и защита окружающей среды',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '640',
		'code' => '6N0607',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '641',
		'code' => '50113',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '642',
		'code' => '6N0701',
		'title_kk' => 'Биотехнология',
		'title_ru' => 'Биотехнология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '643',
		'code' => '50116',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '644',
		'code' => '6N0609',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '645',
		'code' => '6N0706',
		'title_kk' => 'Геология және пайдалы қазбалар кен орнын барлау',
		'title_ru' => 'Геология и разведка месторождений полезных ископаемых',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '646',
		'code' => '6N0405',
		'title_kk' => 'Дирижерлау',
		'title_ru' => 'Дирижирование',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '647',
		'code' => '50107',
		'title_kk' => 'Бейнелеу өнері және сызу',
		'title_ru' => 'Изобразительное искусство и черчение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '648',
		'code' => '6N0602',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '649',
		'code' => '50111',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '650',
		'code' => '6N0703',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '651',
		'code' => '50601',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '652',
		'code' => '6M060100',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '653',
		'code' => '6N0705',
		'title_kk' => 'Математикалық және компьютерлік модельдеу',
		'title_ru' => 'Математическое и компьютерное моделирование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '654',
		'code' => '50202',
		'title_kk' => 'Халықаралық қатынастар',
		'title_ru' => 'Международные отношения',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '655',
		'code' => '6M040600',
		'title_kk' => 'Режиссура',
		'title_ru' => 'Режиссура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '656',
		'code' => '6N0603',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '657',
		'code' => '10300',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '658',
		'code' => '6M030300',
		'title_kk' => 'Құқық қорғау қызметі',
		'title_ru' => 'Правоохранительная деятельность',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '659',
		'code' => '50115',
		'title_kk' => 'Құқық және экономика негіздері',
		'title_ru' => 'Основы права и экономики',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '660',
		'code' => '6N0103',
		'title_kk' => 'Педагогика және психология',
		'title_ru' => 'Педагогика и психология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '661',
		'code' => '6M072200',
		'title_kk' => 'Полиграфия',
		'title_ru' => 'Полиграфия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '662',
		'code' => '50120',
		'title_kk' => 'Профессиональное обучение',
		'title_ru' => 'Профессиональное обучение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '663',
		'code' => '6D073200',
		'title_kk' => 'Стандарттау және сертификаттау',
		'title_ru' => 'Стандартизация и сертификация',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '664',
		'code' => '6N0608',
		'title_kk' => 'Экология',
		'title_ru' => 'Экология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '665',
		'code' => '6N0735',
		'title_kk' => 'Тағам қауіпсіздігі',
		'title_ru' => 'Пищевая безопасность',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '666',
		'code' => '6N0506',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '667',
		'code' => '6N0108',
		'title_kk' => 'Физическая культура и спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '668',
		'code' => '104',
		'title_kk' => 'Физика (специализация - астрономия)',
		'title_ru' => 'Физика (специализация - астрономия)',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '669',
		'code' => '320',
		'title_kk' => 'Социальная педагогика',
		'title_ru' => 'Социальная педагогика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '670',
		'code' => '401',
		'title_kk' => 'Лечебное дело',
		'title_ru' => 'Лечебное дело',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '671',
		'code' => '403',
		'title_kk' => 'Гигиена и эпидемиология',
		'title_ru' => 'Гигиена и эпидемиология',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '673',
		'code' => '405',
		'title_kk' => 'Фармация',
		'title_ru' => 'Фармация',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '674',
		'code' => '407',
		'title_kk' => 'Клиническая фармация',
		'title_ru' => 'Клиническая фармация',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '676',
		'code' => '408',
		'title_kk' => 'Медико-биологическое дело',
		'title_ru' => 'Медико-биологическое дело',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '677',
		'code' => '307',
		'title_kk' => 'Казахский язык и литература, иностранный язык',
		'title_ru' => 'Казахский язык и литература, иностранный язык',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '678',
		'code' => '311',
		'title_kk' => 'Физическая культура и спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '679',
		'code' => '705',
		'title_kk' => 'Маркетинг и коммерция',
		'title_ru' => 'Маркетинг и коммерция',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '680',
		'code' => '451500',
		'title_kk' => 'Лесное и парковое хозяйство',
		'title_ru' => 'Лесное и парковое хозяйство',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '681',
		'code' => '522200',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '682',
		'code' => '11240',
		'title_kk' => 'Метеоролог',
		'title_ru' => 'Метеоролог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '683',
		'code' => '11340',
		'title_kk' => 'Гидролог',
		'title_ru' => 'Гидролог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '684',
		'code' => '11400',
		'title_kk' => 'Геология',
		'title_ru' => 'Геология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '685',
		'code' => '11440',
		'title_kk' => 'Геолог',
		'title_ru' => 'Геолог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '686',
		'code' => '11500',
		'title_kk' => 'Валеология',
		'title_ru' => 'Валеология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '687',
		'code' => '11540',
		'title_kk' => 'Валеолог',
		'title_ru' => 'Валеолог',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '688',
		'code' => '20100',
		'title_kk' => 'Философия',
		'title_ru' => 'Философия',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '689',
		'code' => '20140',
		'title_kk' => 'Философ',
		'title_ru' => 'Философ',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '690',
		'code' => '20240',
		'title_kk' => 'Политолог',
		'title_ru' => 'Политолог',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '691',
		'code' => '20340',
		'title_kk' => 'Историк, преподаватель истории',
		'title_ru' => 'Историк, преподаватель истории',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '692',
		'code' => '20440',
		'title_kk' => 'Культуролог',
		'title_ru' => 'Культуролог',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '693',
		'code' => '20640',
		'title_kk' => 'Регионовед',
		'title_ru' => 'Регионовед',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '694',
		'code' => '20700',
		'title_kk' => 'Социология',
		'title_ru' => 'Социология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '695',
		'code' => '6N0606',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '696',
		'code' => '50112',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '697',
		'code' => '20200',
		'title_kk' => 'Саясаттану',
		'title_ru' => 'Политология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '698',
		'code' => '20600',
		'title_kk' => 'Аймақтану',
		'title_ru' => 'Регионоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '699',
		'code' => '522400',
		'title_kk' => 'Есеп және аудит',
		'title_ru' => 'Учет и аудит',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '700',
		'code' => '522500',
		'title_kk' => 'Қаржы',
		'title_ru' => 'Финансы',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '701',
		'code' => '501',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '702',
		'code' => '108',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '703',
		'code' => '11300',
		'title_kk' => 'Гидрология',
		'title_ru' => 'Гидрология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '704',
		'code' => '6N0707',
		'title_kk' => 'Тау-кен ісі',
		'title_ru' => 'Горное дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '705',
		'code' => '6M041400',
		'title_kk' => 'Графика',
		'title_ru' => 'Графика',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '706',
		'code' => '6N0105',
		'title_kk' => 'Дефектология',
		'title_ru' => 'Дефектология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '707',
		'code' => '6N0111',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '708',
		'code' => '105',
		'title_kk' => 'Информатика',
		'title_ru' => 'Информатика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '709',
		'code' => '20300',
		'title_kk' => 'Тарих',
		'title_ru' => 'История',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '710',
		'code' => '11100',
		'title_kk' => 'Картография',
		'title_ru' => 'Картография',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '711',
		'code' => '6N0601',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '712',
		'code' => '20400',
		'title_kk' => 'Мәдениеттану',
		'title_ru' => 'Культурология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '713',
		'code' => '6N0709',
		'title_kk' => 'Металлургия',
		'title_ru' => 'Металлургия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '714',
		'code' => '11200',
		'title_kk' => 'Метеорология',
		'title_ru' => 'Метеорология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '715',
		'code' => '103',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '716',
		'code' => '6N0106',
		'title_kk' => 'Музыкалық білім',
		'title_ru' => 'Музыкальное образование',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '717',
		'code' => '6N0104',
		'title_kk' => 'Алғашқы әскери дайындық',
		'title_ru' => 'Начальная военная подготовка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '718',
		'code' => '6N0708',
		'title_kk' => 'Мұнай-газ ісі',
		'title_ru' => 'Нефтегазовое дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '719',
		'code' => '90940',
		'title_kk' => 'Бағалау',
		'title_ru' => 'Оценка',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '720',
		'code' => '4602',
		'title_kk' => 'Охотоведение и звероводство',
		'title_ru' => 'Охотоведение и звероводство',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '721',
		'code' => '4605',
		'title_kk' => 'Промышленное рыболовство',
		'title_ru' => 'Промышленное рыболовство',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '722',
		'code' => '702',
		'title_kk' => 'Экономика и менеджмент в АПК',
		'title_ru' => 'Экономика и менеджмент в АПК',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '723',
		'code' => '313',
		'title_kk' => 'Профессиональное обучение (по профилю)',
		'title_ru' => 'Профессиональное обучение (по профилю)',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '724',
		'code' => '6N0110',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '725',
		'code' => '3114',
		'title_kk' => 'Электрификация и автоматизация сельского хозяйства',
		'title_ru' => 'Электрификация и автоматизация сельского хозяйства',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '726',
		'code' => '2105',
		'title_kk' => 'Электрификация и автоматизация сельского хозяйства',
		'title_ru' => 'Электрификация и автоматизация сельского хозяйства',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '727',
		'code' => '6R113400',
		'title_kk' => 'Онкология, соның ішінде балалар онколлогиясы',
		'title_ru' => 'Онкология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '728',
		'code' => '450740',
		'title_kk' => 'Селекция и биотехнология в животноводстве',
		'title_ru' => 'Селекция и биотехнология в животноводстве',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '729',
		'code' => '705',
		'title_kk' => 'Маркетинг и коммерция',
		'title_ru' => 'Маркетинг и коммерция',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '730',
		'code' => '6R113500',
		'title_kk' => 'Травматология-ортопедия, соның ішінде балалар травматологиясы-ортопедиясы',
		'title_ru' => 'Травматология-ортопедия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '731',
		'code' => '6R113600',
		'title_kk' => 'Урология және андрология, соның ішінде балалар урологиясы және андрологиясы',
		'title_ru' => 'Урология и андрология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '732',
		'code' => '6R113700',
		'title_kk' => 'Офтальмология, соның ішінде балалар офтальмологиясы',
		'title_ru' => 'Офтальмология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '733',
		'code' => '6R113800',
		'title_kk' => 'Оториноларингология, соның ішінде балалар оториноларингологиясы',
		'title_ru' => 'Оториноларингология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '734',
		'code' => '6R113900',
		'title_kk' => 'Патологиялық анатомия, соның ішінде балалар патологиялық анатомиясы',
		'title_ru' => 'Патологическая анатомия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '735',
		'code' => '6R114300',
		'title_kk' => 'Неонатология',
		'title_ru' => 'Неонатология',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '736',
		'code' => '6R114400',
		'title_kk' => 'Акушерия және гинекология, соның ішінде балалар акушериясы және гинекологиясы',
		'title_ru' => 'Акушерство и гинекология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '737',
		'code' => '5B075200',
		'title_kk' => '',
		'title_ru' => 'Инженерные системы и сети',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '738',
		'code' => '5B075300',
		'title_kk' => '',
		'title_ru' => 'Химическая технология тугоплавких неметаллических и силикатных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '739',
		'code' => '6D075200',
		'title_kk' => '',
		'title_ru' => 'Инженерные системы и сети',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '740',
		'code' => '6D075300',
		'title_kk' => '',
		'title_ru' => 'Химическая технология тугоплавких неметаллических и силикатных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '741',
		'code' => '6D075400',
		'title_kk' => '',
		'title_ru' => 'Производство космических аппаратов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '742',
		'code' => '6D075500',
		'title_kk' => '',
		'title_ru' => 'Гидрогеология и инженерная геология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '743',
		'code' => '6M075200',
		'title_kk' => '',
		'title_ru' => 'Инженерные системы и сети',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '744',
		'code' => '6M075300',
		'title_kk' => '',
		'title_ru' => 'Химическая технология тугоплавких неметаллических и силикатных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '745',
		'code' => '6M075400',
		'title_kk' => '',
		'title_ru' => 'Производство космических аппаратов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '746',
		'code' => '6M075500',
		'title_kk' => '',
		'title_ru' => 'Гидрогеология и инженерная геология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '747',
		'code' => '6R110200',
		'title_kk' => '',
		'title_ru' => 'Общая врачебная практика',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '748',
		'code' => '6R110100',
		'title_kk' => '',
		'title_ru' => 'Терапия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '749',
		'code' => '6R111700',
		'title_kk' => '',
		'title_ru' => 'Детская психиатрия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '750',
		'code' => '6R110400',
		'title_kk' => '',
		'title_ru' => 'Ревматология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '751',
		'code' => '6R110500',
		'title_kk' => '',
		'title_ru' => 'Аллергология и иммунология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '752',
		'code' => '6R110600',
		'title_kk' => '',
		'title_ru' => 'Гастроэнтерология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '753',
		'code' => '6R110700',
		'title_kk' => '',
		'title_ru' => 'Гематология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '754',
		'code' => '6R110800',
		'title_kk' => '',
		'title_ru' => 'Пульмонология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '755',
		'code' => '6R110900',
		'title_kk' => '',
		'title_ru' => 'Эндокринология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '756',
		'code' => '6R111500',
		'title_kk' => 'Неврология, соның ішінде балалар неврологиясы',
		'title_ru' => 'Невропатология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '757',
		'code' => '6R111300',
		'title_kk' => 'Жұқпалы аурулар, соның ішінде балалар жұқпалы аурулары',
		'title_ru' => 'Инфекционные болезни, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '758',
		'code' => '6M040800',
		'title_kk' => 'Эстрада өнері',
		'title_ru' => 'Искусство эстрады',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '759',
		'code' => '6M041100',
		'title_kk' => 'Композиция',
		'title_ru' => 'Композиция',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '760',
		'code' => '6M041000',
		'title_kk' => 'Сценография',
		'title_ru' => 'Сценография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '761',
		'code' => '6N0109',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '762',
		'code' => '50204',
		'title_kk' => 'Мәдениеттану',
		'title_ru' => 'Культурология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '763',
		'code' => '6M041200',
		'title_kk' => 'Операторлық өнер',
		'title_ru' => 'Операторское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '764',
		'code' => '370440',
		'title_kk' => 'Программное и аппаратное обеспечение вычислительной техники и сетей',
		'title_ru' => 'Программное и аппаратное обеспечение вычислительной техники и сетей',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '765',
		'code' => '3405',
		'title_kk' => 'Метрология и метрологическое обеспечение',
		'title_ru' => 'Метрология и метрологическое обеспечение',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '766',
		'code' => '3702',
		'title_kk' => 'Автоматизированные информационные системы',
		'title_ru' => 'Автоматизированные информационные системы',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '767',
		'code' => '1403',
		'title_kk' => 'Машины и оборудования металлургических предприятий',
		'title_ru' => 'Машины и оборудования металлургических предприятий',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '768',
		'code' => '5B074100',
		'title_kk' => 'Картография',
		'title_ru' => 'Картография',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '769',
		'code' => '6R111800',
		'title_kk' => 'Медициналық реабилитология, соның ішінде балалар медициналық реабилитологиясы',
		'title_ru' => 'Медицинская реабилитология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '770',
		'code' => '6R112200',
		'title_kk' => '',
		'title_ru' => 'Клиническая лабораторная диагностика',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '771',
		'code' => '6R112300',
		'title_kk' => '',
		'title_ru' => 'Спортивная медицина',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '772',
		'code' => '6R112400',
		'title_kk' => '',
		'title_ru' => 'Гериатрия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '773',
		'code' => '6R112500',
		'title_kk' => 'Клиникалық фармакология',
		'title_ru' => 'Клиническая фармакология',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '774',
		'code' => '6R112700',
		'title_kk' => 'Жалпы хирургия',
		'title_ru' => 'Общая хирургия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '775',
		'code' => '6M051600',
		'title_kk' => 'Халықаралық журналистика',
		'title_ru' => 'Международная журналистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '776',
		'code' => '6R112900',
		'title_kk' => '',
		'title_ru' => 'Ангиохирургия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '777',
		'code' => '6R113000',
		'title_kk' => '',
		'title_ru' => 'Нейрохирургия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '778',
		'code' => '6R113100',
		'title_kk' => 'Жақ сүйек-бет хирургиясы, соның ішінде балалардың жақ сүйек-бет хирургиясы',
		'title_ru' => 'Челюстно-лицевая хирургия, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '779',
		'code' => '6R113200',
		'title_kk' => '',
		'title_ru' => 'Пластическая хирургия',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '780',
		'code' => '6R114000',
		'title_kk' => '',
		'title_ru' => 'Трансфузиология',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '781',
		'code' => '6R114100',
		'title_kk' => '',
		'title_ru' => 'Токсикология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '782',
		'code' => '6R114500',
		'title_kk' => '',
		'title_ru' => 'Медицинская генетика',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '783',
		'code' => '6D060400',
		'title_kk' => 'Физика',
		'title_ru' => 'Физика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '784',
		'code' => '6R114600',
		'title_kk' => '',
		'title_ru' => 'Стоматология, в том числе детская',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '785',
		'code' => '6R114700',
		'title_kk' => '',
		'title_ru' => 'Судебно-медицинская экспертиза',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '786',
		'code' => '460140',
		'title_kk' => 'Управление земельными ресурсами и землеустройство',
		'title_ru' => 'Управление земельными ресурсами и землеустройство',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '787',
		'code' => '460240',
		'title_kk' => 'Земельный кадастр и оценка недвижимости',
		'title_ru' => 'Земельный кадастр и оценка недвижимости',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '788',
		'code' => '460340',
		'title_kk' => 'Городской кадастр',
		'title_ru' => 'Городской кадастр',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '789',
		'code' => '50404',
		'title_kk' => 'Традиционное музыкальное искусство',
		'title_ru' => 'Традиционное музыкальное искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '790',
		'code' => '50409',
		'title_kk' => 'Хореография',
		'title_ru' => 'Хореография',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '791',
		'code' => '50410',
		'title_kk' => 'Сценография*',
		'title_ru' => 'Сценография*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '792',
		'code' => '6R114800',
		'title_kk' => '',
		'title_ru' => 'Авиационная и космическая медицина',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '793',
		'code' => '6R114900',
		'title_kk' => '',
		'title_ru' => 'Медицина чрезвычайных ситуаций и катастроф',
		'prof_type' => ''
		]);
		DB::table('education_programs')->insert([
		'id' => '794',
		'code' => '50206',
		'title_kk' => 'Религиоведение',
		'title_ru' => 'Религиоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '795',
		'code' => '6N0802',
		'title_kk' => 'Зоотехния',
		'title_ru' => 'Зоотехния',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '796',
		'code' => '50720',
		'title_kk' => 'Химическая технология неорганических веществ',
		'title_ru' => 'Химическая технология неорганических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '797',
		'code' => '50721',
		'title_kk' => 'Химическая технология органических веществ',
		'title_ru' => 'Химическая технология органических веществ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '798',
		'code' => '50723',
		'title_kk' => 'Техническая физика',
		'title_ru' => 'Техническая физика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '799',
		'code' => '50724',
		'title_kk' => 'Технологические машины и оборудование (по отраслям)',
		'title_ru' => 'Технологические машины и оборудование (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '800',
		'code' => '50725',
		'title_kk' => 'Технология деревообработки',
		'title_ru' => 'Технология деревообработки',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '801',
		'code' => '50727',
		'title_kk' => 'Технология продовольственных продуктов',
		'title_ru' => 'Технология продовольственных продуктов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '802',
		'code' => '50407',
		'title_kk' => 'Актерлік өнер',
		'title_ru' => 'Актерское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '803',
		'code' => '6M042000',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '804',
		'code' => '50408',
		'title_kk' => 'Эстрада өнері',
		'title_ru' => 'Искусство эстрады',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '805',
		'code' => '50411',
		'title_kk' => 'Композиция',
		'title_ru' => 'Композиция',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '806',
		'code' => '5B074300',
		'title_kk' => 'Ұшатын аппараттар мен қозғалтқыштарды ұшуда пайдалану',
		'title_ru' => 'Летная эксплуатация летательных аппаратов и двигателей',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '807',
		'code' => '6D010900',
		'title_kk' => 'Математика',
		'title_ru' => 'Математика',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '808',
		'code' => '5B071500',
		'title_kk' => 'Теңіз техникасы және технологиясы*',
		'title_ru' => 'Морская техника и технологии',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '809',
		'code' => '50412',
		'title_kk' => 'Операторлық өнер',
		'title_ru' => 'Операторское искусство',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '810',
		'code' => '50207',
		'title_kk' => 'Аударма ісі',
		'title_ru' => 'Переводческое дело',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '811',
		'code' => '50413',
		'title_kk' => 'Живопись*',
		'title_ru' => 'Живопись*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '812',
		'code' => '50406',
		'title_kk' => 'Режиссура*',
		'title_ru' => 'Режиссура*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '813',
		'code' => '50729',
		'title_kk' => 'Строительство',
		'title_ru' => 'Строительство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '814',
		'code' => '50205',
		'title_kk' => 'Филология',
		'title_ru' => 'Филология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '815',
		'code' => '50806',
		'title_kk' => 'Агроинженерия',
		'title_ru' => 'Агроинженерия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '816',
		'code' => '50808',
		'title_kk' => 'Почвоведение и агрохимия',
		'title_ru' => 'Почвоведение и агрохимия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '817',
		'code' => '50809',
		'title_kk' => 'Плодоовощеводство',
		'title_ru' => 'Плодоовощеводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '818',
		'code' => '50810',
		'title_kk' => 'Мелиорация, рекультивация и охрана земель',
		'title_ru' => 'Мелиорация, рекультивация и охрана земель',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '819',
		'code' => '50904',
		'title_kk' => 'Бытовые услуги и сервис',
		'title_ru' => 'Бытовые услуги и сервис',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '820',
		'code' => '50905',
		'title_kk' => 'Социальная работа',
		'title_ru' => 'Социальная работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '821',
		'code' => '51001',
		'title_kk' => 'Пожарная безопасность',
		'title_ru' => 'Пожарная безопасность',
		'prof_type' => 'Военное дело и безопасность'
		]);
		DB::table('education_programs')->insert([
		'id' => '822',
		'code' => '51002',
		'title_kk' => 'Системы информационной безопасности',
		'title_ru' => 'Системы информационной безопасности',
		'prof_type' => 'Военное дело и безопасность'
		]);
		DB::table('education_programs')->insert([
		'id' => '823',
		'code' => '51101',
		'title_kk' => 'Сестринское дело',
		'title_ru' => 'Сестринское дело',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '824',
		'code' => '51103',
		'title_kk' => 'Фармация',
		'title_ru' => 'Фармация',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '825',
		'code' => '6D021100',
		'title_kk' => 'Теология',
		'title_ru' => 'Теология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '826',
		'code' => '6D021200',
		'title_kk' => 'Түркітану',
		'title_ru' => 'Тюркология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '827',
		'code' => '6D010200',
		'title_kk' => 'Бастауышта оқыту педагогикасы мен әдістемесі',
		'title_ru' => 'Педагогика и методика начального обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '828',
		'code' => '4106',
		'title_kk' => 'Технология деревообработки',
		'title_ru' => 'Технология деревообработки',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '829',
		'code' => '4004',
		'title_kk' => 'Химико-механическая технология древесины',
		'title_ru' => 'Химико-механическая технология древесины',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '830',
		'code' => '4102',
		'title_kk' => 'Технология тканных и нетканных текстильных материалов',
		'title_ru' => 'Технология тканных и нетканных текстильных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '831',
		'code' => '709',
		'title_kk' => 'Экономика природопользования',
		'title_ru' => 'Экономика природопользования',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '832',
		'code' => '901',
		'title_kk' => 'Государственное управление',
		'title_ru' => 'Государственное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '833',
		'code' => '902',
		'title_kk' => 'Государственное и муниципальное управление',
		'title_ru' => 'Государственное и муниципальное управление',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '834',
		'code' => '905',
		'title_kk' => 'Маркетинг и коммерция',
		'title_ru' => 'Маркетинг и коммерция',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '835',
		'code' => '909',
		'title_kk' => 'Логистика',
		'title_ru' => 'Логистика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '836',
		'code' => '706',
		'title_kk' => 'Финансы и кредит',
		'title_ru' => 'Финансы и кредит',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '837',
		'code' => '712',
		'title_kk' => 'Экономика и менеджмент на предприятии',
		'title_ru' => 'Экономика и менеджмент на предприятии',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '838',
		'code' => '713',
		'title_kk' => 'Экономика и менеджмент в АПК',
		'title_ru' => 'Экономика и менеджмент в АПК',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '839',
		'code' => '906',
		'title_kk' => 'Управление и предпринимательство на предприятии (по отраслям)',
		'title_ru' => 'Управление и предпринимательство на предприятии (по отраслям)',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '840',
		'code' => '619',
		'title_kk' => 'Туризм',
		'title_ru' => 'Туризм',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '841',
		'code' => '801',
		'title_kk' => 'Таможенное дело',
		'title_ru' => 'Таможенное дело',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '842',
		'code' => '216',
		'title_kk' => 'Правоведение',
		'title_ru' => 'Правоведение',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '843',
		'code' => '6D021400',
		'title_kk' => 'Әдебиеттану',
		'title_ru' => 'Литературоведение',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '844',
		'code' => '6M042300',
		'title_kk' => 'Арт-менеджмент',
		'title_ru' => 'Арт-менеджмент',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '845',
		'code' => '51301',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '846',
		'code' => '50701',
		'title_kk' => 'Биотехнология',
		'title_ru' => 'Биотехнология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '847',
		'code' => '21600',
		'title_kk' => 'Ветеринарлық санитария',
		'title_ru' => 'Ветеринарная санитария',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '848',
		'code' => '50405',
		'title_kk' => 'Дирижерлау',
		'title_ru' => 'Дирижирование',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '849',
		'code' => '6D010100',
		'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
		'title_ru' => 'Дошкольное обучение и воспитание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '850',
		'code' => '50903',
		'title_kk' => 'Жерге орналастыру',
		'title_ru' => 'Землеустройство',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '851',
		'code' => '6D021000',
		'title_kk' => 'Шетел филологиясы',
		'title_ru' => 'Иностранная филология',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '852',
		'code' => '50907',
		'title_kk' => 'Кадастр',
		'title_ru' => 'Кадастр',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '853',
		'code' => '50906',
		'title_kk' => 'Мәдени-тынығу жұмысы',
		'title_ru' => 'Культурно-досуговая работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '854',
		'code' => '6M050100',
		'title_kk' => 'Әлеуметтану',
		'title_ru' => 'Социология',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '855',
		'code' => '205',
		'title_kk' => 'Халықаралық қатынастар',
		'title_ru' => 'Международные отношения',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '856',
		'code' => '50722',
		'title_kk' => 'Полиграфия',
		'title_ru' => 'Полиграфия',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '857',
		'code' => '50803',
		'title_kk' => 'Охотоведение и звероводство',
		'title_ru' => 'Охотоведение и звероводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '858',
		'code' => '1001',
		'title_kk' => 'Технико-правовая экспертиза (по отраслям)',
		'title_ru' => 'Технико-правовая экспертиза (по отраслям)',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '859',
		'code' => '1002',
		'title_kk' => 'Химическая, криминалистическая и экологическая экспертиза',
		'title_ru' => 'Химическая, криминалистическая и экологическая экспертиза',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '860',
		'code' => '908',
		'title_kk' => 'Товароведение и экспертиза качества потребительских товаров',
		'title_ru' => 'Товароведение и экспертиза качества потребительских товаров',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '861',
		'code' => '907',
		'title_kk' => 'Связь с общественностью',
		'title_ru' => 'Связь с общественностью',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '862',
		'code' => '708',
		'title_kk' => 'Оценка (по отраслям и областям применения)',
		'title_ru' => 'Оценка (по отраслям и областям применения)',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '863',
		'code' => '222',
		'title_kk' => 'Социальная работа',
		'title_ru' => 'Социальная работа',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '864',
		'code' => '616',
		'title_kk' => 'Издательское дело и редактирование',
		'title_ru' => 'Издательское дело и редактирование',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '865',
		'code' => '911',
		'title_kk' => 'Документоведение и документационное обеспечение управления',
		'title_ru' => 'Документоведение и документационное обеспечение управления',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '866',
		'code' => '1501',
		'title_kk' => 'Информационные системы (по областям применения)',
		'title_ru' => 'Информационные системы (по областям применения)',
		'prof_type' => 'Право'
		]);
		DB::table('education_programs')->insert([
		'id' => '867',
		'code' => '2805',
		'title_kk' => 'Автомобили и автомобильное хозяйство',
		'title_ru' => 'Автомобили и автомобильное хозяйство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '868',
		'code' => '3002',
		'title_kk' => 'Судовождение',
		'title_ru' => 'Судовождение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '869',
		'code' => '3901',
		'title_kk' => 'Химическая технология органических веществ и материалов',
		'title_ru' => 'Химическая технология органических веществ и материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '870',
		'code' => '3902',
		'title_kk' => 'Химическая технология неорганических, силикатных веществ и материалов',
		'title_ru' => 'Химическая технология неорганических, силикатных веществ и материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '871',
		'code' => '4003',
		'title_kk' => 'Технология кожи и меха',
		'title_ru' => 'Технология кожи и меха',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '872',
		'code' => '61441',
		'title_kk' => 'Оперный певец',
		'title_ru' => 'Оперный певец',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '873',
		'code' => '3915',
		'title_kk' => 'Машины и аппараты химических производств и предприятий строительных материалов',
		'title_ru' => 'Машины и аппараты химических производств и предприятий строительных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '874',
		'code' => '4309',
		'title_kk' => 'Строительство железных дорог, путь и путевое хозяйство',
		'title_ru' => 'Строительство железных дорог, путь и путевое хозяйство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '875',
		'code' => '5B041300',
		'title_kk' => 'Кескіндеме*',
		'title_ru' => 'Живопись*',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '876',
		'code' => '5B071600',
		'title_kk' => 'Аспап жасау',
		'title_ru' => 'Приборостроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '877',
		'code' => '50240',
		'title_kk' => 'Ветеринарно-санитарный врач',
		'title_ru' => 'Ветеринарно-санитарный врач',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '878',
		'code' => '551630',
		'title_kk' => 'Стандарттау сертификаттау және метрология ',
		'title_ru' => 'Стандарттау сертификаттау және метрология ',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '879',
		'code' => '4402',
		'title_kk' => 'Землеустройство (Управление земельными ресурсами и землеустройство)',
		'title_ru' => 'Землеустройство (Управление земельными ресурсами и землеустройство)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '880',
		'code' => '51202',
		'title_kk' => 'Ветеринарная санитария (Стоматология)',
		'title_ru' => 'Ветеринарная санитария (Стоматология)',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '881',
		'code' => '90800',
		'title_kk' => 'Связь с общественностью',
		'title_ru' => 'Связь с общественностью',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '882',
		'code' => '522230',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '883',
		'code' => '4601',
		'title_kk' => 'Управление земельными ресурсами (Зоотехния)',
		'title_ru' => 'Управление земельными ресурсами (Зоотехния)',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '884',
		'code' => '4702',
		'title_kk' => 'Лесное и садовое хозяйство',
		'title_ru' => 'Лесное и садовое хозяйство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '885',
		'code' => '4701',
		'title_kk' => 'Лесоинженерное дело',
		'title_ru' => 'Лесоинженерное дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '886',
		'code' => '1602',
		'title_kk' => 'Стандартизация и сертификация сельскохозяйственной продукции',
		'title_ru' => 'Стандартизация и сертификация сельскохозяйственной продукции',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '887',
		'code' => '4401',
		'title_kk' => 'Земельный кадастр и оценка недвижимости',
		'title_ru' => 'Земельный кадастр и оценка недвижимости',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '888',
		'code' => '50120',
		'title_kk' => 'Профессиональное обучение',
		'title_ru' => 'Профессиональное обучение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '889',
		'code' => '50506',
		'title_kk' => 'Экономика',
		'title_ru' => 'Экономика',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '890',
		'code' => '50507',
		'title_kk' => 'Менеджмент',
		'title_ru' => 'Менеджмент',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '891',
		'code' => '6N0801',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '892',
		'code' => '50420',
		'title_kk' => 'Сәулет',
		'title_ru' => 'Архитектура',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '893',
		'code' => '50421',
		'title_kk' => 'Дизайн',
		'title_ru' => 'Дизайн',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '894',
		'code' => '91341',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '895',
		'code' => '60100',
		'title_kk' => 'Музыкатану',
		'title_ru' => 'Музыковедение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '896',
		'code' => '50908',
		'title_kk' => 'Бағалау',
		'title_ru' => 'Оценка',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '897',
		'code' => '321',
		'title_kk' => 'Педагогика и методика дошкольного воспитания и обучения',
		'title_ru' => 'Педагогика и методика дошкольного воспитания и обучения',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '898',
		'code' => '4105',
		'title_kk' => 'Технология и конструирование изделий из кожи',
		'title_ru' => 'Технология и конструирование изделий из кожи',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '899',
		'code' => '4111',
		'title_kk' => 'Художественное оформление и моделирование изделий текстильной и легкой промышленности',
		'title_ru' => 'Художественное оформление и моделирование изделий текстильной и легкой промышленности',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '900',
		'code' => '4202',
		'title_kk' => 'Технология кондитерских изделий и сахаристых продуктов',
		'title_ru' => 'Технология кондитерских изделий и сахаристых продуктов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '901',
		'code' => '4203',
		'title_kk' => 'Технология консервов и продуктов длительного хранения',
		'title_ru' => 'Технология консервов и продуктов длительного хранения',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '902',
		'code' => '4204',
		'title_kk' => 'Технология бродильных производств и виноделие',
		'title_ru' => 'Технология бродильных производств и виноделие',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '903',
		'code' => '4205',
		'title_kk' => 'Технология мясных и молочных продуктов',
		'title_ru' => 'Технология мясных и молочных продуктов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '904',
		'code' => '4206',
		'title_kk' => 'Технология рыбных продуктов и жиров',
		'title_ru' => 'Технология рыбных продуктов и жиров',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '905',
		'code' => '4207',
		'title_kk' => 'Технология продуктов общественного питания',
		'title_ru' => 'Технология продуктов общественного питания',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '906',
		'code' => '4301',
		'title_kk' => 'Промышленное и гражданское строительство',
		'title_ru' => 'Промышленное и гражданское строительство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '907',
		'code' => '4304',
		'title_kk' => 'Производство строительных материалов и конструкций',
		'title_ru' => 'Производство строительных материалов и конструкций',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '908',
		'code' => '4305',
		'title_kk' => 'Т еплогазоснабжение, вентиляция и охрана воздушного бассейна',
		'title_ru' => 'Т еплогазоснабжение, вентиляция и охрана воздушного бассейна',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '909',
		'code' => '4307',
		'title_kk' => 'Строительство тепловых и атомных электростанций',
		'title_ru' => 'Строительство тепловых и атомных электростанций',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '910',
		'code' => '4308',
		'title_kk' => 'Механизация и автоматизация строительства',
		'title_ru' => 'Механизация и автоматизация строительства',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '911',
		'code' => '4310',
		'title_kk' => 'Строительство дорог и аэродромов, мосты и транспортные тоннели',
		'title_ru' => 'Строительство дорог и аэродромов, мосты и транспортные тоннели',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '912',
		'code' => '4503',
		'title_kk' => 'Плодоовощеводство и виноградарство',
		'title_ru' => 'Плодоовощеводство и виноградарство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '913',
		'code' => '4607',
		'title_kk' => 'Товароведение животного сырья',
		'title_ru' => 'Товароведение животного сырья',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '914',
		'code' => '4801',
		'title_kk' => 'Ихтиология и охрана рыбных запасов',
		'title_ru' => 'Ихтиология и охрана рыбных запасов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '915',
		'code' => '4802',
		'title_kk' => 'Рыбохозяйство и гидробиология',
		'title_ru' => 'Рыбохозяйство и гидробиология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '916',
		'code' => '4803',
		'title_kk' => 'Промышленное рыболовство',
		'title_ru' => 'Промышленное рыболовство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '917',
		'code' => '4804',
		'title_kk' => 'Аквакультура',
		'title_ru' => 'Аквакультура',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '918',
		'code' => '4306',
		'title_kk' => 'Водоснабжение, водоотведение и охрана водных ресурсов',
		'title_ru' => 'Водоснабжение, водоотведение и охрана водных ресурсов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '919',
		'code' => '4403',
		'title_kk' => 'Гидромелиорация и механизация мелиоративных работ',
		'title_ru' => 'Гидромелиорация и механизация мелиоративных работ',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '920',
		'code' => '4405',
		'title_kk' => 'Механизация сельскохозяйственных производств',
		'title_ru' => 'Механизация сельскохозяйственных производств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '921',
		'code' => '4406',
		'title_kk' => 'Агротехнический сервис',
		'title_ru' => 'Агротехнический сервис',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '922',
		'code' => '50718',
		'title_kk' => 'Электроэнергетика',
		'title_ru' => 'Электроэнергетика',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '923',
		'code' => '50719',
		'title_kk' => 'Радиотехника, электроника и телекоммуникации',
		'title_ru' => 'Радиотехника, электроника и телекоммуникации',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '924',
		'code' => '50724',
		'title_kk' => 'Технологические машины и оборудование',
		'title_ru' => 'Технологические машины и оборудование',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '925',
		'code' => '60140',
		'title_kk' => 'Музыковед',
		'title_ru' => 'Музыковед',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '926',
		'code' => '280340',
		'title_kk' => 'Инженер',
		'title_ru' => 'Инженер',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '927',
		'code' => '6D012300',
		'title_kk' => 'Әлеуметтік педагогика және өзін-өзі тану',
		'title_ru' => 'Социальная педагогика и самопознание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '928',
		'code' => '318',
		'title_kk' => 'Бейнелеу өнері және сызу',
		'title_ru' => 'Изобразительное искусство и черчение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '929',
		'code' => '50703',
		'title_kk' => 'Ақпараттық жүйелер',
		'title_ru' => 'Информационные системы',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '930',
		'code' => '6D073400',
		'title_kk' => 'Жарылғыш заттар мен пиротехникалық құралдардың химиялық технологиясы',
		'title_ru' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '931',
		'code' => '6D074400',
		'title_kk' => 'Гидротехникалық құрылыс және ғимарат',
		'title_ru' => 'Гидротехническое строительство и сооружение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '932',
		'code' => '6D074500',
		'title_kk' => 'Көлік құрылысы',
		'title_ru' => 'Транспортное строительство',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '933',
		'code' => '6D074600',
		'title_kk' => 'Ғарыштық техника және технологиялар',
		'title_ru' => 'Космическая техника и технология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '934',
		'code' => '6D075100',
		'title_kk' => 'Информатика, есептегіш техника және басқару',
		'title_ru' => 'Информатика, вычислительная техника и управление',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '935',
		'code' => '6D080200',
		'title_kk' => 'Мал шаруашылығы өнімдерін өндіру технологиясы',
		'title_ru' => 'Технология производства продуктов животноводства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '936',
		'code' => '6D080400',
		'title_kk' => 'Балық шаруашылығы және өнеркәсіптік балық аулау',
		'title_ru' => 'Рыбное хозяйство и промышленное рыболовство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '937',
		'code' => '6D080800',
		'title_kk' => 'Топырақтану және агрохимия',
		'title_ru' => 'Почвоведение и агрохимия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '938',
		'code' => '6D080900',
		'title_kk' => 'Жеміс – көкөніс шаруашылығы',
		'title_ru' => 'Плодоовощеводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '939',
		'code' => '6D081000',
		'title_kk' => 'Жерді мелиорациялау, баптау және қорғау',
		'title_ru' => 'Мелиорация, рекультивация и охрана земель',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '940',
		'code' => '6D081200',
		'title_kk' => 'Ауыл шаруашылығын энергиямен қамтамасыз ету',
		'title_ru' => 'Энергообеспечение сельского хозяйства',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '941',
		'code' => '2503',
		'title_kk' => 'Сельскохозяйственное машиностроение',
		'title_ru' => 'Сельскохозяйственное машиностроение',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '942',
		'code' => '6D090100',
		'title_kk' => 'Көлікті пайдалану және жүк қозғалысы мен тасымалдауды ұйымдастыру',
		'title_ru' => 'Организация перевозок, движения и эксплуатация транспорта',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '943',
		'code' => '6D090400',
		'title_kk' => 'Әлеуметтік-мәдени қызмет көрсету',
		'title_ru' => 'Социально-культурный сервис',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '944',
		'code' => '6D090500',
		'title_kk' => 'Әлеуметтік жұмыс',
		'title_ru' => 'Социальная работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '945',
		'code' => '6D091200',
		'title_kk' => 'Мейрамхана ісі және мейманхана бизнесі',
		'title_ru' => 'Ресторанное дело и гостиничный бизнес',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '946',
		'code' => '6D100100',
		'title_kk' => 'Өрт қауіпсіздігі',
		'title_ru' => 'Пожарная безопасность',
		'prof_type' => 'Военное дело и безопасность'
		]);
		DB::table('education_programs')->insert([
		'id' => '947',
		'code' => '6D100200',
		'title_kk' => 'Ақпараттық қауіпсіздік жүйесі',
		'title_ru' => 'Системы информационной безопасности',
		'prof_type' => 'Военное дело и безопасность'
		]);
		DB::table('education_programs')->insert([
		'id' => '948',
		'code' => '6D110100',
		'title_kk' => 'Медицина',
		'title_ru' => 'Медицина',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '949',
		'code' => '6D110400',
		'title_kk' => 'Фармация',
		'title_ru' => 'Фармация',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '950',
		'code' => '5B010100',
		'title_kk' => 'Мектепке дейінгі оқыту және тәрбиелеу',
		'title_ru' => 'Дошкольное обучение и воспитание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '951',
		'code' => '6D074900',
		'title_kk' => 'Маркшейдер ісі',
		'title_ru' => 'Маркшейдерское дело',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '952',
		'code' => '6D080300',
		'title_kk' => 'Аңшылықтану және аң шаруашылығы',
		'title_ru' => 'Охотоведение и звероводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '953',
		'code' => '6D012400',
		'title_kk' => 'Педагогикалық өлшеу',
		'title_ru' => 'Педагогическое измерение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '954',
		'code' => '6D091000',
		'title_kk' => 'Кітапхана ісі',
		'title_ru' => 'Библиотечное дело',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '955',
		'code' => '6D080500',
		'title_kk' => 'Су ресурстары және суды пайдалану',
		'title_ru' => 'Водные ресурсы и водопользование',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '956',
		'code' => '6D080600',
		'title_kk' => 'Аграрлық техника және технология',
		'title_ru' => 'Аграрная техника и технология',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '957',
		'code' => '6D080100',
		'title_kk' => 'Агрономия',
		'title_ru' => 'Агрономия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '958',
		'code' => '6D120100',
		'title_kk' => 'Ветеринарлық медицина',
		'title_ru' => 'Ветеринарная медицина',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '959',
		'code' => '6D120200',
		'title_kk' => 'Ветеринарлық санитария',
		'title_ru' => 'Ветеринарная санитария',
		'prof_type' => 'Ветеринария'
		]);
		DB::table('education_programs')->insert([
		'id' => '960',
		'code' => '6D091100',
		'title_kk' => 'Геоэкология және табиғатты пайдалану басқармасы',
		'title_ru' => 'Геоэкология и управление природопользованием',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '961',
		'code' => '6D081100',
		'title_kk' => 'Өсімдік қорғау және карантин',
		'title_ru' => 'Защита и карантин растений',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '962',
		'code' => '6D090300',
		'title_kk' => 'Жерге орналастыру',
		'title_ru' => 'Землеустройство',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '963',
		'code' => '6M041600',
		'title_kk' => 'Өнертану',
		'title_ru' => 'Искусствоведение',
		'prof_type' => 'Искусство'
		]);
		DB::table('education_programs')->insert([
		'id' => '964',
		'code' => '6D090700',
		'title_kk' => 'Кадастр',
		'title_ru' => 'Кадастр',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '965',
		'code' => '6D090600',
		'title_kk' => 'Мәдени-тынығу жұмысы',
		'title_ru' => 'Культурно-досуговая работа',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '966',
		'code' => '6D080700',
		'title_kk' => 'Орман ресурстары және орман шаруашылығы',
		'title_ru' => 'Лесные ресурсы и лесоводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '967',
		'code' => '6D090900',
		'title_kk' => 'Логистика (сала бойынша)',
		'title_ru' => 'Логистика (по отраслям)',
		'prof_type' => 'Услуги'
		]);
		DB::table('education_programs')->insert([
		'id' => '968',
		'code' => '6D075000',
		'title_kk' => 'Метрология',
		'title_ru' => 'Метрология',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '969',
		'code' => '5B060300',
		'title_kk' => 'Механика',
		'title_ru' => 'Механика',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '970',
		'code' => '6D073500',
		'title_kk' => 'Тағам қауіпсіздігі',
		'title_ru' => 'Пищевая безопасность',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '971',
		'code' => '6D110200',
		'title_kk' => 'Қоғамдық денсаулық сақтау',
		'title_ru' => 'Общественное здравоохранение',
		'prof_type' => 'Здравоохранение и социальное обеспечение (медицина)'
		]);
		DB::table('education_programs')->insert([
		'id' => '972',
		'code' => '6D074800',
		'title_kk' => 'Фармацевтикалық өндіріс технологиясы',
		'title_ru' => 'Технология фармацевтического производства',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '973',
		'code' => '5B010800',
		'title_kk' => 'Дене шынықтыру және спорт',
		'title_ru' => 'Физическая культура и спорт',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '974',
		'code' => '70841',
		'title_kk' => 'Инженер-экономист',
		'title_ru' => 'Инженер-экономист',
		'prof_type' => 'Социальные науки, экономика и бизнес'
		]);
		DB::table('education_programs')->insert([
		'id' => '975',
		'code' => '5B011700',
		'title_kk' => 'Қазақ тілі мен әдебиеті',
		'title_ru' => 'Казахский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '976',
		'code' => '5B011800',
		'title_kk' => 'Орыс тілі мен әдебиеті',
		'title_ru' => 'Русский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '977',
		'code' => '5B011900',
		'title_kk' => 'Шетел тілі: екі шетел тілі',
		'title_ru' => 'Иностранный язык: два иностранных языка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '978',
		'code' => '5B060500',
		'title_kk' => 'Ядролық физика*',
		'title_ru' => 'Ядерная физика*',
		'prof_type' => 'Естественные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '979',
		'code' => '5B012300',
		'title_kk' => 'Әлеуметтік педагогика және өзін-өзі тану',
		'title_ru' => 'Социальная педагогика и самопознание',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '980',
		'code' => '5B020100',
		'title_kk' => 'Философия',
		'title_ru' => 'Философия',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '981',
		'code' => '6N0727',
		'title_kk' => 'Технология продовольственных продуктов',
		'title_ru' => 'Технология продовольственных продуктов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '982',
		'code' => '6N0728',
		'title_kk' => 'Технология перерабатывающих производств (по отраслям)',
		'title_ru' => 'Технология перерабатывающих производств (по отраслям)',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '983',
		'code' => '6N0730',
		'title_kk' => 'Производство строительных материалов, изделий и конструкций',
		'title_ru' => 'Производство строительных материалов, изделий и конструкций',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '984',
		'code' => '6N0733',
		'title_kk' => 'Технология и проектирование текстильных материалов',
		'title_ru' => 'Технология и проектирование текстильных материалов',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '985',
		'code' => '6N0734',
		'title_kk' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'title_ru' => 'Химическая технология взрывчатых веществ и пиротехнических средств',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '986',
		'code' => '6N0806',
		'title_kk' => 'Агроинженерия',
		'title_ru' => 'Агроинженерия',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '987',
		'code' => '6N0807',
		'title_kk' => 'Лесохозяйственное дело',
		'title_ru' => 'Лесохозяйственное дело',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '988',
		'code' => '6D011700',
		'title_kk' => 'Қазақ тілі және әдебиеті',
		'title_ru' => 'Казахский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '989',
		'code' => '6D011800',
		'title_kk' => 'Орыс тілі және әдебиеті',
		'title_ru' => 'Русский язык и литература',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '990',
		'code' => '6D011900',
		'title_kk' => 'Шет ел тілі: екі шет ел тілі',
		'title_ru' => 'Иностранный язык: два иностранных языка',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '991',
		'code' => '6D012000',
		'title_kk' => 'Кәсіптік білім',
		'title_ru' => 'Профессиональное обучение (по отраслям)',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '992',
		'code' => '6N0803',
		'title_kk' => 'Охотоведение и звероводство',
		'title_ru' => 'Охотоведение и звероводство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '993',
		'code' => '5B012000',
		'title_kk' => 'Кәсіптік оқыту',
		'title_ru' => 'Профессиональное обучение',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '994',
		'code' => '6N0804',
		'title_kk' => 'Рыбное хозяйство',
		'title_ru' => 'Рыбное хозяйство',
		'prof_type' => 'Сельскохозяйственные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '995',
		'code' => '6N0732',
		'title_kk' => 'Стандартизация, метрология и сертификация',
		'title_ru' => 'Стандартизация, метрология и сертификация',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '996',
		'code' => '6D020100',
		'title_kk' => 'Философия',
		'title_ru' => 'Философия',
		'prof_type' => 'Гуманитарные науки'
		]);
		DB::table('education_programs')->insert([
		'id' => '997',
		'code' => '5B011200',
		'title_kk' => 'Химия',
		'title_ru' => 'Химия',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '998',
		'code' => '6N0731',
		'title_kk' => 'Қоршаған ортаны қорғау және өмір тіршілігінің қауіпсіздігі',
		'title_ru' => 'Безопасность жизнедеятельности и защита окружающей среды',
		'prof_type' => 'Технические науки и технологии'
		]);
		DB::table('education_programs')->insert([
		'id' => '999',
		'code' => '5B011300',
		'title_kk' => 'Биология',
		'title_ru' => 'Биология',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '1000',
		'code' => '6D011600',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '1001',
		'code' => '5B011600',
		'title_kk' => 'География',
		'title_ru' => 'География',
		'prof_type' => 'Образование'
		]);
		DB::table('education_programs')->insert([
		'id' => '1002',
		'code' => '5B010500',
		'title_kk' => 'Дефектология',
		'title_ru' => 'Дефектология',
		'prof_type' => 'Образование'
		]);
    }
}
