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
//Siswa
Route::get('/jsonSiswa','SiswaController@json');
Route::resource('/siswa','SiswaController');
Route::post('storesiswa','SiswaController@store')->name('tambah');
Route::get('ajaxdata/removedatasiswa', 'SiswaController@removedata')->name('ajaxdata');
Route::post('siswa/edit/{id}','SiswaController@update');
Route::get('siswa/getedit/{id}','SiswaController@edit');

