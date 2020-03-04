<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('downloadReport1PDF/{id}', 'DownloadPdfController@downloadReport1PDF');
Route::get('downloadReport2PDF/{id}', 'DownloadPdfController@downloadReport2PDF');
Route::get('downloadReport3PDF/{id}', 'DownloadPdfController@downloadReport3PDF');
Route::get('downloadReport4PDF/{id}', 'DownloadPdfController@downloadReport4PDF');
Route::get('downloadReport5PDF/{id}', 'DownloadPdfController@downloadReport5PDF');
Route::get('downloadReport6PDF/{id}', 'DownloadPdfController@downloadReport6PDF');