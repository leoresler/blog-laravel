<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;



Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', [LoginController::class, 'getLogin']);

// *opcional* Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);
// este route puede ser un "post"

Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);
// este route puede ser un "put"

// *opcional* Route::get('/category/delete/{id}', [CategoryController::class, 'deletePost']);
// este route puede ser un "delete"

