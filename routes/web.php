<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/',  [UserController::class, 'index']);


Route::get('/',  [UserController::class, 'showlogin']);

Route::get('/logout',  [UserController::class, 'logout']);

Route::get('/users',  [UserController::class, 'index']);

Route::post('/users/insert', [UserController::class , 'store']);

Route::post('/users/delete/{id}', [UserController::class, 'destroy']);

Route::get('/users/edit/{id}', [UserController::class, 'edit']);

Route::post('/users/update/{id}', [UserController::class, 'update']);

Route::post('/users/login', [UserController::class, 'login']);



Route::get('/register',  [UserController::class, 'showregister']);

Route::post('/users/register', [UserController::class, 'register']);

Route::get('/online_purchase',  [UserController::class, 'showOnlinePurchase']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/home',  [ProductController::class, 'showProductsHome']);
