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

    public function abmProducts() {

        return view('admin.abm.products');
    }

    public function actionAbmProducts(request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'category'=>'required',
            'price'=>'required|numeric',
            'image'=>'required',
            'altImage'=>'required',
        ],[
            'name.required' => 'Este campo debe tener un valor de almenos :min caracteres',
            'category.required' => 'Este campo debe tener un valor',
            'price.required' => 'Este campo debe tener un valor',
            'image.required' => 'Este campo debe ser nombre.extencion del archivo',
            'altImage.required' => 'Este campo debe tener un valor'
        ]);

        $data = $r->except('_token');
        Producto::create($data);

        return redirect()->route('products')->with('feedback.message', 'Se agrego un producto exitosamente.');
    }

        public function Blog() {

            $blog = Blog::all();

            return view('admin.blog', [
                'blog' => $blog
            ]);
        }

        public function abmBlog() {

            return view('admin.abm.blog');
        }
}
