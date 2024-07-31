<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login.login');
    }

    public function store(Request $request)
    {
        // Validaciones del formulario de login
        $this->validate($request, [
            'email' => 'required|email|max:60',
            'password' => 'required|max:36'
        ]);

        // Verificación si las credenciales son correctas
        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        // Dirigir a la vista Home en caso de estar autenticado
        return redirect()->route('home.index');
    }
}
