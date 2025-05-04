<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;




use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('signin')->with('error', 'Please login first.');
        }

        
        return view('dashboard.instructor.index');
    }
}
