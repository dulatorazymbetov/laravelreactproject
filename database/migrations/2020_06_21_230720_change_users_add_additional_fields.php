<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersAddAdditionalFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('nationality_id')->after('gender')->nullable();
        });
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('birthplace')->after('patronymic_translit')->nullable();
            $table->integer('social_category_id')->after('patronymic_translit')->nullable();
            $table->integer('military_organization_id')->after('social_category_id')->nullable();
            $table->boolean('live_in_almaty')->after('military_organization_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'nationality_id'
            ]);
        });
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn([
                'birthplace',
                'social_category_id',
                'military_organization_id',
                'live_in_almaty'
            ]);
        });
    }
}
