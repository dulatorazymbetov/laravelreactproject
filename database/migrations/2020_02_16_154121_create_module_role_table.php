<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleRoleTable extends Migration
{
    public function up(){
        Schema::create('module_role', function (Blueprint $table) {
            $table->integer('role_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->primary(['role_id', 'module_id']);
        });
    }
    public function down(){
        Schema::dropIfExists('module_role');
    }
}
