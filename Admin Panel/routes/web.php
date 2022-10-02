<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PublicController::class, 'index']);

Route::get('/login', [LogInController::class, 'index']);

// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user-banned', [UserController::class, 'bannedUsers']);
Route::prefix('categories')->name('Category.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('Index');
    Route::get('create', [CategoryController::class, 'create'])->name('Create');
    Route::post('/',[CategoryController::class,'store'])->name('Store');
    Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('Edit');
    Route::put('/',[CategoryController::class,'update'])->name('Update');
    Route::delete('/{id}/delete', [CategoryController::class, 'delete'])->name('Delete');
    Route::get('/{id?}', [CategoryController::class, 'show'])->name('Show');
});

Route::prefix('products')->name('Product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('Index');
    Route::get('create', [ProductController::class, 'create'])->name('Create');
    Route::post('/',[ProductController::class,'store'])->name('Store');
    Route::get('/{id}/edit',[ProductController::class,'edit'])->name('Edit');
    Route::put('/',[ProductController::class,'update'])->name('Update');
    Route::delete('/{id}/delete', [ProductController::class, 'delete'])->name('Delete');
    Route::get('/{id?}', [ProductController::class, 'show'])->name('Show');
});

Route::prefix('users')->name('User.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('Index');
    Route::get('/banned', [UserController::class, 'bannedUsers'])->name('Banned');
});
