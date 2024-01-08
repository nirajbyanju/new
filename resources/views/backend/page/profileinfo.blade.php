@extends('backend.layouts.backendlayouts') 
@section('title', 'Dashboard')
@section('content')
@push('head')
  <link rel="stylesheet" href="{{asset('opcn/tag/inputTags.css')}}">
  <link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
  <link rel="stylesheet" href="{{asset('opcn/css/backend/dropdown.css')}}"> 

  <style>
    .auto-container{
       padding-left: 5%;
       padding-right: 7%;

    }
  </style>
@endpush
@push('script')
<script src="{{asset('opcn/backend/plugins/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('opcn/js/backend/updating.js')}}"></script>
  <script type="text/javascript" src="{{asset('opcn/tag/index.js')}}"></script>
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
    <form id="myForm" action="{{ route('profileinfostore', ['userId' => $user->id]) }}" method="post" enctype="multipart/form-data" class="login-form">
        @csrf
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="validationServer01" id="validationServer01">Upload Logo</label>
      <div id="upload-photo">
        
        <input type="file" id="input-file" name="photo" accept="image/*">
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
          
        <img id="preview-photo" class="upload-logo" src="{{ asset('opcn/uploads/userphoto/' .$userDetails->photo) }}">
        <button id="delete-photo-button" type="button" class="delete-photo-button"><i class="fa fa-trash"></i></button>
      </div>
    </div>
    
  </div>      
  {{$userDetails->role}}
  <div class="form-row">

    <div class="col-md-8 mb-3 form-icon">
        <label for="validationServer01" id="validationServer01" >Name of Company</label>
    <input type="text" name="company_name" class="form-control is-invalid" id="validationServer02" placeholder="Name of Company" value="{{$userDetails->company_name}}" oninput="checkInput(this, 1)">
    <i class="fas fa-building"></i> 
  </div>
    <div class="col-md-4 mb-3">
      <label for="validationServerUsername" id="validationServer01">Category of Company</label>                    
      <div class="wrapper">
        <div class="select-btn">
          <span>{{$userDetails->industry_type}}</span>
          <i class="fas fa-sort-down"></i>
        </div>
        <div class="content">
          <div class="search">
            <i class="far fa-search"></i>
            <input spellcheck="false" type="text" value="{{$userDetails->industry_type}}" name="industry_type"id="categoryofvacancy" id="selectedOption" placeholder="Search">
          </div>
          <ul class="options"></ul>
        </div>
      </div>

</div>
</div>


<div class="form-row">

    <div class="col-md-6 mb-3 form-icon">
        <label for="validationServer01" id="validationServer01">Website</label>
    <input type="url" class="form-control is-invalid" name="website" id="validationServer02" placeholder="Website" value="{{$userDetails->website}}" required oninput="checkInput(this, 1)">
    <i class='fas fa-globe'></i>
    </div>

    <div class="col-md-6 mb-3 form-icon">
      <label for="validationServer02" id="validationServer01" >Email Id</label>
      <input type="email" name="contact_email" class="form-control is-invalid" id="validationServer02" placeholder="Email Id" value="{{$userDetails->contact_email}}" required  oninput="checkInput(this, 1)">
      <i class='fas fa-envelope'></i>
    </div>

  
</div>

<div class="form-row">

    <div class="col-md-4 mb-3 form-icon">
        <label for="validationServer01" id="validationServer01">Establishment Date</label>
    <input type="date" name="publishdate" class="form-control is-invalid" id="validationServer02" placeholder="Publish Date" value="{{$userDetails->establishment}}" required oninput="checkInput(this, 1)">
    <i class="fas fa-calendar-check"></i>
    </div>

  
  <div class="col-md-4 mb-3 form-icon">
    <label for="validationServer02" id="validationServer01">Location</label>
    <input type="text" name="location" class="form-control is-invalid" id="validationServer02" placeholder="Location" value="{{$userDetails->location}}" required  oninput="checkInput(this, 1)">
    <i class="fas fa-map-marker-check"></i>
  </div>
  <div class="col-md-4 mb-3 form-icon">
      <label for="validationServer02" id="validationServer01">Phone Number</label>
      <input type="text" name="phonenumber" class="form-control is-invalid" id="validationServer02" placeholder="Phone Number" value="{{$userDetails->phonenumber}}" required  oninput="checkInput(this, 1)">
      <i class="fas fa-mobile-android"></i>
    </div>

