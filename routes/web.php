<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


Route::get('/', [HomeController::class, 'getHome']);

Route::get('/login', [LoginController::class, 'getLogin']);

// *opcional* Route::get('/logout', [LogoutController::class, 'index']);

// mostrar, crear y guardar un post
Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::post('/category', [CategoryController::class, 'store']);

// editar un post
Route::get('/category/edit/{id}', [CategoryController::class, 'getEdit']);

Route::post('/category/edit/{post}', [CategoryController::class, 'edit']);

Route::put('/category/edit/{id}', [CategoryController::class, 'update']);

// borrar un post
Route::post('/category/delete/{id}', [CategoryController::class, 'destroy']);
