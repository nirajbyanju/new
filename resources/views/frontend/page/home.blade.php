@extends('frontend.layouts.layout') 
@section('title', 'OPSC')
@section('meta')
        <meta name="keywords" content="Scholarships, Fellowships, Internships, Jobs">
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="https://opportunitiescirclenepal.com/images/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <meta name="description"content="opportunitiescirclenepal.com - An online Scholarships, Fellowships, Internships, 
                    job search and career development for All.A one-stop-shop platform that empowers young individuals 
                    to discover and stay informed about various opportunities, such as scholarships, internships,and job openings, 
                    to help them achieve their goals and aspirations." />
        <meta name="keywords" content="jobs in Nepal, jobsite in Nepal, job vacancies in Nepal, job vacancy in Nepal, job site in Nepal recent job vacancies in Nepal, job opportunities in Nepal, job sites in Nepal, find jobs in Nepal, find jobs in Nepal, job search in Nepal" />
        <meta property="og:image" content="https://opportunitiescirclenepal.com/images/ms-icon-144x144.png" />
        <meta property="og:title" content="Opportunities Sharing Circle  Learn, Pratice, Opportunity, Vacancy, Blog" />
        <meta property="og:site_name" content="opportunitiescirclenepal.com" />
        <meta property="og:type" content="website" />
        <meta property="fb:admins" content="100001300325146" />

        <!--twitter cards-->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:image" content="https://opportunitiescirclenepal.com/images/ms-icon-144x144.png">
        <meta name="twitter:site" content="@JopportunitiescirclenepalDotCom">
        <meta name="twitter:creator" content="@opportunitiescirclenepalDotCom">
@endsection
@section('content')

    @push('head')
    <link href="{{asset('opcn/css/nice-select.css')}}" rel="stylesheet">
    
    @endpush
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('opcn/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('opcn/js/jquery.nice-select.min.js')}}"></script>
    <script>
        let popupCounter = 0;
    
        function showPopup() {
            if (popupCounter >= 2) {
                return;
            }
            document.getElementById("DIV_1").style.display = "block";
            document.getElementById("background-overlay").style.display = "block";
            popupCounter++;
            setTimeout(closePopup, 5000);
        }
    
        function closePopup() {
            document.getElementById("DIV_1").style.display = "none";
            document.getElementById("background-overlay").style.display = "none";
        }
    
        window.onload = function() {
            showPopup();
    
            // Attach the event listener to the close button
            document.getElementById("BUTTON_4").addEventListener("click", closePopup);
        };
    </script>
    


 
    
    

    

    @if(count($popmessages) > 0)
        @foreach($popmessages as $popmessage)
        <div class="auto-container">
            <div id="background-overlay" style="display: none;  position: fixed; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 800;"></div>
                <div id="DIV_1">
                    <!-- <p></p> -->
    
                    <p id="P_2">
                        
                        <img class="img-responsive" alt="" src="{{ asset('opcn/uploads/popmessage/' . $popmessage->image) }}" id="IMG_3" />
                   
                    </p> 
                    <button id="BUTTON_4">
                        X
                    </button>
                </div>
            </div>
        @endforeach
        @endif
                    <!-- banner-section -->
                    <section>
                        
                        <div class="auto-container">
                            <section class="testimonial-section">
                                <div class="anim-icon">
                                    <div class="icon anim-icon-1 rotate-me " style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
                                    <div class="icon anim-icon-2 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
                                    <div class="icon anim-icon-3 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
                                    <div class="icon anim-icon-4 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
                                    
                                    <div class="showing-icon"> <img src="{{asset('opcn/images/icons/home-page02.png')}}" alt=""></div>
                                </div>
                            </section>
                            <div class="home-view-opportunity">
                                <div class="home-text-showing-text">
                                    <div class="home-text-showing-text-heading"> 
                                        <h1>
                                            <span>connecting</span>
                                            Learing, Pratice, Recruiters</h1>
                                        <p>But I must explainto you how all this mistaken idea of
                                            denouring pleasure and praising</p>
                                    </div>
                                    <div class="home-text-showing-text-form">
                                        <form action="{{ url('/subscribing') }}" method="post" enctype="multipart/form-data" class="subscribe-form">
                                            @csrf
                                            <input type="text" name="email" placeholder="Type email address">
                                            <button type="submit">Get Started</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="home-text-showing-image">
                                 <div class="main-image">
                                    <img src="{{asset('opcn/images/resource/testimonial-image-5.png')}}" alt="">
                                 </div>
                                </div>

                            </div>
                            
                            
                        </div>
                    </section>
                    

                    <section class="feature-showing-home sec-pad">
                        <div class="auto-container">
                            <div class="feature-showing-menu">
                                <div class="feature-showing-text">
                                <h1>
                                    <span>Connecting</span>
                                    Talent, Hard working, Committed
                                </h1>
                                <p>
                                    Discover opportunities to learn, demonstrate skills,
                                    build your resume, and land a job at your dream
                                    company from around the world.
                                </p>
                            </div>
                            <div class="feature-showing-image">
                                    <div class="first-menu-show">
                                        <div>
                                            <a href="{{url('/frontlearn-view')}}" class="feature-showing-image-a">
                                                <img src="{{asset('opcn/images/resource/home/learn.png')}}" alt="">
                                                <span class="color-blue">learn</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{url('frontpratie-view')}}"class="feature-showing-image-a">
                                                <img src="{{asset('opcn/images/resource/home/pratice.png')}}" alt="">
                                                <span class="color-purple">Pratice</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#}"class="feature-showing-image-a">
                                                <img src="{{asset('opcn/images/resource/home/test.png')}}" alt="">
                                                <span class="color-brown">Test</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="first-menu-show">
                                        <a href="{{url('frontvacancy-view')}}"class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/vacancy.png')}}" alt="">
                                            <span class="color-lightblue">Vacancy</span>
                                        </a><a href=""class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/opporunity.png')}}" alt="">
                                            <span class="color-lightpurple">Opporunity</span>
                                        </a>
                                        <a href="{{url('frontblogs-view')}}"class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/blogs.png')}}" alt="">
                                            <span class="color-orange">Blogs</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
        
   <!-- place-section -->
   <section class="our-partners">
    <div class="sec-heading">
        <h2>Our Partners</h2>                
    </div>
    
    <div class="oppsilder">
        
