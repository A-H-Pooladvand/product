<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

Route::get('/', MainController::class);

Route::group(['prefix' => 'products', 'as' => 'product.'], function () {
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
});

