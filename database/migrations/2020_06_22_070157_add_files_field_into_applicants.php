<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFilesFieldIntoApplicants extends Migration
{
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('udv_file')->after('main_doc_giver')->nullable();
            $table->string('ent_file')->after('udv_file')->nullable();
            $table->string('middle_diplom_file')->after('ent_file')->nullable();
            $table->string('hight_diplom_file')->after('middle_diplom_file')->nullable();
            $table->string('exemption_file')->after('hight_diplom_file')->nullable();
            $table->string('other_file')->after('exemption_file')->nullable();
        });
    }
    public function down()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn([
                'udv_file',
                'ent_file',
                'middle_diplom_file',
                'hight_diplom_file',
                'exemption_file',
                'other_file'
            ]);
        });
    }
}
