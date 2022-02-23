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

Route::get('/', function () {
    return view('home');
});

Route::get('/dompet', function(){
    return view ('dompet');
});
Route::get('/kategori', function(){
    return view ('kategori');
});
Route::get('/dompetmasuk', function(){
    return view ('dompetmasuk');
});
Route::get('/dompetkeluar', function(){
    return view ('dompetkeluar');
});
Route::get('/laporantransaksi', function(){
    return view ('laporantransaksi');
});
Route::get('/keloladompet', function(){
    return view('keloladompet');
});