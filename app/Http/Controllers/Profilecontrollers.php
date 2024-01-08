<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetail;
class Profilecontrollers extends Controller
{
    public function view($id)
    {
        $user = User::find($id);
        $userDetails = $user->userDetails;
        $data = compact('user', 'userDetails');
        return view('backend/page/profileinfo')->with($data);
}
    public function store(Request $request,$userId){
    $userDetail = Userdetail::where('user_id', $userId)->first();
    $userDetail->company_name = $request->input('company_name');
    $userDetail->industry_type = $request->input('industry_type');
    $userDetail->establishment = $request->input('establishment');
    $userDetail->website = $request->input('website');
    $userDetail->contact_email = $request->input('contact_email');
    $userDetail->phonenumber = $request->input('phonenumber');
    $userDetail->location = $request->input('location');
    $userDetail->bio= $request->input('bio');
    if ($request->hasFile('photo')) {
        $destination = 'opcn/uploads/userphoto/'.$userDetail->photo;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('photo');
        $extension = $file->getClientOriginalExtension();
        $filename = time().'.'.$extension;
        $file->move('opcn/uploads/userphoto/', $filename);
        $userDetail->photo = $filename;
    }


    $userDetail->save();
    return redirect('backend/page/profileinfo')->with('success','Student Image Upload Successfully');


}
}