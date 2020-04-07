<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOrderReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_order_reasons', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kz');
			$table->string('title_ru');
			$table->string('title_en')->nullable();
			$table->boolean('is_income');		//признак приказа на зачисление
			$table->boolean('is_outcome');		//признак приказа на отчисление
			$table->boolean('is_graduation');	//признак приказа на выпуск
			
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
        Schema::dropIfExists('student_order_reasons');
    }
}
