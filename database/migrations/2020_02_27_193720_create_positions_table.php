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
            $table->integer('position_type_id'); //должность
            $table->integer('position_time_type'); //условия найма
            $table->float('time_rate',3,2); //ставка
            $table->date('start_date'); //дата начала работы
            $table->date('finish_date')->nullable(); //дата окончания работы
            $table->boolean('is_head')->default(false); //воглавляет данное подразделение
            $table->integer('chief_position_id')->nullable(); //непосредственный ркуоводитель
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
