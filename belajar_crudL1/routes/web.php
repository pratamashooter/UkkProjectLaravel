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
Route::post('/kirimpesan','PesananController@store')->name('kirimpesan');
Route::get('/pesan','PesananController@kamar');
Route::get('/pesanan','PesananController@index');
Route::resource('crud','CrudsController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/pesanan/hapus/{id}','PesananController@hapus');
Route::get('/pesanan/edit/{id}','PesananController@edit');
Route::get('/search', 'PesananController@search');
Route::post('/pesanan/cetak', 'PesananController@struk');
Route::get('/laporan', 'PesananController@laporan');
Route::get('/cetaklaporan', 'PesananController@cetaklaporan');
Route::get('/pengguna', 'PesananController@pengguna');
Route::get('/pengguna/hapus/{id}', 'PesananController@hapuspengguna');