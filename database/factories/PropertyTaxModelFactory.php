<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyTaxModel>
 */
class PropertyTaxModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tax_key' => $this->faker->word, // Generates a random word for tax_key
            'tax_value' => $this->faker->randomNumber(), // Generates a random number for tax_value
        ];
    }
}
