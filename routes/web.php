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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('users','Admin\UserController@index')->name('user');
Route::get('users/show/{user}','Admin\UserController@show')->name('user.show');
Route::get('users/create','Admin\UserController@create')->name('user.create');
Route::post('users/store','Admin\UserController@store')->name('user.store');
Route::get('users/edit/{user}','Admin\UserController@edit')->name('user.edit');
Route::put('users/update/{user}','Admin\UserController@update')->name('user.update');
Route::delete('users/delete/{user}','Admin\UserController@delete')->name('user.delete');


