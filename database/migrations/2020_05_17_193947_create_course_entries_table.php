<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_entries', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('student_id');	//students
			$table->unsignedBigInteger('edu_program_subject_id');	//edu_program_subjects	- курс занятий из учебного плана
			$table->boolean('approved')->default(false);			//одобрено
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
        Schema::dropIfExists('course_entries');
    }
}
