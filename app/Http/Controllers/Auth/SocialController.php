<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class SocialController extends Controller
{
    public function redirectToGoogle(Request $request)
    {
        $role = $request->query('role');

        if (! in_array($role, ['student', 'instructor'], true)) {
            abort(403, 'Invalid role specified.');
        }

        $request->session()->put('google_login_role', $role);

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
        } catch (Throwable $exception) {
            return redirect()->route('signin')->with('error', 'Google sign-in failed. Please try again.');
        }

        $email = $googleUser->getEmail();

        if (! $email) {
            return redirect()->route('signin')->with('error', 'Google account email is required.');
        }

        $requestedRole = session()->pull('google_login_role');

        if (! in_array($requestedRole, ['student', 'instructor'], true)) {
            $requestedRole = 'student';
        }

        $user = User::where('email', $email)->first();

        if (! $user) {
            $user = User::create([
                'name' => $googleUser->getName() ?? 'No Name',
                'email' => $email,
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'role' => $requestedRole,
                'password' => bcrypt(Str::random(16)),
                'email_verified_at' => now(),
            ]);
        } else {
            $updates = [
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
            ];

            if (empty($user->role)) {
                $updates['role'] = $requestedRole;
            }

            $user->fill($updates)->save();
        }

        Auth::login($user, true);
        request()->session()->regenerate();

        return match ($user->role) {
            'student' => redirect()->route('student.dashboard'),
            'instructor' => redirect()->route('instructor.dashboard'),
            'admin' => redirect()->route('admin.dashboard'),
            default => redirect()->route('dashboard'),
        };
    }
}
