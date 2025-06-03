<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

// Route::get('/', function () {
//     return "este es la pantalla principal o home";
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/show/{id}', function ($id) {
    return "Detalles del post: {$id}";
});

Route::post('/category/create', function () {
    return "Formulario para crear y añadir un post";
});

Route::put('/category/edit/{id}', function ($id) {
    return "Editar un post";
});


