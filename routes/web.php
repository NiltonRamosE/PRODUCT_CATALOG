<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/shop', function () {
    return view('shop/shop_product');
})->name('shop.index');

Route::get('/shop/shopCar', function () {
    return view('shop/shop_car');
})->name('shop.shopcar');