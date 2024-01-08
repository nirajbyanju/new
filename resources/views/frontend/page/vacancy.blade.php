@extends('frontend.layouts.layout') 
@section('title', 'vacancy')
@section('content')
    @push('head')
    <link href="{{asset('opcn/frontend/css/vacancy.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    @endpush
<div class="auto-container">
    <section class="vacancy-dashboard-frnt">
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
        <div class="vacancy-intro-view">
            <div class="vacancy-view-text">
                <h2>Jobs vacancy & Hiring Challenges </h2>
                <p>Work for your dream companies by submitting applications to a ton of openings!</p>
                <div class="button-vacancy">
                    <div>
                        <button class="button-explore"><a href="{{ route('vacancyexplore')}}">Explore Now</a> </button>
                    </div>
                    <div>
                        <button class="button-vacancys"> Post Jobs Vacncy</button>
                    </div>
                </div>
            </div>
            <div class="vacancy-view-image">
                <figure class="image-layer"><img src="{{asset('opcn/images/resource/testimonial-image-3.png')}}" alt=""></figure>
            </div>
        </div>
        
    </section>
    <section class="feature-section">
        
        <div class="auto-container">
            <div class="img-vacancy-tittle">
                <h3>Vacancy Jobs</h3>
                <P>Apply for full-time & part-time in-office, work-from-home & hybrid jobs!</P>
            </div>
            <div class="img-vacancy">
                <div class="featureimg">
                    <a href="{{ route('viewingvacy', ['type' => 'fulltime']) }}"> <img src="{{asset('opcn/images/resource/vacancy/2.png')}}" alt=""> </a>
                </div>
                <div class="featureimg">
                    <a href="{{ route('viewingvacy', ['type' => 'parttime']) }}"><img src="{{asset('opcn/images/resource/vacancy/3.png')}}" alt=""> </a>
                </div>                     
                <div class="featureimg">
                    <a href="{{ route('viewingvacy', ['type' => 'contractual']) }}"><img src="{{asset('opcn/images/resource/vacancy/1.png')}}" alt=""> </a>
                </div>  
                <div class="featureimg">
                    <a href="{{ route('viewingvacy', ['type' => 'interns']) }}"><img src="{{asset('opcn/images/resource/vacancy/4.png')}}" alt=""></a> 
                </div> 
            </div>
        </div>
        
    </section>
    <section>
            <div class="container-min">
                <div class="container-min-title">
                    <h2>OPCN- Leading opportunity discovering
                        platform</h2>
                    <p>
                        Opportunities circle Nepal is providing a platform which globally share these
                         opportunities and ensure free and equal access regardless of geographic location.
                          Providing recruitment solutions to employers finding, fostering and preparing the 
                          right candidates in every possible ways with an effective tracking system and a dedicated 
                          team of customer service to both; the employers and the job seekers, has always been our 
                          primary goal.
                    </p>
                </div>
                <div class="container-min-wrap">
                    <div class="wear-icon">
                        <img src="{{asset('opcn/images/resource/vacancy/9.png')}}" alt="">
                        <div class="wear-content">
                            <h3>Vacancy Announcement</h3>
                            <p>Vacancy announcements advertise job openings on websites.</p>
                        </div>
                    </div>
                    <div class="wear-icon">
                        <img src="{{asset('opcn/images/resource/vacancy/10.png')}}" alt="">
                        <div class="wear-content">
                            <h3>Eligibility Test</h3>
                            <p>Eligibility test checks if you qualify for a job vacancy.</p>
                        </div>
                    </div>
                    <div class="wear-icon">
                        <img src="{{asset('opcn/images/resource/vacancy/11.png')}}" alt="">
                        <div class="wear-content">
                            <h3>Vacancy Recuitment </h3>
                            <p>This procedure outlines the direct recruitment, selection process for hiring staff.</p>
                        </div>
                    </div>
                </div>
                <div class="left-img">
                <img src="{{asset('opcn/images/resource/vacancy/5.png')}}" alt="section-left-image" loading="lazy" width="758" height="1064">
                </div>
                <div class="right-img">
                <img src="{{asset('opcn/images/resource/vacancy/6.png')}}" alt="section-left-image" loading="lazy" width="758" height="1064">
            </div>
    </section>
    <section>
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
        
    </section>
     <!-- feature-style-two -->
     <section class="feature-style-two">
        <div class="auto-container">
            <div class="sec-title centred">
                <h2>Recent Opportunities</h2>
            </div>
                <div class="tabs-content">
                    <div class="tab active-tab" id="tab-1">
                        <div class="row clearfix">
                            
                            @foreach ($vacancy  as $posting)
                            
                                    <div class="col-lg-4 col-md-6 col-sm-12">
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
                                                    <h3 class="vacancy-postion-front"><a  href="{{ url('vacancy-detail',$posting->id)}}">{{$posting->position}}</a></h3>
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
                            <a href="{{ route('vacancyexplore')}}"class="theme-btn-one">Load More</a>
                        </div>
                            
    </section>
    @endsection