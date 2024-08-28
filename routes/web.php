<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopProductController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/shop', [ShopProductController::class, 'index'])->name('shop.index');
Route::get('/subcategories/{id}', [ShopProductController::class, 'showSubCategories'])->name('shop.showSubCategories');



Route::get('/shop/shopCar', function () {
    return view('shop/shop_car');
})->name('shop.shopcar');