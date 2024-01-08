<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datetime;
use Carbon\Carbon;
use App\Models\Posting;



class Usercontrollers extends Controller
{
    public function updatejob()
    {
        $postingvacancy = Posting::latest()->get();
       /* 
        echo"<pre>";
        print_r($customers->toArray());
        die;*/

        $data = compact('postingvacancy');
        return view('dashboard/update')->with($data);
    }
    
}
