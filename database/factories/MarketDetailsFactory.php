<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MarketDetails>
 */
class MarketDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'market_title' => $this->faker->sentence(4),
            'market_image' => $this->faker->imageUrl(640, 480, 'market'),
            'market_description' => $this->faker->paragraph(3),
        ];
    }
}
