<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return view('website.login-registration.index');
    }

    public function signin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
            'remember' => ['nullable', 'boolean'],
        ]);

        $login = trim($credentials['email']);
        $loginField = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $remember = (bool) ($credentials['remember'] ?? false);

        if (! Auth::attempt([$loginField => $login, 'password' => $credentials['password']], $remember)) {
            return back()
                ->withErrors(['email' => 'The provided credentials are incorrect.'])
                ->onlyInput('email', 'remember');
        }

        $request->session()->regenerate();
        $user = Auth::user();

        return match ($user->role) {
            'student' => redirect()->intended(route('student.dashboard')),
            'instructor' => redirect()->intended(route('instructor.dashboard')),
            'admin' => redirect()->intended(route('admin.dashboard')),
            default => redirect()->intended(route('dashboard')),
        };
    }


}
