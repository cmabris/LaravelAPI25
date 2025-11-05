<?php

use App\Http\Controllers\Api\V2\CategoryController;
use App\Http\Controllers\Api\V2\ProductController;

Route::middleware(['auth:sanctum', 'throttle:api'])->group(function () {
    Route::apiResource('categories', CategoryController::class)
        ->names('api.v2.categories');

    Route::get('products', [ProductController::class, 'index'])
        ->middleware('throttle:products');
});
