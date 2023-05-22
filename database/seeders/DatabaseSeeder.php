<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Angel',
            'email' => 'almanza.angel245@gmail.com',
            'password' => Hash::make('PPCDSALVC2023'),
            'age' => 20,
            'location' => 'Mexico',
            'phone_number' => '6242251564',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Alexander',
            'email' => 'hsa.lapaz@gmail.com',
            'password' => Hash::make('SAKM110179'),
            'age' => 20,
            'location' => 'Mexico',
            'phone_number' => '6243194398',
        ]);
        \App\Models\Pet::factory(10)->create();
        \App\Models\PetCenter::factory(10)->create();
        \App\Models\Post::factory(10)->create();
        \App\Models\Report::factory(10)->create();
    }
}
