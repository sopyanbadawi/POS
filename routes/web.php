<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\LevelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/', [ProductController::class, 'index'])
        ->name('category.index');
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])
        ->name('category.food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])
        ->name('category.beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])
        ->name('category.home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])
        ->name('category.baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

Route::get('/sales', [SalesController::class, 'index']);