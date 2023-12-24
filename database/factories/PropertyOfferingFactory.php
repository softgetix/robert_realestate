<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyOffering>
 */
class PropertyOfferingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'offering_purchase' => $this->faker->numberBetween(100000, 1000000),
            'offering_build_cost' => $this->faker->numberBetween(50000, 500000),
            'offering_improvements' => $this->faker->numberBetween(10000, 100000),
            'offering_closing_cost' => $this->faker->numberBetween(5000, 30000),
            'offering_sourcing_fees' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
