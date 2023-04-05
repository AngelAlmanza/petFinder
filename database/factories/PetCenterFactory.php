<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetCenter>
 */
class PetCenterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(10),
            'location' => fake()->text(60),
            'schedule' => fake()->text(15),
            'type' => (rand(0, 1) % 2 == 0) ? true : false
        ];
    }
}
