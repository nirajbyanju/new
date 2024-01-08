@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')

<section class="page-title style-two" style="background-image: url({{asset('opcn/images/background/page-title2.jpg')}});">
    <div class="auto-container">
        <div class="content-box centred mr-0">
            <div class="title">
                <h1>About Us</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!-- about-section -->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content_block_3">
                    <div class="content-box">
                        <div class="sec-title">
                            <h2>About What We Do</h2>
                        </div>
                        <div class="text">
                            <p>Opportunities Sharing Circle is providing  a platform which globally share these opportunities and 
                                ensure free and equal access regardless of geographic location.  Providing recruitment solutions
                                 to employers finding, fostering and preparing the right candidates in every possible ways with an 
                                 effective tracking system and a dedicated team of customer service to both; the employers and the job seekers, 
                                 has always been our primary goal.</p>
                            <h3>Why You Follow and Subscribe us</h3>
                            <p>You should subscribe us because Opportunities Sharing Circle  help you to get maximum opportunities
                                 for you subscribe us every day to get maximum Opportunities We help them 
                                in accelarating their personal and professional development </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <div class="image-pattern">
                            <div class="pattern-1" style="background-image: url({{asset('opcn/images/shape/shape-16.png')}});"></div>
                            <div class="pattern-2" style="background-image: url({{asset('opcn/images/shape/shape-16.png')}});"></div>
                        </div>
                        <figure class="image">
                            <video width="100%" height="100%" controls autoplay muted>
                                <source src="{{asset('opcn/images/opcn.mp4')}}" type="video/mp4">
                                <source src="movie.ogg" type="video/ogg">
                                
                              </video>
                            <img src="{{asset('opcn/images/opcn.mp4')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->
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
                                <p>“I have had a great experience using OPCN to post job vacancies and school scholarship opportunities. The platform is easy to use and has made it straightforward for me to reach a wide audience of qualified candidates. The response rate has been excellent and I have been able to fill positions and award scholarships quickly and efficiently. Thank you, OPCN, for providing such a valuable and convenient service.”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-3.png')}}" alt=""></figure>
                                <h3>Bimal Nhemafulki</h3>
                                <span class="designation">CEO of Ktm Immigration</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“  I have found OPCN to be an excellent resource for staying informed and connected. The platform is easy to use, accessible from any device, and provides a wealth of useful and relevant information. I have also found the conversations with OPCN to be interesting and engaging. I highly recommend OPCN to other students looking for a reliable and comprehensive resource for academic and professional development. Thank you, OPCN!”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-2.png')}}" alt=""></figure>
                                <h3>Er. Puja Byanju</h3>
                                <span class="designation">Engineer at Innovation Costantacy</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“ I have been using OPCN and it has exceeded my expectations. It is easy to use, accessible from anywhere, and provides useful and relevant information. The platform is also interesting and personalized to my specific needs and interests. I cherish every chance I get to use OPCN and highly recommend it to others.”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-4.png')}}" alt=""></figure>
                                <h3>Niraj Byanju</h3>
                                <span class="designation">senior Grahic Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->

<!-- process-section -->
<section class="process-section centred sec-pad">
    
    <div class="auto-container">
        <div class="sec-title centred">
           
            <h2>How it Works</h2>
            <p>Join OPCN to access a range of opportunities including vacancies, scholarships, courses, fellowships and entrepreneur programs. 
                By creating an account, you will receive updates and be able to post your company's vacancies with ease. 
                The account creation process involves providing personal information, verifying email address, completing a profile, accepting terms and conditions,
                 and confirming account creation</p>
        </div>
        <div class="inner-content">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                    <div class="process-block-one">
                        <div class="inner-box">
                            <span class="count wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">01</span>
                            <div class="text wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-user"></i></div>
                                <h3>Create Account</h3>
                                <p>Join OPCN, create an account to stay informed about opportunities and easily post your company's vacancies.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                    <div class="process-block-one">
                        <div class="inner-box">
                            <span class="count wow fadeInDown animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">02</span>
                            <div class="text wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-sign-in"></i></div>
                                <h3>Post Your Vacancy</h3>
                                <p>Find your ideal hire by posting your company's vacancies with us and taking advantage of our opportunity matching services.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 process-block">
                    <div class="process-block-one">
                        <div class="inner-box">
                            <span class="count wow fadeInDown animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">03</span>
                            <div class="text wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="icon-box"><i class="fas fa-dollar-sign"></i></div>
                                <h3>Search Opportunity</h3>
                                <p>Discover a wealth of opportunities including vacancies, scholarships, free courses, fellowships, and entrepreneur programs all in one.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-section end -->






<!-- subscribe-section end -->
                        
</section>


@endsection
