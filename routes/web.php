<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/category', [CategoryController::class, 'home']);

Route::prefix('/category')->group(function () {
    Route::get('/food', [CategoryController::class, 'food']);
    Route::get('/beauty', [CategoryController::class, 'beauty']);
    Route::get('/baby', [CategoryController::class, 'baby']);
    Route::get('/homecare', [CategoryController::class, 'homecare']);
    Route::get('/profile/{id}/{name}', [CategoryController::class, 'profile']);
    Route::get('/transaksi/{transaksi?}', [CategoryController::class, 'transaksi']);
});
