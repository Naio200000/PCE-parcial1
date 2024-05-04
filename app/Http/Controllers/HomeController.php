<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller {

    public function home() {

        $news =  Blog::query()->orderby('id','desc')->take(3)->get();

        foreach ($news as $n) {
            $n->blog = $n->fronNews();
        }

        return view('welcome', [
            'news' => $news
        ]);
    }

    public function viewNews(int $id) {

        $news = Blog::findOrFail($id);

        $news->blog = $news->formatNews();
        return view('news', [
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
