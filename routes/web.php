<?php

use App\Http\Controllers\Api\Category\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category',[CategoryController::class,'index']);