<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/signup', function () {
    return view('auth.register');
});



Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
    Route::prefix('categories')->name('Category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('Index');
        Route::get('create', [CategoryController::class, 'create'])->name('Create');
        Route::post('/', [CategoryController::class, 'store'])->name('Store');
        Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('Edit');
        Route::put('/', [CategoryController::class, 'update'])->name('Update');
        Route::delete('/{id}/delete', [CategoryController::class, 'delete'])->name('Delete');
        Route::get('/{id?}', [CategoryController::class, 'show'])->name('Show');
    });
    Route::prefix('brands')->name('Brand.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('Index');
        Route::get('create', [BrandController::class, 'create'])->name('Create');
        Route::post('/', [BrandController::class, 'store'])->name('Store');
        Route::get('/{id}/edit', [BrandController::class, 'edit'])->name('Edit');
        Route::put('/', [BrandController::class, 'update'])->name('Update');
        Route::delete('/{id}/delete', [BrandController::class, 'delete'])->name('Delete');
        Route::get('/{id?}', [BrandController::class, 'show'])->name('Show');
    });
    Route::prefix('colors')->name('Color.')->group(function () {
        Route::get('/', [ColorController::class, 'index'])->name('Index');
        Route::get('create', [ColorController::class, 'create'])->name('Create');
        Route::post('/', [ColorController::class, 'store'])->name('Store');
        Route::get('/{id}/edit', [ColorController::class, 'edit'])->name('Edit');
        Route::put('/', [ColorController::class, 'update'])->name('Update');
        Route::delete('/{id}/delete', [ColorController::class, 'delete'])->name('Delete');
        Route::get('/{id?}', [ColorController::class, 'show'])->name('Show');
    });


    Route::prefix('productslist')->name('Product.')->group(function () {
        Route::get('/trashproduct', [ProductController::class, 'trashproduct'])->name('Trash');
        Route::get('/', [ProductController::class, 'index'])->name('Index');
        Route::get('create', [ProductController::class, 'create'])->name('Create');
        Route::post('/', [ProductController::class, 'store'])->name('Store');
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('Edit');
        Route::get('/{id}/restore', [ProductController::class, 'restoreProduct'])->name('Restore');
        Route::put('/', [ProductController::class, 'update'])->name('Update');
        Route::delete('/{id}/delete', [ProductController::class, 'delete'])->name('Delete');
        Route::delete('/{id}/deleteForce', [ProductController::class, 'deleteForce'])->name('DeleteForce');

        Route::get('/{id?}', [ProductController::class, 'show'])->name('Show');
        Route::get('/generatepdf/{id?}', [ProductController::class, 'generatePDF'])->name('pdfdownload');
    });
    Route::prefix('labs')->name('Lab.')->group(function () {
        Route::get('/', [LabController::class, 'index'])->name('Index');
        Route::get('create', [LabController::class, 'create'])->name('Create');
        Route::post('/', [LabController::class, 'store'])->name('Store');
        Route::get('/{id}/edit', [LabController::class, 'edit'])->name('Edit');
        Route::put('/', [LabController::class, 'update'])->name('Update');
        Route::delete('/{id}/delete', [LabController::class, 'delete'])->name('Delete');
        Route::get('/{id?}', [LabController::class, 'show'])->name('Show');
    });

    Route::prefix('users')->name('User.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('Index');
        Route::get('/banned', [UserController::class, 'bannedUsers'])->name('Banned');
    });
});
require __DIR__ . '/auth.php';
