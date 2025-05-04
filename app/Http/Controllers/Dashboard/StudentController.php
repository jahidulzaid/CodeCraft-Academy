<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    // function index(){
    //     return view('dashboard.student.index');
    // }


    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('signin')->with('error', 'Please login first.');
        }

        
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
    function assignments(){
        return view('dashboard.student.assignments');
    }
    function settings(){
        return view('dashboard.student.settings');
    }
}
