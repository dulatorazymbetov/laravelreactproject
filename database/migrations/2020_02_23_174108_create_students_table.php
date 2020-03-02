<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up(){
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('study_status_id')->unsigned()->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->tinyInteger('study_form_id')->unsigned()->nullable();
            $table->tinyInteger('study_lang_id')->unsigned()->nullable();
            $table->tinyInteger('course')->unsigned()->nullable();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('students');
    }
}
