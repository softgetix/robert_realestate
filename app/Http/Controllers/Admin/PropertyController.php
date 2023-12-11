<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\PropertyModel;
use App\Models\PropertyDocumentModel;
use App\Models\PropertyTaxModel;


class PropertyController extends Controller
{
    public function property()
    {
        $data['property'] = PropertyModel::all();
        return view('admin.properties.property')->with($data);
    }

    public function add_property()
    {
        return view('admin.properties.add_property');
    }

    // public function store_property(Request $request)
    // {
    // //     $image = $request->file('image');
    // //    dd($image);
    // //     $data = $request->all();
    // //    dd($data);

    // // if ($request->hasFile('image')) {
    // //     $file = $request->file('image');
    // //     $fileName = time() . '_' . $file->getClientOriginalName();
    // //     $file->storeAs('property_documents', $fileName);
    // //     dd($file);
    // // } else {
    // //     dd('No file uploaded.');
    // // }

    //     $property = new PropertyModel;
    //     $property->availability = $request->availability;
    //     $property->name        = $request->name;
    //     $property->address1    = $request->address1;
    //     $property->address2    = $request->address2;
    //     $property->zoning      = $request->zoning;
    //     $property->value       = $request->value;
    //     $property->amenities   = $request->amenities;
    //     $property->description = $request->description;
    //     $property->market_title       = $request->market_title;
    //     $property->market_description = $request->market_description;
    //     $property->market_file        = $request->market_file;
    //     $property->floorplan_1        = $request->floorplan_1;
    //     $property->floorplan_2        = $request->floorplan_2;
    //     $property->floorplan_3        = $request->floorplan_3;
    //     $property->deed_fractions_1   = $request->deed_fractions_1;
    //     $property->deed_fractions_2   = $request->deed_fractions_2;
    //     $property->annual_appreciation= $request->annual_appreciation;
    //     $property->aum_fee_1          = $request->aum_fee_1;
    //     $property->aum_fee_2          = $request->aum_fee_2;
    //     $property->aum_fee_3          = $request->aum_fee_3;
    //     $property->save();

    //     $propertyId = $property->id;

    //     $property_tax = new PropertyTaxModel;
    //     $property_tax->property_id = $propertyId; 
    //     $property_tax->Tax = $request->availability;
    //     $property_tax->save();

    //    // $propertyDocs = [];

        
    //         //$propertyId = PropertyModel::latest()->first()->id;

           
    //         $propertyDocs = [];

    //         // Process each uploaded file
    //         if ($request->hasFile('images')) {
    //             foreach ($request->file('images') as $key => $file) {
    //                 $fileName = time() . '_' . $file->getClientOriginalName();
    //                 $file->storeAs('property_documents', $fileName);

                   
    //                 $propertyDocs[$key]['property_document'] = $fileName;
    //                 $propertyDocs[$key]['document_1'] = $fileName;
    //             }
    //         }

    //         // Store $propertyDocs in your database
    //         foreach ($propertyDocs as $propertyDoc) {
    //             $propertyDocument = new PropertyDocumentModel();
    //             $propertyDocument->property_id = $propertyId;
    //             $propertyDocument->property_document = $propertyDoc['property_document'];
    //             $propertyDocument->document_1 = $propertyDoc['document_1'];
               
    //             $propertyDocument->save();
    //         }



    //     // $propertyDoc = new PropertyDocumentModel();
    //     // $propertyDoc->property_id = $propertyId;
       
    //     // if ($request->hasFile('image')) {
    //     //     $file = $request->file('image');
    //     //     $fileName = time() . '_' . $file->getClientOriginalName();
    //     //     $file->storeAs('property_documents', $fileName);
    //     //     $propertyDoc->property_document = $fileName;
    //     // }

    //     // $propertyDoc->save();

    //     return redirect('property');
      
        
    // }

    public function store_property(Request $request)
{
    $property = new PropertyModel;
    $property->availability = $request->availability;
    $property->name        = $request->name;
    $property->address1    = $request->address1;
    $property->address2    = $request->address2;
    $property->zoning      = $request->zoning;
    $property->value       = $request->value;
    $property->amenities   = $request->amenities;
    $property->description = $request->description;
    $property->market_title       = $request->market_title;
    $property->market_description = $request->market_description;
    $property->market_file        = $request->market_file;
    $property->floorplan_1        = $request->floorplan_1;
    $property->floorplan_2        = $request->floorplan_2;
    $property->floorplan_3        = $request->floorplan_3;
    $property->deed_fractions_1   = $request->deed_fractions_1;
    $property->deed_fractions_2   = $request->deed_fractions_2;
    $property->annual_appreciation= $request->annual_appreciation;
    $property->aum_fee_1          = $request->aum_fee_1;
    $property->aum_fee_2          = $request->aum_fee_2;
    $property->aum_fee_3          = $request->aum_fee_3;
    $property->save();

    $propertyId = $property->id;

    $property_tax = new PropertyTaxModel;
    $property_tax->property_id = $propertyId; 
    $property_tax->Tax = $request->availability; 
    $property_tax->save();

    // Process each uploaded file
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $key => $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('property_documents', $fileName);

            $propertyDocs[$key]['property_document'] = $fileName;
            $propertyDocs[$key]['document_1'] = $fileName;
        }

        // Store $propertyDocs in your database
        foreach ($propertyDocs as $propertyDoc) {
            $propertyDocument = new PropertyDocumentModel();
            $propertyDocument->property_id = $propertyId;
            $propertyDocument->property_document = $propertyDoc['property_document'];
            $propertyDocument->document_1 = $propertyDoc['document_1'];

            $propertyDocument->save();
        }
    }

    return redirect('property');
}













    public function edit_property(Request $request, $id)
    {
        $post = PropertyModel::find($id);
        return view('admin.properties.edit_property', compact('post'));

    }

    public function update_property(Request $request, $id)
    {

        $post = PropertyModel::find($id);
        $post->availability = $request->availability;
        $post->name = $request->name;
        $post->address1 = $request->address1;
        $post->address2 = $request->address2;
        $post->zoning      = $request->zoning;
        $post->value       = $request->value;
        $post->amenities   = $request->amenities;
        $post->description = $request->description;
        $post->market_title       = $request->market_title;
        $post->market_description = $request->market_description;
        $post->market_file        = $request->market_file;
        $post->floorplan_1        = $request->floorplan_1;
        $post->floorplan_2        = $request->floorplan_2;
        $post->floorplan_3        = $request->floorplan_3;
        $post->deed_fractions_1   = $request->deed_fractions_1;
        $post->deed_fractions_2   = $request->deed_fractions_2;
        $post->annual_appreciation= $request->annual_appreciation;
        $post->aum_fee_1          = $request->aum_fee_1;
        $post->aum_fee_2          = $request->aum_fee_2;
        $post->aum_fee_3          = $request->aum_fee_3;
        $post->update(); 
        return redirect('property');
    }

    public function delete_property($id)
    {
        $post = PropertyModel::find($id);
        $post->delete();
        return redirect()->back();
    }

  
}
