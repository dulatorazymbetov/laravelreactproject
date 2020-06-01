<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSubjectAddLections extends Migration
{
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->tinyInteger('lection')->after('department_id');
            $table->tinyInteger('lab')->after('lection');
            $table->tinyInteger('practice')->after('lab');
        });
    }

    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn(['lection', 'lab', 'practice']);
        });
    }
}
