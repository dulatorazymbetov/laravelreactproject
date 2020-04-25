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
			$table->integer('year');	//Курс изучения дисциплины. Значение 0 предполагает изучение дисциплины в курсе по выбору обучающегося
			$table->integer('term');	//Семестр изучения дисциплины. Значение «-3» предполагает изучение дисциплины в курсе по выбору обучающегося, значение 0 предполагает изучение дисциплины в дополнительном семестре
			$table->integer('ects_credits')->nullable();			//кредиты

			$table->integer('subject_cycle_id');	//Цикл дисциплины - subject_cycles - справочник
			$table->integer('subject_component_id');	//Компонент - subject_components - справочник
			$table->integer('controlformid');	//Форма итоговой аттетстации по дисциплине в заданный период изучения дисциплины - control_forms - справочник
			$table->integer('exam_type');	//Форма проведения итоговой аттестации -exam_types - справочник
			$table->integer('ratingcount');	//Количество рейтинговых контролей по дисциплине в заданный период изучения дисциплины
			
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
