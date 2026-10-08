<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [UserController::class, 'index']);


Route::post('/insert', [UserController::class , 'store']);

Route::post('/users/delete/{id}', [UserController::class, 'destroy']);

Route::get('/users/edit/{id}', [UserController::class, 'edit']);

Route::post('/users/update/{id}', [UserController::class, 'update']);
