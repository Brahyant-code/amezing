<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrarController;

//-------------RUTAS PUBLICAS----------------------
Route::get('/', HomeController::class)->name('home'); // Mostrar la vista "index"
Route::get('/crear-cuenta', [RegistrarController::class , 'index'])->name('crearCuenta'); //Mostrar la vista "Crear cuenta"

