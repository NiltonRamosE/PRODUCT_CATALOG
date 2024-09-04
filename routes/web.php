<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\RedirectIfAuthenticated;

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

Route::middleware([RedirectIfAuthenticated::class])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
});
Route::post('/login-init', [LoginController::class, 'iniciarSesion'])->name('login.init');
Route::get('/login-out', [LoginController::class, 'cerrarSesion'])->name('login.out');

Route::middleware([CheckAdmin::class])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('category.store');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/subcategory', [SubCategoryController::class, 'index'])->name('subcategory.index');
    Route::post('/subcategory/add', [SubCategoryController::class, 'store'])->name('subcategory.store');
    Route::post('/subcategory/update/{id}', [SubCategoryController::class, 'update'])->name('subcategory.update');
    Route::get('/subcategory/delete/{id}', [SubCategoryController::class, 'destroy'])->name('subcategory.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::post('/product/add', [ProductController::class, 'store'])->name('product.store');
    Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});