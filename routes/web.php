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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/','BarangController@home');
Route::get('/toko/tambah','BarangController@tambah');
Route::post('/toko/queryinsert','BarangController@qinsert');
Route::get('/toko/hapus/{id}','BarangController@hapus');
Route::get('/toko/edit/{id}','BarangController@edit');
Route::post('/toko/queryupdate','BarangController@qupdate');
