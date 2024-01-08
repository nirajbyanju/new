@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
    <link rel="stylesheet" href="{{asset('opcn/backend/css/learn.css')}}">
@endpush
@push('script')

@endpush
@push('maintitle')
    <div class="page-header">
    <!-- PAGE-HEADER -->
    <div>
        <h1 class="page-title">Learn Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">learn category</li>
        </ol>
    </div>
@endpush
        <div class="auto-container"> 
    <div class="form-rows">
       
            <div class="col-xl-12">            
                        <div class="rowing-category">
                            <div class="col-md-6 header-title">
                                <h4>Course adding form</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="" class="alignToTitle btn btn-outlines-secondary btn-rounded btn-sm my-1"> <i class=" mdi mdi-keyboard-backspace"></i> Back to course list</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <form class="required-form" action="/course_adding" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div id="basicwizard" class="">
                                        <div class="scrollable-tab">

                                            <ul style="flex-wrap: unset" class="nav nav-pills nav-justified form-wizard-header main-border-main nav-pills-scroll">
                                                <li class="nav-item nav-iteams">
                                                    <a href="#curriculum" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Curriculum</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#academicprogress" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Academic progress</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#zoomlive" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Zoom live class</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#assigment" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Assigment</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#noticeboard" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Noticeboard</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#analytics" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Analytics</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-pen-nib"></i>
                                                        <span class="font_category_learn">Basic</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#requirements" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-bell"></i>
                                                        <span class="font_category_learn">Requirements</span>
                                                     </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#outcomes" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fas fa-minus-circle"></i>
                                                        <span class="font_category_learn">Outcomes</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#pricing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-currency-cny"></i>
                                                        <span class="font_category_learn">Pricing</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="fab fa-medium"></i>
                                                        <span class="font_category_learn">Media</span>
                                                     </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#seo" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-tag-multiple"></i>
                                                        <span class="font_category_learn">Seo</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item nav-iteams">
                                                    <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline"></i>
                                                        <span class="font_category_learn">Finish</span>
                                                     </a>
                                                </li>
                                                <li class="w-100 bg-white pb-3">
                                                    <!--ajax page loader-->
                                                    <div class="ajax_loader w-100">
                                                        <div class="ajax_loaderBar"></div>
                                                    </div>
                                                    <!--end ajax page loader-->
                                                </li>
                                            </ul>
                                        </div>    

                                        <div class="tab-content b-0 mb-0">
                                            <div class="tab-pane active" id="curriculum">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-11">
                                                      <div class="add-curriculum">
                                                        <div class="add-sectioning">
                                                            <a href=""><i class="fas fa-plus"></i> Add Section</a>
                                                        </div>
                                                        <div class="add-sectioning addlessoning">
                                                            <a href=""><i class="fas fa-plus"></i> Add lesson</a>
                                                        </div>
                                                        <div class="add-sectioning">
                                                            <a href=""><i class="fas fa-plus"></i> Add quiz</a>
                                                        </div>
                                                        <div class="add-sectioning">
                                                            <a href=""><i class="fas fa-signal fa-rotate-90"></i>Sort sections</a>
                                                        </div>
                                                      </div>

                                                    @foreach ($sections as $sections)
                                                        <div class="section-tab">
                                                            <div class="cards-body">
                                                                <div class="card-title">
                                                                    <div class="first-card-title">
                                                                        <h5> Section 1:
                                                                            <span>{{$sections->title}}</span>
                                                                        </h5>
                                                                    </div>
                                                                    <div class="second-card-title">
                                                                        <div class="inner-second-card">
                                                                            <div class="sort-lesson">
                                                                                <a href=""><i class="fal fa-signal fa-rotate-90"></i> Sort Lesson</a>
                                                                            </div>
                                                                            <div class="sort-lesson">
                                                                                <a href=""><i class="fal fa-pencil-alt"></i> Sort Lesson</a>
                                                                            </div>
                                                                            <div class="sort-lesson">
                                                                                <a href=""><i class="fal fa-times"></i> Sort Lesson</a>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                                @php
                                                                $lessons = \App\Models\Learn\learn_lesson::where('course_id', $course->id)
                                                                    ->where('section_id', $sections->id)
                                                                    ->get();
                                                                @endphp
                                                        
                                                                @foreach ($lessons as $lesson)
                                                                <div class="clear-fixing">
                                                                    <div class="clear-title-lesson">
                                                                        <div class="lesson-showing-2">
                                                                            <div class="first-lesson-showing-2">
                                                                                <img src="{{asset('opcn\images\resource\learn\video.png')}}" alt="">
                                                                                <span>
                                                                                    Lesson 1 :
                                                                                    
                                                                                </span>
                                                                                <h5>{{$lesson->title}}</h5>   
                                                                            </div>
                                                                            <div class="second-lesson-showing-2">
                                                                                <a href="{{ route('showupdate_lesson', ['id' => $lesson->id]) }}">
                                                                                    <i class="fal fa-pencil-alt"></i>
                                                                                </a>
                                                                                
                                                                                                                                                              
                                                                                <a data-target="#delete-confirm" data-toggle="modal" data-original-title="Delete" data-toggle="tooltip">
                                                                                    <i class="fal fa-times"style="cursor: pointer"></i>
                                                                                </a>
                                                                                
                                                                            </div>                                                              
                                                                        </div>
                                                        
                                                                    
                                                                    </div>
                                                                </div>
                                                                <div class="modal fade" id="delete-confirm" tabindex="-1" role="dialog" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                      <div class="modal-content">
                                                                      <div class="modal-header">
                                                                        <b>Confirmation</b>
                                                        
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        Are you Sure to Posting this item?
                                                                      </div>
                                                                      <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        
                                                                        <a href="{{ url('learn_lessondelete/' . $lesson->id) }}" class="btn btn-danger" >Delete</a>
                                                                        
                                                                        
                                                                      </div>
                                                                      </div>
                                                                    </div>
                                                                  </div> 
                                                                @endforeach                                         
                                                            </div>
                                                        </div>
                                                    @endforeach    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="basic">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-11">
                                                        <input type="hidden" name="course_type" value="general">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="course_title">Course title <span class="required">*</span> </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" id="course_title" name="title" placeholder="Enter course title" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="short_description">Short description</label>
                                                            <div class="col-md-10">
                                                                <textarea name="short_description" id="short_description" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="description">Description</label>
                                                            <div class="col-md-10">
                                                                <textarea name="description" id="editor2" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="category">Category<span class="required">*</span></label>
                                                            <div class="col-md-10">
                                                                <select class="form-control select2" data-toggle="select2" name="category" id="category" required>
                                                                    <option>Select a category</option>
                                                                    @foreach ($category as $category)
                                                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="level">Level</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control select2" data-toggle="select2" name="level" id="level">
                                                                    <option value="beginner">Beginner</option>
                                                                    <option value="advanced">Advanced</option>
                                                                    <option value="intermediate">Intermediate</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="language_made_in">Language made in</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control select2" data-toggle="select2" name="language" id="language_made_in">
                                                                    <option value="english">English</option>
                                                                    <option value="nepali">Nepali</option>
                                                                 </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <div class="offset-md-2 col-md-10">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" name="is_top_course" id="is_top_course" value="1">
                                                                    <label class="custom-control-label" for="is_top_course">Check if this course is top course</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane" id="requirements">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="requirements">Requirements</label>
                                                            <div class="col-md-10">
                                                                <div id="requirement_area">
                                                                    <div class="d-flex mt-2">
                                                                        <div class="flex-grow-1 px-3">
                                                                            <div class="form-groups">
                                                                                <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements">
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <button type="button" class="btn btn-success btn-sm" style="" name="button" onclick="appendRequirement()"> <i class="fa fa-plus"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                    <div id="blank_requirement_field">
                                                                        <div class="d-flex mt-2">
                                                                            <div class="flex-grow-1 px-3">
                                                                                <div class="form-groups">
                                                                                    <input type="text" class="form-control" name="requirements[]" id="requirements" placeholder="Provide requirements">
                                                                                </div>
                                                                            </div>
                                                                            <div class="remove-button">
                                                                                <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeRequirement(this)"> <i class="fa fa-minus"></i> </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="addingrequired">
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="outcomess">Outcomes</label>
                                                            <div class="col-md-10">
                                                                <div id="outcomes_area">
                                                                    <div class="d-flex mt-2">
                                                                        <div class="flex-grow-1 px-3">
                                                                            <div class="form-groups">
                                                                                <input type="text" class="form-control" name="outcomes[]" id="requirements" placeholder="Provide outcomes">
                                                                            </div>
                                                                        </div>
                                                                        <div class="">
                                                                            <button type="button" class="btn btn-success btn-sm" name="button" onclick="appendOutcome()"> <i class="fa fa-plus"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                    <div id="blank_outcome_field">
                                                                        <div class="d-flex mt-2">
                                                                            <div class="flex-grow-1 px-3">
                                                                                <div class="form-groups">
                                                                                    <input type="text" class="form-control" name="outcomes[]" id="requirements" placeholder="Provide outcomes">
                                                                                </div>
                                                                            </div>
                                                                            <div class="">
                                                                                <button type="button" class="btn btn-danger btn-sm" style="margin-top: 0px;" name="button" onclick="removeOutcome(this)"> <i class="fa fa-minus"></i> </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="addingsoutcomes">
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                            
                                            <div class="tab-pane" id="outcomes">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="status">Status</label>
                                                            <div class="col-md-10">
                                                                @if($authUser->type == 'admin')
                                                                    <select class="form-control select2" data-toggle="select2" name="status" id="status">
                                                                        <option value="pending">Pending</option>
                                                                        <option value="unpublish">Unpublish</option>
                                                                        <option value="publish">Publish</option>
                                                                    </select>
                                                                @else
                                                                    <select class="form-control select2" data-toggle="select2" name="status" id="status">
                                                                        <option selected value="pending">Pending</option>
                                                                    </select>
                                                                @endif

                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="course_title">creater Name <span class="required">*</span> </label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="creator" value="{{$authUser->username}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="status">Multi_instructor</label>
                                                            <div class="col-md-10 custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="multiple_courses_checkbox">
                                                                <label class="custom-control-label" for="multiple_courses_checkbox">Check if this Multi_instructor</label>
                                                                <select class="form-control select2" data-toggle="select2" name="multi_instructor" id="multi_instructor" style="display: none;">
                                                                    @foreach ($user as $users)
                                                                        <option selected value="{{$users->username}}">{{$users->username}}</option>
                                                                    @endforeach
                                                                </select>
                                                                
                                                            </div>
                                                        </div>
                                                        <input type="text" name="user_id" hidden value="{{$users->id}}">
                                                        <input type="text" name="is_admin" hidden value="{{ $authUser->type == 'admin' ? '1' : '0' }}">
                                                        <input type="text" name="date_added" hidden value="{{ now() }}">

                                                    </div>
                                                </div>
                                            </div>    
                                            
                                            

                                            <div class="tab-pane" id="pricing">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <div class="offset-md-2 col-md-10">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" name="is_free_course" id="is_free_course" value="1" onclick="togglePriceFields(this.id)">
                                                                    <label class="custom-control-label" for="is_free_course">Check if this is a free course</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="paid-course-stuffs">
                                                            <div class="form-groups row mb-3">
                                                                <label class="col-md-2 col-form-label" for="price">Course price ($)</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" class="form-control" id="price" name="price" placeholder="Enter course course price" min="0">
                                                                </div>
                                                            </div>

                                                            <div class="form-groups row mb-3">
                                                                <div class="offset-md-2 col-md-10">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" name="discount_flag" id="discount_flag" value="1">
                                                                        <label class="custom-control-label" for="discount_flag">Check if this course has discount</label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-groups row mb-3">
                                                                <label class="col-md-2 col-form-label" for="discounted_price">Discounted price ($)</label>
                                                                <div class="col-md-10">
                                                                    <input type="number" class="form-control" name="discounted_price" id="discounted_price" onkeyup="calculateDiscountPercentage(this.value)" min="0">
                                                                    <small class="text-muted">This course has <span id = "discounted_percentage" class="text-danger">0%</span> Discount</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- end tab-pane -->
                                            <div class="tab-pane" id="media">
                                                <div class="row justify-content-center">

                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="course_overview_provider">Course overview provider</label>
                                                            <div class="col-md-10">
                                                                <select class="form-control select2" data-toggle="select2" name="course_overview_provider" id="course_overview_provider">
                                                                    <option value="youtube">Youtube</option>
                                                                    <option value="vimeo">Vimeo</option>
                                                                    <option value="html5">Html5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->

                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="course_overview_url">Course overview url</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control" name="video_url" id="course_overview_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <!-- this portion will be generated theme wise from the theme-config.json file Starts-->
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="course_thumbnail_label">Course thumbnail</label>
                                                            <div class="col-md-10">
                                                                <div class="form_container_photo">
            
                                                                    <div id="upload-photo">
                                                                
                                                                        <input type="file" id="input-file" name="thumbnail" accept="image/*">
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
                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="tab-pane" id="seo">
                                                <div class="row justify-content-center">
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="website_keywords">Meta keywords</label>
                                                            <div class="col-md-10">
                                                                <input type="text" class="form-control bootstrap-tag-input" id="meta_keywords" name="meta_keywords" data-role="tagsinput" style="width: 100%;" placeholder="Write a keyword and then press enter button" ./>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xl-8">
                                                        <div class="form-groups row mb-3">
                                                            <label class="col-md-2 col-form-label" for="meta_description">Meta description</label>
                                                            <div class="col-md-10">
                                                                <textarea name="meta_description" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <div class="tab-pane" id="finish">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                            <h3 class="mt-0">Thank you !</h3>

                                                            <p class="w-75 mb-2 mx-auto">You are just one click away</p>

                                                            <div class="mb-3 mt-3">
                                                                <button type="submit" class="btn btn-primary text-center" onclick="checkRequiredFields()">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>

                                            <ul class="list-inline mb-0 wizard text-center">
                                                <li class="previous list-inline-item">
                                                    <a href="javascript:void(0);" class="btn btn-info" onclick="navigateWizard('previous')"> <i class="mdi mdi-arrow-left-bold"></i> Previous</a>
                                                </li>
                                                <li class="next list-inline-item">
                                                    <a href="javascript:void(0);" class="btn btn-info" onclick="navigateWizard('next')"> Next <i class="mdi mdi-arrow-right-bold"></i></a>
                                                </li>
                                            </ul>

                                        </div>
                                        <!-- tab-content -->
                                    </div>
                                    <!-- end #progressbarwizard-->
                                </form>
                            </div>
                        </div>
                        <!-- end row-->
                    </div>
                    <!-- end card-body-->
                </div>
                <!-- end card-->
            </div>
        </div>
        <div class="learning-add-section">
            <div class="learning-add-sectioning">
                <div class="learn-posting-container" >
                    <div class="learn-add-title">
                        <h5>Add new section</h5>
                        <div class="close-button">
                            <a href=""><i class="far fa-times"></i></a>
                        </div>
                    </div>
                    <form action="/adding_learn_section" method="POST">
                        @csrf
                        <div class="learnings-input-cat">
                            <input type="text" hidden name="course_id" value="{{$course->id}}">
                            <div class="learnings-name">
                                <label for="">Title</label>
                                <input class="learnings-input" name="title" type="text">
                                <small>Provide a section name </small>
                            </div>
                            <div class="learnings-addbutton">
                                <button type="submit">Submit</button>
                            </div>
                        </div>
                        <div class="learnings-button">
                            
                            <div class="learnings-close">
                                <a class="btn-secondarys">Close</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
     
        @include('backend.page.learn.learn_editcourse2')
        <link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
        <script type="text/javascript" src="{{asset('opcn/js/backend/posting.js')}}"></script>
        <script type="text/javascript" src="{{asset('opcn/js/backend/courseaddingform.js')}}"></script>


        
        
       
                                            
                                            
        
   
@endsection