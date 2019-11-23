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
Route::get('logout','homeController@logout');
Route::post('login','homeController@login');


Route::get('homePengurus','pengurusController@index');


Route::get('home','anggotaController@home');
Route::get('registrasi','anggotaController@registrasi'); 
Route::post('registrasi/create','anggotaController@create');


Route::get('home/simpanan','transaksiController@simpanan');
Route::get('home/pinjaman','transaksiController@pinjaman');
Route::get('home/transferan','transaksiController@transferan');
Route::get('home/penarikan','transaksiController@penarikan');
Route::get('home/pelunasan','transaksiController@pelunasan');
Route::get('home/detail/{noTransaksi}','transaksiController@detail');
Route::get('home/detailx/{noTransaksi}','transaksiController@detailx');

Route::post('home/transaksi/simpan','transaksiController@simpan');
Route::post('home/transaksi/pinjam','transaksiController@pinjam');
Route::post('home/transaksi/transfer','transaksiController@transfer');
Route::post('home/transaksi/tarik','transaksiController@tarik');
Route::post('home/transaksi/lunas','transaksiController@lunas');

