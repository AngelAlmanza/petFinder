<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(2000)->create();
        \App\Models\Pet::factory(3000)->create();
        \App\Models\PetCenter::factory(10)->create();
        \App\Models\Post::factory(300)->create();
        \App\Models\Report::factory(1000)->create();
    }
}
