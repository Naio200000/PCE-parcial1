<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Producto;
use App\Models\Blog;
use App\Models\Category;
use Intervention\Image\Laravel\Facades\Image;

class AdminController extends Controller {

    /**
     * Funcion para el routeo de la vista del dashboard de admin
     * @return la vista admin.home
     */
    public function home() {

        return view('admin.home');
    }

    /**
     * Funcion para el routeo de la vista de los productos de admin
     * @return la vista admin.products
     */
    public function products() {

        $products = Producto::query()->orderby('id','desc')->get();

        return view('admin.products', [
            'products' => $products
        ]);
    }

    /**
     * Funcion para el routeo de la vista de add products de admin
     * @return la vista admin.add.products
     */
    public function addProducts() {

        return view('admin.add.products', [

            'category' => Category::all(),
        ]);
    }

    /**
     * Funcion para el routeo de la accion de agrear productos a la bd. validando los datos ingresados
     * @param Request $r
     * @return product si la validacion es correcta agrega los datos a la BD y devuelve al usuario a la vista de productos de admin
     */
    public function actionAddProducts(request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'category_id'=>'required',
            'descript'=>'required',
            'price'=>'required|numeric',
        ]);

        $data = $r->except('_token');

        if ($r->hasFile('image')) {

            $data['image'] = $r->file('image')->store('img/productos');

            Image::read(\Storage::path($data['image']))->coverDown(500, 500)->save();
        }
        Producto::create($data);

        return redirect()->route('products')->with('feedback.message', 'Se agrego un producto exitosamente.');
    }


    /**
     * Funcion para el routeo de la vista de borrar los productos de admin
     * @return la vista admin.del.products
     */
    public function delProducts(int $id) {

        return view('admin.del.product',[
            'product' => Producto::findorfail($id)
        ]);
    }

    /**
     * Funcion para el routeo de la accion de borrar los productos
     * @param int $id Id del producto a eliminar
     * @return product Si encuentra el producto lo borra de la base de datos y devuelve la vista product
     */
    public function actionDelProducts(int $id) {

        $product = Producto::findorfail($id);


        $product->delete();

        if ($product->image != null && \Storage::exists($product->image)) {

            \Storage::delete($product->image);
        }

        return redirect()->route('products')->with('feedback.message', 'Se elimino un producto exitosamente.');
    }


    /**
     * Funcion para el routeo de la vista de editar los productos de admin
     * @param int $id Id del producto a editar
     * @return la si encuentra el producto, devuelve la vista admin.edit.product con los datos del producto.
     */
    public function editProducts(int $id) {

        return view('admin.edit.products',[
            'product' => Producto::findorfail($id),
            'category' => Category::all(),
        ]);
    }

    /**
     * Funcion para el routeo de la accion de editar el producto, despues de validarlos
     * @param int $id ID del producto a editar.
     * @return products Si valida los datos correcta mente, actualiza los datos cambiados en la BD y devuelve la vista products
     */
    public function actionEditProducts(int $id, Request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'category_id'=>'required',
            'descript'=>'required',
            'price'=>'required|numeric',
        ]);

        $data = $r->except('_token');


        if ($r->hasFile('image')) {

            $data['image'] = $r->file('image')->store('img/productos');
        }

        $product = Producto::findorfail($id);

        $oldImage = $product->image;

        if ($r->hasFile('image' && $oldImage !=+ null && \Storage::exists($oldImage))) {

            \Storage::delete($oldImage);
        }

        $product->update($data);
        return redirect()->route('products')->with('feedback.message', 'Se edito un producto exitosamente.');
    }


    /*
                if ($r->hasFile('image')) {

            $data['image'] = $r->file('image')->store('img/productos');
        }
     */

    /**
     * Funcion para el routeo de la vista de blogs de admin
     * @return blogs devuelve la vista blogs
     */
    public function blog() {

        $blog = Blog::query()->with('user')->orderby('id','desc')->get();

        return view('admin.blog', [
            'blog' => $blog
        ]);
    }

    /**
     * Funcion para el routeo de la vista de gregar los blogs de admin
     * @return admin.add.blog devuelve la vista admin.add.blog
     */
    public function addBlog() {

        return view('admin.add.blog');
    }

    /**
     * Funcion para el routeo de la accion para agregar blogs de admin despues de validarlos
     * @param Request $r los datos para validar y agregar a la BD
     * @return blog Si valida los datos correctamente los agrega a la BD y devuelve la vista blog
     */
    public function actionAddBlog(Request $r) {

        $r->validate([
            'title'=>'required|min:2',
            'blog'=>'required',
            'image'=>'required',
            'altImage'=>'required',
        ]);

        $data = $r->except('_token');
        Blog::create($data);

        return redirect()->route('blog')->with('feedback.message', 'Se publicó la noticia correctamente');
    }

    /**
     * Funcion para el routeo de la vista de borrar los blogs de admin
     * @param int $id Id del blog para borrar
     * @return blog si encuentra el blog, lo muestra
     */
    public function delBlog(int $id) {

        $news = Blog::findOrFail($id);

        $news->blog = $news->formatNews();
        return view('admin.del.blog',[
            'news' => $news
        ]);

    }

    /**
     * Funcion para el routeo de la accion de borrar blog
     * @param int $id Id del blog a borrar
     * @return blog si encuentra el blog lo borra y devuelve la vista blogs
     */
    public function actionDelBlog(int $id) {

        $product = Blog::findorfail($id);

        $product->delete();
        return redirect()->route('blog')->with('feedback.message', 'Se elimino una noticia exitosamente.');
    }

    /**
     * Funcion para el routeo de la vista de editar los blogs de admin
     * @param int $id Id del blogs a editar
     * @return admin.edit.blog si encuentra el blog, devuelve la vista admin.edit.blog con los datos del producto a editar
     */
    public function editBlog(int $id) {

        return view('admin.edit.blog',[
            'blog' => Blog::findorfail($id)
        ]);
    }

    /**
     * Funcion para el routeo de la accion para editar blogs. despues de validarlos
     * @param int $id Id del blog a editar
     * @return blog Despues de validar los datos, actualiza los datos cambiados en la BD y devuelve la vista blogs
     */
    public function actionEditBlog(int $id, Request $r) {

        $r->validate([
            'title'=>'required|min:2',
            'blog'=>'required',
            'image'=>'required',
            'altImage'=>'required',
        ]);

        $data = $r->except('_token');

        $product = Blog::findorfail($id);

        $product->update($data);
        return redirect()->route('blog')->with('feedback.message', 'Se edito una noticia exitosamente.');
    }
}
