<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class InstructorController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('signin')->with('error', 'Please login first.');
        }

        
        return view('dashboard.instructor.index');
    }
    function profile(){
        return view('dashboard.instructor.profile');
    }

    function reviews(){
        return view('dashboard.instructor.reviews');
    }
    function my_course(){
        return view('dashboard.instructor.my_course');
    }
    function  announcments(){
        return view('dashboard.instructor.announcments');
    }
    function  quiz_attempt(){
        return view('dashboard.instructor.quiz_attempts');
    }
    function  assignments(){
        return view('dashboard.instructor.assignments');
    }
    function  settings(){
        return view('dashboard.instructor.settings');
    }
    
}
