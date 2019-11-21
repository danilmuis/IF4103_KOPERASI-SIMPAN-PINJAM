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
Route::get('homePengurus','homeController@indexPengurus');
Route::get('home/simpanan','homeController@simpanan');
Route::get('home/pinjaman','homeController@pinjaman');
Route::get('home/transferan','homeController@transferan');
Route::get('home/penarikan','homeController@penarikan');
Route::get('home/pelunasan','homeController@pelunasan');
Route::get('logout','homeController@logout');

Route::get('home/hasilTransaksi','homeController@hasil');
Route::get('home/detail/{noTransaksi}','homeController@detail');
Route::get('home/detailx/{noTransaksi}','homeController@detailx');
Route::get('buktiTransaksi/{{noTransaksi}}','homeController@bukti');



Route::get('/new','homeController@new');

Route::post('registrasi/create','homeController@create');
Route::post('login','homeController@login');
Route::post('home/transaksi/simpan','homeController@simpan');
Route::post('home/transaksi/pinjam','homeController@pinjam');
Route::post('home/transaksi/transfer','homeController@transfer');
Route::post('home/transaksi/tarik','homeController@tarik');
Route::post('home/transaksi/lunas','homeController@lunas');
#AAA