<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Internship;
use Carbon\Carbon;
use App\Models\Onlinecourse;
use App\Models\Scholarship;
use App\Models\Entreneurship;
use Illuminate\Support\Facades\DB;
class Internshipcontrollers extends Controller
{
    //
    public function internshipshow()
    {
        $internship = internship::latest()->paginate(9);        
		$data = compact('internship');

		return view('internship')->with($data);
	}

    public function internship($id){
        internship::find($id)->increment('views');
        $posting=internship::find($id);
        $shareComponent = \Share::page(
            url('links'),
            'Share opportunities with friends'
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
       
        return view('detailinternship',compact('posting','shareComponent'));
        

   }
   public function schoolarshipdetails($id){
    scholarship::find($id)->increment('views');
    $posting=scholarship::find($id);
    $shareComponent = \Share::page(
        url('links'),
        'Share opportunities with friends'
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();
   
    return view('detailinternship',compact('posting','shareComponent'));
    

}
public function onlinecoursedetails($id){
    onlinecourse::find($id)->increment('views');
    $posting=onlinecourse::find($id);
    $shareComponent = \Share::page(
        url('links'),
        'Share opportunities with friends'
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();
   
    return view('detailinternship',compact('posting','shareComponent'));
    

}
public function entreneurshipdetails($id){
    entreneurship::find($id)->increment('views');
    $posting=entreneurship::find($id);
    $shareComponent = \Share::page(
        url('links'),
        'Share opportunities with friends'
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();
   
    return view('detailinternship',compact('posting','shareComponent'));
    

}
public function intopprtunity(Request $request)
{
    $scholarships = DB::table('scholarship')->select('*')->get();
    $online_courses = DB::table('onlinecourse')->select('*')->get();
    $internships = DB::table('internship')->select('*')->get();
    $entreneurship = DB::table('entreneurship')->select('*')->get();

    $postingvacancy = $scholarships->concat($online_courses)->concat($internships)->concat($entreneurship);

    $data = compact('postingvacancy');
    

    return view('intopprtunity')->with($data);
}
    
   

}

