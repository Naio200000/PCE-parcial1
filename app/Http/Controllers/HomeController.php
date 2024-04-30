<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller {

    public function home() {

        $news =  Blog::query()->orderby('id','desc')->take(3)->get();

        return view('welcome', [
            'news' => $news
        ]);
    }

    public function about() {

        return view('about');
    }

    public function contacts() {

        return view('contacts');
    }
}
