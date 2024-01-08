@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')

  <style>
    
    .auto-container{
       padding-left: 4%;
       padding-right: 5%;
    }
    .page-titles {
    font-size: 20px; 
    font-weight: 600;
    position: relative;
    margin: 0 0 0.2rem;}

    .postingupdate{
        padding: 0; 
        margin: 0; border: none;
        background-color: transparent !important;
         }
         .postingupdate i{
            color: #119DA4;
            font-size: 25px;
         }
    .postingdel{
        padding: 0; 
        margin: 0; border: none;
        background-color: transparent !important;
         }
    .postingdel i{
            color: #DC143C;
            font-size: 25px;
         }
    
    .postingdel i:hover, .postingupdate i:hover{
        color: #3854a5;
    }
    .submit_btn{
        display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    height: 38px;
    font-size: .875rem;
    line-height: 1.6;
    color: #000!important;
    background-color: #f1f1f9;
    background-clip: padding-box;
    border: 1px solid #d8dde4;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    border-radius: 5px;
    color: #99c1b2;
    opacity: 1;
    }
    .selection_btn{
        padding-top:20px;
    }
    .selection_btn form label{
        font-size: 15px;
        font-weight: 500;
        text-align: center!important;
        padding: ;
    }
  </style>
@endpush
@push('script')
    <script src="{{ asset('js/custom.js') }}"></script>
@endpush
@push('maintitle')
<div class="page-header">
  <!-- PAGE-HEADER -->
  <div>
    <h1 class="page-titles">Posting Opporunitity</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active" aria-current="page">Post a Job</li>
    </ol>
</div>

@endpush


    <div class="auto-container">
        <div class="col-lg-12 col-xl-12">
            <div class="selection_btn">
                <form action="{{ url('/opporunitytable') }}" method="get">
                    <div style="display: flex;">
                        <label for="type">Type:</label>
                        <div class="form-group" style="margin-right: 10px;">
                            <select name="type" id="type" class="form-control">
                                <option value="All">All</option>
                                <option value="Scholarships">Scholarships</option>
                                <option value="Internships">Internships</option>
                                <option value="Entrepreneurship">Entrepreneurship</option>
                                <option value="Grants">Grants</option>

                            </select>
                        </div>
                        <div class="form-group">
                        <button type="submit" class="submit_btn">Filter</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom-0 p-4">
                    <h2 class="card-title">1 - 30 of 546 users</h2>
                    <div class="page-options d-flex float-right">
                        <select class="form-control custom-select w-auto">
                            <option value="asc">Latest</option>
                            <option value="desc">Oldest</option>
                        </select>
                    </div>
                </div>
                <div class="e-table px-5 pb-5">
                    <div class="table-responsive table-lg">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th  class="text-center">

                                    </th>
                                    <th class="text-center">Photo</th>
                                    <th >Name of Company</th>
                                    <th>Publish Date</th>
                                    <th>Position</th>
                                    <th>Category</th>
                                    <th class="text-center">Deleting</th>
                                    <th class="text-center">Updating</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($postingvacancy as $opportunity)
                               
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                            <input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{asset('opcn/uploads/opportunity/Logo/' .$opportunity->uploadlogo)}}"></td>
                                    <td class="text-nowrap align-middle">{{$opportunity->tittleofopportunity}}</td>
                                    <td class="text-nowrap align-middle"><span>{{Carbon\Carbon::parse($opportunity->publishdate)->format('j')}} <sup>th</sup>
                                        {{Carbon\Carbon::parse($opportunity->publishdate)->format('F Y')}}</span></td>
                                    <td class="text-nowrap align-middle"><span>{{$opportunity->position}}</span></td>
                                    <td class="text-nowrap align-middle">{{$opportunity->type}}</td>

                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <form action="{{ url('delete-opporunity', ['type' => $opportunity->type, 'id' => $opportunity->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                 <button class="postingdel" ><i class="fas fa-trash-alt"></i></button>
                                                

                                            
                                        </div>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <button class="postingupdate" type="button" disabled><a  href="{{ url('update-opporunity', ['type' => $opportunity->type, 'id' => $opportunity->id]) }}"><i class="fas fa-user-edit"></i></a></button>
                                           
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










