<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomAppSubjectTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplom_app_subject_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->default('');
            $table->string('name_kz')->default('');
            $table->string('name_ru')->default('');
            $table->string('name_en')->default('');
            $table->boolean('is_disabled')->default(false);
			
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diplom_app_subject_types');
    }
}
