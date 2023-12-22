<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminAddPropertyRequest;
use App\Http\Requests\Admin\UpdatePropertyExtraDetailsRequest;
use Illuminate\Http\Request;
use App\Models\PropertyModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AdminUpdateAddressRequest;
use App\Http\Requests\Admin\UpdateCalcPresetsRequest;
use App\Http\Requests\Admin\UpdatePropertyAacfRequest;
use App\Http\Requests\Admin\UpdatePropertyAminitiesRequest;
use App\Http\Requests\Admin\UpdatePropertyDetailsRequest;
use App\Http\Requests\Admin\UpdatePropertyDocumentRequest;
use App\Http\Requests\Admin\UpdatePropertyFinancialRequest;
use App\Http\Requests\Admin\UpdatePropertyFloorPlanRequest;
use App\Http\Requests\Admin\UpdatePropertyMarketRequest;
use App\Http\Requests\Admin\UpdatePropertyOfferingRequest;
use App\Http\Requests\Admin\UpdatePropertySharesRequest;
use App\Http\Requests\Admin\UpdatePropertyTaxesRequest;
use App\Http\Requests\Admin\UpdatePropertyUrlRequest;

class ManagePropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $property = PropertyModel::all();

        // $data['property'] = $property;
        return view('admin.properties.property')->with(compact('property'));
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

    public function edit_amenities(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyAmenities = $property->propertyAmenities;
        return view('admin.properties.edit_amenities')->with(['propertyAmenities' => $propertyAmenities, 'property_id' => $id]);
    }
    public function update_aminities(UpdatePropertyAminitiesRequest $request, string $id)
    {
        $data = $request->validated();

        // Convert the comma-separated string to an array
        $propertyAmenitiesArray = explode(',', $data['property_amenities']);

        $propertyAmenitiesArray = array_filter($propertyAmenitiesArray);

        $property = PropertyModel::find($id);

        $propertyAmenities = $property->propertyAmenities;
        $newData = [];
        foreach ($propertyAmenitiesArray as $property_amenity) {
            $newData[] = ['property_amenities' => $property_amenity];
        }
        if (!$propertyAmenities->isEmpty()) {
            $propertyAmenities->each->delete();
        }
        $property->propertyAmenities()->createMany($newData);
        return redirect(route('admin.manage-property.edit-market', ['id' => $id]))->with('success', 'Aminities updated successfully.');

    }

    public function edit_market_details(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyMarket = $property->MarketDetails;

        return view('admin.properties.edit_market')->with(['propertyMarket' => $propertyMarket, 'property_id' => $id]);
    }

    public function update_market_details(UpdatePropertyMarketRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $MarketDetails = $property->MarketDetails;

        // Check if propertyAddress exists
        if ($MarketDetails) {
            if ($request->hasFile('market_image')) {

                $existingImagePath = $MarketDetails->market_image;
                if ($existingImagePath && Storage::disk('public')->exists($existingImagePath)) {
                    Storage::disk('public')->delete($existingImagePath);
                }
                // Store the new market image
                $url = $request->file('market_image')->store('market_image', 'public');
                $data['market_image'] = $url;
            }

            $MarketDetails->update($data);
        } else {
            if ($request->hasFile('market_image')) {
                $url = $request->file('market_image')->store('market_image', 'public');
                $data['market_image'] = $url;
            }

            $property->MarketDetails()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Market updated successfully.');



    }
    public function edit_floorplan(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyFloorplan = $property->propertyFloorplan;

        return view('admin.properties.edit_floorplan')->with(['propertyFloorplan' => $propertyFloorplan, 'property_id' => $id]);
    }

    public function update_floorplan(UpdatePropertyFloorPlanRequest $request, string $id)
    {
        $data = $request->validated();
        // dd($data);
        $filteredData = array_filter($data);
        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyFloorplan = $property->propertyFloorplan;
        // $arraykeys = array_keys($filteredData);
        foreach ($filteredData as $key => $value) {

            if ($request->hasFile($key)) {
                $url = $value->store('floorplan_images', 'public');
                $newData[] = ['key' => $key, 'value' => $url];
            }

        }
        if (!$propertyFloorplan->isEmpty()) {

            foreach ($propertyFloorplan as $model) {
                if (array_key_exists($model->key, $filteredData)) {

                    Storage::disk('public')->delete($model->value);
                    $model->delete();
                }
            }
            $property->propertyFloorplan()->createMany($newData);
        } else {
            $property->propertyFloorplan()->createMany($newData);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');
    }

    public function edit_property_extra_details(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $PropertyExtraDetails = $property->PropertyExtraDetails;

        return view('admin.properties.edit_property_extra_details')->with(['PropertyExtraDetails' => $PropertyExtraDetails, 'property_id' => $id]);
    }

    public function update_property_extra_details(UpdatePropertyExtraDetailsRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $PropertyExtraDetails = $property->PropertyExtraDetails;

        // Check if propertyAddress exists
        if ($PropertyExtraDetails) {
            // dd($data);
            // Property address exists, update the existing record
            $PropertyExtraDetails->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->PropertyExtraDetails()->create($data);
        }
        return redirect(route('admin.manage-property.edit-property-aacf', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_aacf(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyAacf = $property->propertyAacf;

        return view('admin.properties.edit_property_aacf')->with(['propertyAacf' => $propertyAacf, 'property_id' => $id]);
    }

    public function update_property_aacf(UpdatePropertyAacfRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyAacf = $property->propertyAacf;

        // Check if propertyAddress exists
        if ($propertyAacf) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyAacf->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyAacf()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_urls(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyUrl = $property->propertyUrl;

        return view('admin.properties.edit_property_url')->with(['propertyUrls' => $propertyUrl, 'property_id' => $id]);
    }

    public function update_property_urls(UpdatePropertyUrlRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyUrl = $property->propertyUrl;

        // Check if propertyAddress exists
        if ($propertyUrl) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyUrl->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyUrl()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }

    public function edit_property_offerings(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyOffering = $property->propertyOffering;

        return view('admin.properties.edit_property_offering')->with(['propertyOffering' => $propertyOffering, 'property_id' => $id]);
    }

    public function update_property_offerings(UpdatePropertyOfferingRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyOffering = $property->propertyOffering;

        // Check if propertyAddress exists
        if ($propertyOffering) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyOffering->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyOffering()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_shares(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyShare = $property->propertyShare;

        return view('admin.properties.edit_property_shares')->with(['propertyShare' => $propertyShare, 'property_id' => $id]);
    }

    public function update_property_shares(UpdatePropertySharesRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyShare = $property->propertyShare;

        // Check if propertyAddress exists
        if ($propertyShare) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyShare->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyShare()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_financial_details(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyShare = $property->propertyShare;

        return view('admin.properties.edit_financial_details')->with(['propertyShare' => $propertyShare, 'property_id' => $id]);
    }

    public function update_property_financial_details(UpdatePropertyFinancialRequest $request, string $id)
    {
        $data = $request->validated();

        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyFinancialDetail = $property->propertyFinancialDetail;

        // Check if propertyAddress exists
        if ($propertyFinancialDetail) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyFinancialDetail->update($data);
        } else {
            // Property address does not exist, create a new record
            $property->propertyFinancialDetail()->create($data);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_calc_presets(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $calcPreset = $property->calcPreset;
        // dd($calcPreset);

        return view('admin.properties.edit_property_calc')->with(['calcPreset' => $calcPreset, 'property_id' => $id]);
    }
    public function update_property_calc_presets(UpdateCalcPresetsRequest $request, string $id)
    {
        $data = $request->validated();
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        foreach ($filteredData as $key => $value) {
            $newData[] = ['key' => $key, 'value' => $value];
        }
        // dd($newData);
        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $calcPreset = $property->calcPreset;

        // Check if propertyAddress exists
        if (!$calcPreset->isEmpty()) {
            // dd($data);
            // Property address exists, update the existing record
            $calcPreset->each->delete();
        }
        // Property address does not exist, create a new record
        $property->calcPreset()->createMany($newData);

        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }

    public function edit_property_documents(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyDocumentModel = $property->propertyDocumentModel;
        // dd($calcPreset);

        return view('admin.properties.edit_property_documents')->with(['propertyDocumentModel' => $propertyDocumentModel, 'property_id' => $id]);
    }

    public function update_property_documents(UpdatePropertyDocumentRequest $request, string $id)
    {
        $data = $request->validated();
        $filteredData = array_filter($data);
        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyDocumentModel = $property->propertyDocumentModel;
        // $arraykeys = array_keys($filteredData);
        foreach ($filteredData as $key => $value) {

            if ($request->hasFile($key)) {
                $url = $value->store('property_documents', 'public');
                $newData[] = ['document_key' => $key, 'document_value' => $url];
            }

        }
        if (!$propertyDocumentModel->isEmpty()) {
            foreach ($propertyDocumentModel as $model) {
                if (array_key_exists($model->document_key, $filteredData)) {

                    Storage::disk('public')->delete($model->document_value);
                    $model->delete();
                }
            }
            $property->propertyDocumentModel()->createMany($newData);
        } else {
            $property->propertyDocumentModel()->createMany($newData);
        }
        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }
    public function edit_property_taxes(Request $request, string $id)
    {
        $property = PropertyModel::find($id);
        $propertyTax = $property->propertyTax;
        return view('admin.properties.edit_property_taxes')->with(['propertyTax' => $propertyTax, 'property_id' => $id]);
    }


    public function update_property_taxes(UpdatePropertyTaxesRequest $request, string $id)
    {
        $data = $request->validated();
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        foreach ($filteredData as $key => $value) {
            $newData[] = ['tax_key' => $key, 'tax_value' => $value];
        }
        // dd($newData);
        $property = PropertyModel::find($id);

        // Retrieve the existing property address
        $propertyTax = $property->propertyTax;

        // Check if propertyAddress exists
        if (!$propertyTax->isEmpty()) {
            // dd($data);
            // Property address exists, update the existing record
            $propertyTax->each->delete();
        }
        // Property address does not exist, create a new record
        $property->propertyTax()->createMany($newData);

        return redirect(route('admin.manage-property.edit-details', ['id' => $id]))->with('success', 'Address updated successfully.');

    }



}
