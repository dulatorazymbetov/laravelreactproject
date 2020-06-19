<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMilitaryOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('military_organizations', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title_kk');	
            $table->string('title_ru');	
            $table->string('title_en');	
            $table->string('code');	
            $table->string('address');	
            $table->string('contact_phone');	
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
        Schema::dropIfExists('military_organizations');
    }
}
