<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up(){
        Schema::create('roles', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name')->unique();
            $table->string('description_kk');
            $table->string('description_ru');
            $table->string('description_en');
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('roles');
    }
}
