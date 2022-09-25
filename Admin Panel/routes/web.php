<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/login', [LogInController::class, 'index']);
Route::prefix('products')->name('product.')->group(function(){
    Route::get('/', [ProductController::class, 'index'])->name('index');

});
// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user-banned', [UserController::class, 'bannedUsers']);
Route::prefix('users')->name('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/banned', [UserController::class, 'bannedUsers'])->name('banned');
});
