<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyImageModel>
 */
class PropertyImageModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_image_key' => 'property_image',
            'property_image_value' => 'property_images/jPlZr0wLTx9pOOAPfwEIwdz84YvWyx9EOFIUQujk.jpg'
        ];
    }
}
