<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs\post;
use App\Models\Blogs\blogscategory;

class Blogcontrollers extends Controller
{
    public function view()
    {   
        $blogs = post::latest()->get();
        $data = compact('blogs');
        return view('backend.page.BlogPost')->with($data);
    }
    public function addnewpost()
    {
        $category = blogscategory::get();
        $data = compact('category');
        return view('backend.page.Blogadd-post')->with($data);
    }
    public function addingpost(Request $request)
    {   
        
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'category' => 'required',
            'status' => 'nullable',
            'content' => 'required',
            'publish_date' => 'required',
            'thumbnail' => 'required',
            

            
        ]);
        
        if ($request->hasFile('media')) {
            $mediaData = []; // Create an array to store media data
            
            foreach ($request->file('media') as $mediaFile) {
                $extension = $mediaFile->getClientOriginalExtension();
                $filename = time() . '_' . uniqid() . '.' . $extension; // Add a unique identifier to the filename
                if ($mediaFile->move('opcn/uploads/blogs/media/', $filename)) {
                    // The file was moved successfully
                    $mediaData[] = $filename;
                }
            }
        
        $posting = new Post; // Assuming Post is your model class for posts
        
        $posting->title = $request->input('title');
        $posting->user_id = $request->input('user_id');
        $posting->author = $request->input('author');
        $posting->tags  = $request->input('tags');
        $posting->category = $request->input('category');
        $posting->status = $request->input('status');
        $posting->content = $request->input('content');
        $posting->publish_date = $request->input('publish_date');
        $posting->tags = $request->input('tags');
            
        if($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('opcn/uploads/blogs/thumbnail/', $filename);
            $posting->thumbnail = $filename;
        }
        
        $posting->media = json_encode($mediaData);
        $posting->save(); // Save the post to the database
        return redirect()->route('blogposts');
    }
    }
    public function blogsdelete($post_id){
        $blogs=post::where('post_id',$post_id)->delete();
        return redirect()->route('blogposts');
    }
    public function blogsupdate($post_id){
        $blogs = Post::where('post_id', $post_id)->first();

    if (is_null($blogs)) {
        return redirect()->route('blogposts');
    } else {
        return view('backend.page.Blogedit-post', compact('blogs'));
    }

    }
    public function blogsupdating(Request $request, $post_id)
    {
        $blog = Post::where('post_id', $post_id)->first();
    
        if (!$blog) {
            return redirect()->route('blogposts')->with('error', 'Blog not found');
        }
    
        $blog->title = $request->input('title');
        $blog->user_id = $request->input('user_id');
        $blog->author = $request->input('author');
        $posting->tags = $request->input('tags');
        $blog->category = $request->input('category');
        $blog->status = $request->input('status');
        $blog->content = $request->input('content');
        $blog->publish_date = $request->input('publish_date');
    
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('opcn/uploads/blogs/thumbnail/', $filename);
            $blog->thumbnail = $filename;
        }
    
        $blog->save();
    
        return redirect()->route('blogposts')->with('success', 'Blog updated successfully');
    }


    public function viewcategory()
    {   
        $category = blogscategory::latest()->get();
        $data = compact('category');
        return view('backend.page.BlogCategories')->with($data);
    }
    public function addingcategory(Request $request)
    {   
    
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);
        
        $posting = new blogscategory; // Assuming Post is your model class for posts

        $posting->name = $request->input('name');
        $posting->slug = $request->input('slug');
        
        $posting->save(); // Save the post to the database
        return redirect()->route('viewcategory');
        
    }
    public function categorydelete($category_id){
        $category=blogscategory::where('category_id',$category_id)->delete();
        return redirect()->route('viewcategory');
    }
    
}