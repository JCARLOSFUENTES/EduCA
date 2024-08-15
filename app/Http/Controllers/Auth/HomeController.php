<?php

namespace App\Http\Controllers\Auth;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseController;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // Mostrar vista de home
    public function index(Request $request)
    {
        // Crear instancia de CourseController
        $courseController = new CourseController;

        // Obtener cursos recomendados
        $courses = $courseController->showCoursesByUserCategories($request);

        return view('auth.home.home', compact('courses'));
    }

}


