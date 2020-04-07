<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('order_number');	//номер приказа
			$table->date('order_date');		//дата приказа
			$table->date('order_signed_date')->nullable();	//дата подписания
			$table->string('order_text')->nullable();		//текст приказа
			$table->integer('student_order_status_id');		//статус приказа
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
        Schema::dropIfExists('student_orders');
    }
}
