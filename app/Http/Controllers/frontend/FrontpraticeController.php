<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontpraticeController extends Controller
{
    public function view()
    {
        return view('frontend/page/Pratice'); 
    }
}
