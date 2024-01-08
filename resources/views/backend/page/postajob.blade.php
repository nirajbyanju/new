@extends('backend.layouts.backendlayouts') 
@section('title', 'Post Job')
@section('content')
@push('head')
  <link rel="stylesheet" href="{{asset('opcn/tag/inputTags.css')}}">
  <link rel="stylesheet" href="{{asset('opcn/css/backend/posting.css')}}">
  <link rel="stylesheet" href="{{asset('opcn/css/backend/toastnotify.css')}}"> 
  <style>
    .auto-container{
       padding-left: 5%;
       padding-right: 7%;
       padding-top: 3%;
       padding-bottom: 2%;
    }
  </style>
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
      <form id="myForms" action="{{url('/')}}/posting" method="post" enctype="multipart/form-data" class="login-form">
        @csrf
      <div class="form-row">
        <div class="col-md-3 mb-3">
          <label for="validationServer01" id="validationServer01">Upload Logo</label>
          <div id="upload-photo">
            
            <input type="file" id="input-file" name="uploadcompanylogo" accept="image/*">
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
        <div class="col-md-9 mb-3">
          <label for="validationServer01" id="validationServer01">Tags</label>
          <input type="text" name="tags" id="tags" value="" />
        </div>
        
      </div>      

        <div class="form-row">

              <div class="col-md-4 mb-3 form-icon">
                  <label for="validationServer01" id="validationServer01" >Name of Company</label>
              <input type="text" name="nameofcompany" class="form-control is-invalid" id="validationServer02" placeholder="Name of Company" value="{{ old('nameofcompany') }}" oninput="checkInput(this, 1)">
              <i class="fas fa-building"></i> 
            </div>


              <div class="col-md-4 mb-3 form-icon">
                <label for="validationServer01" id="validationServer01">Position</label>
                <input type="text" name="position" class="form-control is-invalid" id="validationServer02" placeholder="Position" value="{{ old('position') }}" required  oninput="checkInput(this, 1)">
                <i class='fas fa-user'></i>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationServerUsername" id="validationServer01">Category of vacancy</label>                    
                <div class="wrapper">
                  <div class="select-btn">
                    <span>Select Category of vacancy</span>
                    <i class="fas fa-sort-down"></i>
                  </div>
                  <div class="content">
                    <div class="search">
                      <i class="far fa-search"></i>
                      <input spellcheck="false" type="text" name="categoryofvacancy"id="categoryofvacancy" id="selectedOption" placeholder="Search">
                    </div>
                    <ul class="options"></ul>
                  </div>
                </div>

         </div>
        </div>


          <div class="form-row">

              <div class="col-md-4 mb-3 form-icon">
                  <label for="validationServer01" id="validationServer01">Website</label>
              <input type="url" class="form-control is-invalid" name="website" id="validationServer02" placeholder="Website" value="{{ old('website') }}" required oninput="checkInput(this, 1)">
              <i class='fas fa-globe'></i>
              </div>

              <div class="col-md-4 mb-3 form-icon">
                <label for="validationServer02" id="validationServer01" >Email Id</label>
                <input type="email" name="emailid" class="form-control is-invalid" id="validationServer02" placeholder="Email Id" value="{{ old('emailid') }}" required  oninput="checkInput(this, 1)">
                <i class='fas fa-envelope'></i>
              </div>
              <div class="col-md-4 mb-3 form-icon">
                <label for="validationServer02" id="validationServer01">Phone Number</label>
                <input type="text" name="phonenumber" class="form-control is-invalid" id="validationServer02" placeholder="Phone Number" value="{{ old('phonenumber') }}" required  oninput="checkInput(this, 1)">
                <i class="fas fa-mobile-android"></i>
              </div>
            
          </div>

          <div class="form-row">

              <div class="col-md-4 mb-3 form-icon">
                  <label for="validationServer01" id="validationServer01">Publish Date</label>
              <input type="date" name="publishdate" class="form-control is-invalid" id="validationServer02" placeholder="Publish Date" value="{{ old('publishdate') }}" required oninput="checkInput(this, 1)">
              <i class="fas fa-calendar-check"></i>
              </div>

            <div class="col-md-4 mb-3 form-icon">
              <label for="validationServer02" id="validationServer01">Deadline</label>
              <input type="date" name="dateline" class="form-control is-invalid" id="validationServer02" placeholder="Deadline" value="{{ old('dateline') }}" required  oninput="checkInput(this, 1)">
              <i class="fas fa-calendar-times"></i>
            </div>
            <div class="col-md-4 mb-3 form-icon">
              <label for="validationServer02" id="validationServer01">Working Place</label>
              <input type="text" name="workingplace" class="form-control is-invalid" id="validationServer02" placeholder="Working Place" value="{{ old('workingplace') }}" required  oninput="checkInput(this, 1)">
              <i class="fas fa-map-marker-check"></i>
            </div>
          
          </div>
          <div class="form-row">

            <div class="col-md-4 mb-3">
              <label for="validationServer01" id="validationServer01">Job Type</label>
              <span class="dropdown-el2">
                <input type="radio" name="jobstypes" checked="checked" id="sort-relevance2"><label for="sort-relevance">Select Job Type</label>
                <input type="radio" name="jobstypes" value="full time"  id="sort-relevance"><label for="sort-relevance">Full Time</label>
                <input type="radio" name="jobstypes" value="part time" id="sort-best2"><label for="sort-best2">Part Time</label>
                <input type="radio" name="jobstypes" value="contractual" id="sort-low2"><label for="sort-low2">Contractual</label>
                <input type="radio" name="jobstypes" value="intern" id="sort-high2"><label for="sort-high2">Intern</label>
                <input type="radio" name="jobstypes" value="freelancer" id="sort-high2"><label for="sort-high2">Freelancer</label>
              </span>
          </div>

          <div class="col-md-4 mb-3">
            <label for="validationServerUsername" id="validationServer01">Job Level</label>                    
            <span class="dropdown-el">
                <input type="radio" name="jobslevel" checked="checked" id="sort-relevance22"><label for="sort-relevance">Select Job Level</label>
              <input type="radio" name="jobslevel" value="fresher" id="sort-relevance"><label for="sort-relevance">Fresher</label>
              <input type="radio" name="jobslevel" value="entrylevel" id="sort-best"><label for="sort-best">Entry Level</label>
              <input type="radio" name="jobslevel" value="midlevel" id="sort-low"><label for="sort-low">Mid Level</label>
              <input type="radio" name="jobslevel" value="PriceDecreasing" id="sort-high"><label for="sort-high">Senior Level</label>
            </span>
        </div>
            <div class="col-md-4 mb-3 form-icon">
              <label for="validationServer02" id="validationServer01">Number of vacancy</label>
              <input type="number" name="numberofvacancy" class="form-control is-invalid" id="validationServer02" placeholder="Number of vacancye" value="{{ old('numberofvacancy') }}" required  oninput="checkInput(this, 1)">
              <i class="fas fa-sort-numeric-up"></i>
            </div>
          </div>



          <div class="form-row">

            <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer01" id="validationServer01">Experience Requirement</label>
            <input type="text" name="experiencerequirment" class="form-control is-invalid" id="validationServer02" placeholder="Experience Requirement" value="{{ old('experiencerequirment') }}" required oninput="checkInput(this, 1)">
            <i class="fas fa-user-graduate"></i>            
          </div>

          <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer02" id="validationServer01">Education Requirement</label>
            <input type="text" name="educationrequirement" class="form-control is-invalid" id="validationServer02" placeholder="Education Requirement" value="{{ old('educationrequirement') }}" required  oninput="checkInput(this, 1)">
            <i class="fas fa-file-certificate"></i>
          </div>
          <div class="col-md-4 mb-3 form-icon">
            <label for="validationServer02" id="validationServer01">Salary</label>
            <input type="text" name="salary" class="form-control is-invalid" list="salary" id="validationServer02" placeholder="Salary" value="{{ old('salary') }}" required  oninput="checkInput(this, 1)">
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
              <textarea class="form-control is-invalid" value="" id="editor2" name="descriptions"></textarea> 
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
   
    <script>
      // Get the select element and the form element
      var select = document.getElementById("validationServer02");
      var form = document.getElementById("myForms");
    
      // Add an event listener to the select element to detect changes
      select.addEventListener("change", function() {
        // Get the selected value
        var selectedValue = select.value;
        
        // Update the form action based on the selected value
        if (selectedValue === "Scholarships") {
          form.action = "{{url('/')}}/scholarshipstore";
        } else if (selectedValue === "Internships") {
          form.action = "{{url('/')}}/internshipstore";
        } else if (selectedValue === "Entrepreneurship Event") {
          form.action = "{{url('/')}}/entreneurshipstore";
        } else if (selectedValue === "Grants") {
          form.action = "{{url('/')}}/grantsstore";
        }
      });
    </script>
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
      const uploadPhoto2 = document.getElementById("upload-photo2");
