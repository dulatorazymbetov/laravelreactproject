<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUsersAddTel extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('tel')->after('email')->nullable();
            $table->date('birthdate')->after('tel')->nullable();
            $table->string('registration_address', 1000)->after('birthdate')->nullable();
            $table->string('residential_address', 1000)->after('registration_address')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'tel', 
                'birthdate',
                'registration_address',
                'residential_address'
            ]);
        });
    }
}
