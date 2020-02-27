<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id'); //пользователь
            $table->integer('department_id'); //подразделение
            $table->integer('post_type_id'); //должность
            $table->integer('staff_time_type'); //условия найма
            $table->float('time_rate',3,2); //ставка
            $table->date('start_date'); //дата окончания работы
            $table->date('finish_date')->nullable(); //дата окончания работы
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
        Schema::dropIfExists('positions');
    }
}
