<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singup;
use Session;
use Hash;
use Carbon\Carbon;

class Signupcontrollers extends Controller
{
    public function index()
    {
        return view('signup');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required', 
                'cpassword' => 'required|same:password'
            ]
            );
    
        $signup = new Singup;
        $signup->name = $request->input('name');
        $signup->email = $request->input('email');
        $signup->password =Hash::make($request->input('password'));
        $signup->cpassword = $request->input('cpassword');
        $signup->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }

    public function login()
    {
        return view('login');
    }

    public function loginUser(Request $request){
        $request->validate(
            [
                
                'email' => 'required',
                'password' => 'required', 
            ]);
        
        $signup = Singup::where('email','=',$request->email)->first();
        if ($signup){
            if(Hash::check($request->password, $signup->password)){
                $request->session()->put('id', $signup->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','This password is not wrong.');
            }
        } else{
            return back()->with('fail','This email is not registered.');
        }

    }

    
}
