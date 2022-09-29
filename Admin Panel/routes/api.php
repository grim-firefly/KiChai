<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('Category.')->group(function () {
    Route::get('getAllCategory', [CategoryController::class, 'getAllCategory'])->name('AllCategory');
    Route::post('deleteCategory', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
    Route::get('getCategoryName', [CategoryController::class, 'getCategoryName'])->name('getCategory');
    Route::post('updateCategoryInfo', [CategoryController::class, 'updateCategoryInfo'])->name('updateCategoryInfo');
});
