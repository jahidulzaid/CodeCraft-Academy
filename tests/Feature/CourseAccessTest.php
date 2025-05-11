<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

class CourseAccessTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
public function only_instructor_can_access_instructor_dashboard()
{
    $instructor = User::factory()->create(['role' => 'instructor']);
    $this->actingAs($instructor);
    
    $response = $this->get('/instructor-dashboard');
    $response->assertStatus(200);
}

}
