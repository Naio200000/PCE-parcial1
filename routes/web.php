<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'home']);
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about']);
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts']);

Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index']);
