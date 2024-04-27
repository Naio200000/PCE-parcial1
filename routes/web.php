<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [\App\Http\Controllers\HomeController::class,'home']);

Route::get('/nostros', function () {
    return view('about');
});

Route::get('/tienda', function () {
    return view('store.index');
});
