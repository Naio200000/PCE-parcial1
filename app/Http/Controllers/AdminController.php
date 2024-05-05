<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Blog;

class AdminController extends Controller {

    public function home() {

        return view('admin.home');
    }

    public function products() {

        $products = Producto::query()->orderby('id','desc')->get();

        return view('admin.products', [
            'products' => $products
        ]);
    }

    public function addProducts() {

        return view('admin.add.products');
    }

    public function actionAddProducts(request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'category'=>'required',
            'descript'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
            'altImage'=>'required',
        ]);

        $data = $r->except('_token');
        Producto::create($data);

        return redirect()->route('products')->with('feedback.message', 'Se agrego un producto exitosamente.');
    }

    public function delProducts(int $id) {

        return view('admin.del.product',[
            'product' => Producto::findorfail($id)
        ]);
    }

    public function actionDelProducts(int $id) {

        $product = Producto::findorfail($id);

        $product->delete();
        return redirect()->route('products')->with('feedback.message', 'Se elimino un producto exitosamente.');
    }

    public function editProducts(int $id) {

        return view('admin.edit.products',[
            'product' => Producto::findorfail($id)
        ]);
    }

    public function actionEditProducts(int $id, Request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'category'=>'required',
            'descript'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
            'altImage'=>'required',
        ]);

        $data = $r->except('_token');

        $product = Producto::findorfail($id);

        $product->update($data);
        return redirect()->route('products')->with('feedback.message', 'Se edito un producto exitosamente.');
    }

    public function blog() {

        $blog = Blog::all();

        return view('admin.blog', [
            'blog' => $blog
        ]);
    }

    public function abmBlog() {

        return view('admin.add.blog');
    }
}