<div class="opp_slider_header">
            <h2> Get Opportunity with</h2>
            <span>Our Partners:</span>
        </div>
        <div class="opp_slider_photo owl-carousel">
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-6.png')}}" alt="paterner 1">
            </div>
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-7.png')}}" alt="paterner 2">
            </div>
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-8.png')}}" alt="paterner 3">
            </div>
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-9.png')}}" alt="paterner 4">
            </div>
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-10.png')}}" alt="paterner 5">
            </div>
            <div class="opp_inner">
                <img src="{{asset('opcn/images/opportunity/paterner/place-11.png')}}" alt="paterner 6">
            </div>
            
        </div>
    </div>                
</div>
</div>
</section>

<!-- place-section end -->
<section>
    <div class="auto-container">
        <div class="featuredopporunity">
        <div class="featureopporunity_tittle">
            Featured Vacancy-Interns
            <span>
                Have a look at the hot topics that you shouldn't miss!
            </span>
            </div>
    
            <div class="tab active-tab" id="tab-1">
                <div class="rows">
                    <div class="vacancyes-imgs">
                        <img src="{{asset('opcn/images/resource/vacancy/vacancytech.png')}}" alt="section-left-image" loading="lazy">
                    </div> 
                    <div class="vacancyes-imgs">
                        <img src="{{asset('opcn/images/resource/vacancy/vacancytech-67.png')}}" alt="section-left-image" loading="lazy">
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    
</section>



                    <!-- testimonial-section -->
