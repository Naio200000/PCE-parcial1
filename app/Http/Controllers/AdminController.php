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

        $products = Producto::query()->orderby('id','desc')->get();

        return view('admin.products', [
            'products' => $products
        ]);
    }

    public function actionAbmProducts(request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'descript'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
            'altImage'=>'required',

        ]);

        $data = $r->except('_token');
        Producto::create($data);

        return redirect()->route('products')->with('feedback.message', 'Se agrego un producto exitosamente.');
    }
}
