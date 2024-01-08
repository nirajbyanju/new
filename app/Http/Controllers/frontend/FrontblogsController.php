<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs\post;
use App\Models\UserDetail;
use App\Models\User;
use App\Models\Blogs\blogscategory;
use Illuminate\Support\Facades\DB;
use App\Models\Blogs\blogscomment;
class FrontblogsController extends Controller
{

    public function view($category = null)
{
    if ($category) {
        $blogs = DB::connection('mysql')
            ->table('userdetails')
            ->join('circlenepal_blogs.post', 'userdetails.user_id', '=', 'circlenepal_blogs.post.user_id')
            ->latest('circlenepal_blogs.post.created_at') // Assuming you want to order by post creation date
            ->where('circlenepal_blogs.post.category', '=', $category) // Adding the condition based on the category
            ->select('circlenepal_blogs.post.*', 'userdetails.photo', 'userdetails.bio') // Select the columns you need
            ->get();
    }
    else{
    $blogs = DB::connection('mysql')
    ->table('userdetails')
    ->join('circlenepal_blogs.post', 'userdetails.user_id', '=', 'circlenepal_blogs.post.user_id')
    ->latest('circlenepal_blogs.post.created_at') // Assuming you want to order by post creation date
    ->select('circlenepal_blogs.post.*', 'userdetails.photo', 'userdetails.bio') // Select the columns you need
    ->get();}
    $recent = post::latest()->take(4)->get();
    $category = blogscategory::get();
    $data = compact('blogs', 'recent', 'category');
    return view('frontend.page.blog', $data);
}

public function details($post_id)
{
    $blogs = post::with('comments.replies') // Use lowercase 'post'
    ->where('post_id', $post_id)
    ->first();


    $user_id = $blogs->user_id;
    $userDetails = UserDetail::where('user_id', $user_id)->first();
    $user = User::where('id', $user_id)->first();
    $category = blogscategory::get();
    $recent = Post::latest()->take(4)->get(); 
    $data = compact('blogs', 'category', 'recent', 'userDetails', 'user');
    return view('frontend/page/blog-details', $data);
}








    public function store(Request $request, $postId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = new blogscomment([
            'user_id' => auth()->user()->id, // Assuming you have user authentication
            'post_id' => $postId,
            'comment' => $request->input('comment'),
        ]);

        $comment->save();

        return back()->with('success', 'Comment posted successfully.');
    }

    public function storeReply(Request $request, $commentId)
    {
        $request->validate([
            'reply' => 'required|string',
        ]);
        $reply = new blogscomment([
            'user_id' => auth()->user()->id,
            'post_id' => $request->input('post_id'),
            'prent_id' => $commentId,
            'comment' => $request->input('reply'),
        ]);

        $reply->save();

        return back()->with('success', 'Reply posted successfully.');
    }
    
    public function deletecmt(Request $request, $commentId)
{
    $deletecmt = blogscomment::find($commentId)->delete();
    $deletecmts = blogscomment::where('prent_id', '=', $commentId)->delete();
    return back();
}

}