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
    Route::get('edu_programs/form', 'EduProgramsController@form');
    Route::get('edu_programs', 'EduProgramsController@all');
    Route::post('edu_programs', 'EduProgramsController@add');
});

Route::group(['middleware' => 'role:hr_orders'], function() {
    Route::get('hr_orders/form', 'HrOrderController@form');
    Route::get('hr_orders', 'HrOrderController@all');
    Route::post('hr_orders/add', 'HrOrderController@add');
});