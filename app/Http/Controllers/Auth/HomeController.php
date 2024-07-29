<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // Mostrar vista de home
    public function index() {
        dd('Desde el muro');
    }

}
