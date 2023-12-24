<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyExtraDetails>
 */
class PropertyExtraDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deed_fraction_1' => $this->faker->randomFloat(2, 0, 1),
            'deed_fraction_2' => $this->faker->randomFloat(2, 0, 1),
            'leveraged' => 1,
            'leverage_amount' => $this->faker->numberBetween(1000, 5000),
            'leverage_percent' => $this->faker->numberBetween(1, 100),
            'rent_rate' => $this->faker->randomFloat(2, 500, 2000),
            'market_rent_rate' => $this->faker->randomFloat(2, 600, 2500),
            'occupancy_rate' => $this->faker->numberBetween(0, 100),
            'occupancy_status' => $this->faker->randomElement(['Occupied', 'Vacant']),
        ];
    }
}
