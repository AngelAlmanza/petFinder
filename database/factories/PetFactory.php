<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'species' => fake()->text(10),
            'description' => fake()->text(200),
            'race' => fake()->text(15),
            'age' => random_int(0, 20),
            'state' => 'En adopcion',
            'user_id' => 1,
            'location' => fake()->text(60),
            'url_image' => fake()->text(20)
        ];
    }
}
