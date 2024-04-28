<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller{

    public function index () {

        $productos = Producto::all();


        return view('store.index', [
            'productos' => $productos
        ]);
    }
}
