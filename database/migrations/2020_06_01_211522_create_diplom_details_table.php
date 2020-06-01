<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplom_details', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('diplom_id');
			$table->integer('diplom_detail_type_id');	//diplom_detail_types
			$table->string('subject_code_kz');
			$table->string('subject_code_ru');
			$table->string('subject_code_en');
			$table->string('subject_name_kz');
			$table->string('subject_name_ru');
			$table->string('subject_name_en');
			$table->integer('credits')->nullable();
			$table->integer('ects_credits');
			$table->string('mark_literal');
			$table->integer('mark_integer');
			$table->string('mark_traditional_kz');
			$table->string('mark_traditional_ru');
			$table->string('mark_traditional_en');
			

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
        Schema::dropIfExists('diplom_details');
    }
}
