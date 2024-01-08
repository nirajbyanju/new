@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
  <link rel="stylesheet" href="{{asset('opcn/tag/inputTags.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
  <link rel="stylesheet" href="{{asset('opcn/css/backend/dropdown.css')}}"> 
  <style>
    .auto-container{
       padding-left: 5%;
       padding-right: 7%;
       padding-top: 3%;
       padding-bottom: 2%;
    }
    #validationServer02 option{
  color: grey;
  padding: 0;
  line-height: 48px;
  font-size: 20px; 
  border: 10px;
  min-height: 1.2em;
}
select {
    appearance: none;
}
#jobdown{
  position: absolute;
    top: 72%;
    left: 326px;
    color: #ccc;
    font-size: 19px;
    pointer-events: none;
    transform: translateY(-50%);
    color: #3854a5;

}
  </style>
  @endpush
  @push('script')
  <script type="text/javascript" src="{{asset('opcn/js/backend/updating.js')}}"></script>
  <script type="text/javascript" src="{{asset('opcn/tag/index.js')}}"></script>
  <script>
      const form = document.getElementById('myForm');
      const postingType = '{{$posting->type}}';

      // Set the form action based on the posting type
      if (postingType === 'scholarships') {
        form.action = '{{url('scholarshipupdate/'.$posting->id)}}';
      } else if (postingType === 'grants') {
        form.action = '{{url('grantsupdate/'.$posting->id)}}';
      }else if (postingType === 'internship') {
        form.action = '{{url('internshipupdate/'.$posting->id)}}';
      }else if (postingType === 'entreneurship') {
        form.action = '{{url('entreneurshipupdate/'.$posting->id)}}';
      }
  </script>
  @endpush
  @push('maintitle')
  <div class="page-header">
    <!-- PAGE-HEADER -->
    <div>
      <h1 class="page-title">Posting Opporunitity</h1>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Post a Job</li>
      </ol>
  </div>
  @endpush

    <div class="auto-container"> 
      <div class="form-row">

        <div class="col-md-4 mb-3 form-icon">
          <label for="validationServer01" id="validationServer01">Opportunity Type</label>
          <input type="text" name="type" class="form-control is-invalid" id="validationServer02" disabled placeholder="Position" value="{{$posting->type}}" required  oninput="checkInput(this, 1)">
          <i class='fas fa-user'></i>
        </div>
