<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    //
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->with('lessons')->firstOrFail();
        return view('auth.course.course', compact('course'));
    }

    public function showCoursesByUserCategories(Request $request)
    {
        // Obtener al usuario autenticado
        $user = $request->user();

        // Obtener las categorías del usuario
        $userCategories = $user->categories()->pluck('categories.id');

        // Obtener los cursos asociados a las categorías del usuario
        $courses = Course::whereIn('category_id', $userCategories)
                         ->get();

        return $courses;
    }
}
