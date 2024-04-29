<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;

class AdminController extends Controller {

    public function home() {

        return view('admin.home');
    }

    public function abmProducts() {

        return view('admin.abm.products');
    }

    public function products() {

        $products = Producto::all();

        return view('admin.products', [
            'products' => $products
        ]);
    }

    public function actionAbmProducts(request $r) {

        $data = $r->except('_token');
        Producto::create($data);

        return redirect()->route('products');
    }
}
