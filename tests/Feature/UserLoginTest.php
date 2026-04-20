<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_can_login(): void
    {
        User::factory()->create([
            'role' => 'student',
            'email' => 'student@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/signin/custom', [
            'email' => 'student@example.com',
            'password' => 'password',
        ]);

        $response->assertRedirect(route('student.dashboard'));
        $this->assertAuthenticated();
    }
}
