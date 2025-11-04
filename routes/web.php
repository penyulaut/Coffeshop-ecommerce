<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('pages.beranda');

Route::get('/beranda/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/beranda/orders', [App\Http\Controllers\ProductController::class, 'index'])->name('pages.orders');

Route::get('/beranda/dashboard/create', [App\Http\Controllers\ProductController::class, 'create'])->name('dashboard.create');
Route::post('/beranda/dashboard', [App\Http\Controllers\ProductController::class, 'store'])->name('dashboard.store');

Route::get('/beranda/dashboard/create{id}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('dashboard.edit');
Route::put('/beranda/dashboard/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('dashboard.update');


Route::get('/beranda/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::post('/beranda/cart/add', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');

Route::get('/beranda/detail/{id}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
// Tambah ke keranjang
Route::post('/beranda/cart/add', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');

// Halaman keranjang
Route::get('/beranda/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::delete('/beranda/cart/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');