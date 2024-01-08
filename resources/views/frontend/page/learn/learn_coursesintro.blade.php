@extends('frontend.layouts.layout') 
@section('title', $posting->title)
@section('content')
    @push('head')
        <link href="{{asset('opcn/css/learn.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    @endpush

        <div class="boxed_wrapper">
                <div class="background-conntaining">
                    <div class="auto-container">
                        <div class="courser-auto-containers">
                            <div class="main-sub-auto-container">
                                <div class="courses-detailing">
                                    <div class="courses-details-innering">
                                        <div class="courses-namecategory">
                                            <p>courses</p>
                                            <i class="fas fa-chevron-right"></i>
                                            <p>{{$posting->title}}</p>
                                        </div>
                                    </div>
                                    <div class="title-of-the-course">
                                        <h2>{{$posting->title}}</h2>
                                    </div>
        
                                    <div class="courses-categoryof">
                                        <div>
                                            <span class="categorytitle">
                                            <i class="far fa-check"></i>
                                            Data science
                                            </span>
                                        </div>
                                        <div class="reviewing_start">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span>5</span>
                                        </div>
                                    </div>
                                    <div class="photo-uploadand-details-creaters">
                                        <div class="showing-creater-photo">
                                            @if(!empty($userbio->photo))
                                                <img src="{{ asset('opcn/uploads/userphoto/' . $userbio->photo) }}" alt="">
                                            @endif

                                        </div>
                                        <div class="description-about-creater">
                                                <span>
                                                    {{$userdetails->firstname}} {{$userdetails->lastname}}
                                                    <p>phD & MBA - McMaster University</p>
                                                </span>
        
                                                <span class="creator-details-details">
                                                    <P> @if(!empty($userbio->bio))
                                                        <?php
                                                        $words = str_word_count($userbio->bio, 1);
                                                        $limitedBio = implode(' ', array_slice($words, 0, 50));
                                                    ?>
                                                    {{ $limitedBio }}
                                                        @endif
                                                    </P>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="sun-main-auto-containers">
                                <div class="course-content-video">
                                    <span></span>
                                    <img src="https://d8it4huxumps7.cloudfront.net/uploads/images/courses/819/banners/644bbf72551f7_Banner__2_.jpg" alt="">
                                </div>  
                            

                                <div class="courses-cost-details">
                                    <div class="initial-cost-courses">
                                        <p>Program Cost:</p>
                                        <span>
                                            <p>(NRP 3000)</p>
                                            100% OFF
                                        </span>
                                    </div>
                                    <div class="final-cost-courses">
                                        <p>NRP: Fee </p>
                                    </div>
                                </div>
                                <div class="courses-enrollnow">
                                    <BUtton>
                                        @if ($enrollcheck)
                                            <a href="{{ url('lessonshow',[$posting->id]) }}">Start Now</a>
                                        @else
                                            <a href="{{ url('enroll', [$posting->id, Auth::user()->id]) }}">Enroll Now</a>
                                        @endif
                                        </BUtton>
                                </div>
                                <div class="interest-to-join-course">
                                    <img src="{{asset('opcn/images/resource/learn/wava.png')}}" alt="">
                                    <p>I am Interested</p>
                                </div>
                                <div class="user-detail-point">
                                    <span>
                                        <i class="far fa-check"></i>
                                        <p>Learn from Industry Leaders</p>
                                    </span>
                                    <span>
                                        <i class="far fa-check"></i>
                                        <p>Learn from Industry Leaders</p>
                                    </span>
                                    <span>
                                        <i class="far fa-check"></i>
                                        <p>Learn from Industry Leaders</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <section class="about-coursing">
                <div class="text-details-about-courses">
                    <div class="auto-container">
                        <div class="inner-auto-container">
                            <div class="about-thecourse">
                                <h2>About the course</h2>
                                
                                    @if ($posting)
                                            {!! $posting->description !!}
                                        @else
                                            <!-- Default content if none is found -->
                                            <p>No content available.</p>
                                        @endif
                                
                            </div>
                        </div>
                    </div>
                </div>
             </section>

             <section class="about-coursing">
                <div class="text-details-about-courses">
                    <div class="auto-container">
                        <div class="inner-auto-container">
                            <div class="key-takeaways-thecourse">
                                <h2>Key Takeaways</h2>
                            
                                <div class="key-takeways-points">
                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-alarm-clock"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>Duration of the Course - 25 hours | 5 weeks</p>
                                        </div>
                                    </div>

                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-book"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>5+ Immersive Hands-On Project</p>
                                        </div>
                                    </div>


                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-briefcase"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>Unique Industry-Led Content</p>
                                        </div>
                                    </div>


                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-diploma"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>Industry Recognised Certificate</p>
                                        </div>
                                    </div>

                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-user-edit"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>Immersive Hands-On Learning</p>
                                        </div>
                                    </div>

                                    <div class="key-takings-ways-icons">
                                        <div class="icons-taking-ways">
                                            <i class="fas fa-comments"></i>
                                        </div>
                                        <div class="text-details-taking-ways">
                                            <p>Doubt-Clearing</p>
                                        </div>
                                    </div>


                                </div>



                                
                            </div>
                        </div>
                    </div>
                </div>
             </section>

             <section class="about-coursing">
                <div class="text-details-about-courses">
                    <div class="auto-container">
                        <div class="inner-auto-container">
                            <div class="key-takeaways-thecourse">
                               <h2>Career Growth Prospects After The Completion of This Course</h2> 
                               <div class="career-growth">
                                    <div class="average-salary">
                                        <span>
                                            <strong>
                                                    NRP 1 LPA
                                            </strong>
                                            <p>
                                                Average salary of Data scientists in Nepal
                                            </p>
                                        </span>
                                    </div>
                                    <div class="average-salary">
                                        <span>
                                            <strong>
                                                    NRP 1 LPA
                                            </strong>
                                            <p>
                                                Average salary of Data scientists in Nepal
                                            </p>
                                        </span>
                                    </div>
                                    <div class="average-salary">
                                        <span>
                                            <strong>
                                                    NRP 1 LPA
                                            </strong>
                                            <p>
                                                Average salary of Data scientists in Nepal
                                            </p>
                                        </span>
                                    </div>
                               </div>


                            



                                
                            </div>
                        </div>
                    </div>
                </div>
             </section>

             <section>
                <div class="auto-container">
                    <div class="showing_certificate">
                        <div class="showing_certificate_inner">
                            <div class="showing_certificate_image">
                                <img src="{{asset('opcn/images/resource/learn/certificate.jpg')}}" alt="">
                            </div>
                            <div class="showing_cetificate_details">
                                <h2>Certification of Completion</h2>
                                <span>By completing these professional courses, which also offer certification
                                    upon completion, you may improve your abilities and stay up to date with the industry.
                                </span>
            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    
@endsection