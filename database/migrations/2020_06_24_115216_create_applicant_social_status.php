<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantSocialStatus extends Migration
{
    public function up(){
        Schema::create('applicant_social_status', function (Blueprint $table) {
            $table->integer('applicant_id')->unsigned();
            $table->integer('social_status_id')->unsigned();
            $table->primary(['applicant_id', 'social_status_id']);
        });
    }
    public function down(){
        Schema::dropIfExists('applicant_social_status');
    }
}
