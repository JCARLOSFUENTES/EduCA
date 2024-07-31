<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // Función para el cierre de sesión
    public function store ()
    {
        // Cerrar Sesión
        auth()->logout();

        return redirect()->route('login.index');
    }
}
