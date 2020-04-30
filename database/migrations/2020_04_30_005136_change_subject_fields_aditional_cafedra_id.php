<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeSubjectFieldsAditionalCafedraId extends Migration
{
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->integer('department_id')->nullable()->after('degree_id');
            $table->boolean('is_additional')->default(false)->after('department_id');
        });
    }

    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn(['is_additional', 'department_id']);
        });
    }
}
