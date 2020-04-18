<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_kk');
            $table->string('title_ru');
            $table->string('title_en')->nullable();
			$table->integer('edu_programs_type_id');
			
			$table->integer('edu_programs_group_id');	//Группа образовательных программ	//edu_programs_groups
			$table->string('goals_kk')->nullable();	//Цели ОП
			$table->string('goals_ru')->nullable();
			$table->string('goals_en')->nullable();
			$table->integer('academic_degree_id');	//Академическая степень
			$table->float('duration');	//продолжительность обучения в годах
			$table->integer('credits');	//кредиты
			$table->integer('study_language_id');	//язык обучения
			$table->date('app_date');	//дата утверждения ОП
			
			$table->tinyInteger('nrk_level');
			$table->tinyInteger('ork_level');
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
        Schema::dropIfExists('edu_programs');
    }
}
