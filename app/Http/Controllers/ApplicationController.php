<?php

namespace App\Http\Controllers;

use App\Models\PropertyModel;
use Illuminate\Http\Request;
use DB;

class ApplicationController extends Controller
{
    public function invest()
    {
        $title = 'Invest';

        $properties = PropertyModel::with('propertyImage')->get();




        $properties = PropertyModel::whereNull('deleted_at')
            ->whereHas('propertyImage', function ($query) {
                // $query->where('property_image_key', 'property_image');
            })
            ->select('id', 'name', 'availability', 'description', 'management_company') // Include columns you want
            ->with(['propertyImage' => function ($query) {
                $query->select('property_image_value');
            }])
            ->take(12)
            ->get();

        foreach ($properties as $property) {
            echo "Property ID: " . $property->id . "<br>";
            dd($property->propertyImage);
            // Accessing the propertyImage relationship
            $propertyImages = $property->propertyImage;

            if ($propertyImages->isNotEmpty()) {
                foreach ($propertyImages as $image) {
                    echo "Image ID: " . $image->property_image_value . "<br>";
                    // Access other image attributes as needed: $image->attribute_name
                }
            } else {
                echo "No images found for this property.<br>";
            }
            echo "<hr>";
        }
        return view('frontend.properties')->with(['properties' => $properties, 'title' => $title]);
    }
}
