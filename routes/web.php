<?php


use Illuminate\Support\Facades\Route;

Route::get('/', 'LoginController@index');
Route::post('/postLogin', 'LoginController@cekLogin');
Route::get('/logout', 'LoginController@logout');

Route::middleware('cekLogin')->group(function(){
    Route::get('/beranda', 'BerandaController@index');
    Route::view('/laporan', 'laporan');
    Route::get('barang', 'BarangController@index');
    Route::get('/transaksi', 'TransaksiController@index');
    Route::get('/transaksi/tambah', 'TransaksiController@create');
    Route::post('/transaksi/input', 'TransaksiController@store');
    Route::get('/transaksi/item/{id}', 'TransaksiController@getBarang');
    Route::get('/transaksi/fill/{id}', 'TransaksiController@fillBarang');
    Route::post('/transaksi/hitung', 'TransaksiController@hitung');
});