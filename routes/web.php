<?php

use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StoreController::class, 'index'])->name('index');
Route::get('/addproduct', [StoreController::class, 'productHome'])->name('product_url');
Route::post('/addproduct', [StoreController::class, 'create'])->name('create');
Route::get('/edit/{id}', [StoreController::class, 'edit'])->name('edit');
Route::put('/edit/{id}', [StoreController::class, 'update'])->name('update');
