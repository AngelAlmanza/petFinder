<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'user']);
        $user = User::find(1);
        $user2 = User::find(2);
        $user->assignRole($role1);
        $user2->assignRole($role1);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
