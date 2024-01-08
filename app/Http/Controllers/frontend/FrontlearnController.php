<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\learn_course;
use App\Models\Learn\enrollment_courses;
use App\Models\Learn\learn_section;
use App\Models\Learn\learn_lesson;
use App\Models\User;
use App\Models\UserDetail;
use DB;

class FrontlearnController extends Controller
{
    public function view()
    {
        $posting=learn_course::latest()->take(6)->get();
        $data = compact('posting');
        return view('frontend/page/Learn')->with($data); 
    }

    
    public function coursesintro($course_id)
    {   
        $posting = learn_course::find($course_id);
        
        if ($posting) {
            $userid = $posting->user_id; // Get the user_id associated with the course
            $userdetails = User::find($userid); // Fetch user details
            $userBioId = $userdetails->id;
            $userbio = UserDetail::where('user_id', $userBioId)->first();
            $enrollcheck = enrollment_courses::where('course_id', $course_id)
            ->where('user_id', auth()->id())
            ->first();

        } else {
            // Handle the case where the posting with the specified ID is not found
            abort(404);
        }
        
        $data = compact('posting', 'userdetails', 'userbio','enrollcheck');
        // dd($data); // Add semicolon here
        
        return view('frontend/page/learn/learn_coursesintro')->with($data);
    }
    
    

public function enroll(Request $request, $courseId, $userId)
{
    $existingEnrollment = enrollment_courses::where('course_id', $courseId)
                                           ->where('user_id', $userId)
                                           ->first();

    if ($existingEnrollment) {
        // Enrollment already exists, do not enter duplicate
        $lessonshowing = learn_course::where('id', $courseId)->get();
        $lessonshowings = learn_course::first();
        $data = compact('lessonshowing','lessonshowings');
        return view('frontend.page.learn.learn_coursecapture')->with($data);
    }

    $enrollmentCourse = new enrollment_courses();

    $enrollmentCourse->course_id = $courseId;
    $enrollmentCourse->user_id = $userId;

    $enrollmentCourse->save();

    $lessonshowing = learn_course::where('id', $courseId)->first(); // Fetch a single instance
    $lessonshowings = learn_course::first();
    $data = compact('lessonshowing','lessonshowings');
    return view('frontend.page.learn.learn_coursecapture')->with($data);
}
public function lessonshow($courseId)
{
    $section = learn_section::where('course_id', $courseId)->get();
    $course = learn_course::first();
    $data = compact('section','course');
    return view('frontend.page.learn.learn_coursecapture')->with($data);
}


    public function show($id)
    {
       
        $record = learn_lesson::findOrFail($id);
        return response()->json($record);
    }

}
