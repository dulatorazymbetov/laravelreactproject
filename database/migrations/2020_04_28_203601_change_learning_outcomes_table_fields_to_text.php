<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeLearningOutcomesTableFieldsToText extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('learning_outcomes', function (Blueprint $table) {
            $table->text('title_kk')->change();
            $table->text('title_ru')->change();
            $table->text('title_en')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('learning_outcomes', function (Blueprint $table) {
            $table->string('title_kk')->change();
            $table->string('title_ru')->change();
            $table->string('title_en')->change();
        });
    }
}