const previewPhoto2 = document.getElementById("preview-photo2");
const inputFile2 = document.getElementById("input-file2");
const deletePhotoButton2 = document.getElementById("delete-photo-button2");
const dropHere2 = document.getElementById("drop-here2");

// Create a function to handle the file upload process
const handleFileUpload2 = (event) => {
  const file = inputFile2.files[0];
  const reader = new FileReader();

  reader.addEventListener("load", () => {
    previewPhoto2.src = reader.result;
    previewPhoto2.classList.remove("upload-logo");
    deletePhotoButton2.style.display = "block";
    dropHere2.style.display ="none";
  });

  reader.readAsDataURL(file);
};

// Add event listeners to the buttons
uploadPhoto2.addEventListener("click", () => {
  inputFile2.click();
});

inputFile2.addEventListener("change", handleFileUpload2);

deletePhotoButton2.addEventListener("click", () => {
  previewPhoto2.src = "";
  previewPhoto2.classList.add("upload-logo");
  inputFile2.value = "";
  deletePhotoButton2.style.display = "none";
  dropHere2.style.display ="block";
});

// Handle the file drop process
dropHere2.addEventListener("drop", (event) => {
  event.preventDefault();
  inputFile2.files = event.dataTransfer.files;
  handleFileUpload2(event);
});

