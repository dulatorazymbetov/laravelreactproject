<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic')->nullable();
            $table->string('login')->unique();
            $table->string('password')->nullable();
            $table->tinyInteger('gender')->nullable()->unsigned();
            $table->string('email')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('iin')->nullable();
			
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down() {
        Schema::dropIfExists('users');
    }
}
