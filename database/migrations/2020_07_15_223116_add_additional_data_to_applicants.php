<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalDataToApplicants extends Migration
{
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->integer('gop_1')->after('main_doc_giver')->nullable();
            $table->integer('gop_2')->after('gop_1')->nullable();
            $table->integer('gop_3')->after('gop_2')->nullable();
            $table->string('request_file')->after('other_file')->nullable();
            $table->boolean('confirmed')->after('birthplace')->nullable();
        });
    }
    public function down()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn([
                'gop_1',
                'gop_2',
                'gop_3',
                'request_file',
                'confirmed'
            ]);
        });
    }
}
