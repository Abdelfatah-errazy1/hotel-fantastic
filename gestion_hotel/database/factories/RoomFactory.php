<?php

namespace Database\Factories;

use App\Models\TypeRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(4,1),
            'size' => fake()->numberBetween(40,200),
            'price' => fake()->numberBetween(40,200),
            'capacity' => fake()->numberBetween(1,10),
            'typeRoom' => TypeRoom::factory()->create()['idTR'],
            'description' => fake()->paragraph(),
        ];
    }
}
