<?php

namespace App\Http\Controllers;
use App\Models\Internship;
use App\Models\Grants;
use App\Models\Scholarship;
use App\Models\Entreneurship;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Opportunitycontroller extends Controller
{
    public function opporunitytable(Request $request)
{
   
        $type = $request->input('type');

    $scholarships = DB::table('scholarships')->select('*');
    $grants = DB::table('grants')->select('*');
    $internships = DB::table('internship')->select('*');
    $entreneurship = DB::table('entreneurship')->select('*');

    if ($type == 'Scholarships') {
        $postingvacancy = $scholarships->get();
    }
    elseif ($type == 'Internships') {
        $postingvacancy = $internships->get();
    }
    elseif ($type == 'Entrepreneurship') {
        $postingvacancy = $entreneurship->get();
    }
    elseif ($type == 'Grants') {
        $postingvacancy = $grants->get();
    }
    else{
        $postingvacancy = $scholarships->get()->concat($grants->get())->concat($internships->get())->concat($entreneurship->get());
    }
    

    $data = compact('postingvacancy');

    return view('backend/page/opporunitytable')->with($data);
    }


    public function destory($type,$id){

    if ($type == 'Scholarships') {
            $opportunity=Scholarship::find($id)->delete();
    }
    elseif ($type == 'internship') {
        $opportunity=Internship::find($id)->delete();
    }
    elseif ($type == 'grants') {
        $opportunity=Grants::find($id)->delete();
    }
    elseif ($type == 'entreneurship') {
        $opportunity=Entreneurship::find($id)->delete();
    }
        return redirect('opporunitytable')->with('success','Deleted');
    }

    public function update($type,$id){

        if ($type == 'scholarships') {
        $posting=Scholarship::find($id);
        return view('backend/page/opporunityupdate',compact('posting'));
    }
    elseif ($type == 'internship') {
        $posting=Internship::find($id);
        return view('backend/page/opporunityupdate',compact('posting'));
    }
    elseif ($type == 'grants') {
        $posting=Grants::find($id);
        return view('backend/page/opporunityupdate',compact('posting'));
    }
    elseif ($type == 'entreneurship') {
        $posting=Entreneurship::find($id);
        return view('backend/page/opporunityupdate',compact('posting'));
    }

    }
}