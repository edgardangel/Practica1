<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta estática para la página de bienvenida
Route::get('/bienvenida', [PaginaController::class, 'bienvenida']);

// Ruta dinámica para el saludo personalizado
Route::get('/saludo/{nombre}', [PaginaController::class, 'saludo']);
