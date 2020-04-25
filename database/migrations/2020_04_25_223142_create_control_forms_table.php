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
			$table->string('name_kk');	//Название формы контроля на казахском языке
            $table->string('name_ru');	//	Название формы контроля на русском языке
            $table->string('name_en');	//Название формы контроля на английском языке
			$table->string('name_short_kk');	//Название формы контроля на казахском языке
            $table->string('name_short_ru');	//	Название формы контроля на русском языке
            $table->string('name_short_en');	//Название формы контроля на английском языке
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
