<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $course = Course::oldest()->get();
        return view('course', [
            'courses' => $course
        ]);
    }
}