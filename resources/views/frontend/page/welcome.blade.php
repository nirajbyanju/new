@extends('layout')
@section('title')Opportunities Circle Nepal Scholarships, Fellowships, Internships, Jobs @endsection
@section('meta')
    <meta name="keywords" content="Scholarships, Fellowships, Internships, Jobs">
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{asset('images/ms-icon-144x144.png')}}" />
    <meta name="theme-color" content="#ffffff" />
    <meta name="description"content="opportunitiescirclenepal.com - An online Scholarships, Fellowships, Internships, 
                job search and career development for youth in Nepal.A one-stop-shop platform that empowers young individuals 
                to discover and stay informed about various opportunities, such as scholarships, internships,and job openings, 
                to help them achieve their goals and aspirations." />
    <meta name="keywords" content="opportunitiescirclenepal, opportunities,circlenepal, opcn, jobs in Nepal, online job in Nepal, 
                job vacancies in Nepal, job vacancy in Nepal, Scholarships, Fellowships, Internships, job site in Nepal recent, job 
                opportunities in Nepal, job sites in Nepal,Opportunities, OPCN, opcn, find jobs in Nepal, job search in Nepal, job 
                search. " />
    <meta property="og:image" content="{{asset('/images/ms-icon-144x144.png')}}" />
    <meta property="og:title" content="Opportunities Circle Nepal Scholarships, Fellowships, Internships, Jobs" />
    <meta property="og:site_name" content="opportunitiescirclenepal.com" />
    <meta property="og:type" content="website" />
    <meta property="fb:admins" content="100001300325146" />

    <!--twitter cards-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:image" content="{{asset('/images/ms-icon-144x144.png')}}">
    <meta name="twitter:site" content="@JopportunitiescirclenepalDotCom">
    <meta name="twitter:creator" content="@opportunitiescirclenepalDotCom">
    <link rel="canonical" href="https://opportunitiescirclenepal.com/" />
@endsection
@section('link')
    <link href="{{asset('opcn/css/nice-select.css')}}" rel="stylesheet">
@endsection
@section('style')
    <style>
       .blurred-background {
            filter: blur(5px);
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            }
        #DIV_1 {
            background-color: rgb(255, 255, 255);
            border-radius: 4px;
            border: 0px solid rgb(79, 79, 79);
            box-shadow: rgba(0, 0, 0, 0.9) 0px 0px 5px 0px;
            top: 13rem;
            left: 50%;
            transform: translate(-50%, 0);
            
            
            position: absolute;
            /* -1/2 of the width */
            padding: 0.5rem;
            font-family: Roboto;
            font-size: 13px;
            line-height: 18.5714px;
            width: 52rem;
            z-index: 1100;
            }
        @media (max-width: 767px) {
        #DIV_1 {
            width: 80%;
            top: 8rem;
        }
        }
        @media (max-width: 767px) {
        #P_2 {
            width: 80%;
        }
        }
        @media (max-width: 767px) {
        #IMG_3 {
            width: 80%;
        }
        }
        #P_2 {
            block-size: 246.534px;
            border-block-end-color: rgb(79, 79, 79);
            border-block-start-color: rgb(79, 79, 79);
            border-inline-end-color: rgb(79, 79, 79);
            border-inline-start-color: rgb(79, 79, 79);
            box-sizing: border-box;
            caret-color: rgb(79, 79, 79);
            color: rgb(79, 79, 79);
            column-rule-color: rgb(79, 79, 79);
            cursor: default;
            height: auto;
            inline-size: 246.534px;
            margin-block-end: 10px;
            margin-block-start: 0px;
            perspective-origin: 123.261px 123.261px;
            text-decoration: none solid rgb(79, 79, 79);
            text-emphasis-color: rgb(79, 79, 79);
            text-size-adjust: 100%;
            transform-origin: 123.267px 123.267px;
            border: 0px none rgb(79, 79, 79);
            font: 13px / 19.5px Roboto;
            margin: 0px 0px 10px;
            outline: rgb(79, 79, 79) none 0px;
            width: 50rem;
        }/*#P_2*/

        #IMG_3 {
            block-size: auto;
            border-block-end-color: rgb(79, 79, 79);
            border-block-start-color: rgb(79, 79, 79);
            border-inline-end-color: rgb(79, 79, 79);
            border-inline-start-color: rgb(79, 79, 79);
            box-sizing: border-box;
            caret-color: rgb(79, 79, 79);
            color: rgb(79, 79, 79);
            column-rule-color: rgb(79, 79, 79);
            cursor: default;
            vertical-align: middle;
            perspective-origin: 7.70421875rem 7.70421875rem;
            text-decoration: none solid rgb(79, 79, 79);
            text-emphasis-color: rgb(79, 79, 79);
            text-size-adjust: 100%;
            transform-origin: 7.70421875rem 7.70421875rem;
            vertical-align: middle;
            border: 0px none rgb(79, 79, 79);
            font: 13px / 19.5px Roboto;
            outline: rgb(79, 79, 79) none 0px;
            }/*#IMG_3*/



        #BUTTON_4 {
            cursor: pointer;
            border: 1px solid #fff;
            padding: 1% 2%;
            background: #c4161c;
            box-shadow: 0 0 4px rgb(0 0 0 / 30%);
            position: absolute;
            top: 0;
            right: -15px;
            border-radius: 5px;
            color: #FFF;
        }/*#BUTTON_4*/
    </style>
