<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\PropertyModel;


class PropertyController extends Controller
{
    public function index()
    {
        $data['property'] = PropertyModel::all();
        return view('admin.properties.property')->with($data);
    }

    public function add_property()
    {
        return view('admin.properties.add_property');
    }

    public function submit_property(Request $request)
    {
       
        //$data = $request->all();
        $post = new PropertyModel;
        $post->availability = $request->availability;
        $post->name        = $request->name;
        $post->address1    = $request->address1;
        $post->address2    = $request->address2;
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
        $post->save();
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
