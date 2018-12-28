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
Route::get('/', 'TampilanController@index');
Route::get('/tampilan', 'TampilanController@home');

Route::get('/add', 'TampilanController@create');

//kosan

Route::post('/datakosan', 'KosanController@datakosan');
Route::get('/kosan', 'KosanController@kosan');
Route::get('/showkosan', 'KosanController@liat');
Route::get('/readkosan/{slug}', 'KosanController@show');
Route::get('/editkosan/{id}', 'KosanController@editkosan');
Route::post('/update/{id}', 'KosanController@update');
Route::get('/deletekosan/{id}', 'KosanController@destroy');

//kurir

Route::post('/datakurir', 'KurirController@datakurir');
Route::get('/kurir', 'KurirController@kurir');
Route::get('/showkurir', 'KurirController@liat');
Route::get('/readkurir/{slug}', 'KurirController@show');
Route::get('/editkurir/{id}', 'KurirController@editkurir');
Route::post('/update/{id}', 'KurirController@update');
Route::get('/deletekurir/{id}', 'KurirController@destroy');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
