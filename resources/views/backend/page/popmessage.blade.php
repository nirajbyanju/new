@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
<link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
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
    .form-popup {
    position: absolute;
    border: 3px solid #f1f1f1;
    z-index: 9;
    background-color: #ffffff;
    position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
  width: 670px; /* You can adjust the width as per your requirement */
  height: 400px;

    
}
.form_container{
    padding: 15px;
}

.form_container_photo{
    width: 260px;
    padding: 10px;
}
.form_input{
    width: 370px;
    padding: 15px;
}
.postingsubmits{
    position: relative;
    width: 150px;
    height: 50px;
    margin: 10px;
    border-radius: 30px;
    text-align: center;
    border: 12px solid;
    border-color: #3854a5;
    background-color: #3854a6;
    color: #ffffff;
}
.close_btn{
    position: absolute;
    top: 10px;
    right: 10px;
}
.close_btn i{
    font-size: 30px;
    color: #DC143C;
    cursor: pointer;
}
#myForm{
    display: none;
}
.open-button{
    width: 151px;
    height: 32px;
    margin: 1px;
    border-radius: 7px;
    border-color: #3854a5;
    background-color: #3854a6;
    color: #ffffff;
    font-size: 14px;
    font-weight: 400;
}

  </style>
@endpush
@push('script')
<script type="text/javascript" src="{{asset('opcn/js/backend/posting.js')}}"></script>
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
            <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="">
                <div class="input-group-append ">
                    <button type="button" class="btn btn-secondary">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header border-bottom-0 p-4">
                    <h2 class="card-title">1 - 30 of 546 users</h2>
                    <div class="page-options d-flex float-right">
                        <button class="open-button" onclick="openForm()">Upload Pop Message</button>
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
                                    <th class="text-center">Deleting</th>
                                    <th class="text-center">Updating</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($postingvacancy as $posting)
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                            <input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{ asset('opcn/uploads/popmessage/' . $posting->image) }}"></td>
                                    <td class="text-nowrap align-middle">{{$posting->description}}</td>
                                    <td class="text-nowrap align-middle"><span>{{Carbon\Carbon::parse($posting->date)->format('j')}} <sup>th</sup>
                                        {{Carbon\Carbon::parse($posting->date)->format('F Y')}}</span></td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <form action="{{ url('delete-popmessage/'.$posting->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                 <button class="postingdel" ><i class="fas fa-trash-alt"></i></button>
                                                

                                            
                                        </div>
                                    </td>
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <button class="postingupdate" type="button" disabled><a  href="#"><i class="fas fa-user-edit"></i></a></button>
                                           
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
    
</div>
</div>


<div class="form-popup" id="myForm">
    <form action="{{url('/')}}/popmessagestore" class="form-container"method="post" enctype="multipart/form-data" class="login-form">
        @csrf
        <div class="form_container">
        <div class="form-row">

            <div class="form_container_photo">
            
                <label for="validationServer01" id="validationServer01">Upload Logo</label>
          <div id="upload-photo">
            
            <input type="file" id="input-file" name="image" accept="image/*">
            <div class="drop-here" id="drop-here">
              <figure id="FIGURE_1">
                <img src="{{asset('opcn/images/icons/upload.png')}}" alt="" id="IMG_2" /> <a href="{{asset('opcn/images/icons/upload.png')}}" id="A_3"><i id="I_4"></i></a>
              </figure>
              <h3 class="H3_7" >
                Browse photo or drop here
              </h3>
              <p class="P_8">
                A photo larger than 400 pixels work best. Max photo size 5 MB.
              </p>
            </div>
              
            <img id="preview-photo" class="upload-logo" ">
            <button id="delete-photo-button" type="button" class="delete-photo-button"><i class="fa fa-trash"></i></button>
                </div>
            </div>

            <div class="form_input"
            <label for="validationServer01" id="validationServer01">Description</label>
            <textarea name="description" class="form-control is-invalid" style="height:140px" id="validationServer02"></textarea>   
            <label for="validationServer01" id="validationServer01">pop Date</label>
            <input type="date" name="date" class="form-control is-invalid" id="validationServer02"  placeholder="Date of Close" value="" >
            
            <button type="submit" class="postingsubmits">Submit</button>
           <div class="close_btn" onclick="closeForm()"><i class="fas fa-times-square"></i></div>

    </div>
</div>

    </form>
  </div>
  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>

@endsection
