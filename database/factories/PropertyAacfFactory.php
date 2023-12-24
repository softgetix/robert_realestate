<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyAacf>
 */
class PropertyAacfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $annualRentAmount = $this->faker->numberBetween(50000, 1500000); // Example range for annual rent amount
        $annualRentGrossYield = $this->faker->randomFloat(2, 1, 20); // Example range for gross yield percentage
        $aacfExpenses = $this->faker->numberBetween(10000, 50000); // Example range for expenses
        // Calculate net based on gross yield and annual rent amount
        $aacfNet = $annualRentAmount * ($annualRentGrossYield / 100);

        return [
            'annual_rent_amount' => $annualRentAmount,
            'annual_rent_gross_yield' => $annualRentGrossYield,
            'aacf_expences' => $aacfExpenses,
            'aacf_net' => $aacfNet,
        ];
    }
}
