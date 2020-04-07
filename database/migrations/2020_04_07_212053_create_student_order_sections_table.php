<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOrderSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_order_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('student_order_id');				//приказ - student_orders
			$table->integer('student_order_category_id');			//категория приказа	-	student_order_categories
			$table->integer('prev_course')->nullable();				//предыдущий курс
			$table->integer('next_course')->nullable();				//следующий курс
			$table->integer('prev_edu_program_id')->nullable();		//edu_programs
			$table->integer('next_edu_program_id')->nullable();		//edu_programs
			$table->integer('prev_edu_language_id')->nullable();	//teaching_languages
			$table->integer('next_edu_language_id')->nullable();	//teaching_languages
			$table->integer('prev_study_form_id')->nullable();	//вид обучения - study_forms
			$table->integer('next_study_form_id')->nullable();	//вид обучения - study_forms
			$table->integer('prev_payment_form_id')->nullable();	//форма оплаты - payment_forms
			$table->integer('next_payment_form_id')->nullable();	//форма оплаты - payment_forms
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
        Schema::dropIfExists('student_order_sections');
    }
}
