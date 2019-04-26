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

Route::get('/', 'Dashboard\DashboardController@index')->name('dashboard');

Route::get('/cart', function () {
    return view('pages.bumbu.test-cart');
});

Route::prefix('makanan')->group(function () {
    Route::get('', 'MasterBarang\MakananController@index')->name('makanan.index');
    Route::get('/add', 'MasterBarang\MakananController@create')->name('makanan.create');
    Route::post('/save', 'MasterBarang\MakananController@store')->name('makanan.save');
    Route::get('/edit/{makanan}', 'MasterBarang\MakananController@edit')->name('makanan.edit');
    Route::put('/update/{makanan}', 'MasterBarang\MakananController@update')->name('makanan.update');
    Route::get('/delete/{makanan}', 'MasterBarang\MakananController@destroy')->name('makanan.delete');
});

Route::prefix('bumbu')->group(function () {
    Route::get('/', 'MasterBarang\BumbuController@index')->name('bumbu.index');
    Route::get('/add', 'MasterBarang\BumbuController@create')->name('bumbu.create');
    Route::post('/save', 'MasterBarang\BumbuController@store')->name('bumbu.save');
    Route::get('/edit/{bumbu}', 'MasterBarang\BumbuController@edit')->name('bumbu.edit');
    Route::put('/update/{bumbu}', 'MasterBarang\BumbuController@update')->name('bumbu.update');
    Route::get('/delete/{bumbu}', 'MasterBarang\BumbuController@destroy')->name('bumbu.delete');
});

Route::prefix('penerimaan')->group(function () {
    Route::get('/', 'Penerimaan\PenerimaanController@index')->name('penerimaan.index');
    Route::get('/add', 'Penerimaan\PenerimaanController@create')->name('penerimaan.create');
    Route::post('/save', 'Penerimaan\PenerimaanController@store')->name('penerimaan.save');
    Route::get('get-barang/{barang}', 'Penerimaan\PenerimaanController@getBarang')->name('penerimaan.get-barang');
    //    Route::get('/edit/{penerimaan}', 'MasterBarang\BumbuController@edit')->name('bumbu.edit');
    //    Route::put('/update/{penerimaan}', 'MasterBarang\BumbuController@update')->name('bumbu.update');
    //    Route::get('/delete/{penerimaan}', 'MasterBarang\BumbuController@destroy')->name('bumbu.delete');
});

Route::prefix('checkout')->group(function () {
    Route::get('/checkout', 'Checkout\CheckoutController@index')->name('checkout.index');
    Route::get('/checkout/add', 'Checkout\CheckoutController@create')->name('checkout.create');
    Route::post('/checkout/save', 'Checkout\CheckoutController@store')->name('checkout.save');
});

Route::get('cetak-laporan', 'HomeController@index')->name('cetak.index');
Route::post('laporan', 'HomeController@cetakLaporan')->name('cetak');
