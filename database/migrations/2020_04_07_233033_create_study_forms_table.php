<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('description_kz');
			$table->string('description_ru');
			$table->string('description_en');
			$table->tinyInteger('course_count');
			$table->integer('degree_id');
			$table->integer('department_type_id');
			
			
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
        Schema::dropIfExists('study_forms');
    }
}
