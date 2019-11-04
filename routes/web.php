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

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home');


Route::get('details/summary','PostController@summary');
Route::get('details/{usn}/{cname}','PostController@show');
Route::resource('details','PostController');


Route::get('{usn}/{cname}','UserController@show');
Route::resource('User/{usn}','UserController');
