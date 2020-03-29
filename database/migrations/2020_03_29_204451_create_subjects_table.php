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
			$table->string('title_kk');
            $table->string('title_ru');
            $table->string('title_en');
			$table->string('description_kk');
			$table->string('description_ru');
			$table->string('description_en');
			$table->integer('subject_cicle_id');
			$table->integer('subject_component_id');
			$table->integer('credits');
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
