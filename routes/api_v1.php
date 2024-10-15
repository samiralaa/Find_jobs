<?php

use App\Http\Controllers\Api\Category\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index');      // GET /admin/categories
    Route::post('/categories', 'store');     // POST /admin/categories
    Route::get('/categories/{id}', 'show');  // GET /admin/categories/{id}
    Route::put('/categories/{id}', 'update'); // PUT /admin/categories/{id}
    Route::delete('/categories/{id}', 'destroy'); // DELETE /admin/categories/{id}
});

