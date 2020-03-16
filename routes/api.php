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

Route::get('tutors', 'UserController@allTutors');
Route::get('tutors/{id}', 'UserController@getTutor')->where('id', '[0-9]+');
Route::post('tutors/{id}/edit', 'UserController@editTutor')->where('id', '[0-9]+');
