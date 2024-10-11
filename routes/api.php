<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;

Route::post('register', [RegisterController::class, 'register']);
Route::middleware('auth:api')->post('products', [ProductController::class, 'addProduct']);
Route::middleware('auth:api')->get('products', [ProductController::class, 'showAll']);
Route::middleware('auth:api')->get('products/{id}', [ProductController::class, 'showById']);
Route::middleware('auth:api')->post('products/{id}', [ProductController::class, 'updateProduct']);
Route::middleware('auth:api')->delete('products/{id}', [ProductController::class, 'deleteById']);
