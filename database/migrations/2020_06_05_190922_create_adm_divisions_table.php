<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adm_divisions', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('parent_id')->nullable;
			$table->string('name_kz');
			$table->string('name_ru');
			$table->integer('area_type');
			$table->integer('level');
			$table->string('code');
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
        Schema::dropIfExists('adm_divisions');
    }
}
