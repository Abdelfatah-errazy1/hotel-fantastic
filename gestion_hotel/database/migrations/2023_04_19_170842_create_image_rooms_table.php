<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('imagerooms', function (Blueprint $table) {
            $table->id('idIR');
            $table->string('titre',100);
            $table->foreignId('room')
            ->constrained()
            ->on('rooms')
            ->references('idRoom')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_rooms');
    }
};
