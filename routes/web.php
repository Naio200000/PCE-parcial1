<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Pagionas
Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])->name('home');
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about'])->name('nosotros');
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts'])->name('contactos');
Route::get('noticias', [\App\Http\Controllers\HomeController::class,'newsList'])->name('newsList');
Route::get('noticias/{id}', [\App\Http\Controllers\HomeController::class,'viewNews'])->name('news')->whereNumber('id');

// Login
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actions.login');
Route::post('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('actions.logout');


// Tienda
Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index'])->name('tienda.index');
Route::get('tienda/producto/{id}', [\App\Http\Controllers\TiendaController::class, 'viewProduct'])->name('tienda.producto')->whereNumber('id');

// Admin
Route::get('admin', [\App\Http\Controllers\AdminController::class,'home'])->name('dash')->middleware('auth');
Route::get('admin/productos', [\App\Http\Controllers\AdminController::class,'products'])->name('products')->middleware('auth');
Route::get('admin/blog', [\App\Http\Controllers\AdminController::class,'blog'])->name('blog')->middleware('auth');

// Abm Productos
Route::get('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'addProducts'])->name('add.products')->middleware('auth');
Route::get('admin/borrar/productos/{id}', [\App\Http\Controllers\AdminController::class,'delProducts'])->name('del.products')->whereNumber('id')->middleware('auth');
Route::get('admin/editar/productos/{id}', [\App\Http\Controllers\AdminController::class,'editProducts'])->name('edit.products')->whereNumber('id')->middleware('auth');
// Abm Product Actions
Route::post('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'actionAddProducts'])->name('actions.add.products')->middleware('auth');
Route::post('admin/productos/{id}/borrar', [\App\Http\Controllers\AdminController::class,'actionDelProducts'])->name('action.del.products')->whereNumber('id')->middleware('auth');
Route::post('admin/productos/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditProducts'])->name('actions.edit.products')->whereNumber('id')->middleware('auth');

// Abm Blogs
Route::get('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'addBlog'])->name('add.blog')->middleware('auth');
Route::get('admin/borrar/blog/{id}', [\App\Http\Controllers\AdminController::class,'delBlog'])->name('del.blog')->whereNumber('id')->middleware('auth');
Route::get('admin/editar/blog/{id}', [\App\Http\Controllers\AdminController::class,'editBlog'])->name('edit.blog')->whereNumber('id')->middleware('auth');
// Abm blog actions
Route::post('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'actionAddBlog'])->name('actions.add.blog')->middleware('auth');
Route::post('admin/blog/{id}/borrar', [\App\Http\Controllers\AdminController::class,'actionDelBlog'])->name('action.del.blog')->whereNumber('id')->middleware('auth');
Route::post('admin/blog/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditBlog'])->name('actions.edit.blog')->whereNumber('id')->middleware('auth');

