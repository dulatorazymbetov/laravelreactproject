<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectCiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_cicles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kk');
            $table->string('title_ru');
            $table->string('title_en');
			$table->string('short_title_kk');
            $table->string('short_title_ru');
            $table->string('short_title_en');
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
        Schema::dropIfExists('subject_cicles');
    }
}
