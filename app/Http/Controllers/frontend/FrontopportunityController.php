<?php

namespace App\Http\Controllers\frontend;
use App\Models\Internship;
use App\Models\Grants;
use App\Models\Scholarship;
use App\Models\Entreneurship;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontopportunityController extends Controller
{
    public function view()
    {
        $scholarships = Scholarship::latest()->take(3)->get();
        $grants = Grants::latest()->take(3)->get();
        $internships = Internship::latest()->take(3)->get();
        $entreneurship = Entreneurship::latest()->take(3)->get();
        $postingvacancy = $scholarships->concat($grants)->concat($internships)->concat($entreneurship);
    $data = compact('postingvacancy','scholarships', 'grants' , 'internships' , 'entreneurship');
    return view('frontend/page/opprtunity')->with($data); 
    }


    public function viewingopp(Request $request){
        $type = $request->input('type');

        if ($type == 'scholarships') {
        $posting= Scholarship::all();
        if ($request->has('id')) {
            $selectedPost = Post::findOrFail($request->id);
        }
        
    }
    elseif ($type == 'internship') {
        $posting= Internship::latest()->get();
    }
    elseif ($type == 'grants') {
        $posting= Grants::latest()->get();
    }
    elseif ($type == 'entrepreneurship') {
        $posting= Entreneurship::latest()->get();
    }
    $data = compact('posting');
    return view('frontend/page/opportunity/opportunity-view')->with($data); 
}
public function show($id, $type)
    {
        if ($type == 'scholarships') {
            $record = Scholarship::findOrFail($id);}
        elseif ($type == 'internship') {
            $record = Internship::findOrFail($id);}
        elseif ($type == 'grants') {
            $record = Grants::findOrFail($id);}
        elseif ($type == 'entrepreneurship') {
            $record = Entrepreneurship::findOrFail($id);}
        return response()->json($record);
    }

    public function details($type, $id)
    {
        switch ($type) {
            case 'scholarships':
                $posting = Scholarship::find($id);
                break;
            case 'internship':
                $posting = Internship::find($id);
                break;
            case 'grants':
                $posting = Grants::find($id);
                break;
            case 'entreneurship':
                $posting = Entreneurship::find($id);
                break;
            default:
                abort(404); // Handle unknown opportunity type
        }
    
        if ($posting) {
            $posting->increment('views');
            $data = compact('posting');
            return view('frontend/page/opportunity/opp-detail')->with($data);
        } else {
            abort(404); // Handle opportunity not found
        }
    }
     }
