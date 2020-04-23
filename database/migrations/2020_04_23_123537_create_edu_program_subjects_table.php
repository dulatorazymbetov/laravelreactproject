<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduProgramSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_program_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('edu_programs_id'); //образовательная программа - edu_programs
			$table->integer('subject_id');	//subjects
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
        Schema::dropIfExists('edu_program_subjects');
    }
}
