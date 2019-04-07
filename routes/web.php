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
    return View::make('layouts/index');
});

Route::prefix('makanan')->group(function () {
    Route::get('/makanan', 'Makanan\MakananController@index')->name('makanan.index');
    Route::get('/makanan/add', 'Makanan\MakananController@create')->name('makanan.create');
    // Route::get('/makanan/edit/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/makanan/update/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/makanan/delete/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
});

Route::prefix('bumbu')->group(function () {
    Route::get('/bumbu', 'Bumbu\BumbuController@index')->name('bumbu.index');
    Route::get('/bumbu/add', 'Bumbu\BumbuController@create')->name('bumbu.create');
    // Route::get('/bumbu/edit/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/bumbu/update/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/bumbu/delete/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
});

Route::prefix('checkout')->group(function () {
    Route::get('/checkout', 'Checkout\CheckoutController@index')->name('checkout.index');
    Route::get('/checkout/add', 'Checkout\CheckoutController@create')->name('checkout.create');
    // Route::get('/bumbu/edit/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/bumbu/update/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
    // Route::get('/bumbu/delete/{makanan}', 'Makanan\MakananController@index')->name('makanan.index');
});
