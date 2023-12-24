<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyUrl>
 */
class PropertyUrlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'google_map' => $this->faker->url,
            'zillow' => $this->faker->url,
            'airbnb' => $this->faker->url,
            'vrbo' => $this->faker->url,
            'alt_listing_1' => $this->faker->url,
            'alt_listing_2' => $this->faker->url,
            'alt_listing_3' => $this->faker->url,
        ];
    }
}
