<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about'])->name('nosotros');
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts'])->name('contactos');
Route::get('noticias/{id}', [\App\Http\Controllers\HomeController::class,'viewNews'])->name('news')->whereNumber('id');

Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index'])->name('tienda.index');
Route::get('tienda/producto/{id}', [\App\Http\Controllers\TiendaController::class, 'viewProduct'])->name('tienda.producto')->whereNumber('id');

Route::get('admin', [\App\Http\Controllers\AdminController::class,'home'])->name('dash');
Route::get('admin/productos', [\App\Http\Controllers\AdminController::class,'products'])->name('products');
Route::get('admin/blog', [\App\Http\Controllers\AdminController::class,'blog'])->name('blog');

Route::get('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'addProducts'])->name('add.products');
Route::get('admin/borrar/productos/{id}', [\App\Http\Controllers\AdminController::class,'delProducts'])->name('del.products')->whereNumber('id');
Route::get('admin/editar/productos/{id}', [\App\Http\Controllers\AdminController::class,'editProducts'])->name('edit.products')->whereNumber('id');
Route::post('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'actionAddProducts'])->name('actions.add.products');
Route::post('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'actionAddProducts'])->name('actions.add.products');
Route::post('admin/productos/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditProducts'])->name('actions.edit.products')->whereNumber('id');

Route::get('admin/abm/blog', [\App\Http\Controllers\AdminController::class,'abmBlog'])->name('abm.blog');
Route::get('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'addBlog'])->name('add.blog');
Route::get('admin/borrar/blog/{id}', [\App\Http\Controllers\AdminController::class,'delBlog'])->name('del.blog')->whereNumber('id');
Route::get('admin/editar/blog/{id}', [\App\Http\Controllers\AdminController::class,'editBlog'])->name('edit.blog')->whereNumber('id');
Route::post('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'actionAddBlog'])->name('actions.add.blog');
Route::post('admin/blog/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditBlog'])->name('actions.edit.blog')->whereNumber('id');

