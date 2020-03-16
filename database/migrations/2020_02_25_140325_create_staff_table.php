<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up(){
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->bigInteger('user_id');
			
			$table->boolean('is_foreign')->default(false);
			$table->tinyInteger('english_level_id')->nullable()->unsigned();
			
			$table->tinyInteger('academic_degree_id')->nullable()->unsigned();
			$table->tinyInteger('academic_rank_id')->nullable()->unsigned(); //Ученое звание

            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(){
        Schema::dropIfExists('staff');
    }
}
