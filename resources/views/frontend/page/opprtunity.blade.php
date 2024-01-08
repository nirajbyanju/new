@extends('frontend.layouts.layout') 
@section('title', 'Opportunity')
@section('content')
    @push('head')
    <link href="{{asset('opcn/frontend/css/opportunity-view.css')}}" rel="stylesheet">

    @endpush
    @push('script')
    @endpush
<div class="auto-container">
    <section class="opportunity-view-dashboard">
        <div class="anim-icon">
            <div class="icon anim-icon-1 rotate-me " style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
            <div class="icon anim-icon-2 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-3 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-4 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
        </div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('opcn/images/shape/opporunity/shape-4.png')}}); color:#3854A5;  "></div>
            <div class="pattern-2" style="background-image: url({{asset('opcn/images/shape/opporunity/shape-5.png')}});"></div>
            <div class="pattern-3" style="background-image: url({{asset('opcn/images/shape/opporunity/shape-6.png')}});"></div>
        </div>
        <div class="opportunity-intro-view">
            <div class="opportunity-view-text">
                <h2>Scholarships, Internships, Grants
                    & Entrepreneurships </h2>
                <p>Explore numerous employment options and collaborate with your desired organizations to fulfill your career aspirations.</p>
            </div>
            <div class="opportunity-view-image">
                <figure class="image-layer"><img src="{{asset('opcn/images/resource/testimonial-image-2.png')}}" alt=""></figure>
            </div>
        </div>
    </section>
    {{-- Image slider --}}
    <section id="tranding">
        <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                        <a href="{{ route('viewingopp', ['type' => 'internship']) }}"><img src="{{asset('opcn/images/slider/opporunity/internships.png')}}" alt="Tranding"></a>
                    </div> 
                </div>
                <!-- Slide-end -->
                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                        <a href="{{ route('viewingopp', ['type' => 'entrepreneurship']) }}"><img src="{{asset('opcn/images/slider/opporunity/entrepreneurship.png')}}" alt="Tranding"></a>
                    </div> 
                </div>
                <!-- Slide-end -->
                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                        <a href="{{ route('viewingopp', ['type' => 'scholarships']) }}"> <img src="{{asset('opcn/images/slider/opporunity/scholarships.png')}}" alt="Tranding"></a>
                    </div> 
                </div>
                <!-- Slide-end -->
                <!-- Slide-start -->
                <div class="swiper-slide tranding-slide">
                    <div class="tranding-slide-img">
                        <a href="{{ route('viewingopp', ['type' => 'grants']) }}"><img  src="{{asset('opcn/images/slider/opporunity/grants.png')}}" alt="Tranding"></a>
                    </div> 
                </div>
                <!-- Slide-end -->
                
            </div>
            <div class="tranding-slider-control">
                <div class="swiper-pagination"></div>
            </div>
        </div>
     </section>

     <section class="our-partners">
        <div class="sec-heading">
            <h2>Our Partners</h2>                
        </div>
        <div class="oppsilder">
            <div class="opp_slider_header">
                <h2> Get Opportunity in</h2>
                <span>Dream Country:</span>
            </div>
            <div class="opp_slider_photo owl-carousel">
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry1.png')}}" alt="Country 1">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry2.png')}}" alt="Country 2">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry3.png')}}" alt="Country 3">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry4.png')}}" alt="Country 4">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry5.png')}}" alt="Country 5">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry6.png')}}" alt="Country 6">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry7.png')}}" alt="Country 7">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry8.png')}}" alt="Country 8">
                </div>
                <div class="opp_inner">
                    <img src="{{asset('opcn/images/opportunity/country/cuntry8.png')}}" alt="Country 9">
                </div>
            </div>
        </div>                
    </section>

    <section>
        <div class="featuredopporunity">
           <div class="featureopporunity_tittle">
            Featured Opportunity-Interns
            <span>
                Participate in these exceptional opportunities curated for the exceptional you!
            </span>
            </div>
       
            <div class="tab active-tab" id="tab-1">
                <div class="opporunity-intershps">                    
                    @foreach ($internships as $posting)
                    <a href="{{ url('details-opporunity', ['type' => $posting->type, 'id' => $posting->id]) }}">
                    <div class="feature-block">
                        <div class="feature-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-boxs">
                               
                                <div class="lower-contents">
                                    <div class="author-boxs">
                                    <div class="inners">
                                            <img src="{{asset('opcn/uploads/opportunity/' .$posting->uploadcover)}}" alt="">
                            
                                          </div>
                                       
                                    </div>
                                    <div class="iteamsmain">
                                    <div class="iteams">
                                        {{$posting->tittleofopportunity}} | {{$posting->position}}
                                        
                                    </div>
                                    
                                    <div class="icons_main">
                                        <div class="icon_main">
                                            <i class="fas fa-users"></i>
                                            <span>{{$posting->numberofopportunity}} required</span>
                                        </div>
                                        <div class="icon_main">
                                            <i class="far fa-calendar-times"></i>
                                            <span>@if(Carbon\Carbon::now()->lt($posting->dateline))
                                                {{ Carbon\Carbon::now()->diffInDays($posting->dateline) }} days left
                                                @else
                                                Due date Over
                                                @endif</span>
                                        </div>
                                    </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </a>
                    @endforeach
                </div>
        
    </section>
    <section class="feature-section-opp">
        
        <div class="auto-container">
            
            <div class="three-item-carousel owl-carousel ">
                @foreach ($scholarships as $postings)
                <a href="{{ url('details-opporunity', ['type' => $postings->type, 'id' => $postings->id]) }}">
                    <div class="feature-block-one">
                        <img src="{{asset('opcn/uploads/opportunity/' .$postings->uploadcover)}}" alt="Poster Photo"> 
                    </div>
                </a>
                @endforeach
                 
            </div>
        </div>
        
    </section>
    <!-- feature-section end -->

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    
    <script>
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
            loop: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
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