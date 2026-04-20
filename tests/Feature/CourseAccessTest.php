<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class CourseAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_only_instructor_can_access_instructor_dashboard(): void
    {
        $instructor = User::factory()->create(['role' => 'instructor']);

        $response = $this->actingAs($instructor)->get('/instructor-dashboard');
        $response->assertOk();
    }

    public function test_student_cannot_access_instructor_dashboard(): void
    {
        $student = User::factory()->create(['role' => 'student']);

        $response = $this->actingAs($student)->get('/instructor-dashboard');
        $response->assertForbidden();
    }
}
