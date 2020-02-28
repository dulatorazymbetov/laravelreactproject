<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesTable extends Migration
{
    public function up(){
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url')->unique();
            $table->string('description_kk');
            $table->string('description_ru');
            $table->string('description_en');
            $table->string('icon');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('modules');
    }
}
