<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {

        return view('register');
    }

    public function actionRegister(request $r) {

        $r->validate([
            'name'=>'required|min:2',
            'email'=>'required',
            'password'=>'required',
        ]);

        $data = $r->except('_token');

        $data['password'] = \Hash::make($data['password']);
        $data['admin'] = 0;

        User::create($data);


        //cambiar
        return redirect()->route('login')->with('feedback.message', 'Se ha registrado exitosamente.');
    }

}
