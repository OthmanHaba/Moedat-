<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(20, 60),
            'phone' => $this->faker->phoneNumber,
            'hourly_rating' => $this->faker->randomFloat(2, 1, 5),
            'daily_rating' => $this->faker->randomFloat(2, 1, 5),
            'monthly_rating' => $this->faker->randomFloat(2, 1, 5),
            'status' => $this->faker->boolean,
        ];
    }
}
