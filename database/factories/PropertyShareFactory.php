<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyShare>
 */
class PropertyShareFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'equity_raise' => $this->faker->numberBetween(100000, 1000000),
            'price_per_share_deed' => $this->faker->randomFloat(2, 10, 100),
            'total_developer_share_deeds' => $this->faker->numberBetween(1000, 5000),
            'total_raise_share_deeds' => $this->faker->numberBetween(500, 2000),
            'total_share_deeds' => $this->faker->numberBetween(2000, 10000),
            'first_dividend_date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'seccond_dividend_date' => $this->faker->dateTimeBetween('+1 year', '+2 years')->format('Y-m-d'),
        ];
    }
}
