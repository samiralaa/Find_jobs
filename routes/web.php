<?php

use App\Http\Controllers\Api\Category\CategoryController;
use App\Http\Controllers\Api\Company\CompanyController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('category',[CategoryController::class,'index']);


Route::get('company',[CompanyController::class,'index']);