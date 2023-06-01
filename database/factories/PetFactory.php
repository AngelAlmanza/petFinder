<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

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
        $states = ['Perdido', 'Encontrado', 'En adopción'];
        return [
            'name' => fake()->name(),
            'current_state' => Arr::random($states),
            'species' => fake()->text(10),
            'description' => fake()->text(200),
            'race' => fake()->text(15),
            'state' => Arr::random($states),
            'user_id' => 1,
            'location' => fake()->text(60),
            'url_image' => fake()->text(20)
        ];
    }
}