<section class="testimonial-section bg-color-1 sec-pad">
    <figure class="image-layer"><img src="opcn/images/resource/testimonial-image-1.png" alt=""></figure>
    <div class="anim-icon">
        <div class="icon anim-icon-1 rotate-me" style="background-image: url(opcn/images/icons/anim-icon-1.png);"></div>
        <div class="icon anim-icon-2 rotate-me" style="background-image: url(opcn/images/icons/anim-icon-2.png);"></div>
        <div class="icon anim-icon-3 rotate-me" style="background-image: url(opcn/images/icons/anim-icon-2.png);"></div>
        <div class="icon anim-icon-4 rotate-me" style="background-image: url(opcn/images/icons/anim-icon-1.png);"></div>
        <div class="icon anim-icon-5 rotate-me" style="background-image: url(opcn/images/icons/anim-icon-3.png);"></div>
    </div>
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(opcn/images/shape/shape-4.png);"></div>
        <div class="pattern-2" style="background-image: url(opcn/images/shape/shape-5.png);"></div>
        <div class="pattern-3" style="background-image: url(opcn/images/shape/shape-6.png);"></div>
    </div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="testimonials-text">
                <div class="inner-box">
                    <div class="sec-title light">
                        <span>Testimonials</span>
                        <h2>What client’s say?</h2>
                    </div>
                    <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“I have had a great experience using Opportunities Sharing Circle to post job vacancies and school scholarship opportunities. The platform is easy to use and has made it straightforward for me to reach a wide audience of qualified candidates. The response rate has been excellent and I have been able to fill positions and award scholarships quickly and efficiently. Thank you, Opportunities Sharing Circle, for providing such a valuable and convenient service.”</p>
                            </div>
                            {{-- <div class="author-box">
                                <figure class="author-thumb"><img src="opcn/images/resource/testimonial-.png" alt=""></figure>
                                <h3></h3>
                                <span class="designation"></span>
                            </div> --}}
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“  I have found Opportunities Sharing Circle to be an excellent resource for staying informed and connected. The platform is easy to use, accessible from any device, and provides a wealth of useful and relevant information. I have also found the conversations with Opportunities Sharing Circle to be interesting and engaging. I highly recommend Opportunities Sharing Circle to other students looking for a reliable and comprehensive resource for academic and professional development. Thank you, Opportunities Sharing Circle!”</p>
                            </div>
                            {{-- <div class="author-box">
                                <figure class="author-thumb"><img src="opcn/images/resource/testimonial-.png" alt=""></figure>
                                <h3></h3>
                                <span class="designation"></span>
                            </div> --}}
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“ I have been using Opportunities Sharing Circle and it has exceeded my expectations. It is easy to use, accessible from anywhere, and provides useful and relevant information. The platform is also interesting and personalized to my specific needs and interests. I cherish every chance I get to use Opportunities Sharing Circle and highly recommend it to others.”</p>
                            </div>
                            {{-- <div class="author-box">
                                <figure class="author-thumb"><img src="opcn/images/resource/testimonial-.png" alt=""></figure>
                                <h3></h3>
                                <span class="designation"></span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
            
            <!-- Mobile apps notification and information-->
            <section>
                <div class="auto-container">
                    <div class="mobileapps-launcing">
                        <img src="{{asset('opcn/images/resource/mobileapplaunchingsoon.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Mobile apps notification and information end -->        






        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="pattern-layer" style="background-image: url({{asset('opcn/images/shape/shape-9.png')}});"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <div class="icon-box"><i class="fas fa-subscript"></i></div>
                            <h2>Subscribe to OPSC</h2>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <form action="{{ url('/subscribing') }}" method="post" enctype="multipart/form-data" class="subscribe-form">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Input your email address" required="">
                                <button type="submit" class="theme-btn-one">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <?php  

        
        
    ?>
<script>
    $(document).ready(function () {
        $(".opp_slider_photo").owlCarousel({
            items: 3, // Number of items to show in the carousel at a time
            loop: true, // Loop through the images
            autoplay: true, // Enable automatic rotation
            autoplayTimeout: 3000, // Set the time between rotations (in milliseconds)
            autoplayHoverPause: true, // Pause the rotation when the mouse hovers over the carousel
            nav: true, // Show navigation arrows
             // Customize navigation arrows if needed
            responsive: {
                0: {
                    items: 1 // Number of items to show in the carousel on small screens
                },
                768: {
                    items: 8 // Number of items to show in the carousel on medium/large screens
                }
            }
        });
    });
</script>
    


@endsection