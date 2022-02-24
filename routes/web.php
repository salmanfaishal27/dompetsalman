<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/', 'DompetController@index');
Route::get('/dompet', 'DompetController@index');
Route::get('/ubahdompet/{id}', 'DompetController@updatedompet');
Route::post('/ubahdompet/update', 'DompetController@ubahdompet')->name('UpdateDompet');
Route::get('/keloladompet', 'DompetController@createdompet')->name('BuatBaru');
Route::post('/keloladompet/insert', 'DompetController@insert')->name('InsertDompet');
Route::get('/detail/{id}', 'DompetController@detail');


Route::get('/kategori', 'KategoriController@index');
Route::get('/ubahkategori/{id}', 'KategoriController@updatekategori');
Route::get('/kelolakategori', 'KategoriController@createkategori')->name('BuatBaru');
Route::post('/kelolakategori/insert', 'KategoriController@insert')->name('InsertKategori');
Route::post('/ubahkategori/update', 'KategoriController@ubahkategori')->name('UpdateKategori');
Route::get('/detailkategori/{id}', 'KategoriController@detail');

Route::get('/dompetmasuk', function(){
    return view ('dompetmasuk');
});
Route::get('/dompetkeluar', function(){
    return view ('dompetkeluar');
});
Route::get('/laporantransaksi', function(){
    return view ('laporantransaksi');
});

Route::get('/dompetmasukbb',function(){
    return view('dompetmasukbb');
});
Route::get('/dompetkeluarbb',function(){
    return view('dompetkeluarbb');
});
Route::get('/result', function() {
    return view('result');
});

