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
Route::get('/crud','CrudController@index');
Route::post('/crud/create','CrudController@create');
Route::get('/crud/{id}/edit','CrudController@edit');
Route::post('/crud/{id}/update','CrudController@update');
Route::get('/crud/{id}/delete','CrudController@delete');