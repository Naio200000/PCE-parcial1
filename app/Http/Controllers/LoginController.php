<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\Http\Exceptions\InvalidData;

class LoginController extends Controller {
    /**
     * Funcion de routeo de la vista Login
     * @return login vista login
     */
    public function login() {

        return view('login');
    }

    /**
     * Funcion de accion del login
     * @param Request $r datos ingresados para iniciar sesion
     * @return view Si valida los inicia sesion y devuelve la vista tienda.index y Si no puede vuelve a login con mensaje
     */
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

    /**
     * Funcion para cerrar sesion e invalida y regenra los token
     * @param Request $r los datos del usuario para cerrar sesion
     * @return view devuelve la vista login
     */
    public function logout (Request $r) {

        auth()->logout();

        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect()->route('login');

    }
}
