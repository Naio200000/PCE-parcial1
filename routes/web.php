<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Route;

// Pagionas
Route::get('/', [\App\Http\Controllers\HomeController::class,'home'])
        ->name('home');
Route::get('nosotros', [\App\Http\Controllers\HomeController::class,'about'])
        ->name('nosotros');
Route::get('contactos', [\App\Http\Controllers\HomeController::class,'contacts'])
        ->name('contactos');
Route::get('noticias', [\App\Http\Controllers\HomeController::class,'newsList'])
        ->name('newsList');
Route::get('noticias/{id}', [\App\Http\Controllers\HomeController::class,'viewNews'])
        ->name('news')
        ->whereNumber('id');

// Login
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actions.login');
Route::post('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('actions.logout');

//Register
Route::get('register', [\App\Http\Controllers\LoginController::class, 'register'])->name('register');

// Tienda
Route::get('tienda', [\App\Http\Controllers\TiendaController::class, 'index'])->name('tienda.index');
Route::get('tienda/producto/{id}', [\App\Http\Controllers\TiendaController::class, 'viewProduct'])
        ->name('tienda.producto')
        ->whereNumber('id');

// Admin
Route::get('admin', [\App\Http\Controllers\AdminController::class,'home'])
        ->name('dash')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/productos', [\App\Http\Controllers\AdminController::class,'products'])
        ->name('products')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/blog', [\App\Http\Controllers\AdminController::class,'blog'])
        ->name('blog')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/usuarios', [\App\Http\Controllers\AdminController::class,'users'])
        ->name('users')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/usuarios/{id}', [\App\Http\Controllers\AdminController::class,'viewUser'])
        ->name('admin.user')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');

// Abm Productos
Route::get('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'addProducts'])
        ->name('add.products')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/borrar/productos/{id}', [\App\Http\Controllers\AdminController::class,'delProducts'])
        ->name('del.products')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/editar/productos/{id}', [\App\Http\Controllers\AdminController::class,'editProducts'])
        ->name('edit.products')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
// Abm Product Actions
Route::post('admin/agregar/productos', [\App\Http\Controllers\AdminController::class,'actionAddProducts'])
        ->name('actions.add.products')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::post('admin/productos/{id}/borrar', [\App\Http\Controllers\AdminController::class,'actionDelProducts'])
        ->name('action.del.products')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::post('admin/productos/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditProducts'])
        ->name('actions.edit.products')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');

// Abm Blogs
Route::get('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'addBlog'])
        ->name('add.blog')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/borrar/blog/{id}', [\App\Http\Controllers\AdminController::class,'delBlog'])
        ->name('del.blog')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::get('admin/editar/blog/{id}', [\App\Http\Controllers\AdminController::class,'editBlog'])
        ->name('edit.blog')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
// Abm blog actions
Route::post('admin/agregar/blog', [\App\Http\Controllers\AdminController::class,'actionAddBlog'])
        ->name('actions.add.blog')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::post('admin/blog/{id}/borrar', [\App\Http\Controllers\AdminController::class,'actionDelBlog'])
        ->name('action.del.blog')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');
Route::post('admin/blog/{id}/editar', [\App\Http\Controllers\AdminController::class,'actionEditBlog'])
        ->name('actions.edit.blog')
        ->whereNumber('id')
        ->middleware('auth')
        ->middleware('checkAdmin');