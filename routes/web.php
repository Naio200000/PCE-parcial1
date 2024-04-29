<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about'])->name('nosotros');
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts'])->name('contactos');

Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index'])->name('tienda.index');

Route::get('tienda/producto/{id}', [\App\Http\Controllers\TiendaController::class, 'viewProduct'])->name('tienda.producto')->whereNumber('id');

Route::get('admin', [\App\Http\Controllers\AdminController::class,'home'])->name('dash');
Route::get('admin/productos', [\App\Http\Controllers\AdminController::class,'products'])->name('products');
Route::get('admin/abm/productos', [\App\Http\Controllers\AdminController::class,'abmProducts'])->name('abm.products');
Route::post('admin/abm/productos', [\App\Http\Controllers\AdminController::class,'actionAbmProducts'])->name('actions.abm.products');

