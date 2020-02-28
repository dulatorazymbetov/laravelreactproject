<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    public function up(){
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->tinyInteger('post_id2')->unsigned()->nullable();
			$table->tinyInteger('foreigner')->unsigned()->nullable();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('staffs');
    }
}
