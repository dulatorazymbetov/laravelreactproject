<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('department_type_id');
            $table->string('title_kk')->nullable();
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_short_kk')->nullable();
            $table->string('title_short_ru')->nullable();
            $table->string('title_short_en')->nullable();
            $table->integer('parent_id')->nullable();
            $table->boolean('include_staff')->nullable();
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
        Schema::dropIfExists('departments');
    }
}
