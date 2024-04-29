<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about'])->name('nosotros');
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts'])->name('contactos');

Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index'])->name('tienda.index');

Route::get('tienda/producto/{id}', [\App\Http\Controllers\TiendaController::class, 'viewProduct'])->name('tienda.producto');

Route::get('admin', [\App\Http\Controllers\AdminController::class,'home'])->name('dash');

