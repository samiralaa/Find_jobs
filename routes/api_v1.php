<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('get-jobs',function()
{
    dd('get-jobs');
});
Route::post('add-job',function(Request $request)
{
    dd('add-job');
});
Route::put('update-job',function(Request $request)
{
    dd('update-job');
});
Route::delete('delete-job',function(Request $request)
{
    dd('delete-job');
});
