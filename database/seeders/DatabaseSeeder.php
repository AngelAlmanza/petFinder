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
        \App\Models\Pet::factory(300)->create();
        \App\Models\PetCenter::factory(10)->create();
        \App\Models\Post::factory(300)->create();
        \App\Models\Report::factory(10)->create();
    }
}
