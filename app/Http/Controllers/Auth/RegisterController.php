<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'username'   => 'required|string|max:255|unique:users',
            'email'      => 'required|email|unique:users',
            'password'   => 'required|confirmed|min:6',
            'terms'      => 'accepted'
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect('/dashboard'); // or wherever you want
    }
}
