<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/semra', [HomeController::class, 'index']);
Route::get('/besar', [HomeController::class, 'besar']);
Route::get('/product', [ProductController::class, 'index']);