<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplom_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('first_name_kk')->default('');
            $table->string('last_name_kk')->default('');
            $table->string('middle_name_kk')->default('');
            $table->string('first_name_ru')->default('');
            $table->string('last_name_ru')->default('');
            $table->string('middle_name_ru')->default('');
            $table->string('first_name_en')->default('');
            $table->string('last_name_en')->default('');
            $table->string('middle_name_en')->default('');
            $table->date('birthdate')->nullable();
            $table->string('prev_edu_doc_kk')->default('');
            $table->string('prev_edu_doc_ru')->default('');
            $table->string('prev_edu_doc_en')->default('');
            $table->string('entrance_exam_kk')->default('');
            $table->string('entrance_exam_ru')->default('');
            $table->string('entrance_exam_en')->default('');
            $table->string('entered_univ_name_kk')->default('');
            $table->string('entered_univ_name_ru')->default('');
            $table->string('entered_univ_name_en')->default('');
            $table->string('graduated_univ_name_kk')->default('');
            $table->string('graduated_univ_name_ru')->default('');
            $table->string('graduated_univ_name_en')->default('');
            $table->text('additional_info_kk')->nullable();
            $table->text('additional_info_ru')->nullable();
            $table->text('additional_info_en')->nullable();
            $table->integer('total_credits_number')->default(0);
            $table->integer('total_credits_number_ects')->default(0);
            $table->integer('theoretical_credits_number')->default(0);
            $table->integer('theoretical_credits_number_ects')->default(0);
            $table->float('gpa')->default(0);
            $table->integer('sac_protocol_number')->default(0);
            $table->date('sac_protocol_date')->nullable();
            $table->string('qualification_kk')->default('');
            $table->string('qualification_ru')->default('');
            $table->string('qualification_en')->default('');
            $table->string('education_program_kk')->default('');
            $table->string('education_program_ru')->default('');
            $table->string('education_program_en')->default('');
            $table->string('nqf_level')->default('');
            $table->string('diploma_number')->default('');
            $table->date('issue_date')->nullable();
            $table->string('registration_number')->default('');
            $table->boolean('is_disabled')->default(false);
            $table->string('specialty_kk')->default('');
            $table->string('specialty_ru')->default('');
            $table->string('specialty_en')->default('');
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplom_apps');
    }
}
