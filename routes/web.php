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

Route::get('/', 'PenawaranController@index')->name('admin');

Route::resource('/client','ClientController')->only(['index', 'edit', 'update']);
Route::resource('/sales','SalesController');

// Penawaran
Route::resource('/penawaran','PenawaranController');
Route::resource('/followup','FollowupController')->except(['show']);
Route::get('/followup/create/{id_penawaran}', 'FollowupController@create')->name('followup.create');
Route::resource('/dealing','DealingController')->except(['show']);
Route::get('/dealing/create/{id_penawaran}', 'DealingController@create')->name('dealing.create');

// Program
Route::resource('/program','ProgramController');
Route::resource('/fasilitas','FasilitasController')->except('index','show');
Route::get('/fasilistas/create/{id_program}', 'FasilitasController@create')->name('fasilitas.create');
Route::resource('/keterangan','KeteranganController')->except('index','show');
Route::get('/keterangan/create/{id_program}', 'KeteranganController@create')->name('keterangan.create');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
