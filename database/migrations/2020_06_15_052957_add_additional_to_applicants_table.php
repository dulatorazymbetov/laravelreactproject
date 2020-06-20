<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalToApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn([
                'firstname_kk',
                'lastname_kk',
                'patronymic_kk',
                'firstname_en',
                'lastname_en',
                'patronymic_en'
            ]);
            $table->string('firstname_translit')->after('apply_year')->nullable();
            $table->string('lastname_translit')->after('firstname_translit')->nullable();
            $table->string('patronymic_translit')->after('lastname_translit')->nullable();
            $table->string('additional')->after('patronymic_translit')->nullable();
            $table->string('confirm_token')->after('additional')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('firstname_kk')->after('apply_year')->nullable();
            $table->string('lastname_kk')->after('firstname_kk')->nullable();
            $table->string('patronymic_kk')->after('lastname_kk')->nullable();
            $table->string('firstname_en')->after('patronymic_kk')->nullable();
            $table->string('lastname_en')->after('firstname_en')->nullable();
            $table->string('patronymic_en')->after('lastname_en')->nullable();
            $table->dropColumn([
                'firstname_translit',
                'lastname_translit',
                'patronymic_translit',
                'additional',
                'confirm_token'
            ]);
        });
    }
}
