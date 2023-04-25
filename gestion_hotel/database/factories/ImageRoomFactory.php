<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ImageRoom>
 */
class ImageRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' =>fake()->words(3,1),
            'img' => fake()->imageUrl(),
            'room' => Room::factory()->create()['idRoom'],

        ];
    }
}
