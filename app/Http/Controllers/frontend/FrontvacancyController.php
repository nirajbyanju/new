<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posting;
use App\Models\Categoryofvacancy;

class FrontvacancyController extends Controller
{
    public function view()
    {
    $vacancy = Posting::latest()->take(6)->get();
    $data = compact('vacancy');
    return view('frontend/page/vacancy')->with($data); 
    }
    public function detail($id){
        Posting::find($id)->increment('views');
        $posting=Posting::find($id);
        return view('frontend/page/vacancy/vacancydetails',compact('posting'));
        

   }

   public function viewingvacy(Request $request)
   {
    $type = $request->input('type');
    if ($type=='fulltime'){
        $postingvacancy = Posting::where('jobstypes', '=', 'full time')->get();
    }
    if ($type=='parttime'){
        $postingvacancy = Posting::where('jobstypes', '=', 'part time')->get();
    }
    if ($type=='contractual'){
        $postingvacancy = Posting::where('jobstypes', '=', 'contractual')->get();
    }
    if ($type=='interns'){
        $postingvacancy = Posting::where('jobstypes', '=', 'intern')->get();
    }
    $data = compact('postingvacancy');
    return view('frontend/page/vacancy/vacancysubdetails')->with($data);
   }

   public function show($id)
    {
            $record = Posting::findOrFail($id);
            return response()->json($record);
    }

    // public function vacancyexplore()
    // {
    // $posting = Posting::latest()->get();
    // $data = compact('posting');
    // return view('frontend/page/vacancy/vacancyexplore')->with($data); 
    // }


    public function vacancyexplore(Request $request)
{
    $query = $request->input('query');
    $selection = $request->input('selection');
    $type = $request->input('type');

    if (!empty($type)) {
        if ($type == 'parttime') {
            $posting = Posting::where('jobstypes', '=', 'part time')->get();
        }
        elseif ($type == 'government') {
            $posting = Posting::where('categoryofvacancy', '=', 'Government/INGO/NGO')->get();
        }
        elseif ($type == 'fresher') {
            $posting = Posting::where('jobslevel', '=', 'fresher')->get();
        }
        elseif ($type == 'bankjob') {
            $posting = Posting::where('categoryofvacancy', '=', 'Accounting/Finance')->get();
        }
        elseif ($type == 'itjobs') {
            $posting = Posting::where('categoryofvacancy', '=', 'IT/Telecommunications')->get();
        }
        elseif ($type == 'accountingjob') {
            $posting = Posting::where('categoryofvacancy', '=', 'Accounting/Finance')->get();
        }
    }
    else {
                    $posting = Posting::where(function ($queryBuilder) use ($query, $selection, $type) {
                    if (!empty($query) && empty($selection)) {
                        $queryBuilder->where('nameofcompany', 'like', '%' . $query . '%')
                            ->orWhere('position', 'like', '%' . $query . '%');
                    } elseif (empty($query) && !empty($selection)) {
                        $queryBuilder->where('categoryofvacancy', '=', $selection);
                    } elseif (!empty($query) && !empty($selection)) {
                        $queryBuilder->where('categoryofvacancy', '=', $selection)
                            ->where(function ($innerQueryBuilder) use ($query) {
                                $innerQueryBuilder->where('nameofcompany', 'like', '%' . $query . '%')
                                    ->orWhere('position', 'like', '%' . $query . '%');
                            });
                    }
                    else {
                        $posting = Posting::latest()->get();
                    }
                })
                ->get();
            }

    $select = Categoryofvacancy::all();
    $data = compact('posting', 'select');

    return view('frontend.page.vacancy.vacancyexplore', $data);
}


}