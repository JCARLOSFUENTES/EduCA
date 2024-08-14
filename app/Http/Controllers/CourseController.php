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
}
