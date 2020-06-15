<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeAllApplicants extends Migration
{
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropColumn([
                'firstname',
                'lastname',
                'patronymic',
                'email',
                'password',
                'iin',
                'phone'
            ]);
            $table->string('user_id')->after('id');
            $table->string('apply_year')->after('user_id');
            $table->string('firstname_kk')->after('apply_year')->nullable();
            $table->string('lastname_kk')->after('firstname_kk')->nullable();
            $table->string('patronymic_kk')->after('lastname_kk')->nullable();
            $table->string('firstname_en')->after('patronymic_kk')->nullable();
            $table->string('lastname_en')->after('firstname_en')->nullable();
            $table->string('patronymic_en')->after('lastname_en')->nullable();
        });
    }

    public function down()
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('iin')->unique();
            $table->string('phone')->unique();
            $table->dropColumn([
                'user_id',
                'apply_year',
                'firstname_kk',
                'lastname_kk',
                'patronymic_kk',
                'firstname_en',
                'lastname_en',
                'patronymic_en'
            ]);
        });
    }
}
