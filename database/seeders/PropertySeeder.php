<?php

namespace Database\Seeders;

use App\Models\PropertyModel;
use Database\Factories\PropertyDataFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PropertyDataFactory::new()->count(50)->create();
    }
}
