<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
class Postingcontrollers extends Controller
{
    public function index()
    {
        return view('backend/page/postajob');
    }

    public function store(Request $request)
    {
       /*echo"<pre>";
        print_r($request->all());*/
        $posting = new Posting;
        $request->validate([
            'nameofcompany' => 'required',
            'categoryofvacancy' => 'required',
            'position' => 'required',
            'phonenumber' => 'required',
            'website' => 'nullable',
            'emailid' => 'required|email',
            'publishdate' => 'required|date',
            'dateline' => 'required|date',
            'workingplace' => 'required',
            'jobstypes' => 'required',
            'jobslevel' => 'required',
            'numberofvacancy' => 'required|numeric',
            'tags' => 'nullable',
            'educationrequirement' => 'nullable',
            'experiencerequirment' => 'nullable',
            'salary' => 'nullable',
            'descriptions' => 'required',
            ]);
        $posting->nameofcompany = $request->input('nameofcompany');
        $posting->categoryofvacancy = $request->input('categoryofvacancy');
        $posting->position = $request->input('position');
        $posting->phonenumber = $request->input('phonenumber');
        $posting->website = $request->input('website');
        $posting->emailid = $request->input('emailid');
        $posting->publishdate = $request->input('publishdate');
        $posting->dateline = $request->input('dateline');
        $posting->workingplace = $request->input('workingplace');
        $posting->jobstypes = $request->input('jobstypes');
        $posting->jobslevel = $request->input('jobslevel');
        $posting->numberofvacancy = $request->input('numberofvacancy');
        $posting->tags = $request->input('tags');
        $posting->educationrequirement = $request->input('educationrequirement');
        $posting->experiencerequirment = $request->input('experiencerequirment');
        $posting->salary = $request->input('salary');
        $posting->descriptions = $request->input('descriptions');
        $posting->views = $request->input('views', 0);       

        if($request->hasfile('uploadcompanylogo'))
        {
            $file = $request->file('uploadcompanylogo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/posting/Logo/', $filename);
            $posting->uploadcompanylogo = $filename;
        }


        $posting->save();
        return redirect()->route('/postajobtable');

        
    }

    public function updatejob()
    {
        $postingvacancy = Posting::latest()->get();
        $data = compact('postingvacancy');
        return view('backend/page/postjobtable')->with($data);
    }

    public function destoryjob($id){
        $posting=Posting::find($id)->delete();
        return redirect('postajobtable')->with('success','Student Image Upload Successfully');
    }

    public function postajobedit($id){
        $posting=Posting::find($id);
        if (is_null($posting)){
            return redirect('update');
        } else{
        return view('backend/page/postajobedit',compact('posting'));}
    }



    public function Updatingjob(Request $request,$id){
        $posting =Posting::find($id);
        $posting->nameofcompany = $request->input('nameofcompany');
        $posting->categoryofvacancy = $request->input('categoryofvacancy');
        $posting->position = $request->input('position');
        $posting->phonenumber = $request->input('phonenumber');
        $posting->website = $request->input('website');
        $posting->emailid = $request->input('emailid');
        $posting->publishdate = $request->input('publishdate');
        $posting->dateline = $request->input('dateline');
        $posting->workingplace = $request->input('workingplace');
        $posting->jobstypes = $request->input('jobstypes');
        $posting->jobslevel = $request->input('jobslevel');
        $posting->numberofvacancy = $request->input('numberofvacancy');
        $posting->tags = $request->input('tags');
        $posting->educationrequirement = $request->input('educationrequirement');
        $posting->experiencerequirment = $request->input('experiencerequirment');
        $posting->salary = $request->input('salary');
        $posting->descriptions = $request->input('descriptions');   
        
        if($request->hasfile('uploadcompanylogo'))
        {   
            $destination = 'uploads/posting/Logo/'.$posting->uploadcompanylogo;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('uploadcompanylogo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/posting/Logo/', $filename);
            $posting->uploadcompanylogo = $filename;
        }


        $posting->update();
        return redirect('postajobtable')->with('success','Student Image Upload Successfully');
}









    public function view(Request $request)
    {
        $search=$request['search'] ?? "";
        if ($search !=""){
            $postingvacancy=Posting::where('nameofcompany','like',"%$search%")->orwhere('emails','like',"%$search%")->orwhere('categoryofvacancy','like',"%$search%")->get();
            $data = compact('postingvacancy','search');
            return view('search')->with($data);
        } else {
            $postingvacancy = Posting::latest()->paginate(6);
        }
        $data = compact('postingvacancy','search');
        return view('frontend/page/home')->with($data);
    }

    public function categories(Request $request)
    {
        $search=$request['search'] ?? "";
        if ($search !=""){
            $postingvacancy=Posting::where('nameofcompany','like',"%$search%")->orwhere('emails','like',"%$search%")->orwhere('categoryofvacancy','like',"%$search%")->get();
            $data = compact('postingvacancy','search');
            return view('search')->with($data);
        } else {
            $postingvacancy = Posting::latest()->paginate(6);
        }
        
       /* ->get()
       $postingvacancy = Posting::all(); for all data fetching
        echo"<pre>";
        print_r($customers->toArray());
        die;*/

        $data = compact('postingvacancy','search');
        return view('categories')->with($data);
    }
    public function search(Request $request)
    {
        $search=$request['search'] ?? "";
        if ($search !=""){
            $postingvacancy=Posting::where('nameofcompany','like',"%$search%")->orwhere('emails','like',"%$search%")->orwhere('categoryofvacancy','like',"%$search%")->get();
            $data = compact('postingvacancy','search');
            return view('search')->with($data);
        } else {
            $postingvacancy = Posting::latest()->paginate(6);
        }
        
       /* ->get()
       $postingvacancy = Posting::all(); for all data fetching
        echo"<pre>";
        print_r($customers->toArray());
        die;*/

        $data = compact('postingvacancy','search');
        return view('frontend/page/home')->with($data);
    }


   /*  public function show()
    {
       $postingvacancy = Posting::all();
       
        echo"<pre>";
        print_r($customers->toArray());
        die;

        $data = compact('postingvacancy');
        return view('recentpost')->with($data);
    }*/

    }    