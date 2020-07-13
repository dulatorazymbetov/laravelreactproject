<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiplomAppThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diplom_app_themes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->string('diploma_name_kk')->default('');
            $table->string('diploma_name_ru')->default('');
            $table->string('diploma_name_en')->default('');
            $table->integer('diploma_credits')->default(0);
            $table->integer('diploma_ects_credits')->default(0);
            $table->float('final_grade')->nullable();
            $table->string('alpha_mark')->nullable();
            $table->float('numeric_mark')->default(0);
            $table->string('traditional_mark')->default('');
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
        Schema::dropIfExists('diplom_app_themes');
    }
}