</div>


    <div class="form-row">

      <div class="col-md-12 mb-3">
          <label for="validationServer01" id="validationServer01">Descriptions</label>
          <textarea class="form-control is-invalid" value="{{$userDetails->bio}}" id="editor2" name="descriptions">{{$userDetails->descriptions}}</textarea> 
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
       <div onclick="confirmSubmit()" class="postingsubmit"><a>Updating .... </a><i class="far fa-arrow-right"></i></div>
      </div>
  </div>
  </form>
</div>
<script>
  const uploadPhoto = document.getElementById("upload-photo");
const previewPhoto = document.getElementById("preview-photo");
const inputFile = document.getElementById("input-file");
const deletePhotoButton = document.getElementById("delete-photo-button");
const dropHere = document.getElementById("drop-here");

// Create a function to handle the file upload process
const handleFileUpload = (event) => {
  const file = inputFile.files[0];
  const reader = new FileReader();

  reader.addEventListener("load", () => {
    previewPhoto.src = reader.result;
    previewPhoto.classList.remove("upload-logo");
    deletePhotoButton.style.display = "block";
    dropHere.style.display ="none";
  });

  reader.readAsDataURL(file);
};

// Add event listeners to the buttons
uploadPhoto.addEventListener("click", () => {
  inputFile.click();
});

inputFile.addEventListener("change", handleFileUpload);

deletePhotoButton.addEventListener("click", () => {
  previewPhoto.src = "";
  previewPhoto.classList.add("upload-logo");
  inputFile.value = "";
  deletePhotoButton.style.display = "none";
  dropHere.style.display ="block";
});

// Handle the file drop process
dropHere.addEventListener("drop", (event) => {
  event.preventDefault();
  inputFile.files = event.dataTransfer.files;
  handleFileUpload(event);
});

// Show the "drop here" message when the user drags a file over the drop zone
dropHere.addEventListener("dragover", (event) => {
  event.preventDefault();
  dropHere.style.display = "block";
});

// Hide the "drop here" message when the user leaves the drop zone
dropHere.addEventListener("dragleave", (event) => {
  event.preventDefault();
  dropHere.style.display = "block";
});

</script>
<script>
  const wrapper = document.querySelector(".wrapper");
    const selectBtn = wrapper.querySelector(".select-btn");
    const searchInp = wrapper.querySelector("input");
    const options = wrapper.querySelector(".options");
    const selectedOptionEl = document.querySelector("#selected-option");
    
    let categoryofvacancy = [
      "Engineering/Architecture",
      "Hospitality/Travel/Tourism",
      "Accounting/Finance",
      "IT/Telecommunications",
      "Sales/Marketing/Customer Service",
      "Teaching/Education",
      "General Management/Administration",
      "Medical/Pharmaceutical",
      "Technician",
      "Other"
    ];
    
    function addCountry(selectedCountry) {
      options.innerHTML = "";
      categoryofvacancy.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" value="${country}" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
      });
    }
    
    addCountry();
    
    function updateName(selectedLi) {
      searchInp.value = "";
      addCountry(selectedLi.innerText);
      wrapper.classList.remove("active");
      selectBtn.firstElementChild.innerText = selectedLi.innerText;
      document.getElementById("categoryofvacancy").value = selectedLi.innerText;
      let selectedOption = selectedLi.getAttribute('value');
      console.log("Selected option: ", selectedOption);
      selectedOptionEl.innerText = `Selected option: ${selectedOption}`;
    }
    
    searchInp.addEventListener("keyup", () => {
      let arr = [];
      let searchWord = searchInp.value.toLowerCase();
      arr = categoryofvacancy.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
      }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}" value="${data}">${data}</li>`;
      }).join("");
      options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Category not found</p>`;
    });
    
    selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
    
    document.addEventListener("click", (event) => {
      if (!wrapper.contains(event.target)) {
        wrapper.classList.remove("active");
      }
    });

</script>
<script>
  
function confirmSubmit() {
    var result = confirm("Are you sure you want to submit?");
    if (result) {
      document.getElementById("myForm").submit();
    } else {
      return false;
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
    

@endsection
