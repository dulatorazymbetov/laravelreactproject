<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('user_id');
			$table->ipAddress('ip')->nullable();
			$table->dateTime('action_datetime');
			$table->string('action_desc');
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
        Schema::dropIfExists('campus_logs');
    }
}
