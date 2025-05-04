<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index(){
        return view('dashboard.student.index');
    }
    function profile(){
        return view('dashboard.student.profile');
    }
    function enrolledCourses(){
        return view('dashboard.student.enrolled-courses');
    }
    function reviews(){
        return view('dashboard.student.reviews');
    }
    function myQuizAttempts(){
        return view('dashboard.student.my-quiz-attempts');
    }
}
