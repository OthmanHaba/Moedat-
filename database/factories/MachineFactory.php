<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Machine>
 */
class MachineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'category' => $this->faker->randomElement(['Construction Equipment', 'Office Equipment', 'Industrial Machinery']),
            'availability' => $this->faker->boolean(90), // 90% chance of being available
            'rental_price' => $this->faker->randomFloat(2, 50, 500), // Random rental price between 50 and 500
            'location' => $this->faker->city,
            'condition' => $this->faker->randomElement(['New', 'Used', 'Refurbished']),
            'purchase_date' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