</div>
        <form id="myForm" action="" method="POST" enctype="multipart/form-data" class="login-form">
            @csrf
            @method('PUT')
            <div class="form-row">
              <div class="col-md-12 mb-3 form-icon">
                <label for="validationServer01" id="validationServer01" >Tittle of Opportunity</label>
            <input type="text" name="tittleofopportunity" class="form-control is-invalid" id="validationServer02" placeholder="Tittle of Opportunity" value="{{$posting->tittleofopportunity}}" oninput="checkInput(this, 1)">
            <i class="fas fa-building"></i> 
          </div>
            </div>
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationServer01" id="validationServer01">Upload Logo</label>
          <div id="upload-photo">
            
            <input type="file" id="input-file" name="uploadlogo" accept="image/*">
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
              
            <img id="preview-photo" class="upload-logo" src="{{ asset('opcn/uploads/opportunity/logo/' .$posting->uploadlogo) }}">
            <button id="delete-photo-button" type="button" class="delete-photo-button"><i class="fa fa-trash"></i></button>
          </div>
        </div>
          <div class="col-md-9 mb-3">
            <label for="validationServer01" id="validationServer01">Upload Cover Photo</label>
            <div id="upload-photo2">
              <input type="file" id="input-file2" name="uploadcover" accept="image/*">
              <div class="drop-here" id="drop-here2">
                <figure id="FIGURE_2">
                  <img src="{{asset('opcn/images/icons/upload.png')}}" alt="" id="IMG_3" /> <a href="{{asset('opcn/images/icons/upload.png')}}" id="A_4"><i id="I_5"></i></a>
                </figure>
                <h3 class="H3_9">
                  Browse photo or drop here
                </h3>
                <p class="P_10">
                  A photo larger than 400 pixels work best. Max photo size 5 MB.
                </p>
              </div>
              <img id="preview-photo2" class="upload-logo" src="{{ asset('opcn/uploads/opportunity/' .$posting->uploadcover) }}">
              <button id="delete-photo-button2" type="button" class="delete-photo-button"><i class="fa fa-trash"></i></button>
            </div>
        </div>
        
        
      </div>      
      <div class="form-row">
        <div class="col-md-12 mb-3">
            <label for="validationServer01" id="validationServer01">Tags</label>
            <input type="text" name="tags" id="tags" value="{{$posting->tags}}" />
          </div>
      </div>

      <div class="form-row">

        <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer01" id="validationServer01" >Sponsor By</label>
        <input type="text" name="sponsorby" class="form-control is-invalid" id="validationServer02" placeholder="Sponsor By" value="{{$posting->sponsorby}}" oninput="checkInput(this, 1)">
        <i class="fas fa-building"></i> 
      </div>


        <div class="col-md-4 mb-3 form-icon">
          <label for="validationServer01" id="validationServer01">Position</label>
          <input type="text" name="position" class="form-control is-invalid" id="validationServer02" placeholder="Position" value="{{$posting->position}}" required  oninput="checkInput(this, 1)">
          <i class='fas fa-user'></i>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationServerUsername" id="validationServer01">Category of vacancy</label>                    
          <div class="wrapper">
            <div class="select-btn">
              <span>{{$posting->categoryofvacancy}}</span>
              <i class="fas fa-sort-down"></i>
            </div>
            <div class="content">
              <div class="search">
                <i class="far fa-search"></i>
                <input spellcheck="false" type="text" value="{{$posting->categoryofvacancy}}" name="categoryofvacancy"id="categoryofvacancy" id="selectedOption" placeholder="Search">
              </div>
              <ul class="options"></ul>
            </div>
          </div>

   </div>
  </div>
    <div class="form-row">

        <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer01" id="validationServer01">Website</label>
        <input type="text" class="form-control is-invalid" name="website" id="validationServer02" placeholder="Website" value="{{$posting->website}}" required oninput="checkInput(this, 1)">
        <i class='fas fa-globe'></i>
        </div>

        <div class="col-md-4 mb-3 form-icon">
          <label for="validationServer02" id="validationServer01" >Email Id</label>
          <input type="email" name="emailid" class="form-control is-invalid" id="validationServer02" placeholder="Email Id" value="{{$posting->emailid}}" required  oninput="checkInput(this, 1)">
          <i class='fas fa-envelope'></i>
        </div>
        <div class="col-md-4 mb-3 form-icon">
          <label for="validationServer02" id="validationServer01">Phone Number</label>
          <input type="text" name="phonenumber" class="form-control is-invalid" id="validationServer02" placeholder="Phone Number" value="{{$posting->phonenumber}}" required  oninput="checkInput(this, 1)">
          <i class="fas fa-mobile-android"></i>
        </div>
      
    </div>

    <div class="form-row">

        <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer01" id="validationServer01">Publish Date</label>
        <input type="date" name="publishdate" class="form-control is-invalid" id="validationServer02" placeholder="Publish Date" value="{{$posting->publishdate}}" required oninput="checkInput(this, 1)">
        <i class="fas fa-calendar-check"></i>
        </div>

      <div class="col-md-4 mb-3 form-icon">
        <label for="validationServer02" id="validationServer01">Deadline</label>
        <input type="date" name="dateline" class="form-control is-invalid" id="validationServer02" placeholder="Deadline" value="{{$posting->dateline}}" required  oninput="checkInput(this, 1)">
        <i class="fas fa-calendar-times"></i>
      </div>
      <div class="col-md-4 mb-3 form-icon">
        <label for="validationServer02" id="validationServer01">Location</label>
        <input type="text" name="location" class="form-control is-invalid" id="validationServer02" placeholder="Location" value="{{$posting->location}}" required  oninput="checkInput(this, 1)">
        <i class="fas fa-map-marker-check"></i>
      </div>
    
    </div>
    <div class="form-row">

      <div class="col-md-4 mb-3 form-icon">
        <label for="validationServer01" id="validationServer01">Funding Type</label>
        <select class="form-control " id="validationServer02" name="fundingtype"></i> 
          <option > {{$posting->fundingtype}}</option>
          <option value="Fully Funded" >Fully Funded</option>
          <option value="Partially Funded" >Partially Funded</option>
          <option value="Paid" >Paid</option>
          <option value="Partially Funded" >conditional Funded</option>
        </select>
        <i class="fas fa-map-marker-check"></i>
        <i class="fas fa-sort-down" id="jobdown"></i>
      </div>
    <div class="col-md-4 mb-3 form-icon">
      <label for="validationServerUsername" id="validationServer01">For Whom</label>  
      <select class="form-control " id="validationServer02" name="forwhom"></i> 
        <option > {{$posting->forwhom}}</option>
        <option value="Fresher" >All Country</option>
        <option value="Entry Level" >Different Country</option>
        <option value="Entry Level" >Developing  Country</option>
        <option value="Mid Level" >Please check details below.</option>
      </select>
      <i class="fas fa-map-marker-check"></i>
      <i class="fas fa-sort-down" id="jobdown"></i>
  </div>
      <div class="col-md-4 mb-3 form-icon">
        <label for="validationServer02" id="validationServer01">Number of Opportunity</label>
        <input type="text" name="numberofopportunity" class="form-control is-invalid" id="validationServer02" placeholder="Number of Opportunity" value="{{$posting->numberofopportunity}}" required  oninput="checkInput(this, 1)">
        <i class="fas fa-sort-numeric-up"></i>
      </div>
    </div>



    <div class="form-row">

      <div class="col-md-4 mb-3 form-icon">
      <label for="validationServer01" id="validationServer01">Experience Requirement</label>
      <input type="text" name="experiencerequirment" class="form-control is-invalid" id="validationServer02" placeholder="Experience Requirement" value="{{$posting->experiencerequirment}}" required oninput="checkInput(this, 1)">
      <i class="fas fa-user-graduate"></i>            
    </div>

    <div class="col-md-4 mb-3 form-icon">
      <label for="validationServer02" id="validationServer01">Education Requirement</label>
      <input type="text" name="educationrequirement" class="form-control is-invalid" id="validationServer02" placeholder="Education Requirement" value="{{$posting->educationrequirement}}" required  oninput="checkInput(this, 1)">
      <i class="fas fa-file-certificate"></i>
    </div>
    <div class="col-md-4 mb-3 form-icon">
      <label for="validationServer02" id="validationServer01">Sub Topic</label>
      <input type="text" name="subtopic" class="form-control is-invalid" list="salary" id="validationServer02" placeholder="Sub Topic" value="{{$posting->subtopic}}" required  oninput="checkInput(this, 1)">
      <i class="fas fa-sack-dollar"></i>
    </div>
    <datalist id="salary">
      <option value="Monthly">
      <option value="Project Basis">
      <option value="Hourly">
      <option value="Yearly">
    </datalist>
  </div>



  <div class="form-row">

    <div class="col-md-12 mb-3">
        <label for="validationServer01" id="validationServer01">Descriptions</label>
        <textarea class="form-control is-invalid" value="{{$posting->descriptions}}" id="editor2" name="descriptions">{{$posting->descriptions}}</textarea> 
          @if ( Session::has('flash_message') )
         <div class="alert alert-success">
          <h3>{{ Session::get('flash_message') }}</h3>
          </div>
          @endif                                      
    </div>     
  </div>
  <div class="form-row">
    <div class="col-md-10 ">
    <button class="postingreset" type="reset" >Reset Your Mistake !</button></div>
    <div class="col-md-1 mb-3">
     
     <div data-target="#delete-confirm" data-toggle="modal" class="postingsubmit"><a>Posting .... </a><i class="far fa-arrow-right"></i></div>
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
      <button type="submit" class="btn btn-danger">Posting</button>
    </div>
    </div>
  </div>
</div>

</div>


</form>
</div>

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  
  
  <script>
  
  
    @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
    @endif
  
  
    @if(Session::has('info'))
        toastr.info("{{ Session::get('info') }}");
    @endif
  
  
    @if(Session::has('warning'))
        toastr.warning("{{ Session::get('warning') }}");
    @endif
  
  
    @if(Session::has('error'))
        toastr.error("{{ Session::get('error') }}");
    @endif
  
  
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

@endsection