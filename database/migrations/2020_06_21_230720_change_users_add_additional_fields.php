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
            $table->integer('social_category_id')
                ->after('patronymic_translit')->nullable();
            $table->integer('military_organization_id')
                ->after('social_category_id')->nullable();
            $table->boolean('live_in_almaty')->after('military_organization_id')->nullable();
            $table->integer('study_form_id')->after('live_in_almaty')->nullable();
            $table->integer('edu_program_id')->after('study_form_id')->nullable();
            $table->integer('payment_form_id')->after('edu_program_id')->nullable();
            $table->integer('need_campus')->after('payment_form_id')->nullable();
            $table->integer('english_level_id')->after('need_campus')->nullable();
            $table->integer('citizenship')->after('english_level_id')->nullable();
            $table->string('ent_certificate_number')->after('citizenship')->nullable();
            $table->string('ent_certificate_series')
                ->after('ent_certificate_number')->nullable();
            $table->string('ent_ikt')->after('ent_certificate_series')->nullable();
            $table->float('ent_total')->after('ent_ikt')->nullable();
            $table->float('ent_history_of_kk')->after('ent_total')->nullable();
            $table->float('ent_math')->after('ent_history_of_kk')->nullable();
            $table->float('ent_reading')->after('ent_math')->nullable();
            $table->float('ent_profile_1')->after('ent_reading')->nullable();
            $table->float('ent_profile_2')->after('ent_profile_1')->nullable();
            $table->float('creative_exam')->after('ent_profile_2')->nullable();
            $table->float('creative_exam2')->after('creative_exam')->nullable();
            $table->integer('prev_edu_org_type')->after('creative_exam2')->nullable();
            $table->integer('prev_edu_org_region')->after('prev_edu_org_type')->nullable();
            $table->integer('prev_edu_language')->after('prev_edu_org_region')->nullable();
            $table->integer('prev_edu_score')->after('prev_edu_language')->nullable();
            $table->string('prev_edu_direction')->after('prev_edu_score')->nullable();
            $table->boolean('prev_edu_foreign')->after('prev_edu_direction')->nullable();
            $table->string('prev_edu_diplom_series')->after('prev_edu_foreign')->nullable();
            $table->string('prev_edu_diplom_number')
                ->after('prev_edu_diplom_series')->nullable();
            $table->date('prev_edu_diplom_date')
                ->after('prev_edu_diplom_number')->nullable();
            $table->string('prev_edu_diplom_excellent')->after('prev_edu_diplom_date')->nullable();
            $table->integer('main_doc_type')
                ->after('prev_edu_diplom_excellent')->nullable();
            $table->string('main_doc_number')->after('main_doc_type')->nullable();
            $table->string('main_doc_series')->after('main_doc_type')->nullable();
            $table->date('main_doc_date')->after('main_doc_type')->nullable();
            $table->string('main_doc_giver')->after('main_doc_date')->nullable();
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
                'live_in_almaty',
                'study_form_id',
                'edu_program_id',
                'payment_form_id',
                'need_campus',
                'english_level_id',
                'citizenship',
                'ent_certificate_number',
                'ent_certificate_series',
                'ent_ikt',
                'ent_total',
                'ent_history_of_kk',
                'ent_math',
                'ent_reading',
                'ent_profile_1',
                'ent_profile_2',
                'creative_exam',
                'creative_exam2',
                'prev_edu_org_type',
                'prev_edu_org_region',
                'prev_edu_language',
                'prev_edu_score',
                'prev_edu_direction',
                'prev_edu_foreign',
                'prev_edu_diplom_series',
                'prev_edu_diplom_number',
                'prev_edu_diplom_date',
                'prev_edu_diplom_excellent',
                'main_doc_type',
                'main_doc_number',
                'main_doc_series',
                'main_doc_date',
                'main_doc_giver'
            ]);
        });
    }
}
