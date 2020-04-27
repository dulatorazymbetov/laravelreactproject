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
        //

		
		

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 131,'','',' Компьютерные науки(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 132,'','','Аналитика больших данных(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 133,'','','Бизнес-анализ(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 134,'','','Информационные системы(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 135,'','','ERP-системы(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 136,'','','Киберфизические системы(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 137,'','','Наука о данных и Машинное обучение(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 138,'','','Сетевое и системное администрирование(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 139,'','','Программная инженерия(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 140,'','',' Финансовая Математика(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 141,'','','Data science(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 142,'','','Инженерная Математика(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 143,'','','Компьютерная безопасность(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 144,'','','Аппаратные средства защиты информации(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 145,'','','Сетевая безопасность(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 146,'','','Графические вычисления(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 147,'','','Телекоммуникационные системы и сети(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 148,'','','Радиотехнические системы передачи информации(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 149,'','','Информатика и организация цифровизации образования(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 150,'','','Компьютерная физика(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 151,'','','Электронный бизнес(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 152,'','','Инновационный менеджмент(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 153,'','','Финансовый инжиниринг(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 154,'','','Финансовые технологии(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 155,'','','Бизнес-журналистика, SMM & PR(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 156,'','','Цифровая журналистика(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 157,'','','Международная журналистика и интернет-безопасность(реестр_4г) ','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 158,'','','Телерадиожурналистика(реестр_4г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 159,'','',' Программная инженерия(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 160,'','','Компьютерная безопасность(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 161,'','','Сетевая безопасность(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 162,'','','Бизнес-аналитика(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 163,'','','Управление IT-проектами(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 164,'','','Инженерная Математика(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 165,'','','Наука о данных(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 166,'','','Телекоммуникационные системы и сети(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 167,'','','Цифровые медиатехнологии визуализация данных(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 168,'','','Проектный менеджмент(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 169,'','','Интеллектуальные системы(реестр_3г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 170,'','','Компьютерная и программная инженерия(реестр_3г)','',0,0,0,0,0,0,now(),0,0);
");

DB::insert("
insert into edu_programs (id,reg_num, title_kk, title_ru, title_en, edu_programs_type_id, edu_programs_group_id, academic_degree_id, duration, credits, study_language_id, app_date, nrk_level, ork_level) VALUES ( 171,'','','Компьютинг и наука о данных(реестр_2г)','',0,0,0,0,0,0,now(),0,0);
");
		
    }
}
