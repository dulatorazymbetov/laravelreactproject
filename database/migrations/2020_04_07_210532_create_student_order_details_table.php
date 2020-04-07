<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('student_order_section_id');	//глава приказа	- student_order_sections
			$table->integer('student_id');					//студент - students
			$table->dateTime('date_added')->default(DB::raw('CURRENT_TIMESTAMP'));	//дата добавления студента в приказ (поле для внутреннего пользования)
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
        Schema::dropIfExists('student_order_details');
    }
}
