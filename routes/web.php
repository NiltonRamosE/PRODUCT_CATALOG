<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopProductController;

/*Route::get('/', function () {
    return view('index');
})->name('index');*/

Route::get('/', [ShopProductController::class, 'index'])->name('shop.index');
Route::get('/allproducts', [ShopProductController::class, 'showProducts'])->name('shop.showProducts');
Route::get('/subcategories/{id}', [ShopProductController::class, 'showSubCategories'])->name('shop.showSubCategories');
Route::get('/subcategoriesproducts/{id}', [ShopProductController::class, 'showProductByCategories'])->name('shop.showProductByCategories');

Route::get('/specificproductdescription/{id}', [ShopProductController::class, 'showProductSpecific'])->name('shop.showProductSpecific');

Route::get('/shop/shopCar', function () {
    return view('shop/shop_car');
})->name('shop.shopcar');