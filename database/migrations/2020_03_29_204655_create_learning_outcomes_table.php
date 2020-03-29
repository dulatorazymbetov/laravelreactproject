<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearningOutcomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learning_outcomes', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kk');
            $table->string('title_ru');
            $table->string('title_en');
			$table->string('lo_code');			//Код результата обучения
			$table->integer('edu_program_id'); //образовательная программа - edu_programs
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
        Schema::dropIfExists('learning_outcomes');
    }
}
