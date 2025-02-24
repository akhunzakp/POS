<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

// Route for Home Page
Route::get('/', [HomeController::class, 'index']);

// Route for Product Categories (Route Prefix)
Route::prefix('category')->group(function () {
    route::get('/food-beverage', [ProductController::class,'foodBeverage']);
    route::get('/beauty-health', [ProductController::class,'beautyHealth']);
    route::get('/food-beverage', [ProductController::class,'foodBeverage']);
    route::get('/home-care', [ProductController::class,'homeCare']);
    route::get('/baby-kid', [ProductController::class,'babyKid']);
});

// Route for User Profile (Route Parameters)
Route::get('/user/{id}/name/{name}', [UserController::class, 'show']);

// Route for Sales Page
Route::get('/sales', [SalesController::class, 'index']);
