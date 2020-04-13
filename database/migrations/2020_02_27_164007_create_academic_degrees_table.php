<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicDegreesTable extends Migration
{
    public function up(){
        Schema::create('academic_degrees', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sort_order')->nullable();
            $table->string('title_kk')->nullable();
			$table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
        });
    }
    public function down(){
        Schema::dropIfExists('academic_degrees');
    }
}
