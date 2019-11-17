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



Route::group(['middleware'=>'preventbackbutton'],function(){
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('details/create','UserController@create');
Route::get('details/summary','PostController@summary');
Route::get('details/{usn}/{cname}','PostController@show');
Route::get('details','PostController@index');


Route::get('{usn}/{cname}','UserController@show');
Route::get('User/{usn}','UserController@index');
Route::post('details/create','UserController@store');
});



