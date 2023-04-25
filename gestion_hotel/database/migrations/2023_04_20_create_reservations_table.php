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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('idR');
            $table->string('name',100);
            $table->string('email',100);
            $table->string('phone',19);
            $table->foreignId('room')->constrained()->on('rooms')->references('idRoom');
            $table->integer('nombreRoom')->default(1);
            $table->integer('nombreAdults')->default(1);
            $table->date('dateReservation');
            $table->integer('nombreJours');
            $table->text('message')->nullable();
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
