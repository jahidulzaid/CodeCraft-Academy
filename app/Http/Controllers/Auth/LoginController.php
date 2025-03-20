<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index(){
        return view('website.login-registration.index');
    }
    public function signin(Request $request)
    {
        // Validate user credentials
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Try to login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Login success
            return redirect()->intended('/student-dashboard')->with('success', 'Logged in successfully!');
        }

        // Login failed
        return redirect()->back()->with('error', 'Invalid credentials!');
    }

}
