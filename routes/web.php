<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/Jabatan', 'jabatanc');
Route::resource('/Golongan', 'golonganc');
Route::resource('/Pegawai', 'pegawaicontroller');
Route::resource('/Tunjangan', 'tunjanganc');
Route::resource('/TunjanganPegawai', 'tunjanganc');
Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
    Route::post('register', 'APIController@register');
    Route::post('login', 'APIController@login');
    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'APIController@get_user_details');
    });
});
Route::resource('/KategoriLembur', 'kategorilemburcontroller');