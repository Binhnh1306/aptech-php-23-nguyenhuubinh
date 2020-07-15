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

route::get('/users','UserController@index')->name('trang-chu');
route::get('/users/create','UserController@create');
Route::get('/users/{user}','UserController@show');

Route::delete('/users/{id}', 'UserController@destroy');
route::post('/users','UserController@store');
//update
Route::get('/users/{user}/edit', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update');
