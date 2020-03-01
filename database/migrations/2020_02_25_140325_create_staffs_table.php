<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up(){
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
			$table->boolean('foreigner')->default(false); // прибывший из-за рубежа
			$table->tinyInteger('teaching_language_id')->nullable()->unsigned(); //язык преподавания
			//$table->foreign('teaching_language_id')->references('id')->on('teaching_languages');
			
			$table->tinyInteger('english_level_id')->nullable()->unsigned(); //уровень знания английского языка
			//$table->foreign('english_level_id')->references('id')->on('english_levels');
			$table->tinyInteger('academic_degree_id')->nullable()->unsigned(); //Академическая, ученая степень
			//$table->foreign('academic_degree_id')->references('id')->on('academic_degrees');
			$table->tinyInteger('academic_rank_id')->nullable()->unsigned(); //Ученое звание
			//$table->foreign('academic_rank_id')->references('id')->on('academic_ranks');

			$table->date('emp_start_date')->nullable(); //Дата принятия на работу
			$table->string('emp_order_number')->nullable(); //Номер приказа о принятии на работу
			$table->tinyInteger('emp_contract_type_id')->nullable()->unsigned(); //Срок трудового договора
			//$table->foreign('emp_contract_type_id')->references('id')->on('emp_contract_types');

			$table->boolean('is_active')->default(false); //Текущий статус сотрудника
			
			$table->tinyInteger('vacation_status_id')->default(1); //отпуск
			//$table->foreign('vacation_status_id')->references('id')->on('vacation_statuses');
			

			$table->boolean('trilingual_teaching')->default(false); // Ведет занятия на английском языке в рамках трехъязычного обучения
			$table->date('emp_term_date')->nullable(); //дата расторжения/прекращения трудового договора
			$table->string('emp_term_order_number')->nullable(); //Номер приказа о расторжении/прекращении трудового договора
			$table->tinyInteger('emp_term_reason_id')->nullable()->unsigned(); //причина расторжения трудового договора
			//$table->foreign('emp_term_reason_id')->references('id')->on('emp_contract_term_reasons');

            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(){
        Schema::dropIfExists('staffs');
    }
}
