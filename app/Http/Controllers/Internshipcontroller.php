<?php

namespace App\Http\Controllers;
use App\Models\Internship;
use Illuminate\Http\Request;

class Internshipcontroller extends Controller
{
    public function internshipstore(Request $request)
    {
        /*echo"<pre>";
        print_r($request->all());*/
        $posting = new Internship;
        $posting->tittleofopportunity = $request->input('tittleofopportunity');
        $posting->tags  = $request->input('tags');
        $posting->sponsorby = $request->input('sponsorby');
        $posting->categoryofvacancy  = $request->input('categoryofvacancy');
        $posting->position = $request->input('position');
        $posting->website = $request->input('website');
        $posting->emailid = $request->input('emailid');
        $posting->phonenumber = $request->input('phonenumber');
        $posting->publishdate = $request->input('publishdate');
        $posting->dateline = $request->input('dateline');
        $posting->location = $request->input('location');
        $posting->fundingtype = $request->input('fundingtype');
        $posting->forwhom = $request->input('forwhom');
        $posting->numberofopportunity = $request->input('numberofopportunity');
        $posting->experiencerequirment = $request->input('experiencerequirment');
        $posting->educationrequirement = $request->input('educationrequirement');
        $posting->subtopic = $request->input('subtopic');
        $posting->descriptions = $request->input('descriptions');
        $posting->views = $request->input('views', 0);  
        if($request->hasfile('uploadcover'))
        {
            $file = $request->file('uploadcover');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/opportunity', $filename);
            $posting->uploadcover = $filename;
        }
        if($request->hasfile('uploadlogo'))
        {
            $file = $request->file('uploadlogo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/opportunity/logo/', $filename);
            $posting->uploadlogo = $filename;
        }


        $posting->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');

        
    }


    public function Update(Request $request,$id){
        $posting =Internship::find($id);
        $posting->tittleofopportunity = $request->input('tittleofopportunity');
        $posting->tags  = $request->input('tags');
        $posting->sponsorby = $request->input('sponsorby');
        $posting->categoryofvacancy  = $request->input('categoryofvacancy');
        $posting->position = $request->input('position');
        $posting->website = $request->input('website');
        $posting->emailid = $request->input('emailid');
        $posting->phonenumber = $request->input('phonenumber');
        $posting->publishdate = $request->input('publishdate');
        $posting->dateline = $request->input('dateline');
        $posting->location = $request->input('location');
        $posting->fundingtype = $request->input('fundingtype');
        $posting->forwhom = $request->input('forwhom');
        $posting->numberofopportunity = $request->input('numberofopportunity');
        $posting->experiencerequirment = $request->input('experiencerequirment');
        $posting->educationrequirement = $request->input('educationrequirement');
        $posting->subtopic = $request->input('subtopic');
        $posting->descriptions = $request->input('descriptions');
        if($request->hasfile('uploadcover'))
        {
            $file = $request->file('uploadcover');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/opportunity', $filename);
            $posting->uploadcover = $filename;
        }
        if($request->hasfile('uploadlogo'))
        {
            $file = $request->file('uploadlogo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/opportunity/logo/', $filename);
            $posting->uploadlogo = $filename;
        }

        $posting->update();
        return redirect('opporunitytable')->with('success','Student Image Upload Successfully');
}
}
