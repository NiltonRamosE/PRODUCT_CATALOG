<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/products', function () {
    return view('products/product_categories');
})->name('product.index');

Route::get('/products/shopCar', function () {
    return view('products/shop_car');
})->name('product.shopcar');