<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nostros', function () {
    return view('about');
});

Route::get('/tienda', function () {
    return view('store.index');
});