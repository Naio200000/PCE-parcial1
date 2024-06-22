<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class TiendaController extends Controller {

    /**
     * funcion que devuelve la vista de las de tienda con todos los productos de la base de datos
     * @return store.index vista general de todos los productos con sus datos
     */
    public function index () {

        $productos = Producto::with('category')->get();

        return view('store.index', [
            'productos' => $productos
        ]);
    }

    /**
     * devuelve un producto en particular dependiendo de la ID proporcionada o un error 404
     * @param $id id de una pelicula a buscar
     * @return store.product vista de producto con los datos del mismo
     */
    public function viewProduct (int $id) {

        $producto = Producto::findOrFail($id);

        return view('store.product', [
            'producto' => $producto
        ]);
    }
}
