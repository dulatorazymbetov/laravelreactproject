<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_directions', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('education_area_id');	//Область образования	//education_areas
			$table->string('code');	//код
			//$table->string('code_msko');	//код МСКО
			$table->string('title_kk');
            $table->string('title_ru');
            $table->string('title_en')->nullable();
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
        Schema::dropIfExists('training_directions');
    }
}
