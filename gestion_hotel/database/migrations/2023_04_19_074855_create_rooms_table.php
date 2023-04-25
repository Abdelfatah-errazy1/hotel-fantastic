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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('idRoom');
            $table->string('name',100);
            $table->integer('size')->default(1);
            $table->integer('price')->default(15);
            $table->integer('capacity');
            $table->boolean('is_disponible')->default(true);
            $table->foreignId('typeRoom')->constrained()->on('typerooms')->references('idTR');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
