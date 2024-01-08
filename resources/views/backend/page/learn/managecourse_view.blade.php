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
        <h1 class="page-title">Manager Course</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard of course</li>
        </ol>
    </div>
@endpush
    
      <div class="auto-container"> 
        <div class="form-rows">
            <div class="data-dashboard">
                <div class="showing-data-dashboard">
                    <div class="dashboard-list">
                        <a href="">
                            <i class="fas fa-link"></i>
                            <h4>16</h4>
                            <p>Active Courses</p>
                        </a>
                    </div>
                    <div class="dashboard-list">
                        <a href="">
                            <i class="fas fa-won-sign"></i>
                            <h4>16</h4>
                            <p>Upcoming Courses</p>
                        </a>
                    </div>
                    <div class="dashboard-list">
                        <a href="">
                            <i class="fas fa-unlink"></i>
                            <h4>16</h4>
                            <p>Pending Courses</p>
                        </a>
                    </div>
                    <div class="dashboard-list">
                        <a href="">
                            <i class="far fa-star"></i>
                            <h4>16</h4>
                            <p>Free Courses</p>
                        </a>
                    </div>
                    <div class="dashboard-list">
                        <a href="">
                            <i class="far fa-tags"></i>
                            <h4>16</h4>
                            <p>Paid Courses</p>
                        </a>
                    </div>
                    
                    
                </div>
            </div>
            <div class="main-listing-dashboard">
                <div class="search-box">
                    <div class="main-tittle-lists">
                        <span>COURSE LIST</span>
                    </div>
                    <div class="search-forms-box">
                        <div class="main-searchslists">
                            <label for="Categoies">Categories</label>
                            <i class="fas fa-sort-down"></i>
                            <select name="" id="">
                                <option value="">ALL</option>
                            </select>
                        </div>
                        
                          
                        <div class="main-searchslists">
                            <label for="Status">Status</label>
                            <i class="fas fa-sort-down"></i>
                            <select name="" id="">
                                <option value="">ALL</option>
                            </select>
                        </div>
                        <div class="main-searchslists">
                            <label for="Instuctor">Instructor</label>
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
                        <div class="main-searchslists">
                            <label for="Price">Price</label>
                            <i class="fas fa-sort-down"></i>
                            <select name="" id="">
                                <option value="">ALL</option>
                            </select>
                        </div>
                        <div class="main-searchslists">
                            <button>Filter</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="listing-search-main">
                <div class="listing-show-entries">
                    <span>Show 
                        <select name="" id="">
                            <option value="">5</option>
                        </select>
                        entries
                    </span>
                </div>
                <div class="listing-search-list">
                    <span>
                        Search: 
                        <input type="text">
                    </span>
                </div>
            </div>
            <div class="blogs-post-display">
                <table class="table table-bordered mb-0">
                        <thead>
                            <tr class="main-title-blogsshow">
                                <th> #  </th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Lesson and section</th>
                                <th class="text-center">Enrolled Student</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $key => $singleCourse)
                               <tr>
                                   <td class="align-middle text-center">
                                           {{ $loop->iteration }}
                                   </td>
                                   <td class="text-nowrap align-middle"><a  class="a-colour">{{$singleCourse->title}}</a></td>
                                   <td class="text-nowrap align-middle"><span class="course-badge-dark">{{$singleCourse->category}}</span></td>
                                   <td class="text-nowrap align-middle">
                                    @php
                                        $SectionCount = \App\Models\Learn\learn_section::where('course_id', $singleCourse->id)->count();
                                        $LessonCount = \App\Models\Learn\enrollment_courses::where('course_id', $singleCourse->id)->count();
                                    @endphp

                                    <span>  Section: {{ $SectionCount }} <br>
                                            Lesson: {{ $LessonCount }}
                                    </span></td>
                                    @php
                                        $EnrollCount = \App\Models\Learn\enrollment_courses::where('course_id', $singleCourse->id)->count();
                                    @endphp

                                    <td class="align-middle text-center">Enrollment Count: {{ $EnrollCount }}</td>
                                   <td class="text-center align-middle">
                                        @if ($singleCourse->status == 'publish')
                                            <span class="status-active">Active</span>
                                        @elseif ($singleCourse->status == 'pending')
                                            <span class="status-pending">Pending</span>
                                        @elseif ($singleCourse->status == 'upcoming')
                                            <span class="status-upcoming">Upcoming</span>
                                        @endif
                                    </td>
                                   <td class="text-center align-middle">
                                       <span>
                                        <p>@if ($singleCourse->is_free_course == '1')
                                                <span class="course-badge-dark">Free course</span>
                                            @elseif ($singleCourse->is_free_course == '0')
                                                <span class="course-badge-dark">NRP: {{$singleCourse->price }} with 
                                                    {{ number_format(($singleCourse->discounted_price) / $singleCourse->price * 100, 2) }}%
                                                    <br></span>Lifetime
                                            @endif
                                        </p>
                                            
                                       </span>
                                   </td>
                                   <td style="position: reletive;">
                                    <div id="menu-options-{{ $key }}" class="hidden showing-menus">
                                        <div class="menings">
                                            <div class="showing-menings" >
                                                <ul>
                                                    <li><a href="#">View course on frontend</a></li>
                                                    <li><a href="#">Go to course playing page</a></li>
                                                    <li><a href="#">Academic progress</a></li>
                                                    <li><a href="{{ url('editcourse_view/'.$singleCourse->id)}}">Edit this course</a></li>
                                                    <li><a href="#">Section and lesson</a></li>
                                                    <li><a href="#">Mark as active</a></li>
                                                    <li><a href="#">Delete</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <button id="menu-button-{{ $key }}" class="menu-coursedash">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    
                                   </td>
                                
                                   
                               </tr>
                               @endforeach 
                               
                           </tbody>
                        
                    </table>
                </div>
        </div>
    </div>
    <script>
        @foreach ($course as $key => $singleCourse)
    const menuButton_{{ $key }} = document.getElementById("menu-button-{{ $key }}");
    const menuOptions_{{ $key }} = document.getElementById("menu-options-{{ $key }}");

    menuButton_{{ $key }}.addEventListener("click", function(event) {
        event.stopPropagation();

        if (menuOptions_{{ $key }}.style.display === "block") {
            menuOptions_{{ $key }}.style.display = "none";
        } else {
            // Close all other menu options
            @foreach ($course as $innerKey => $innerCourse)
                if ({{ $key }} !== {{ $innerKey }}) {
                    document.getElementById("menu-options-{{ $innerKey }}").style.display = "none";
                }
            @endforeach

            menuOptions_{{ $key }}.style.display = "block";
        }
    });

    document.body.addEventListener("click", function(event) {
        if (!menuButton_{{ $key }}.contains(event.target) && !menuOptions_{{ $key }}.contains(event.target)) {
            menuOptions_{{ $key }}.style.display = "none";
        }
    });
@endforeach

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
   
@endsection