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
    function wishlist(){
        return view('dashboard.instructor.wishlist');
    }
    function reviews(){
        return view('dashboard.instructor.reviews');
    }
    function my_quiz_attempts(){
        return view('dashboard.instructor.my_quiz_attempts');
    }
    function order_history(){
        return view('dashboard.instructor.order_history');
    }
    
}
