<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'Almanza021002'
        ]);
        \App\Models\Pet::factory(10)->create();
        \App\Models\PetCenter::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Report::factory(10)->create();
    }
}
