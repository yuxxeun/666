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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@formLogin');
Route::post('/proses', 'LoginController@cek');
Route::get('/logout', 'LoginController@logout');

// Route::get('/beranda', 'BerandaController@index');
Route::middleware('login')->group(function(){
    Route::get('/beranda', 'BerandaController@index');
});