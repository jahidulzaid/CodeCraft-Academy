<?php

namespace App\Http\Controllers\Auth;
use Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str; 
use App\Models\User;

class SocialController extends Controller
{

    public function redirectToGoogle(Request $request)
    {
        $role = request()->query('role');


        // Validate role before proceeding
        if (!in_array($role, ['student', 'instructor'])) {
            abort(403, 'Invalid role specified.');
        }

        // Store role in session securely
        session(['google_login_role' => $role]);

        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        // Get role from session
        $role = session('google_login_role');

        if (!in_array($role, ['student', 'instructor'])) {
            abort(403, 'Login role not found in session.');
        }

        // Check if user exists
        $user = User::where('email', $googleUser->getEmail())->first();

        if (!$user) {
            // Create user with correct role
            $user = User::create([
                'name' => $googleUser->getName() ?? 'No Name',
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'role' => $role,
                'password' => bcrypt(Str::random(16)),
            ]);
        } else {
            // Optional: Update role if changed
            if ($user->role !== $role) {
                $user->role = $role;
                $user->save();
            }
        }

        Auth::login($user);

        // Redirect based on role
        return match ($user->role) {
            'student' => redirect()->route('student.dashboard'),
            'instructor' => redirect()->route('instructor.dashboard'),
            default => abort(403, 'Unknown role.'),
        };
    }



}











// class SocialController extends Controller
// {
//     public function redirectToGoogle()
//     {
//         return Socialite::driver('google')->redirect();
//     }

//     public function handleGoogleCallback()
//     {
//         $googleUser = Socialite::driver('google')->stateless()->user();

//        $user = User::updateOrCreate(
//     [
//         'email' => $googleUser->getEmail(),
//     ],
//     [
//         'name' => $googleUser->getName() ?? 'No Name',
//         'google_id' => $googleUser->getId(),
//         'avatar' => $googleUser->getAvatar(),
//         'access_token' => $googleUser->token,
//         'refresh_token' => $token['refresh_token'] ?? null,
//         'password' => Hash::make(Str::random(24)), // use random pass when with google
//     ]
// );

//         Auth::login($user);

//         return redirect()->intended('/student-dashboard');
//     }
// }
