<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCourseAppsTable extends Migration	//заявки от кафедр
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {	
        Schema::create('course_apps', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('edu_program_subject_id'); 	//edu_program_subjects	- курс занятий из учебного плана
			$table->unsignedBigInteger('teacher_position_id');				//positions		-	должность которая будет преподавать
			$table->integer('added_by_position_id');					//positions - должность который вставил запись, кем добавлено
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
        Schema::dropIfExists('course_apps');
    }
}
