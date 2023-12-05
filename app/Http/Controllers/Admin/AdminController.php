<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function login_submit(Request $request){

        $data = $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('email', $data['email'])->first();
    
        if ($user && Hash::check($data['password'], $user->password)) {
            
            return view('admin.dashboard');
        } else {
          
            dd('hello');
        }


    }
}
