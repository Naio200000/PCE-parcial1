<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class LoginController extends Controller
{
    public function login() {

        return view('login');
    }

    public function actionLogin (Request $r) {

        $c = $r->only(['email','password']);

        if (!auth()->attempt($c)) {
            return redirect()->back(fallback:route('login'))
            ->withInput()
            ->with('feedback.message','Los datos ingresados no pertenecen a un usuario Autorizado')
            ->with('feedback.type', 'danger');
        }
        return redirect()->route('tienda.index')->with('feedback.message', 'Ha iniciado sesion exitosamente.');
    }

    public function logout (Request $r) {

        auth()->logout();

        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect()->route('login');

    }
}
