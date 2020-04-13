<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingLanguagesTable extends Migration
{
    public function up(){
        Schema::create('teaching_languages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
			$table->string('title_kk')->nullable();
			$table->string('title_ru')->nullable();
			$table->string('title_en')->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists('teaching_languages');
    }
}