@endsection
@section('script')
    <script src="{{asset('opcn/js/jquery.nice-select.min.js')}}"></script>
    <script>
                // JavaScript to show the pop-up content
                // JavaScript to show the pop-up content
            // JavaScript to show the pop-up content
            // JavaScript to show the pop-up content
            let popupCounter = 0;

            function showPopup() {
            if (popupCounter >= 2) {
                return;
            }
            document.getElementById("DIV_1").style.display = "block";
            document.getElementById("background-overlay").style.display = "block";
            popupCounter++;
            setTimeout(closePopup, 9000);
            }
            // JavaScript to close the pop-up content
            function closePopup() {
            document.getElementById("DIV_1").style.display = "none";
            document.getElementById("background-overlay").style.display = "none";
            }
            // Automatically show the pop-up when the page loads
            window.onload = function() {
            showPopup();
            };
            // Event listener for the close button
            document.getElementById("BUTTON_4").addEventListener("click", closePopup);

    </script>

@endsection
@section('content')
    <div class="auto-container">
        <div id="background-overlay" style="display: none;  position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 800;"></div>
            <div id="DIV_1">
                <!-- <p></p> -->

                <p id="P_2">
                    <img class="img-responsive" alt="" src="{{asset('opcn/images/popup.png')}}"  id="IMG_3" />
                </p> 
                <button id="BUTTON_4">
                    X
                </button>
            </div>
        </div>
    <!-- Modal -->
    
    

            <!-- banner-section -->
            <section class="banner-section centred">
                <div class="auto-container">
                    
                    <div class="row clearfix">
                        <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 content-column">
                            <div class="content-box">
                                <h1>Leading globally opportunities discovering<br />platform for Nepali</h1>
                                <div class="form-inner">
                                    <form action="" method="get">
                                        <div class="input-inner clearfix">
                                            <div class="form-group">
                                                <i class="icon-2"></i>
                                                <input type="search" name="search" placeholder="Search Keyword..."  value="{{$search}}">
                                            </div>
                                            <div class="form-group">
                                                <i class="icon-3"></i>
                                                <select class="wide"  >
                                                <option data-display="Select Location">Select Location</option>
                                                <option value="Province 1">Province 1</option>
                                                <option value="Madhesh">Madhesh</option>
                                                <option value="Bagmati">Bagmati</option>
                                                <option value="Gandaki">Gandaki</option>
                                                <option value="Lumbini">Lumbini</option>
                                                <option value="Karnali">Karnali</option>
                                                <option value="Sudur Paschim">Sudur Paschim</option>
                                                </select>
                                            </div>
                                            <div class="form-group"  >
                                                <i class="icon-4"></i>
                                                <select class="wide" >
                                                <option data-display="Select Category">Select Category</option>
                                                <option value="Intership">Intership</option>
                                                <option value="Int. Opportunity">Int. Opportunity</option>
                                                <option value="Account/Finance">Account/Finance</option>
                                                <option value="IT/tech jobs">IT/tech jobs</option>
                                                <option value="Banking">Banking</option>
                                                <option value="NGO/INGO">NGO/INGO</option>
                                                <option value="Education">Education</option>
                                                <option value="Freshers Jobs">Freshers Jobs</option>
                                                <option value="Front Desk">Front Desk</option>
                                                <option value="Hospitality">Hospitality</option>
                                                <option value="Health Care">Health Care</option>
                                                </select>
                                            </div>
                                            <div class="btn-box">
                                                <button type="submit"><i class="icon-2"></i>Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="radio-select-box clearfix">
                                        <li>
                                            <div class="single-checkbox">
                                                <input type="radio" name="check-box" id="check1" checked="">
                                                <label for="check1"><span></span>All</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-checkbox">
                                                <input type="radio" name="check-box" id="check2">
                                                <label for="check2"><span></span>Intership</label>    
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-checkbox">
                                                <input type="radio" name="check-box" id="check3">
                                                <label for="check3"><span></span>Scholarship</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="single-checkbox">
                                                <input type="radio" name="check-box" id="check4">
                                                <label for="check4"><span></span>Job Vacancy </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section>
            <!-- banner-section end -->


            <section id="tranding">
        
                <div class="swiper tranding-slider">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{url('/internship')}}"><img src="{{asset('opcn/images/slider/internships.png')}}" alt="Tranding"></a>
                        </div> 
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                    
                        <div class="tranding-slide-img">

                                <a href="{{url('/onlinecourses')}}"><img  src="{{asset('opcn/images/slider/onlinecourse.png')}}" alt="Tranding"></a>

                        </div> 
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                        <a href="{{url('/entreneurshipview')}}"><img src="{{asset('opcn/images/slider/entrepreneurship.png')}}" alt="Tranding"></a>
                    </div> 
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <a href="{{url('/scholarshipview')}}"> <img src="{{asset('opcn/images/slider/scholarships.png')}}" alt="Tranding"></a>
                        </div> 
                    </div>
                    <!-- Slide-end -->
                    
                </div>
        
                <div class="tranding-slider-control">
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-next slider-arrow">
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>
                </div>
            </section>
        
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
            <script >
            var TrandingSlider = new Swiper('.tranding-slider', {
                effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                
                modifier: 1,
                slideShadows: true,
        },
        loop:true,
        /**/autoplay: {
            delay: 9500,
            disableOnInteraction:false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
        });
        
            </script>
            



        
            <!-- feature-style-two -->
            <section class="feature-style-two">
                <div class="auto-container">
                

                    <div class="sec-title centred">
                        <h2>Recent Opportunities</h2>
                    </div>
                        <div class="tabs-content">
                            <div class="tab active-tab" id="tab-1">
                                <div class="row clearfix">
                                    
                                    @foreach ($postingvacancy as $posting)
                                    
                                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                                        <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="inner-box">
                                            
                                                <div class="lower-content">
                                                    <div class="author-box">
                                                        <div class="inner">
                                                            <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="">
                                                            <h6>{{$posting->nameofcompany}}</h6></h6>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="category"><i class="fas fa-tags"></i><p>{{$posting->categoryofvacancy}}</p></div>
                                                    <h3><a  href="{{ url('detail',$posting->id)}}">{{$posting->position}}</a></h3>
                                                    <ul class="info clearfix">
                                                        <i class="far fa-clock"></i>
                                                            {{Carbon\Carbon::parse($posting->publishdate)->diffForHumans()}}
                                                        <i class="remaining"><i class="far fa-clock">  &nbsp</i>@if(Carbon\Carbon::now()->lt($posting->dateline))
                                                        {{ Carbon\Carbon::now()->diffInDays($posting->dateline) }} days left
                                                        @else
                                                        Due date Over
                                                        @endif</i>
                                                        
                                                        
                                                        </li>
                                                        <li><i class="fas fa-map-marker-alt"></i>{{$posting->workingplace}}</li>
                                                    </ul> 
                                                    <div class="lower-box">
                                                        <h5><span>Deadline:</span>{{Carbon\Carbon::parse($posting->dateline)->format('j M Y')}}</h5>
                                                        <h5 id="inerjobtype">{{$posting->jobstypes}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                    @endforeach
                                </div>
                            
                                <div class="text-center">
                                    <a href="{{url('recentpost')}}"class="theme-btn-one">Load More</a>
                                </div>
                                    
            </section>
            <!-- feature-style-two end -->

            <!-- testimonial-section -->
    <section class="testimonial-section bg-color-1 sec-pad">
        <figure class="image-layer"><img src="{{asset('opcn/images/resource/testimonial-image-1.png')}}" alt=""></figure>
        <div class="anim-icon">
            <div class="icon anim-icon-1 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
            <div class="icon anim-icon-2 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-3 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-4 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
        </div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('opcn/images/shape/shape-4.png')}});"></div>
            <div class="pattern-2" style="background-image: url({{asset('opcn/images/shape/shape-5.png')}});"></div>
            <div class="pattern-3" style="background-image: url({{asset('opcn/images/shape/shape-6.png')}});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 inner-column">
                    <div class="inner-box">
                        <div class="sec-title light">
                            <span>Testimonials</span>
                            <h2>What client’s say?</h2>
                        </div>
                        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>“I have had a great experience using Opportunities Circle Nepal to post job vacancies and school scholarship opportunities. The platform is easy to use and has made it straightforward for me to reach a wide audience of qualified candidates. The response rate has been excellent and I have been able to fill positions and award scholarships quickly and efficiently. Thank you, Opportunities Circle Nepal, for providing such a valuable and convenient service.”</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-3.png')}}" alt=""></figure>
                                    <h3>Bimal Nhemafulki</h3>
                                    <span class="designation">CEO of Ktm Immigration</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>“  I have found Opportunities Circle Nepal to be an excellent resource for staying informed and connected. The platform is easy to use, accessible from any device, and provides a wealth of useful and relevant information. I have also found the conversations with Opportunities Circle Nepal to be interesting and engaging. I highly recommend Opportunities Circle Nepal to other students looking for a reliable and comprehensive resource for academic and professional development. Thank you, Opportunities Circle Nepal!”</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-2.png')}}" alt=""></figure>
                                    <h3>Er. Puja Byanju</h3>
                                    <span class="designation">Engineer at Innovation Costantacy</span>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <div class="text">
                                    <p>“ I have been using Opportunities Circle Nepal and it has exceeded my expectations. It is easy to use, accessible from anywhere, and provides useful and relevant information. The platform is also interesting and personalized to my specific needs and interests. I cherish every chance I get to use Opportunities Circle Nepal and highly recommend it to others.”</p>
                                </div>
                                <div class="author-box">
                                    <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-4.png')}}" alt=""></figure>
                                    <h3>Er. Sunil Kharbuja</h3>
                                    <span class="designation">senior Engineerr</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section end -->
            <!-- news-section -->
            <section class="news-section">
                <div class="auto-container">
                    <div class="sec-title centred">
                        <h2>Our Recent Blogs</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{asset('opcn/images/news/news-1.jpg')}}" alt="">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <figure class="admin-thumb"><img src="{{asset('opcn/images/news/admin-1.png')}}" alt=""></figure>
                                        <span class="category">Electronics</span>
                                        <h3><a href="blog-details.html">Including animation in your design system</a></h3>
                                        <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        <span class="post-info">By <a href="blog-details.html">Niraj Byanju</a> - October 13, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{asset('opcn/images/news/news-2.jpg')}}" alt="">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <figure class="admin-thumb"><img src="{{asset('opcn/images/news/admin-2.png')}}" alt=""></figure>
                                        <span class="category">Electronics</span>
                                        <h3><a href="blog-details.html">A digital prescription for the industry.</a></h3>
                                        <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        <span class="post-info">By <a href="blog-details.html">Niraj Byanju</a> - October 13, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <img src="{{asset('opcn/images/news/news-3.jpg')}}" alt="">
                                        <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                    </figure>
                                    <div class="lower-content">
                                        <figure class="admin-thumb"><img src="{{asset('opcn/images/news/admin-3.png')}}" alt=""></figure>
                                        <span class="category">Electronics</span>
                                        <h3><a href="blog-details.html">Strategic & commercial approach with issues.</a></h3>
                                        <p>Lorem ipsum dolor sit amet consectur adipisicing sed do eiusmod tempor incididunt labore.</p>
                                        <span class="post-info">By <a href="blog-details.html">Niraj Byanju</a> - October 13, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- news-section end -->

            <!-- place-section -->
            <section class="place-section  centred">
                <div class="outer-container">
                    <div class="sec-title centred">

                        <h2 class="ourpartners">OUR PARTNERS</h2>
                    </div>
                    <div class="five-item-carousel owl-carousel owl-theme dots-style-one owl-nav-none">
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Apparel Circle Nepal</a></h3>
                                        <span>07 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Oracle Food For Memories</a></h3>
                                        <span>15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-9.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Book Sharimg Circle Nepal</a></h3>
                                        <span>08 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-10.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Opportunities Circle Nepal</a></h3>
                                        <span>05 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Apparel Circle Nepal</a></h3>
                                        <span>07 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Oracle Food For Memories</a></h3>
                                        <span>15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-9.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Book Sharimg Circle Nepal</a></h3>
                                        <span>08 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-10.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Opportunities Circle Nepal</a></h3>
                                        <span>05 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Apparel Circle Nepal</a></h3>
                                        <span>07 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Oracle Food For Memories</a></h3>
                                        <span>15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-9.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Book Sharimg Circle Nepal</a></h3>
                                        <span>08 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-10.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Opportunities Circle Nepal</a></h3>
                                        <span>05 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Apparel Circle Nepal</a></h3>
                                        <span>07 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Oracle Food For Memories</a></h3>
                                        <span>15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-9.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Book Sharimg Circle Nepal</a></h3>
                                        <span>08 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-10.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Opportunities Circle Nepal</a></h3>
                                        <span>05 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-6.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-7.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">KTM Educational </a></h3>
                                        <span>10 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-8.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Oracle Food For Memories</a></h3>
                                        <span>15 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-9.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Book Sharimg Circle Nepal</a></h3>
                                        <span>08 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="place-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('opcn/images/resource/place-10.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <h3><a href="index.html">Opportunities Circle Nepal</a></h3>
                                        <span>05 Listing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- place-section end -->


        






            <!-- subscribe-section -->
            <section class="subscribe-section">
                <div class="pattern-layer" style="background-image: url({{asset('opcn/images/shape/shape-9.png')}});"></div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                            <div class="text">
                                <div class="icon-box"><i class="icon-25"></i></div>
                                <h2>Subscribe to Newsletter</h2>
                                <p>and receive new ads in inbox</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Inout your email address" required="">
                                    <button type="submit" class="theme-btn-one">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <!-- subscribe-section end -->
        








@endsection

