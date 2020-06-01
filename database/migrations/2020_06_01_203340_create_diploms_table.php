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
			$table->integer('student_id');
			$table->string('iin');
			$table->string('firstname');
			$table->string('lastname')->nullable();
			$table->string('patronymic')->nullable();
			$table->string('firstname_en')->nullable();
			$table->string('lastname_en')->nullable();
			$table->string('patronymic_en')->nullable();
			$table->date('birth_date');
			$table->string('diplom_num');
			$table->date('diplom_date');
			$table->string('protocol_num');
			
			$table->string('rector_name')->nullable();		//ректор
			$table->string('rector_name_en')->nullable();
			$table->string('dean_name')->nullable();		//декан
			$table->string('dean_name_en')->nullable();
			$table->string('secretary_name')->nullable();	//секретарь
			$table->string('secretary_name_en')->nullable();

			
			$table->string('prev_educ_doc_name_kz')->nullable();
			$table->string('prev_educ_doc_name_ru')->nullable();
			$table->string('prev_educ_doc_name_en')->nullable();
			$table->string('prev_educ_doc_num')->nullable();
			$table->date('prev_educ_doc_date')->nullable();
			$table->string('entrance_doc_name_kz')->nullable();
			$table->string('entrance_doc_name_ru')->nullable();
			$table->string('entrance_doc_name_en')->nullable();
			$table->string('entrance_doc_num')->nullable();
			$table->date('entrance_doc_date')->nullable();
			$table->integer('start_year');	//год поступления
			$table->integer('finish_year');	//год окончания
			
			$table->integer('start_university_id');		//поступил в universities
			$table->string('start_university_name_kz');	//
			$table->string('start_university_name_ru');	//
			$table->string('start_university_name_en');	//
			
			
			$table->integer('credits')->nullable();
			$table->integer('ects_credits');
			$table->integer('theoretical_credits')->nullable();
			$table->integer('theoretical_ects_credits');
			$table->float('gpa');
			
			$table->integer('gak_protocol_num');
			$table->date('gak_protocol_date');
			
			$table->integer('academic_degree_id');
			
			$table->integer('speciality_id');
			$table->string('speciality_code');
			$table->string('speciality_name_kz');
			$table->string('speciality_name_ru');
			$table->string('speciality_name_en');
			
			$table->integer('specialization_id');
			$table->string('specialization_code');
			$table->string('specialization_name_kz');
			$table->string('specialization_name_ru');
			$table->string('specialization_name_en');
			
			$table->string('qualification_name_kz')->nullable();
			$table->string('qualification_name_ru')->nullable();
			$table->string('qualification_name_en')->nullable();
			
			$table->string('university_name_kz');
			$table->string('university_name_ru');
			$table->string('university_name_en');
			
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
