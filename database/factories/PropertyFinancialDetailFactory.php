<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyFinancialDetail>
 */
class PropertyFinancialDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'management_fee' => $this->faker->randomFloat(2, 0, 5), // Example range for management fee percentage
            'cash_reserve' => $this->faker->numberBetween(5000, 20000), // Example range for cash reserve amount
            'hold_period' => $this->faker->numberBetween(1, 10), // Example range for hold period in years
            'annual_appreciation' => $this->faker->randomFloat(2, 1, 10), // Example range for annual appreciation percentage
            'aum_fee_1' => $this->faker->randomFloat(2, 0, 3), // Example range for AUM fee 1 percentage
            'aum_fee_2' => $this->faker->randomFloat(2, 0, 3), // Example range for AUM fee 2 percentage
            'aum_fee_3' => $this->faker->randomFloat(2, 0, 3), // Example range for AUM fee 3 percentage
            'average_time_to_rent' => $this->faker->numberBetween(1, 12), // Example range for average time to rent in months
        ];
    }
}
