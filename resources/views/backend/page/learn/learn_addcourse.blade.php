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
                                    <div id="basicwizard">

                                        <ul class="nav nav-pills nav-justified form-wizard-header main-border-main">
                                            <li class="nav-item nav-iteams">
                                                <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2 active">
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

                                        <div class="tab-content b-0 mb-0">
                                            <div class="tab-pane active" id="basic">
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
                                                        <input type="text" name="user_id" hidden value="{{Auth::user()->id}}">
                                                        <input type="text" name="is_admin" hidden value="{{ $authUser->type == 'admin' ? '1' : '0' }}">
                                                        <input type="text" name="date_added" hidden value="{{ now() }}">
                                                        <script>
                                                            // Get references to the checkbox and select elements
                                                            var checkbox = document.getElementById("multiple_courses_checkbox");
                                                            var select = document.getElementById("multi_instructor");
                                                        
                                                            // Add an event listener to the checkbox
                                                            checkbox.addEventListener("change", function () {
                                                                // Toggle the visibility of the select based on the checkbox state
                                                                select.style.display = this.checked ? "block" : "none";
                                                            });
                                                        </script>
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
                                                    <script>
                                                        function previewCourseThumbnail(input) {
                                                            var preview = document.querySelector(".js--image-preview");
                                                            var file = input.files[0];
                                                            var reader = new FileReader();
                                                    
                                                            if (file) {
                                                                reader.readAsDataURL(file);
                                                                reader.onload = function (e) {
                                                                    var image = new Image();
                                                                    image.src = e.target.result;
                                                                    image.onload = function () {
                                                                        if (image.width === 1080 && image.height === 1080) {
                                                                            // Display the image in the preview div
                                                                            preview.innerHTML = '<img src="' + e.target.result + '" alt="Course Thumbnail">';
                                                                        } else {
                                                                            // Reset the input and show an error message
                                                                            input.value = "";
                                                                            preview.innerHTML = "Image must be 600x600 pixels.";
                                                                        }
                                                                    };
                                                                };
                                                            }
                                                        }
                                                    
                                                        // Attach the event listener to the file input
                                                        var courseThumbnailInput = document.getElementById("course_thumbnail");
                                                        courseThumbnailInput.addEventListener("change", function () {
                                                            previewCourseThumbnail(this);
                                                        });
                                                    </script>
                                                    
                                                    
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
        <link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
        <script type="text/javascript" src="{{asset('opcn/js/backend/posting.js')}}"></script>
        <script>
            function navigateWizard(action) {
                var currentTab = $('.tab-pane.active');
                var activeTabLink = $('a[href="#' + currentTab.attr('id') + '"]');
                
                if (action === 'previous') {
                    var prevTab = currentTab.prev('.tab-pane');
                    if (prevTab.length > 0) {
                        currentTab.removeClass('active');
                        prevTab.addClass('active');
                        activeTabLink.removeClass('active');
                        $('a[href="#' + prevTab.attr('id') + '"]').addClass('active');
                    }
                } else if (action === 'next') {
                    var nextTab = currentTab.next('.tab-pane');
                    if (nextTab.length > 0) {
                        currentTab.removeClass('active');
                        nextTab.addClass('active');
                        activeTabLink.removeClass('active');
                        $('a[href="#' + nextTab.attr('id') + '"]').addClass('active');
                    }
                }
            }
        </script>
        

        
        
        
        
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
        <script src="https://cdn.ckbox.io/CKBox/1.2.1/ckbox.js"></script>
                    <script>
                      // This sample still does not showcase all CKEditor 5 features (!)
                      // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
                      CKEDITOR.ClassicEditor.create(document.getElementById("editor2"), {
                          // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
                          toolbar: {
                              items: [
                                  'exportPDF','exportWord', '|',
                                  'findAndReplace', 'selectAll', '|',
                                  'heading', '|',
                                  'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                                  'bulletedList', 'numberedList', 'todoList', '|',
                                  'outdent', 'indent', '|',
                                  'undo', 'redo',
                                  '-',
                                  'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                                  'alignment', '|',
                                  'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                                  'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                                  'textPartLanguage', '|',
                                  'sourceEditing'
                              ],
                              shouldNotGroupWhenFull: true
                          },
                          // Changing the language of the interface requires loading the language file using the <script> tag.
                          // language: 'es',
                          list: {
                              properties: {
                                  styles: true,
                                  startIndex: true,
                                  reversed: true
                              }
                          },
                          // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                          heading: {
                              options: [
                                  { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                  { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                  { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                                  { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                                  { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                                  { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                                  { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                              ]
                          },
                          // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
                          placeholder: 'Welcome to CKEditor 5!',
                          // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
                          fontFamily: {
                              options: [
                                  'default',
                                  'Arial, Helvetica, sans-serif',
                                  'Courier New, Courier, monospace',
                                  'Georgia, serif',
                                  'Lucida Sans Unicode, Lucida Grande, sans-serif',
                                  'Tahoma, Geneva, sans-serif',
                                  'Times New Roman, Times, serif',
                                  'Trebuchet MS, Helvetica, sans-serif',
                                  'Verdana, Geneva, sans-serif'
                              ],
                              supportAllValues: true
                          },
                          // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
                          fontSize: {
                              options: [ 10, 12, 14, 'default', 18, 20, 22 ],
                              supportAllValues: true
                          },
                          // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
                          // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
                          htmlSupport: {
                              allow: [
                                  {
                                      name: /.*/,
                                      attributes: true,
                                      classes: true,
                                      styles: true
                                  }
                              ]
                          },
                          // Be careful with enabling previews
                          // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
                          htmlEmbed: {
                              showPreviews: true
                          },
                          // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
                          link: {
                              decorators: {
                                  addTargetToExternalLinks: true,
                                  defaultProtocol: 'https://',
                                  toggleDownloadable: {
                                      mode: 'manual',
                                      label: 'Downloadable',
                                      attributes: {
                                          download: 'file'
                                      }
                                  }
                              }
                          },
                          // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
                          mention: {
                              feeds: [
                                  {
                                      marker: '@',
                                      feed: [
                                          '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                          '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                          '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                          '@sugar', '@sweet', '@topping', '@wafer'
                                      ],
                                      minimumCharacters: 1
                                  }
                              ]
                          },ckfinder: {
                          uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                          },
                          // The "super-build" contains more premium features that require additional configuration, disable them below.
                          // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
                          removePlugins: [
                              // These two are commercial, but you can try them out without registering to a trial.
                              // 'ExportPdf',
                              // 'ExportWord',
                              'CKBox',
                              'CKFinder',
                              'EasyImage',
                              // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
                              // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
                              // Storing images as Base64 is usually a very bad idea.
                              // Replace it on production website with other solutions:
                              // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
                              // 'Base64UploadAdapter',
                              'RealTimeCollaborativeComments',
                              'RealTimeCollaborativeTrackChanges',
                              'RealTimeCollaborativeRevisionHistory',
                              'PresenceList',
                              'Comments',
                              'TrackChanges',
                              'TrackChangesData',
                              'RevisionHistory',
                              'Pagination',
                              'WProofreader',
                              // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
                              // from a local file system (file://) - load this site via HTTP server if you enable MathType
                              'MathType'
                          ]
                      });
                  </script>
                  
                                            <script>
                                                function appendOutcome() {
                                                    // Create a new div element for the outcome
                                                    var outcomeDiv = document.createElement("div");
                                                    outcomeDiv.classList.add("d-flex", "dd-flex", "mt-2");
                                            
                                                    // Create an input element for the outcome
                                                    var inputElement = document.createElement("input");
                                                    inputElement.type = "text";
                                                    inputElement.classList.add("form-control");
                                                    inputElement.name = "outcomes[]";
                                                    inputElement.placeholder = "Provide outcomes";
                                            
                                                    // Create a remove button for the outcome
                                                    var removeButton = document.createElement("button");
                                                    removeButton.type = "button";
                                                    removeButton.classList.add("btn", "btn-danger", "btn-sm");
                                                    removeButton.innerHTML = '<i class="fa fa-minus"></i>';
                                                    removeButton.onclick = function() {
                                                        // Remove the outcome when the remove button is clicked
                                                        outcomeDiv.remove();
                                                    };
                                            
                                                    // Append the input element and remove button to the outcome div
                                                    outcomeDiv.appendChild(inputElement);
                                                    outcomeDiv.appendChild(removeButton);
                                            
                                                    // Append the outcome div to the "addingsoutcomes" container
                                                    document.getElementById("addingsoutcomes").appendChild(outcomeDiv);
                                                }
                                            
                                                function removeOutcome(button) {
                                                    // Get the parent div of the button (the outcome section)
                                                    var outcomeSection = button.parentElement.parentElement;
                                            
                                                    // Remove the outcome section
                                                    outcomeSection.remove();
                                                }
                                            </script>
                                            <script>
    function appendRequirement() {
        // Create a new div element for the requirement
        var requirementDiv = document.createElement("div");
        requirementDiv.classList.add("d-flex", "dd-flex", "mt-2");

        // Create an input element for the requirement
        var inputElement = document.createElement("input");
        inputElement.type = "text";
        inputElement.classList.add("form-control");
        inputElement.name = "requirements[]";
        inputElement.placeholder = "Provide requirements";

        // Create a remove button for the requirement
        var removeButton = document.createElement("button");
        removeButton.type = "button";
        removeButton.classList.add("btn", "btn-danger", "btn-sm");
        removeButton.innerHTML = '<i class="fa fa-minus"></i>';
        removeButton.onclick = function() {
            // Remove the requirement when the remove button is clicked
            requirementDiv.remove();
        };

        // Append the input element and remove button to the requirement div
        requirementDiv.appendChild(inputElement);
        requirementDiv.appendChild(removeButton);

        // Append the requirement div to the "addingrequired" container
        document.getElementById("addingrequired").appendChild(requirementDiv);
    }

    function removeRequirement(button) {
        // Get the parent div of the button (the requirement section)
        var requirementSection = button.parentElement.parentElement;

        // Remove the requirement section
        requirementSection.remove();
    }
</script>
<script>
    function calculateDiscountPercentage(discountedPrice) {
        // Get the values of price and discounted_price inputs
        var priceInput = document.getElementById("price");
        var discountedPriceInput = document.getElementById("discounted_price");

        // Parse the input values as numbers
        var price = parseFloat(priceInput.value);
        var discountedPrice = parseFloat(discountedPriceInput.value);

        // Calculate the discount percentage
        var discountPercentage = 0;
        if (price > 0 && discountedPrice > 0) {
            discountPercentage = ((price - discountedPrice) / price) * 100;
        }

        // Update the discount percentage in the HTML
        var discountedPercentageElement = document.getElementById("discounted_percentage");
        discountedPercentageElement.textContent = discountPercentage.toFixed(2) + "%";
    }
</script>
                                            
                                            
        
   
@endsection