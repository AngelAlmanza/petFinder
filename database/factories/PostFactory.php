<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'body' => fake()->text(),
            'url_image' => fake()->text(20),
            'posted_on' => now(),
            'modified_on' => now(),
            'owner_id' => 1,
            'type_publication' => fake()->text(15),
            'pet_id' => 1,
        ];
    }
}
