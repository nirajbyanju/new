<?php

namespace App\Http\Controllers;
use App\Models\Popmessage;
use Illuminate\Http\Request;

class popmessagecontroller extends Controller
{
    public function view()
    {
        $postingvacancy = Popmessage::latest()->get();
        $data = compact('postingvacancy');
        return view('backend/page/popmessage')->with($data);
    }
    public function store(Request $request)
    {
        $posting = new Popmessage;
        $posting->description = $request['description'];
        $posting->date = $request['date'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/popmessage', $filename);
            $posting->image = $filename;
        }
        $posting->save();
        return redirect()->back()->with('message','Student Image Upload Successfully');
    }

    public function destory($id){
            $opportunity=Popmessage::find($id)->delete();
            return redirect('popmessageview')->with('success','Deleted');
        }
}
