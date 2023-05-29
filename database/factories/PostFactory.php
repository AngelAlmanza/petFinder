<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    static $petId = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $typePublicationOptions = ['Adopción', 'Mascota perdida', 'Mascota encontrada'];

        return [
            'title' => fake()->text(20),
            'body' => fake()->text(),
            'url_image' => fake()->text(20),
            'user_id' => 1,
            'type_publication' => Arr::random($typePublicationOptions),
            'pet_id' => ++self::$petId,
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
