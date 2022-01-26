<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\TrademarkController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* CRUD de productos */
Route::resource('product', ProductController::class)->names('admin.products');

/* CRUD de promociones */
Route::resource('promotion', PromotionController::class)->names('admin.promotions');

/* CRUD de marcas */
Route::resource('trademarks', TrademarkController::class)->names('admin.trademarks');
