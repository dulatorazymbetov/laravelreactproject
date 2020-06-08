<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diploms', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('student_id')->unique();
			$table->string('iin');
			$table->string('firstname_ru');
			$table->string('lastname_ru')->nullable();
			$table->string('patronymic_ru')->nullable();
			$table->string('firstname_kk')->nullable();
			$table->string('lastname_kk')->nullable();
			$table->string('patronymic_kk')->nullable();
			$table->string('firstname_en')->nullable();
			$table->string('lastname_en')->nullable();
			$table->string('patronymic_en')->nullable();
			$table->date('birthdate')->nullable();;
			$table->string('diplom_num')->nullable();;
			$table->date('diplom_date')->nullable();;
			$table->string('protocol_num')->nullable();;
			
			$table->string('rector_name')->nullable();		//ректор
			$table->string('rector_name_en')->nullable();
			$table->string('dean_name')->nullable();		//декан
			$table->string('dean_name_en')->nullable();
			$table->string('secretary_name')->nullable();	//секретарь
			$table->string('secretary_name_en')->nullable();

			
			$table->string('prev_educ_doc_name_kk')->nullable();	//документ о предыдущем образовании
			$table->string('prev_educ_doc_name_ru')->nullable();
			$table->string('prev_educ_doc_name_en')->nullable();
			$table->string('prev_educ_doc_num')->nullable();
			$table->date('prev_educ_doc_date')->nullable();
			$table->string('entrance_doc_name_kk')->nullable();		//вступительный документ//сертификат или тп
			$table->string('entrance_doc_name_ru')->nullable();
			$table->string('entrance_doc_name_en')->nullable();
			$table->string('entrance_doc_num')->nullable();
			$table->date('entrance_doc_date')->nullable();
			$table->integer('start_year')->nullable();;	//год поступления
			$table->integer('finish_year')->nullable();;	//год окончания
			
			$table->integer('start_university_id')->nullable();;		//поступил в// universities
			$table->string('start_university_name_kk')->nullable();;	//
			$table->string('start_university_name_ru')->nullable();;	//
			$table->string('start_university_name_en')->nullable();;	//
			
			
			$table->integer('credits')->nullable();	//кредиты
			$table->integer('ects_credits')->nullable();;
			$table->integer('theoretical_credits')->nullable();	//теоретические кредиты
			$table->integer('theoretical_ects_credits')->nullable();;
			$table->float('gpa')->nullable();;
			
			$table->integer('gak_protocol_num')->nullable();;	//номер протокола ГАК
			$table->date('gak_protocol_date')->nullable();;		//дата протокола ГАК
			
			$table->integer('academic_degree_id')->nullable();;	//присуждаемая степень
			$table->string('academic_degree_name_kk')->nullable();;	//присуждаемая степень
			$table->string('academic_degree_name_ru')->nullable();;	//присуждаемая степень
			$table->string('academic_degree_name_en')->nullable();;	//присуждаемая степень
			
			$table->integer('speciality_id')->nullable();;	//специальность
			$table->string('speciality_code')->nullable();;
			$table->string('speciality_name_kk')->nullable();;
			$table->string('speciality_name_ru')->nullable();;
			$table->string('speciality_name_en')->nullable();;
			
			$table->integer('specialization_id')->nullable();;	//обр программа // специализация
			$table->string('specialization_code')->nullable();;
			$table->string('specialization_name_kk')->nullable();;
			$table->string('specialization_name_ru')->nullable();;
			$table->string('specialization_name_en')->nullable();;
			
			$table->string('qualification_name_kk')->nullable();	//присуждаемая квалификация
			$table->string('qualification_name_ru')->nullable();
			$table->string('qualification_name_en')->nullable();
			
			$table->string('university_name_kk')->nullable();;	//название университета в текущий момент
			$table->string('university_name_ru')->nullable();;
			$table->string('university_name_en')->nullable();;
			
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diploms');
    }
}
