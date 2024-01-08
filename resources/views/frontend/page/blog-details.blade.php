@extends('frontend.layouts.layout') 
@section('title', $blogs->title)

@section('content')
<style>
    .profile-image {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: #512DA8;
        font-size: 35px;
        color: #fff;
        text-align: center;
        line-height: 80px;
        margin: 17px 0;
}
    .blogs-function{
        display: flex;  
    }
    .blogs-functiionable{
        margin-left: 366px;
    }
    .blogs-functiionable a{
        margin-left: 9px;
        color: #1c4980;
    }
    .blogs-functiionable a:hover{
        color: #c4161c;
    }
    .blogs-comment-box form button{
        text-decoration: none;
        color: #1c4980;
        background: none;
    }
    .creator-details{
        display: none;
        max-width: 450px;
        padding: 32px;
        border-radius: 16px;
        min-height: 240px;
        z-index: 9999999!important;
        top: 15%;
        position: fixed;
        left: 0;
        right: 0;
        background-color: #fafafa;
        max-height: 70%;
        width: 55%;
        margin: auto;
        overflow-y: auto;
        will-change: top,opacity;
    }
    .main-creator-details{
        align-items: flex-end;
        display: flex;
        margin-bottom: 15px;
    }
    .main-creator-photo{
        border-radius: 0;
        margin-bottom: 10px;
        height: auto;
        width: 96px;
    }
    .main-creator-title{
        margin-left: 12px;
        width: calc(100% - 108px); 
    }
    .main-creator-title h3{
        font-size: 18px;
        font-weight: 600;
        line-height: 19px;
        margin-bottom: 6px;
    }
    .main-creator-bio p{
        font-size: 13px;
        color: #1c4980;
        line-height: 19px;
        font-weight: 400;
        text-align: justify;
    }
    .close-button{
        position: absolute;
        top: 30px;
        right: 60px;
        cursor: pointer;
        color: #787878;
    }
    .close-button i{
        font-size: 16px;
        font-weight: 500;
        color: 
    }
</style>

