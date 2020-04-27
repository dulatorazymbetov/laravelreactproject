<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('auth', 'Auth\LoginController@login');
Route::get('auth', 'Auth\LoginController@status');
Route::get('users', 'UserController@allUsers');
Route::get('roles', 'UserController@allRoles');
Route::get('modules', 'UserController@allModules');
Route::get('students', 'UserController@allStudents');

Route::group(['middleware' => 'role:list_of_staff'], function() {
    Route::get('staff', 'ListOfStaffController@all');
    Route::get('staff/{id}', 'ListOfStaffController@get')->where('id', '[0-9]+');
    Route::post('staff/{id}/edit', 'ListOfStaffController@edit')->where('id', '[0-9]+');
});

Route::group(['middleware' => 'role:edu_programs'], function() {
    //ДАННЫЕ ДЛЯ СОЗДАНИЯ ФОРМ
    Route::get('edu_programs/form', 'EduProgramsController@eduProgramsForm');
    Route::get('subjects/form', 'EduProgramsController@subjectsForm');
    Route::get('learning_outcomes/form', 'EduProgramsController@outcomesForm');
    Route::get('edu_program_subjects/form', 'EduProgramsController@eduProgramSubjectsForm');
    //ОБРАЗОВАТЕЛЬНЫЕ ПРОГРАММЫ
    Route::get('edu_programs', 'EduProgramsController@all');
    Route::post('edu_programs', 'EduProgramsController@add');
    Route::get('edu_programs/{id}', 'EduProgramsController@get')
        ->where('id', '[0-9]+');
    Route::post('edu_programs/{id}', 'EduProgramsController@update')
        ->where('id', '[0-9]+');
    //РЕЗУЛЬТАТЫ ОБУЧЕНИЯ
    Route::post('edu_programs/{id}/learning_outcomes', 'EduProgramsController@addOutcome')
        ->where('id', '[0-9]+');
    Route::get('learning_outcomes/{id}', 'EduProgramsController@getOutcome')
        ->where('id', '[0-9]+');
    Route::post('learning_outcomes/{id}', 'EduProgramsController@updateOutcome')
        ->where('id', '[0-9]+');
    //ДИСЦИПЛИНЫ
    Route::get('subjects', 'EduProgramsController@allSubjects');
    Route::post('subjects', 'EduProgramsController@addSubject');
    Route::get('subjects/{id}', 'EduProgramsController@getSubject')
        ->where('id', '[0-9]+');
    Route::post('subjects/{id}', 'EduProgramsController@updateSubject')
        ->where('id', '[0-9]+');
    //ДИСЦИПЛИНЫ+ПРОГРАММЫ
    Route::post('edu_programs/{id}/subjects', 'EduProgramsController@addEduProgramSubject')
        ->where('id', '[0-9]+');
    Route::get('program_subjects/{id}', 'EduProgramsController@getEduProgramSubject')
        ->where('id', '[0-9]+');
    Route::post('program_subjects/{id}', 'EduProgramsController@updateEduProgramSubject')
        ->where('id', '[0-9]+');
});

Route::group(['middleware' => 'role:hr_orders'], function() {
    Route::get('hr_orders/form', 'HrOrderController@form');
    Route::get('hr_orders', 'HrOrderController@all');
    Route::post('hr_orders/add', 'HrOrderController@add');
});

Route::group(['middleware' => 'role:student_profile'], function() {
    Route::get('student_profile/form', 'StudentProfileController@form');
    Route::get('student_profile', 'StudentProfileController@all');
    Route::post('student_profile/add', 'StudentProfileController@add');
});