// Show the "drop here" message when the user drags a file over the drop zone
dropHere2.addEventListener("dragover", (event) => {
  event.preventDefault();
  dropHere2.style.display = "block";
});

// Hide the "drop here" message when the user leaves the drop zone
dropHere2.addEventListener("dragleave", (event) => {
  event.preventDefault();
  dropHere2.style.display = "block";
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


    jQuery(document).ready(function($) {
        var tags = $('#tags').inputTags({
          tags: [],
          autocomplete: {
            values: ['', 'Software Development', 'Project Management', 'Data Analysis', 'Graphic Design', 'Marketing', 'Sales', 'Accounting', 
            'Customer Service', 'Human Resources', 'Engineering', 'Teaching', 'Writing', 'Editing', 'Research', 'Healthcare', 'Hospitality', 
            'Communication', 'Leadership', 'Teamwork', 'Problem Solving', 'Time Management', 'Adaptability', 'Creativity', 'Conflict Resolution',
             'Decision Making', 'Organization', 'Collaboration', 'Critical Thinking', 'Customer Service', 'Attention to Detail', 'Emotional Intelligence',
             'Accounting', 'Administrative Support', 'Advertising', 'Analytics', 'Art', 'Banking', 'Business Analysis', 'Business Development', 'Business Intelligence',
              'Call Center', 'Civil Engineering', 'Coaching', 'Communication', 'Computer Science', 'Consulting', 'Content Management', 'Copywriting', 'Corporate Finance',
               'Creative Writing', 'Criminal Justice', 'Customer Relationship Management (CRM)', 'Customer Service', 'Data Analysis', 'Data Entry', 'Data Warehousing', 
               'Database Administration', 'Design', 'Digital Marketing', 'E-commerce', 'Economics', 'Education', 'Electrical Engineering', 'Engineering', 'Entrepreneurship',
                'Environmental Science', 'Event Planning', 'Executive Management', 'Facilities Management', 'Fashion', 'Finance', 'Fine Arts', 'Fundraising', 'Graphic Design',
                 'Healthcare', 'Hospitality', 'Human Resources', 'Industrial Engineering', 'Information Technology (IT)', 'Insurance', 'Interior Design', 'International Business', 
                 'Internet Research', 'Investment Banking', 'Journalism', 'Law', 'Leadership', 'Logistics', 'Management', 'Manufacturing', 'Market Research', 'Marketing',
                  'Mechanical Engineering', 'Media', 'Medical Billing', 'Medical Transcription', 'Merchandising', 'Non-profit Management', 'Nursing', 'Operations Management', 
                  'Organizational Development', 'Payroll', 'Performance Management', 'Personal Training', 'Pharmaceuticals', 'Photography', 'Physical Therapy', 'Product Management',
                   'Project Management', 'Property Management', 'Public Relations', 'Publishing', 'Purchasing', 'Quality Assurance', 'Real Estate', 'Research', 'Retail', 
                   'Risk Management', 'Sales', 'Search Engine Optimization (SEO)', 'Security', 'Social Media Marketing', 'Software Development', 'Sports', 'Supply Chain Management',
                    'Technical Support', 'Telecommunications', 'Training', 'Travel', 'User Experience (UX)', 'User Interface (UI) Design', 'Video Editing', 'Video Production', 
                    'Visual Design', 'Web Design', 'Web Development', 'Writing']
          },
          init: function(elem) {
            $('span', '#events').text('init');
            $('<p class="results">').html('<strong>Tags:</strong> ' + elem.tags.join(' - ')).insertAfter(elem.$list);
          },
          create: function() {
            $('span', '#events').text('create');
          },
          update: function() {
            $('span', '#events').text('update');
          },
          destroy: function() {
            $('span', '#events').text('destroy');
          },
          selected: function() {
            $('span', '#events').text('selected');
          },
          unselected: function() {
            $('span', '#events').text('unselected');
          },
          change: function(elem) {
            $('.results').empty().html('<strong>Tags:</strong> ' + elem.tags.join(' - '));
          },
          autocompleteTagSelect: function(elem) {
            console.info('autocompleteTagSelect');
          }
        });
  
        $('#tags').inputTags('tags', 'Creative', function(tags) {
          $('.results').empty().html('<strong>Tags:</strong> ' + tags.join(' - '));
        });
  
        var autocomplete = $('#tags').inputTags('options', 'autocomplete');
        $('span', '#autocomplete').text(autocomplete.values.join(', '));
      });
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
      (function ($) {

$.fn.inputTags = function (options) {
    if (!('inputTags' in window)) {
        window.inputTags = {
            instances: []
        };
    }

    window.inputTags.methods = {
        tags: function (element, callback) {
            if (element) {
                switch (typeof element) {
                    case 'string':
                        switch (element) {
                            case '_toString':
                                var str = _instance.tags.toString();

                                if (callback) {
                                    return callback(str);
                                }
                                return str;
                            case '_toObject':
                                var obj = _instance._toObject(_instance.tags);

                                if (callback) {
                                    return callback(obj);
                                }
                                return obj;
                            case '_toJSON':
                                var obj = _instance._toObject(_instance.tags);
                                var json = JSON.stringify(obj);

                                if (callback) {
                                    return callback(json);
                                }
                                return json;
                            case '_toArray':
                                if (callback) {
                                    return callback(_instance.tags);
                                }
                                return _instance.tags;
                        }

                        var partials = element.split(',');

                        if (partials.length > 1) {
                            var current = _instance.tags;
                            _instance.tags = current.concat(partials);
                        } else {
                            _instance.tags.push(partials[0]);
                        }
                        break;
                    case 'object':
                        var current = _instance.tags;

                        if ('[object Object]' === Object.prototype.toString.call(element)) {
                            element = Object.keys(element).map(function (k) {
                                return element[k];
                            });
                        }

                        _instance.tags = current.concat(element);
                        break;
                    case 'function':
                        return element(_instance.tags);
                }

                _instance._clean();
                _instance._fill();
                _instance._updateValue();

                _instance.destroy();

                _instance._setInstance(_instance);

                if (callback) {
                    return callback(_instance.tags);
                }
            }

            return _instance.tags;
        },
        event: function (method, callback) {
            _instance.options[method] = callback;
            _instance._setInstance(_instance);
        },
        options: function (key, value) {
            if (!key && !value) {
                return _instance.options;
            }

            if (value) {
                _instance.options[key] = value;
                _instance._setInstance(_instance);
            } else {
                return _instance.options[key];
            }
        },
        destroy: function () {
            var id = $(this).attr('data-uniqid');
            delete window.inputTags.instances[id];
        }
    };

    if ('object' === typeof options || !options) {
        var options = $.extend(true, {}, $.fn.inputTags.defaults, options);

        this.each(function () {
            var self = $(this);

            /* Constants */
            self.KEY_ENTER = 'Enter';
            self.KEY_COMMA = ',';
            self.KEY_ESCAPE = 'Escape';
            self.UNIQID = Math.round(Date.now() / (Math.random() * (548 - 54) - 54));
            self.DEFAULT_CLASS = 'inputTags';
            self.ELEMENT_CLASS = self.DEFAULT_CLASS + '-' + self.UNIQID;
            self.LIST_CLASS = self.DEFAULT_CLASS + '-list';
            self.ITEM_CLASS = self.DEFAULT_CLASS + '-item';
            self.ITEM_CONTENT = '<span class="value" title="Cliquez pour éditer">%s</span><i class="close-item">&times</i>';
            self.FIELD_CLASS = self.DEFAULT_CLASS + '-field';
            self.ERROR_CLASS = self.DEFAULT_CLASS + '-error';
            self.ERROR_CONTENT = '<p class="' + self.ERROR_CLASS + '">%s</p>';

            self.AUTOCOMPLETE_LIST_CLASS = self.DEFAULT_CLASS + '-autocomplete-list';
            self.AUTOCOMPLETE_ITEM_CLASS = self.DEFAULT_CLASS + '-autocomplete-item';
            self.AUTOCOMPLETE_ITEM_CONTENT = '<li class="' + self.AUTOCOMPLETE_ITEM_CLASS + '">%s</li>';

            /* Variables */
            self.options = options;
            self.keys = [self.KEY_ENTER, self.KEY_COMMA, self.KEY_ESCAPE];
            self.tags = [];

            if (self.options.keys.length > 0) {
                self.keys = self.keys.concat(self.options.keys);
            }

            self.init = function () {
                self.addClass(self.ELEMENT_CLASS).attr('data-uniqid', self.UNIQID);

                self.$element = $('.' + self.ELEMENT_CLASS);
                self.$element.hide();

                /* initialization */
                self.build();
                self.fill();
                self.save();
                self.edit();
                self.destroy();
                self._autocomplete._init();
                self._focus();
            };

            /**
             * Build plugin's HTML skeleton
             * 
             * @returns {void}
             */
            self.build = function () {
                self.$html = $('<div>').addClass(self.LIST_CLASS);
                self.$input = $('<input>').attr({
                    'type': 'text',
                    'class': self.FIELD_CLASS
                });

                self.$html.insertAfter(self.$element).prepend(self.$input);

                self.$list = self.$element.next('.' + self.LIST_CLASS);

                self.$list.on('click', function (e) {
                    if ($(e.target).hasClass('inputTags-field')) {
                        return false;
                    }
                    self.$input.focus();
                });
            };

            /**
             * Init tags list if present in options, otherwise returns false
             * 
             * @returns {void | boolean}
             */
            self.fill = function () {
                self._getDefaultValues();

                if (0 === self.options.tags) {
                    return false;
                }

                self._concatenate();
                self._updateValue();

                self._fill();
            };

            /**
             * Fills tag list
             * 
             * @returns {void}
             */
            self._fill = function () {
                self.tags.forEach(function (value, i) {
                    var validate = self._validate(value, false);

                    if (true === validate || ('max' === validate && i + 1 <= self.options.max)) {
                        self._buildItem(value);
                    }
                });
            };

            /**
             * Clear HTML tags list
             * 
             * @returns {void}
             */
            self._clean = function () {
                $('.' + self.ITEM_CLASS, self.$list).remove();
            };

            /**
             * Add or edit tag depends on key pressed
             * 
             * @returns {void}
             */
            self.save = function () {
                self.$input.on('keyup', function (e) {
                    e.preventDefault();

                    var key = e.key;
                    var value = self.$input.val().trim();

                    if ($.inArray(key, self.keys) < 0) {
                        self._autocomplete._init(true);
                        self._autocomplete._show();

                        return false;
                    }

                    if (self.KEY_ESCAPE === key) {
                        self._cancel();
                        self._autocomplete._hide();

                        return false;
                    }

                    value = self.KEY_COMMA === key ? value.slice(0, -1) : value;

                    if (!self._validate(value, true)) {
                        return false;
                    }

                    if (self.options.only && self._exists(value)) {
                        self._errors('exists');

                        return false;
                    }

                    if (self.$input.hasClass('is-edit')) {
                        var old_value = self.$input.attr('data-old-value');

                        if (old_value === value) {
                            self._cancel();
                            return true;
                        }

                        self._update(old_value, value);
                        self._clean();
                        self._fill();
                    } else {
                        if (self._autocomplete._isSet() && self._autocomplete._get('only')) {
                            if ($.inArray(value, self._autocomplete._get('values')) < 0) {
                                self._autocomplete._hide();
                                self._errors('autocomplete_only');
                                return false;
                            }
                        }

                        if (self._exists(value)) {
                            self.$input.removeClass('is-autocomplete');
                            self._errors('exists');

                            var $tag = $('[data-tag="' + value + '"]', self.$list);

                            $tag.addClass('is-exists');

                            setTimeout(function () {
                                $tag.removeClass('is-exists');
                            }, 300);
                            return false;
                        }

                        self._buildItem(value);
                        self._insert(value);
                    }

                    self._cancel();
                    self._updateValue();
                    self.destroy();
                    self._autocomplete._build();

                    self._setInstance(self);

                    self.$input.focus();

                    return false;
                });
            };

            /**
             * Init edit input when a tag is focused
             * 
             * @returns {void}
             */
            self.edit = function () {
                self.$list.on('click', '.' + self.ITEM_CLASS, function (e) {
                    if ($(e.target).hasClass('close-item') || false === self.options.editable || (self._autocomplete._isSet() && self._autocomplete._get('only'))) {
                        self._cancel();
                        return true;
                    }

                    var $item = $(this).addClass('is-edit');
                    var value = $('.value', $item).text();

                    self.$input.width($item.outerWidth()).insertAfter($item).addClass('is-edit').attr('data-old-value', value).val(value).focus();

                    self._bindEvent('selected');

                    self.$input.on('blur', function () {
                        self._cancel();
                        self._bindEvent('unselected');
                    });
                });
            };

            /**
             * Delete tag
             * 
             * @returns {void}
             */
            self.destroy = function () {
                $('.' + self.ITEM_CLASS, self.$list).off('click').on('click', '.close-item', function () {

                    var $item = $(this).parent('.' + self.ITEM_CLASS);
                    var value = $('.value', $item).text();

                    $item.addClass('is-closed');

                    setTimeout(function () {
                        self._pop(value);
                        self._updateValue();
                        $item.remove();

                        self._autocomplete._build();

                        self.$input.focus();

                        self._setInstance(self);
                    }, 200);
                });
            };

            /**
             * Build and inject tag into HTML list
             * 
             * @returns {void}
             */
            self._buildItem = function (value) {
                var $content = $(self.ITEM_CONTENT.replace('%s', value));
                var $item = $('<span>').addClass(self.ITEM_CLASS + ' is-closed').attr('data-tag', value).html($content);

                $item.insertBefore(self.$input).delay(100).queue(function () {
                    $(this).removeClass('is-closed');
                });
            };

            /**
             * Returns tag index
             * 
             * @returns {number}
             */
            self._getIndex = function (value) {
                return self.tags.indexOf(value);
            };

            /**
             * Remove extra tags only if > max option and concat user tags
             * 
             * @returns {void}
             */
            self._concatenate = function () {
                if (self.options.max > 0) {
                    if (self.options.tags.length > self.options.max) {
                        self.options.tags.splice(-Math.abs(self.options.tags.length - self.options.max));
                    }
                }

                self.tags = self.tags.concat(self.options.tags);
            };


            /**
             * Get default values
             *
             * @returns {void}
             */
            self._getDefaultValues = function () {
                if (self.$element.val().length > 0) {
                    self.tags = self.tags.concat(self.$element.val().split(self.KEY_COMMA));
                } else {
                    self.$element.prop('value', '');
                }
            };

            /**
             * Insert item
             *
             * @param {string} item
             * @returns {void}
             */
            self._insert = function (item) {
                self.tags.push(item);

                self._bindEvent(['change', 'create']);
            };

            /**
             * Swap tag value
             *
             * @param {string} old_value
             * @param {string} new_value
             * @returns {void}
             */
            self._update = function (old_value, new_value) {
                var index = self._getIndex(old_value);
                self.tags[index] = new_value;

                self._bindEvent(['change', 'update']);
            };

            /**
             * Delete item based on value parameter
             *
             * @param {string} value
             * @returns {void}
             */
            self._pop = function (value) {
                var index = self._getIndex(value);

                if (index < 0) {
                    return false;
                }

                self.tags.splice(index, 1);

                self._bindEvent(['change', 'destroy']);
            };

            /**
             * Reset input field
             *
             * @returns {void}
             */
            self._cancel = function () {
                $('.' + self.ITEM_CLASS).removeClass('is-edit');

                self.$input
                    .removeClass('is-edit is-autocomplete')
                    .removeAttr('data-old-value style')
                    .val('')
                    .appendTo(self.$list);
            };

            /**
             * Autocomplete object
             *
             * @returns {object}
             */
            self._autocomplete = {

                /**
                 * Is autocomplete list have values
                 *
                 * @returns {boolean}
                 */
                _isSet: function () {
                    return self.options.autocomplete.values.length > 0;
                },

                /**
                 * Init autocomplete
                 *
                 * @param {boolean | undefined} filter
                 * @returns {boolean | void}
                 */
                _init: function (filter) {
                    if (!self._autocomplete._isSet()) {
                        return false;
                    }

                    self._autocomplete._build(filter);
                },

                /**
                 * Build autocomplete HTML list
                 *
                 * @param {boolean | undefined} filter
                 * @returns {void}
                 */
                _build: function (filter) {
                    var value = self.$input.val().trim().toLowerCase();

                    if (self._autocomplete._exists()) {
                        self.$autocomplete.remove();
                    }

                    self.$autocomplete = $('<ul>').addClass(self.AUTOCOMPLETE_LIST_CLASS);

                    self._autocomplete._get('values').forEach(function (v) {
                        var li = self.AUTOCOMPLETE_ITEM_CONTENT.replace('%s', v);
                        var $item = $(li)

                        if ($.inArray(v, self.tags) >= 0) {
                            $item.addClass('is-disabled')
                        }

                        if (filter && value.length > 0 && !v.toLowerCase().startsWith(value)) {
                            $item.css({ display: 'none' })
                        }

                        $item.appendTo(self.$autocomplete);
                    });

                    self._autocomplete._bindClick();

                    $(document)
                        .not(self.$autocomplete)
                        .on('click', function () {
                            self._autocomplete._hide();
                        });
                },

                /**
                 * Bind click event on list item
                 *
                 * @returns {void}
                 */
                _bindClick: function () {
                    $(self.$autocomplete).off('click').on('click', '.' + self.AUTOCOMPLETE_ITEM_CLASS, function (e) {
                        if ($(e.target).hasClass('is-disabled')) {
                            return false;
                        }

                        self.$input.addClass('is-autocomplete').val($(this).text());
                        self._autocomplete._hide();
                        self._bindEvent('autocompleteTagSelect');

                        var e = $.Event("keyup");
                        e.key = self.KEY_ENTER;
                        self.$input.trigger(e);
                    });
                },

                /**
                 * Show autocomplete list
                 *
                 * @returns {boolean | void}
                 */
                _show: function () {
                    if (!self._autocomplete._isSet()) {
                        return false;
                    }

                    self.$autocomplete
                        .css({
                            'left': self.$input[0].offsetLeft,
                            'minWidth': self.$input.width()
                        })
                        .insertAfter(self.$input);

                    setTimeout(function () {
                        self._autocomplete._bindClick();
                        self.$autocomplete.addClass('is-active');
                    }, 100);
                },

                /**
                 * Hide autocomplete list
                 *
                 * @returns {void}
                 */
                _hide: function () {
                    self.$autocomplete.removeClass('is-active');
                },

                /**
                 * Get autocomplete item based on key parameter
                 *
                 * @param {string} key
                 * @returns {boolean | void}
                 */
                _get: function (key) {
                    return self.options.autocomplete[key];
                },

                /**
                 * Returns true if autocomplete is defined, false otherwise
                 *
                 * @returns {boolean}
                 */
                _exists: function () {
                    return undefined !== self.$autocomplete;
                }
            };

            /**
             * Update plugin binded input value
             *
             * @returns {void}
             */
            self._updateValue = function () {
                self.$element.prop('value', self.tags.join(self.KEY_COMMA));
            };

            /**
             * Define focus events on input
             *
             * @returns {void}
             */
            self._focus = function () {
                self.$input.on('focus', function () {
                    self._bindEvent('focus');

                    if (self._autocomplete._isSet() && !self.$input.hasClass('is-autocomplete') && !self.$input.hasClass('is-edit')) {
                        self._autocomplete._build();
                        self._autocomplete._show();
                    }
                });
            };

            /**
             * Convert array into object
             *
             * @param {string[]} arr
             * @returns {object}
             */
            self._toObject = function (arr) {
                return arr.reduce(function (o, v, i) {
                    o[i] = v;
                    return o;
                }, {});
            };

            /**
             * Input validation
             *
             * @param {string} value
             * @param {boolean} alert
             * @returns {boolean}
             */
            self._validate = function (value, alert) {
                var type = '', re;

                switch (true) {
                    case !value:
                    case undefined === value:
                    case 0 === value.length:
                        self._cancel();
                        type = 'empty';
                        break;
                    case value.length > 0 && value.length < self.options.minLength:
                        type = 'minLength';
                        break;
                    case value.length > self.options.maxLength:
                        type = 'maxLength';
                        break;
                    case self.options.max > 0 && self.tags.length >= self.options.max:
                        if (!self.$input.hasClass('is-edit')) {
                            type = 'max';
                        }
                        break;
                    case self.options.email:
                        re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                        if (!re.test(value)) {
                            type = 'email';
                        }
                        break;
                }

                if (type.length > 0) {
                    return alert ? self._errors(type) : type;
                }

                return true;
            };

            /**
             * Returns true if value is in tags list, false otherwise
             *
             * @param {string} value
             * @returns {boolean}
             */
            self._exists = function (value) {
                return $.inArray(value, self.tags) >= 0;
            }

            /**
             * Get error message
             *
             * @param {string} type
             * @returns {boolean}
             */
            self._errors = function (type) {
                if (0 === type.length) {
                    return false;
                }

                if (self._autocomplete._exists()) {
                    self.$autocomplete.remove();
                }

                self._displayErrors(self.options.errors[type].replace('%s', self.options[type]), type);

                return false;
            };

            /**
             * Display errors(s) if any
             *
             * @param {string} error
             * @param {string} type
             * @returns {void}
             */
            self._displayErrors = function (error, type) {
                var $error = $(self.ERROR_CONTENT.replace('%s', error)).attr('data-error', type);
                var timeout = self.options.errors.timeout;

                if ($('.' + self.ERROR_CLASS + '[data-error="' + type + '"]').length) {
                    return false;
                }

                $error.hide().insertAfter(self.$list).slideDown();

                if (!timeout || timeout <= 0) {
                    return false;
                }

                $('.' + self.ERROR_CLASS).on('click', function () {
                    self._collapseErrors($(this));
                });

                setTimeout(function () {
                    self._collapseErrors();
                }, timeout);
            };

            /**
             * Clears error(s) if any
             *
             * @param {object} $elem
             * @returns {void}
             */
            self._collapseErrors = function ($elem) {

                var $obj = $elem ? $elem : $('.' + self.ERROR_CLASS);

                $obj.slideUp(300, function () {
                    $obj.remove();
                });
            };

            /**
             * Retrieve inputTags instance based on uniqid
             *
             * @returns {object}
             */
            self._getInstance = function () {
                return window.inputTags.instances[self.UNIQID];
            };

            /**
             * Store instance based on uniqid
             *
             * @returns {void}
             */
            self._setInstance = function () {
                window.inputTags.instances[self.UNIQID] = self;
            };

            /**
             * Returns true if elem exists on options object, false otherwise
             *
             * @returns {boolean}
             */
            self._isSet = function (elem) {
                return !(undefined === self.options[elem] || false === self.options[elem] || self.options[elem].length);
            };

            /**
             * Call method based on method_name parameter if exists on options, returns false otherwise
             *
             * @param {string} method_name
             * @param {object} self
             * @returns {void}
             */
            self._callMethod = function (method_name, self) {
                if (undefined === self.options[method_name] || 'function' !== typeof self.options[method_name]) {
                    return false;
                }

                self.options[method_name].apply(this, Array.prototype.slice.call(arguments, 1));
            }

            /**
             * Init an event
             *
             * @param {string | object} method
             * @param {function} callback
             * @returns {boolean}
             */
            self._initEvent = function (method, callback) {
                if (!method) {
                    return false;
                }

                switch (typeof method) {
                    case 'string':
                        callback(method, self);
                        break;
                    case 'object':
                        method.forEach(function (m, i) {
                            callback(m, self);
                        });
                        break;
                }

                return true;
            };

            /**
             * Bind an event
             *
             * @param {string | object} method
             * @returns {boolean}
             */
            self._bindEvent = function (method) {
                return self._initEvent(method, function (m, s) {
                    self._callMethod(m, s);
                });
            };

            /**
             * Unbind an event
             *
             * @param {string | object} method
             * @returns {boolean}
             */
            self._unbindEvent = function (method) {
                return self._initEvent(method, function (m) {
                    self.options[m] = false;
                });
            };

            self.init();

            self._bindEvent('init');

            self._setInstance(self);
        });

        return {
            on: function (method, callback) {
                window.inputTags.methods.event(method, callback);
            }
        };

    } else if (window.inputTags.methods[options]) {
        var id = $(this).attr('data-uniqid');
        var _instance = window.inputTags.instances[id];

        if (undefined === _instance) {
            return $.error("[undefined instance] No inputTags instance found.");
        }

        return window.inputTags.methods[options].apply(this, Array.prototype.slice.call(arguments, 1));
    } else {
        $.error("[undefined method] The method [" + options + "] does not exists.");
    }
};

$.fn.inputTags.defaults = {
    tags: [],
    keys: [],
    minLength: 2,
    maxLength: 30,
    max: 10,
    email: false,
    only: true,
    init: false,
    create: false,
    update: false,
    destroy: false,
    focus: false,
    selected: false,
    unselected: false,
    change: false,
    autocompleteTagSelect: false,
    editable: true,
    autocomplete: {
        values: [],
        only: false
    },
    errors: {
        empty: 'Attention, vous ne pouvez pas ajouter un tag vide.',
        minLength: 'Attention, votre tag doit avoir au minimum %s caractères.',
        maxLength: 'Attention, votre tag ne doit pas dépasser %s caractères.',
        max: 'Attention, le nombre de tags ne doit pas dépasser %s.',
        email: 'Attention, l\'adresse email que vous avez entré n\'est pas valide',
        exists: 'Attention, ce tag existe déjà !',
        autocomplete_only: 'Attention, vous devez sélectionner une valeur dans la liste.',
        timeout: 8000
    }
};

})(jQuery);

    </script>
   
@endsection