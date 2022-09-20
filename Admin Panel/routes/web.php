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
Route::get('/product', [ProductController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user-banned', [UserController::class, 'bannedUsers']);
