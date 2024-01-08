<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registration;

class Registrationcontroller extends Controller
{
    public function index()
    {
        return view('signup');
    }
    public function register(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required|confirmed', 
                'password_confirmation' => 'required'
            ]
            );
        echo "<pre>";
        print_r($request->all());

        $register = new register;
        $register->email = $request['email'];
        $register->pwd = $request['password'];
        $register->save();
    }
}
