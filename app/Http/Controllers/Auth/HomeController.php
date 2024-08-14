<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Mostrar vista de home
    public function index()
    {
        // Obtener las categorias de interes del usuario autenticado
        // $user = auth()->user();
        // $categories = $user->categories()->pluck('id');

        return view('auth.home.home');
    }

}
