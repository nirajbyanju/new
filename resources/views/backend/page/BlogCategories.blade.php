@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
    <link rel="stylesheet" href="{{asset('opcn/backend/css/blog.css')}}">
@endpush
@push('script')

@endpush
@push('maintitle')
    <div class="page-header">
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Posting Blogs</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posting a blogs</li>
        </ol>
    </div>
@endpush
    
      <div class="auto-container"> 
        <div class="form-rows">
            <div class="header_blogs">
                <div class="header_main_text">
                    <p>Blog</p>
                </div>
                <div class="header_addpost_button">
                    <a href="#" id="show-category">
                        <i class="fal fa-plus"></i>
                        Add Post
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="searching-box-main">
                        <div class="selecting-table">
                            <label>
                                show
                                <select name="table-page" id="">
                                    <option value="">10</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">100</option>
                                </select>
                                entries
                            </label>
                        </div>
                        <div class="search-table">
                            <label class="search-label">
                                Search:
                                <input class="search-box-blogs" type="search">
                            </label>
                        </div>
                    </div>
                    <div class="blogs-post-display">
                    <table class="table table-bordered mb-0">
                            <thead>
                                <tr class="main-title-blogsshow">
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>Name</th>
                                    <th>Slug</th>                          
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach ($category as $category)
                                <tr>
                                    <td class="align-middle text-center">
                                            {{ $loop->iteration }}
                                    </td>
                                    <td class="text-nowrap align-middle">{{$category->name}}</td>
                                    <td class="text-nowrap align-middle"><span>{{$category->slug}}</span></td>
                                    
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <form action="{{ url('categorydelete/'.$category->category_id)}}" method="POST">
                                                @csrf
                                                
                                                 <button class="postingdel" ><i class="fas fa-trash-alt"></i></button>  
                                        </div>
                                        <div class="btn-group align-top">
                                            <button class="postingupdate" type="button" disabled><a  href="{{ url('blogsupdate/'.$category->category_id)}}"><i class="fas fa-user-edit"></i></a></button>
                                           
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach 
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="category-posting-container" >
        <div class="category-add-title">
            <h5>New category</h5>
            <div class="close-button">
                <i class="far fa-times"></i>
            </div>
        </div>
        <form action="/addingcategory" method="POST">
            @csrf
            <div class="category-input-cat">
                <div class="category-name">
                    <label for="">Name</label>
                    <input class="category-input" name="name" type="text">
                </div>
                <div class="category-slug">
                    <label for="slug">Slug</label>
                    <input class="category-input" name="slug" type="text">
                </div>
            </div>
            <div class="category-button">
                <div class="category-addbutton">
                    <button type="submit">Submit</button>
                </div>
                <div class="category-close">
                    <p class="close-category">Close</p>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $("#show-category").click(function (e) {
            e.stopPropagation(); // Prevent the click event from propagating to the document
            $(".category-posting-container").show();
            $(".blurred-background").addClass("blur"); // Add the blur class to the background
        });

        $(".close-category, .close-button").click(function () {
            $(".category-posting-container").hide();
            $(".blurred-background").removeClass("blur"); // Remove the blur class from the background
        });

        // Close the container when clicking outside of it
        $(document).click(function (e) {
            if (!$(e.target).closest(".category-posting-container").length) {
                $(".category-posting-container").hide();
                $(".blurred-background").removeClass("blur"); // Remove the blur class from the background
            }
        });
    });
</script>


    
        
   
@endsection