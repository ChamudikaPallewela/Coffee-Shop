<?php

namespace Database\Factories;
use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foodtitle' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(), // Generates a random image URL
            'category' => $this->faker->randomElement(['food', 'beverages', 'dessert']), // Generates a random category

        ];
    }
}
