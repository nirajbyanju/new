<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Posting;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Models\User;
use App\Models\Learn\learn_category;
use App\Models\Learn\learn_course;
use App\Models\Learn\learn_section;
use App\Models\Learn\learn_lesson;
class Customercontrollers extends Controller
{




    public function index(Request $request)
{
    $postingvacancy = posting::paginate(10); // Use paginate() instead of get()
    $data = compact('postingvacancy');
    return view('frontend/page/customer')->with($data);
}
  
public function checkUsernameEmail(Request $request)
{
    $usernameExists = Users::where('username', $request->username)->exists();
    $emailExists = Users::where('email', $request->email)->exists();

    return response()->json([
        'usernameExists' => $usernameExists,
        'emailExists' => $emailExists,
    ]);
}

    
   



    
    public function ShareWidget()
    {
        
        return view('frontend/page/test');
       
    }
}
