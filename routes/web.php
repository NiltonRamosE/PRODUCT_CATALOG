<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopProductController;

/*Route::get('/', function () {
    return view('index');
})->name('index');*/

Route::get('/', [ShopProductController::class, 'index'])->name('shop.index');
Route::get('/allproducts', [ShopProductController::class, 'showAllProducts'])->name('shop.products');
Route::get('/card-sub-categories/{id}', [ShopProductController::class, 'showSubCategoriesByCategory'])->name('shop.cardSubCategories');
Route::get('/products-filter-category/{id}', [ShopProductController::class, 'showProductByCategories'])->name('shop.filterCategories');
Route::get('/products-filter-sub-category/{id}', [ShopProductController::class, 'showProductBySubCategories'])->name('shop.filterSubCategories');

Route::get('/product-description/{id}', [ShopProductController::class, 'showProductSpecific'])->name('shop.productSpecific');

Route::get('/shop/shoppingCart', function () {
    return view('shop/shopping_cart');
})->name('shop.shoppingcart');