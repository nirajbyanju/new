@extends('frontend.layouts.layout') 
@section('title', 'Blogs')
@section('content')



<!-- sidebar-page-container -->
<section class="sidebar-page-containers">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        @foreach ($blogs as $blog)
                        <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    <figure class="image-box image-boxing">
                                        <img src="{{asset('opcn/uploads/blogs/thumbnail/' .$blog->thumbnail)}}"
                                        <a href="{{url('blog-details')}}"></a>
                                    </figure>
                                    <div class="lower-content">
                                        
                                        <figure class="admin-thumb"><img id="user-photo" src="{{ asset('opcn/uploads/userphoto/' . $blog->photo) }}" style="width: 70px;height: 70px;" alt="Creator Photo"></figure>
                                        
                                        <span class="category">{{$blog->category}}</span>
                                        <h3><a href="{{url('frontblogs-details/'.$blog->post_id)}}">{{$blog->title}}</a></h3>
                                        <p>
                                            
                                            @if ($blog)
                                            @php
                                                $content = strip_tags($blog->content); // Remove HTML tags
                                                $words = str_word_count($content, 2); // Get an array of words
                                                $limitedContent = implode(' ', array_slice($words, 0, 15)); // Limit to 150 words
                                            @endphp
                                            {!! $limitedContent !!}
                                        @else
                                            <!-- Default content if none is found -->
                                            <p>No content available.</p>
                                        @endif
                                            </p>

                                        <span class="post-info">By <a href="{{url('blog-details')}}">{!! $blog->author !!}</a> -{{Carbon\Carbon::parse($blog->publish_date)->format('F j')}},{{Carbon\Carbon::parse($blog->publish_date)->format('Y')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        @endforeach  
                    </div>
                    <div class="pagination-wrapper centred">
                        <ul class="pagination clearfix">
                            <li><a href="category-details.html"><i class="far fa-angle-left"></i>Prev</a></li>
                            <li><a href="category-details.html" class="current">01</a></li>
                            <li><a href="category-details.html">02</a></li>
                            <li><a href="category-details.html">03</a></li>
                            <li><a href="category-details.html">Next<i class="far fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="blog-sidebar default-sidebar">
                    <div class="search-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Search</h3>
                        </div>
                        <form action="blog.html" method="post" class="search-form default-form">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search" required="">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
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
                   
                    {{-- <div class="tags-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Popular Tags</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a href="{{url('blog-details')}}">Real Estate</a></li>
                                <li><a href="{{url('blog-details')}}">HouseHunting</a></li>
                                <li><a href="{{url('blog-details')}}">Architecture</a></li>
                                <li><a href="{{url('blog-details')}}">Interior</a></li>
                                <li><a href="{{url('blog-details')}}">Sale</a></li>
                                <li><a href="{{url('blog-details')}}">Rent Home</a></li>
                                <li><a href="{{url('blog-details')}}">Listing</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- sidebar-page-container end -->
@endsection