<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Food;
use App\Models\Branch;
use App\Models\FoodBranch;
use App\Models\Adtodcart;
use App\Models\Purchase_history;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    
        public function testIndex()
{
    // Create a user and authenticate them
    $user = User::factory()->create();
    $this->actingAs($user);

    // Debugging information
    dump(auth()->user()); // Check if the user is authenticated
    dump(route('user.index')); // Verify the route URL

    // Make the GET request to the route
    $response = $this->get(route('user.index'));

    // Debugging information
    dump($response->status(), $response->content()); // Check the response status and content

    $response->assertStatus(200)
             ->assertViewIs('welcome')
             ->assertViewHas(['food']);
}

}
