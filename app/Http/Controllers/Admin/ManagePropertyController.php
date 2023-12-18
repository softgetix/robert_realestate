<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminAddPropertyRequest;
use Illuminate\Http\Request;
use App\Models\PropertyModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AdminUpdateAddressRequest;
use App\Http\Requests\Admin\UpdatePropertyDetailsRequest;

class ManagePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = PropertyModel::all();

        return view('admin.properties.property', compact('property'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.properties.add_property');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminAddPropertyRequest $request)
    {
        $data = $request->validated();
        $data['admin_id'] = auth('admin')->id();
        $property = PropertyModel::create($data);

        // Handle file uploads
        if ($request->hasFile('property_images')) {
            foreach ($request->file('property_images') as $file) {
                $url = $file->store('property_images', 'public');
                $files[] = ['property_image_key' => 'property_image', 'property_image_value' => $url];
            }
        }

        if (!empty($files)) {
            $property->propertyImage()->createMany($files);
        }

        return redirect(route('admin.manage-property.edit-address', ['id' => $property->id]))->with('success', 'Property added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function edit_address(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyAddress = $property->propertyAddress;
        return view('admin.properties.edit_address')->with(['propertyAddress' => $propertyAddress, 'property_id' => $id]);
    }
    public function update_address(AdminUpdateAddressRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyAddress = $property->propertyAddress;

        // Check if propertyAddress exists
        if ($propertyAddress) {
            // Property address exists, update the existing record
            $propertyAddress->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyAddress()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }

    public function edit_property_details(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyDetails = $property->propertyDetails;
        return view('admin.properties.edit_details')->with(['propertyDetails' => $propertyDetails, 'property_id' => $id]);
    }
    public function update_property_details(UpdatePropertyDetailsRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyDetails = $property->propertyDetails;

        // Check if propertyAddress exists
        if ($propertyDetails) {
            // Property address exists, update the existing record
            $propertyDetails->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyDetails()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }

}
