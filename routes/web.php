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
Route::get('/','homeController@index');
Route::get('home','homeController@home');  
Route::get('home/welcome','homeController@welcome');  
Route::get('registrasi','homeController@registrasi'); 
Route::post('registrasi/create','homeController@create');
Route::post('login','homeController@login');
#AAA