<?php

namespace Database\Factories;

use App\Models\Admins;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
use App\Models\PropertyTaxModel;
use App\Models\PropertyAddress;
use App\Models\PropertyImageModel;
use App\Models\PropertyAmenity;
use App\Models\PropertyDetails;
use App\Models\MarketDetails;
use App\Models\PropertyFloorplan;
use App\Models\PropertyExtraDetails;
use App\Models\PropertyAacf;
use App\Models\PropertyUrl;
use App\Models\PropertyOffering;
use App\Models\PropertyShare;
use App\Models\CalcPreset;
use App\Models\PropertyDocumentModel;
use App\Models\PropertyFinancialDetail;

class PropertyDataFactory extends Factory
{
    protected $model = \App\Models\PropertyModel::class;

    public function definition()
    {
        return [
            'admin_id' => 1,
            'name' => $this->faker->name,
            'availability' => $this->faker->text(20),
            'description' => $this->faker->paragraph,
            'management_company' => $this->faker->company,
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\PropertyModel $property) {
            $property->propertyTax()->save(PropertyTaxModel::factory()->make());
            $property->propertyAddress()->save(PropertyAddress::factory()->make());
            $property->propertyImage()->save(PropertyImageModel::factory()->make());
            $property->propertyAmenities()->save(PropertyAmenity::factory()->make());
            $property->propertyDetails()->save(PropertyDetails::factory()->make());
            $property->marketDetails()->save(MarketDetails::factory()->make());
            $property->propertyFloorplan()->save(PropertyFloorplan::factory()->make());
            $property->propertyExtraDetails()->save(PropertyExtraDetails::factory()->make());
            $property->propertyAacf()->save(PropertyAacf::factory()->make());
            $property->propertyUrl()->save(PropertyUrl::factory()->make());
            $property->propertyOffering()->save(PropertyOffering::factory()->make());
            $property->propertyShare()->save(PropertyShare::factory()->make());
            $property->calcPreset()->save(CalcPreset::factory()->make());
            $property->propertyDocumentModel()->save(PropertyDocumentModel::factory()->make());
            $property->propertyFinancialDetail()->save(PropertyFinancialDetail::factory()->make());
        });
    }
}
