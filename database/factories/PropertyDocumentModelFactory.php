<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyDocumentModel>
 */
class PropertyDocumentModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'document_key' => $this->faker->randomElement([
                'document_1', 'document_2', 'document_3', 'document_4', 'document_5',
                'Documents_Expence_Calculations', 'Documents_Rent_Calculations',
                'Documents_Deed_Restrictions', 'Documents_Deed_Example',
                'Documents_Closing_Statement_Example', 'Documents_Master_Deed',
            ]),
            'document_value' => $this->faker->sentence(),
            // You might generate file paths or URLs here depending on your requirements
        ];
    }
}
