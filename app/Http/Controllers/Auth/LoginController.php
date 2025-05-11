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
        $user = Auth::user();

        // Redirect based on role
        switch ($user->role) {
            case 'student':
                return redirect()->intended('/student-dashboard')->with('success', 'Logged in successfully!');
            case 'instructor':
                return redirect()->intended('/instructor-dashboard')->with('success', 'Logged in successfully!');
            case 'admin':
                return redirect()->intended('/admin-dashboard')->with('success', 'Logged in successfully!');
            default:
                Auth::logout();
                return redirect()->route('signin')->with('error', 'Unauthorized role.');
        }
    }

    // Login failed
    return redirect()->back()->with('error', 'Invalid credentials!');
}


}
