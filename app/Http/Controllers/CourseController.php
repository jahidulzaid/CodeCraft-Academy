<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('website.course.index');
    }
    public function details(){
        return view('website.course.course-details');
    }
}