<!-- sidebar-page-container -->
<section class="sidebar-page-containers">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="blog-details-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <figure class="image-box" style="height: 400px">
                                <img src="{{asset('opcn/uploads/blogs/thumbnail/' .$blogs->thumbnail)}}"  alt="">
                            </figure>
                            <div class="lower-content">
                                <figure class="admin-thumb"><img src="{{ asset('opcn/uploads/userphoto/' . $userDetails->photo) }}" style="width: 70px;height: 70px;" alt=""></figure>
                                <span class="category">{{$blogs->category}}</span>
                                <h2>{{$blogs->title}}</h2>
                                <span class="post-info">By <a href="" id="show-creator-details">{{$blogs->author}}</a> - {{Carbon\Carbon::parse($blogs->publish_date)->format('F j')}},{{Carbon\Carbon::parse($blogs->publish_date)->format('Y')}}</span>
                                <div class="text">
                                    <div id="editor">
                                        @if ($blogs)
                                            {!! $blogs->content !!}
                                        @else
                                            <!-- Default content if none is found -->
                                            <p>No content available.</p>
                                        @endif
                                    </div>
                                    

                                    </div>
                                
                                <div class="text">
                                    <h3>Two Most-Cited Reason</h3>
                                    @if (!empty($blogs->media))
                                    <div class="media-gallery">
                                        @foreach (json_decode($blogs->media) as $filename)
                                            <img src="{{ asset('opcn/uploads/blogs/media/' . $filename) }}"  style="width: 200px; margin: 5px;transition: 0.5s all ease;
                                            border-radius: 10px;" alt="Uploaded Image">
                                        @endforeach
                                    </div>
                                @endif
                                   </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="comment-box">
                        <div class="group-title">
                            <h3>Comments</h3>
                        </div>
                        @if(auth()->check())
                            <div class="comments-form-area">
                                <div class="group-title">
                                    <h3>Leave a Review</h3>
                                </div>
                                <form method="post" action="{{ url('/commentstore/'.$blogs->post_id) }}" method="post" enctype="multipart/form-data" id="contact-form" class="default-form">
                                    @csrf 
                                    <div class="row clearfix">
                                        
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <textarea name="comment"></textarea>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                            <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @else
                        <div class="group-title" style=" margin-top: -30px;">
                            <h5>Please log in for your valuable review and comment</h5>
                        </div>
                        @endif
                        
                        
                        @foreach($blogs->comments->where('prent_id', null) as $comment)
                                <div class="comment">
                                    <figure class="thumb-box">
                                        <?php 
                                                $username = \App\Models\User::find($comment->user_id);
                                                $userphoto = \App\Models\UserDetail::where('user_id', $comment->user_id)->first();

                                                $user_full_name = $username->firstname . ' ' . $username->lastname;

                                                
                                                $full_name_arr = explode(" ", $user_full_name); 
                                                $full_name_arr_end = end($full_name_arr); 
                                                $firstWord = !empty($full_name_arr[0])?$full_name_arr[0]:''; 
                                                $lastWord = !empty($full_name_arr_end[0])?$full_name_arr_end[0]:''; 
                                                $charF = !empty(mb_substr($firstWord, 0, 1))?mb_substr($firstWord, 0, 1):''; 
                                                $charL = !empty(mb_substr($lastWord, 0, 1))?mb_substr($lastWord, 0, 1):''; 
                                                $shortChar = $charF.$charL; 
                                                
                                                ?> 
                                                
                                        @if($userphoto->photo)
                                            <img class="profile-image" src="{{ asset('opcn/uploads/userphoto/'.$userphoto->photo) }}" alt="User Image">
                                        @else
                                            <div class="profile-image">
                                                <?php echo trim($shortChar); ?>
                                            </div> 
                                        @endif  
                                    </figure>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <h5> 
                                                {{ $username->firstname }} {{ $username->lastname }}
                                            </h5>
                                            <span class="post-date">{{ $comment->created_at->format('F d, Y') }}</span>
                                        </div>
                                        <p>{{ $comment->comment }}</p>

                                        <div class="blogs-function">
                                            <div class="blogs-function">
                                                @if(auth()->check())
                                                    <div class="blogs-function">
                                                        <a href="#" class="reply-btn" onclick="toggleCommentBox(event, {{ $comment->id }})">
                                                            <i class="fas fa-share"></i>Reply
                                                        </a>
                                                    </div>
                                                @endif
                                                @if (Auth::check() && Auth::user()->id == $comment->user_id)
                                                    <div class="blogs-functiionable">
                                                        <a href="#" onclick="toggleEditBox(event, {{ $comment->id }})">Edit</a>
                                                        <a href="{{ url('/deletecmt/'.$comment->id) }}">Delete</a>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="blogs-comment-box" style="display:none;" id="comment-box-{{ $comment->id }}">
                                            <form action="{{ url('/replystore/'.$comment->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="post_id" value="{{ $blogs->post_id }}">
                                                <textarea name="reply" placeholder="Please type your comment" cols="30" rows="10" style="height: 20px;width: 600px;border-bottom: .5px solid #a3a5a8;"></textarea>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>

                                        <div class="blogs-update-box" style="display:none;" id="update-box-{{ $comment->id }}">
                                            <form action="{{ url('/updatecmt/'.$comment->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <textarea name="comment" placeholder="Please type your comment" cols="30" rows="10" style="height: 20px;width: 600px;border-bottom: .5px solid #a3a5a8;">{{ $comment->comment }}</textarea>
                                                <button type="submit">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>


                            <script>
                                function toggleCommentBox(event, commentId) {
                                    event.preventDefault();
                                    document.querySelector(`#comment-box-${commentId}`).style.display = 'block';
                                    document.querySelector(`#update-box-${commentId}`).style.display = 'none';
                                }

                                function toggleEditBox(event, commentId) {
                                    event.preventDefault();
                                    document.querySelector(`#comment-box-${commentId}`).style.display = 'none';
                                    document.querySelector(`#update-box-${commentId}`).style.display = 'block';
                                }
                            </script>

                            @foreach($comment->replies as $reply)
                                <div class="comment replay-comment">
                                    <figure class="thumb-box">
                                        <?php 
                                                $usernames = \App\Models\User::find($reply->user_id);
                                                $userphotos = \App\Models\UserDetail::where('user_id', $reply->user_id)->first();

                                                $user_full_names = $username->firstname . ' ' . $username->lastname;

                                                
                                                $full_name_arr = explode(" ", $user_full_names); 
                                                $full_name_arr_end = end($full_name_arr); 
                                                $firstWord = !empty($full_name_arr[0])?$full_name_arr[0]:''; 
                                                $lastWord = !empty($full_name_arr_end[0])?$full_name_arr_end[0]:''; 
                                                $charF = !empty(mb_substr($firstWord, 0, 1))?mb_substr($firstWord, 0, 1):''; 
                                                $charL = !empty(mb_substr($lastWord, 0, 1))?mb_substr($lastWord, 0, 1):''; 
                                                $shortChar = $charF.$charL; 
                                                
                                                ?> 
                                                
                                        @if($userphotos->photo)
                                            <img class="profile-image" src="{{ asset('opcn/uploads/userphoto/'.$userphotos->photo) }}" alt="User Image">
                                        @else
                                            <div class="profile-image">
                                                <?php echo trim($shortChar); ?>
                                            </div> 
                                        @endif  
                                    </figure>
                                    <div class="comment-inner">
                                        <div class="comment-info clearfix">
                                            <h5>
                                                @php
                                                    $username= \App\Models\User::find($reply->user_id);
                                                @endphp
                                            {{$username->firstname}} {{$username->lastname}}
                                            </h5>
                                            <span class="post-date">{{ $reply->created_at->format('F d, Y') }}</span>
                                        </div>
                                        <p>{{ $reply->comment}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                        
                    </div>
                    {{-- <div class="comments-form-area">
                        <div class="group-title">
                            <h3>Leave a Review</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                        </div>
                        <form method="post" action="sendemail.php" id="contact-form" class="default-form"> 
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="username" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email Address</label>
                                    <input type="email" name="email" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="phone" required="">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Subject</label>
                                    <input type="text" name="subject" required="">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Review Title*</label>
                                    <textarea name="message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn-one" type="submit" name="submit-form">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar default-sidebar">
                    <div class="search-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <form action="blog-details.html" method="post" class="search-form default-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search" required="">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="post-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Recent Posts</h3>
                        </div>
                        <div class="post-inner">
                            @foreach ($recent as $recents)
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html"><img src="{{asset('opcn/uploads/blogs/thumbnail/' .$recents->thumbnail)}}" alt=""></a></figure>
                                    <h5><a href="{{url('frontblogs-details/'.$recents->post_id)}}">{{$recents->title}}</a></h5>
                                    <p style="font-size: 10px;">{{Carbon\Carbon::parse($recents->publish_date)->format('F j')}},{{Carbon\Carbon::parse($recents->publish_date)->format('Y')}}</p>
                                </div>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="sidebar-category sidebar-widget">
                        <div class="widget-title">
                            <h3>Category</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list">
                                @foreach ($category as $category)
                                    <li><a href="{{url('frontblogs-view/'.$category->name)}}">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    <div class="tags-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Used Tags</h3>
                        </div>
                        <div class="widget-content">
                            @if($blogs->tags)
                                <ul class="tags-list clearfix">
                                    <?php
                                    $tags = "{$blogs->tags}";

                                    // Split the paragraph into lines
                                    $lines = explode(",", $tags);

                                    // Create the HTML ul element
                                    $tagss = '';
                                    foreach ($lines as $line) {
                                        $tagss .= '<li><a>' . $line . '</a></li>';                                 }
                                    $tagss .= '';

                                    // Close the database connection
                                    
                                    ?>
                                        <?php echo $tagss; ?>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="creator-details" style="display: none">
        <div class="main-creator-details">
            <div class="close-button">
                <i class="far fa-times"></i>
            </div>
            <div class="main-creator-photo">
                <img src="{{ asset('opcn/uploads/userphoto/' . $userDetails->photo) }}" alt="">
            </div>
            <div class="main-creator-title">
                <h3>{{$user->username}}</h3>
                <p>{{$userDetails->industry_type}}</p>
            </div>
        </div>
        <div class="main-creator-bio">
            <p>{{$userDetails->bio}}</p>
        </div>
    </div>
    
</section>
<script>
    // Function to toggle the display of show-creator-details and overlay
    function toggleCreatorDetails() {
        var creatorDetails = document.querySelector(".creator-details");
        var overlay = document.getElementById("overlay");

        if (creatorDetails.style.display === "none" || creatorDetails.style.display === "") {
            creatorDetails.style.display = "block";
            overlay.style.display = "block";
        } else {
            creatorDetails.style.display = "none";
            overlay.style.display = "none";
        }
    }

    // Open show-creator-details when the link is clicked
    document.getElementById("show-creator-details").addEventListener("click", function(e) {
        e.preventDefault(); // Prevent the default link behavior
        toggleCreatorDetails();
    });

    // Close show-creator-details when the close-button is clicked
    document.querySelector(".close-button").addEventListener("click", function() {
        toggleCreatorDetails();
    });

    // Close show-creator-details when clicking outside of it
    document.addEventListener("click", function(e) {
        var creatorDetails = document.querySelector(".creator-details");
        if (!e.target.closest(".creator-details") && !e.target.matches("#show-creator-details")) {
            // Clicked outside of creator-details and not on the show-creator-details link
            creatorDetails.style.display = "none";
            document.getElementById("overlay").style.display = "none";
        }
    });
</script>





@endsection