<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('species')->default('No definido');
            $table->text('description');
            $table->string('race');
            $table->enum('state', ['Perdido', 'En adopción', 'Encontrado', 'Adoptado']);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('location')->nullable();
            $table->string('url_image');
            $table->enum('current_state', ['Perdido', 'En adopción', 'Encontrado', 'Adoptado'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
