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
                    <a href="{{Route('addnewpost')}}">
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
                                    <th>
                                        #
                                    </th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th >Category</th>
                                    <th >Thumbnail <i class="fal fa-long-arrow-up"><i class="fal fa-long-arrow-down"></i></i></th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Order</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td class="align-middle text-center">
                                            {{ $loop->iteration }}
                                    </td>
                                    <td class="text-nowrap align-middle">{{$blogs->title}}</td>
                                    <td class="text-nowrap align-middle"><span>{{Carbon\Carbon::parse($blogs->publish_date)->format('j M Y')}}
                                        </span></td>
                                    <td class="text-nowrap align-middle"><span>{{$blogs->category}}</span></td>
                                    <td class="align-middle text-center"><img alt="image" style="width: 130px;" src="{{asset('opcn/uploads/blogs/thumbnail/' .$blogs->thumbnail)}}"></td>
                                    <td class="text-center align-middle">@if ($blogs->status == 'publish')
                                        <i class="fas fa-thumbs-up"></i>
                                    @else
                                        <i class="fas fa-pause-circle"></i>
                                    @endif
                                        </td>

                                    <td class="text-center align-middle">
                                        <i class="fas fa-long-arrow-up"></i> <i class="fas fa-long-arrow-down"></i>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <form action="{{ url('blogsdelete/'.$blogs->post_id)}}" method="POST">
                                                @csrf
                                                
                                                 <button class="postingdel" ><i class="fas fa-trash-alt"></i></button>  
                                        </div>
                                        <div class="btn-group align-top">
                                            <button class="postingupdate" type="button" disabled><a  href="{{ url('blogsupdate/'.$blogs->post_id)}}"><i class="fas fa-user-edit"></i></a></button>
                                           
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

        
   
@endsection