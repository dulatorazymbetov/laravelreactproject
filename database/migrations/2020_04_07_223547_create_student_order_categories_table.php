<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentOrderCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_order_categories', function (Blueprint $table) {
            $table->integer('id');
			$table->integer('student_order_type_id');
			$table->string('description_kz');
			$table->string('description_ru');
			$table->string('description_en')->nullable();            
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
        Schema::dropIfExists('student_order_categories');
    }
}
