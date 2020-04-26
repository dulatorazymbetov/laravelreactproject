<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kk');	//Название дисциплины на казахском языке
            $table->string('title_ru');	//	Название дисциплины на русском языке
            $table->string('title_en');	//Название дисциплины на английском языке
			$table->string('subject_code_kk');	//Код дисциплины на казахском языке
			$table->string('subject_code_ru');	//Код дисциплины на русском языке
			$table->string('subject_code_en');	//Код дисциплины на английском языке
			
			$table->text('description_kk');	//Краткое описание дисциплины на казахском языке
			$table->text('description_ru');	//краткое описание дисциплины на русском языке
			$table->text('description_en');	//краткое описание дисциплины на английском языке
			//$table->integer('subject_cycle_id');	//Цикл дисциплины - subject_cycles
			//$table->integer('subject_component_id');	//Компонент - subject_components
			$table->integer('degree_id');	//Идентификатор академической степени, для которой предусмотрена дисциплина
			$table->boolean('is_language_discipline');	//Метка, показывающая является ли заданная дисциплиной языковой
			$table->boolean('is_multilingual');	//Метка, показывающая является ли заданная дисциплиной полиязычной
			$table->boolean('is_research');		//Метка, показывающая является ли заданная дисциплиной научно-исследовательской/ экспериментально-исследовательской работой
			$table->boolean('ispractice');		//Метка, показывающая является ли заданная дисциплиной практикой
			
			//$table->integer('credits')->nullable();			//кредиты
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
        Schema::dropIfExists('subjects');
    }
}
