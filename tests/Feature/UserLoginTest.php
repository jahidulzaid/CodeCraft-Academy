<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function student_can_login()
    {
        $student = User::factory()->create([
            'role' => 'student',
            'email' => 'student@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/signin', [
            'email' => 'student@example.com',
            'password' => 'password',
        ]);

        $response = $this->post('/signin.custom', [
            'email' => 'student@example.com',
            'password' => 'password',
        ]);
        
    }
    
    

}
