<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kk');	//Название формы контроля на казахском языке
            $table->string('title_ru');	//	Название формы контроля на русском языке
            $table->string('title_en');	//Название формы контроля на английском языке
			$table->string('title_short_kk');	//Название формы контроля на казахском языке
            $table->string('title_short_ru');	//	Название формы контроля на русском языке
            $table->string('title_short_en');	//Название формы контроля на английском языке
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
        Schema::dropIfExists('control_forms');
    }
}
