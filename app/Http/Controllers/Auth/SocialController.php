<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 
use App\Models\User;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

       $user = User::updateOrCreate(
    [
        'email' => $googleUser->getEmail(),
    ],
    [
        'name' => $googleUser->getName() ?? 'No Name',
        'google_id' => $googleUser->getId(),
        'avatar' => $googleUser->getAvatar(),
        'access_token' => $googleUser->token,
        'refresh_token' => $token['refresh_token'] ?? null,
        'password' => Hash::make(Str::random(24)), // use random pass when with google
    ]
);

        Auth::login($user);

        return redirect()->intended('/student-dashboard');
    }
}
