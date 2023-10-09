<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_redirects_to_admin_index_for_admin_user()
    {
        // Create an admin user
        $user = User::factory()->create(['usertype' => 1]);

        // Act
        $response = $this->actingAs($user)->get('/home');

        // Assert
        $response->assertRedirect(route('admin.index'));
    }

    /** @test */
    public function it_redirects_to_user_index_for_non_admin_user()
    {
        // Create a non-admin user
        $user = User::factory()->create(['usertype' => 2]);

        // Act
        $response = $this->actingAs($user)->get('/home');

        // Assert
        $response->assertRedirect(route('user.index'));
    }
}
