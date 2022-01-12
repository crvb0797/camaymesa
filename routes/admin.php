<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

/* CRUD de productos */
Route::resource('product', ProductController::class)->names('admin.products');
