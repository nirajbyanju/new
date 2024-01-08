@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')
    @push('head')
        <link href="{{asset('opcn/css/learn.css')}}" rel="stylesheet">
        <style>
            .smenus {
    display: none;
}
.btnmenus i{
    line-height: 3px;
    margin-right: 4px;
}
.btnmenus{
    font-size: 18px;
  font-weight: 600;
  line-height: 0px;
  color: #2b2a2a;
  padding: 20px 22px !important;
  background-color: aliceblue;
  border-bottom: solid 3px  #ffff;
  padding: -29px;
  display: flex;
  height: 20px;
}
.btnmenus:hover{
    color: #fff;
    background-color: #151A50;
}
.recordLink i{
    line-height: 3px;
    margin-right: 4px;
}
.recordLink{
    font-size: 14px;
  font-weight: 600;
  line-height: 0px;
    background-color: aliceblue;
  color: #000000;
  padding-bottom: 20px ;
  padding-top: 20px;
  padding-left: 42px;
  padding-right: 22px; 
  border-bottom: solid 3px  #ffff;
  padding: -29px;
  display: flex;
  height: 20px;
}
.active {
    font-size: 14px;
    font-weight: 600;
    line-height: 0px;
    color: #fff;
    padding-bottom: 20px ;
    padding-top: 20px;
    padding-left: 42px;
    padding-right: 22px; 
    background-color: #3854A5;
    border-bottom: solid 3px  #ffff;
    padding: -29px;
    display: flex;
    height: 20px;
}
.recordLink:hover{
    color: #fff;
    background-color: #151A50;
}

        </style>
    @endpush
    @push('script')
    <script>
       document.addEventListener("DOMContentLoaded", function() {
    const menuItems = document.querySelectorAll('.menu .item');

    menuItems.forEach(function(item) {
        item.addEventListener('click', function(event) {
            const submenu = this.querySelector('.smenus');
            const otherSubmenus = document.querySelectorAll('.smenus');
            
            // Close all other open submenus except the clicked one
            otherSubmenus.forEach(function(otherSubmenu) {
                if (otherSubmenu !== submenu) {
                    otherSubmenu.style.display = 'none';
                }
            });

            if (submenu) {
                event.preventDefault(); // Prevent default anchor behavior

                // Check if the target clicked is inside the submenu
                if (!submenu.contains(event.target)) {
                    submenu.style.display = (submenu.style.display === 'none' ? 'block' : 'none');
                }
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.recordLink');

    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default behavior of the anchor tag

            // Remove 'active' class from other links
            links.forEach(function(otherLink) {
                otherLink.classList.remove('active');
            });

            // Add 'active' class to the clicked link
            link.classList.add('active');
        });
    });
});





    </script>
    @endpush
    <div class="auto-container">
        <div class="main-courses-showing-details">
            <div class="courses-main-title-showing">
                <div class="courses-main-title-showing-top">
                    <span>Chapter List</span>
                </div> 
                <div class="courses-main-title-showing-bottom">
                            
                            <ul class="menu">
                                @foreach ($section as $sections)
                                    <li class="item" id="profile">
                                        <a href="#" class="btnmenus">
                                            <i class="fas fa-terminal"></i> {{$sections->title}}
                                        </a>
                                        @php
                                            $lessons = \App\Models\Learn\learn_lesson::where('course_id', $course->id)
                                                ->where('section_id', $sections->id)
                                                ->get();
                                        @endphp


                                        <ul class="smenus" style="display: none">
                                            @foreach ($lessons as $lesson)
                                                <li>
                                                    <a href="" class="recordLink" data-record-id="{{$lesson->id}}">
                                                        <i class="fas fa-terminal"></i> {{$lesson->title}}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                            
                     
                   
                </div>
            </div>
            <div class="courses-main-content-showing" id="recordDetails">
                <p>{{$course->summary}}</p>   
            </div>
        </div>        
    </div>
    <script>
    const recordLinks = document.querySelectorAll('.recordLink');
    const recordDetails = document.getElementById('recordDetails');

    recordLinks.forEach(link => {
      link.addEventListener('click', async (event) => {
        event.preventDefault(); // Prevents the default behavior of the click event

        const recordId = link.dataset.recordId; // Retrieves the value of the 'data-record-id' attribute

        const response = await fetch(`/records/${recordId}`); // Sends a request to the server to retrieve data
        const record = await response.json(); // Parses the response data as JSON

        // Updates the HTML content of the element with the id 'recordDetails'
        recordDetails.innerHTML = `
        <div class="courses-main-content-showings">
            <p>${record.summary}</p>
          </div>
        `;
      });
    });
    </script>
@endsection
