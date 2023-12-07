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
        $post->name = $request->name;
        $post->address1 = $request->address1;
        $post->address2 = $request->address2;
        $post->save();
        return redirect('property');

        
    }

  
}
