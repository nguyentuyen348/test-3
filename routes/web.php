<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('products.index');
});

Route::prefix('products')->group(function () {
    Route::get('{id}/detail', [\App\Http\Controllers\ProductController::class, 'detail'])->name('products.detail');
    Route::get('list', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('store', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::post('{id}/edit', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::get('{id}/delete', [\App\Http\Controllers\ProductController::class, 'delete'])->name('products.delete');
    Route::get('search', [\App\Http\Controllers\ProductController::class, 'search'])->name('products.search');
});
