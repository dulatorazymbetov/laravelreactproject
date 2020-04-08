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

Route::group(['middleware' => 'role:educational_programs'], function() {
    //Route::get('staeducational_programsff', 'ListOfStaffController@all');
});