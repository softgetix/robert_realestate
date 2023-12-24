<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyDetails>
 */
class PropertyDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(['House', 'Apartment', 'Condo']),
            'bedrooms' => $this->faker->numberBetween(1, 5),
            'baths' => $this->faker->numberBetween(1, 4),
            'half_baths' => $this->faker->numberBetween(0, 2),
            'sleeps' => $this->faker->numberBetween(1, 10),
            'garages' => $this->faker->numberBetween(0, 3),
            'square_feets' => $this->faker->numberBetween(1000, 5000),
            'stories' => $this->faker->numberBetween(1, 3),
            'units' => $this->faker->numberBetween(1, 20),
            'lot_size' => $this->faker->numberBetween(5000, 20000),
            'year_built' => $this->faker->numberBetween(1950, 2022),
            'zoning' => $this->faker->randomElement(['Residential', 'Commercial', 'Mixed']),
            'value' => $this->faker->numberBetween(100000, 1000000),
        ];
    }
}
