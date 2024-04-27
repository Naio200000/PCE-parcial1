<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function home() {

        return view('welcome');
    }

    public function about() {

        return view('about');
    }

    public function contacts() {

        return view('contacts');
    }
}
