<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ViewdetailController;
use App\Http\Controllers\NewArrivalsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\EarringsController;
use App\Http\Controllers\NecklasesController;
use App\Http\Controllers\RingsController;
use App\Http\Controllers\BraceletsController;
use App\Http\Controllers\PersonalizedController;







Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signin', [SigninController::class, 'index'])->name('signin');
Route::get('/viewdetail', [ViewdetailController::class, 'index'])->name('viewdetail');
Route::get('/newarrivals', [NewArrivalsController::class, 'index'])->name('newarrivals');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');


Route::get('/earrings', [EarringsController::class, 'index'])->name('earrings');

Route::get('/necklases', [NecklasesController::class, 'index'])->name('necklases');

Route::get('/rings', [RingsController::class, 'index'])->name('rings');

Route::get('/bracelets', [BraceletsController::class, 'index'])->name('bracelets');

Route::get('/personalized', [PersonalizedController::class, 'index'])->name('personalized');



