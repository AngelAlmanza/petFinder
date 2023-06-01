<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $admin1 = User::create([
            'name' => 'Angel',
            'email' => 'almanza.angel245@gmail.com',
            'password' => Hash::make('PPCDSALVC2023'),
            'age' => 20,
            'location' => 'Mexico',
            'phone_number' => '6242251564',
        ]);
        $admin2 = User::create([
            'name' => 'Alexander',
            'email' => 'hsa.lapaz@gmail.com',
            'password' => Hash::make('SAKM110179'),
            'age' => 20,
            'location' => 'Mexico',
            'phone_number' => '6243194398',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
