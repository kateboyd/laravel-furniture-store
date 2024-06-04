<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', [\App\Http\Controllers\ProductsAPIController::class, 'index']);
Route::post('/products', [\App\Http\Controllers\ProductsAPIController::class, 'create']);
