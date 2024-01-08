<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Learn\learn_category;
use App\Models\Learn\enrollment_courses;
use App\Models\Learn\learn_course;
use App\Models\Learn\learn_section;
use App\Models\Learn\learn_lesson;
use App\Models\User;
class Learncontrollers extends Controller
{
    public function learncategory()
    {   
        $category = learn_category::latest()->get();
        $data = compact('category');
        return view('backend\page\learn\learn_addcatergory')->with($data);
    }
    public function adding_learn_category(Request $request)
    {   
    
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        
        $posting = new learn_category;

        $posting->name = $request->input('name');
        $posting->slug = $request->input('slug');
        
        $posting->save(); // Save the post to the database
        return redirect()->route('learncategory');
        
    }
    public function learn_categorydelete($category_id){
        $category=learn_category::where('id',$category_id)->delete();
        return redirect()->route('learncategory');
    }
    public function course_add()
    {   
        $category=learn_category::latest()->get();
        $user=User::latest()->get();
        $data = compact('category','user');
        return view('backend\page\learn\learn_addcourse')->with($data);
    }

    public function course_addings(Request $request)
    {   
    
        
        
        $posting = new learn_course; // Assuming Post is your model class for posts

        $posting->title = $request->input('title');
        $posting->short_description = $request->input('short_description');
        $posting->description = $request->input('description');
        $posting->category = $request->input('category');
        $posting->level = $request->input('level');
        $posting->language = $request->input('language');
        $posting->is_top_course = $request->input('is_top_course');
        $posting->requirements = implode(', ', $request->input('requirements', []));
        $posting->outcomes = implode(', ', $request->input('outcomes', []));
        $posting->status = $request->input('status');
        $posting->creator = $request->input('creator');
        $posting->multi_instructor = $request->input('multi_instructor');
        $posting->is_free_course= $request->input('is_free_course');
        $posting->price = $request->input('price');
        $posting->discount_flag = $request->input('discount_flag');
        $posting->discounted_price = $request->input('discounted_price');
        $posting->course_overview_provider= $request->input('course_overview_provider');
        $posting->video_url = $request->input('video_url');
        $posting->meta_keywords = $request->input('meta_keywords');
        $posting->meta_description= $request->input('meta_description');
        $posting->user_id = $request->input('user_id');
        $posting->is_admin = $request->input('is_admin');
        $posting->date_added = $request->input('date_added');
        if($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/learn/course', $filename);
            $posting->thumbnail = $filename;
        }        
        $posting->save(); // Save the post to the database
        return redirect()->route('managecourse_view');
        
    }

    public function managecourse_view()
    {   
        $course=learn_course::latest()->get();
        $data = compact('course');
        return view('backend\page\learn\managecourse_view')->with($data);
    }
    
    public function editcourse_view($id)
    {   
        $course = learn_course::find($id);
        if ($course) {
            // Course with the given ID was found
            $category = learn_category::latest()->get();
            $user = User::latest()->get();
            $section = learn_section::where('course_id', $id)->get();
            $sections = learn_section::where('course_id', $id)->get();
        
            $data = compact('course', 'category', 'user', 'section' , 'sections');
            
            return view('backend.page.learn.learn_editcourse', $data);
        } else {

        }
    }

    public function coupons_view()
    {   
        return view('backend\page\learn\learn_addcourse');
    }

    public function adding_learn_section(Request $request)
    {    // Assuming Post is your model class for posts
        $section = new learn_section();
        $section->title = $request->input('title');
        $section->course_id = $request->input('course_id');
        $section->save(); // Save the post to the database
        return back();
    }


    public function adding_learn_lesson(Request $request)
    {    // Assuming Post is your model class for posts

        $lesson = new learn_lesson();
        $lesson->title = $request->input('title');
        $lesson->duration = $request->input('duration');
        $lesson->course_id = $request->input('course_id');
        $lesson->section_id = $request->input('section_id');
        $lesson->lesson_type = $request->input('lesson_type');
        $lesson->video_url = $request->input('video_url');
        $lesson->document_type = $request->input('document_type');
        $lesson->iframe_upload = $request->input('iframe_upload');
        $lesson->summary = $request->input('summary');
        $lesson->date_added = $request->input('date_added') ?: now();
        $lesson->last_modified = $request->input('last_modified');
        $lesson->is_free = $request->input('is_free') ?? 0;
        $lesson->order = $request->input('order') ?? 0;
        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('opcn/learn/lesson/video/', $filename);
            $lesson->video_file = $filename;
        }
        if ($request->hasFile('document_upload')) {
            $file = $request->file('document_upload');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('opcn/learn/lesson/document_file/', $filename);
            $lesson->document_upload = $filename;
        }

        $lesson->save(); // Save the lesson to the database
        return back();
        
}

public function learn_lessondelete($id){
    $lesson=learn_lesson::find($id)->delete();
    return back();
}

public function showupdate_lesson($id)
{
    $lesson = learn_lesson::find($id);
    $course_id = $lesson->course_id;
    $section = learn_section::where('course_id', $course_id)->get();
    $data = compact('lesson', 'section');
    return view('backend.page.learn.learn_updatelesson', $data);
    
}



public function updating_learn_lesson(Request $request, $lesson_id)
    {   
        $lesson = learn_lesson::where('id', $lesson_id)->first();
        $lesson->title = $request->input('title');
        $lesson->duration = $request->input('duration');
        $lesson->course_id = $request->input('course_id');
        $lesson->section_id = $request->input('section_id');
        $lesson->lesson_type = $request->input('lesson_type');
        $lesson->video_url = $request->input('video_url');
        $lesson->document_type = $request->input('document_type');
        $lesson->iframe_upload = $request->input('iframe_upload');
        $lesson->summary = $request->input('summary');
        if ($request->has('date_added')) {
            $lesson->date_added = $request->input('date_added');
        }
        $lesson->last_modified = $request->input('last_modified') ?: now();
        $lesson->is_free = $request->input('is_free') ?? 0;
        $lesson->order = $request->input('order') ?? 0;
        if ($request->hasFile('video_file')) {
            $file = $request->file('video_file');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('opcn/learn/lesson/video/', $filename);
            $lesson->video_file = $filename;
        }
        if ($request->hasFile('document_upload')) {
            $file = $request->file('document_upload');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('opcn/learn/lesson/document_file/', $filename);
            $lesson->document_upload = $filename;
        }

        $lesson->update(); // Save the lesson to the database
        return redirect()->route('editcourse_view', [$lesson->course_id])->with('success', 'Lesson updated successfully');

}
        




}