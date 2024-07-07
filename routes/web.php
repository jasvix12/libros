<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibrosController;

// Definimos las rutas para el CRUD de Libro usando el controlador recurso
Route::resource('libros', LibrosController::class);



