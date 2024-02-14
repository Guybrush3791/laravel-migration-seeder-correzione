<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'agency' => fake() -> company(),
            'start_station' => fake() -> city(),
            'end_station' => fake() -> city(),
            'start_time' => fake() -> dateTimeBetween('now', '+3 days'),
            'end_time' => fake() -> dateTimeBetween('+4 days', '+1 week'),
            'code' => fake() -> unique() -> numerify('train-#####'),
            'carriages_count' => fake() -> numberBetween(5, 20),
        ];
    }
}
