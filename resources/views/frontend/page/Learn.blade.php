@extends('frontend.layouts.layout') 
@section('title', 'Learn')
@section('content')
    @push('head')
    <link href="{{asset('opcn/css/learn.css')}}" rel="stylesheet">
    @endpush
    @push('script')
    <script>
       function activateMenuItem(event, index) {
    var menuItems = document.querySelectorAll('.selection_menu ul li');
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].classList.remove('active');
    }
    menuItems[index].classList.add('active');
    event.preventDefault();
}

    </script>
    @endpush
<div class="auto-container">
    <section class="testimonial-section sec-pads">
        <figure class="image-layer"><img src="{{asset('opcn/images/resource/testimonial-image-4.png')}}" alt=""></figure>
        <div class="anim-icon">
            <div class="icon anim-icon-1 rotate-me " style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
            <div class="icon anim-icon-2 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-3 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
            <div class="icon anim-icon-4 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
        </div>
        <div class="learn-shows">
            <div class="learn-shows-img">
               <img src="{{asset('opcn/images/resource/learn/bulb-learn.png')}}" alt=""> 
            </div>
            <div class="learn-shows-text">
                <h5>Congrstulations</h5>
                <p>Your admission completed</p>
            </div>
        </div>
        <div class="learn-shows-texting">
            <div class="learn-shows-img">
               <img src="{{asset('opcn/images/resource/learn/gratutation-learn.png')}}" alt=""> 
            </div>
            <div class="learn-shows-text">
                <h5>450K</h5>
                <p>Assisted Student</p>
            </div>
        </div>
        <div class="learn-shows-user">
            <div class="learn-shows-img">
               <img src="{{asset('opcn/images/resource/learn/gratutation-learn.png')}}" alt=""> 
            </div>
            <div class="learn-shows-text">
                <h5>User Experience Class</h5>
                <p>Tomorrow is our</p>
                <div class="learn-button">
                    <button href="#">Join Us</button>
                </div>
            </div>
        </div>
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{asset('opcn/images/shape/opporunity/shape-4.png')}}); color:#3854A5;  "></div>
            <div class="pattern-2" style="background-image: url({{asset('opcn/images/shape/opporunity/shape-5.png')}});"></div>
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 col-md-12 inner-column">
                    <div class="inner-box">
                        <div class="opporunity_h2">
                            <h2>Unlock Your</h2>
                            <h2>Potential, Anytime,</h2>
                            <h2>Anywhere</h2>
                            <p>Achieve Your Dream Job with Our Empowering Courses</p>
                        </div>
                        <div class="button-vacancy">
                            <div>
                                <button class="button-explore"> Explore Now</button>
                            </div>
                            <div>
                                <div>
                                    <button class="button-vacancys"> Post Jobs Vacncy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
        <div class="auto-container">
            <div class="online-learn">
                <div class="online-learning">
                    <h3>Why  Opportunities Sharing circle </h3>
                    <h3>Out Of The Ordinary</h3>
                    <p>You're not alone in your struggle; we're here to provide you with assistance and support.</p>
                </div>
                <div class="job-placement">
                    <div class="online-learning-class blue">
                        <div class="online-learning-inbox">
                            <div class="online-learning-icon">
                                <img src="{{asset('opcn/images/resource/learn/open-book.png')}}" alt="">
                            </div>
                            <div class="online-learning-text">
                                <h3>10<sup>+</sup></h3>
                                <h3>Free Online courses
                                </h3>
                                <p>allowing individuals to acquire new knowledge, develop skills</p>
                            </div>
                        </div>   
                    </div>
                    <div class="online-learning-class red">
                        <div class="online-learning-inbox">
                            <div class="online-learning-icon">
                                <img src="{{asset('opcn/images/resource/learn/Mentorships.png')}}" alt="">
                            </div>
                            <div class="online-learning-text">
                                <h3>10<sup>+</sup></h3>
                                <h3>Free Mentorships Consulting </h3>
                                <p>Providing guidence, support, and enhancing ypur learning experience</p>
                            </div>
                        </div>   
                    </div>
                    <div class="online-learning-class darkblue">
                        <div class="online-learning-inbox">
                            <div class="online-learning-icon">
                                <img src="{{asset('opcn/images/resource/learn/Quizz.png')}}" alt="">
                            </div>
                            <div class="online-learning-text">
                                <h3>100<sup>+</sup></h3>
                                <h3>Quizzes and assessment</h3>
                                <p>ensuring effective learning and measuring achievement</p>
                            </div>
                        </div>   
                    </div>
                    <div class="online-learning-class yellow">
                        <div class="online-learning-inbox">
                            <div class="online-learning-icon">
                                <img src="{{asset('opcn/images/resource/learn/Certification.png')}}" alt="">
                            </div>
                            <div class="online-learning-text">
                                <h3>10<sup>+</sup></h3>
                                <h3>Online Certification</h3>
                                <p>enhancing their credibility, employability, demonstrating their commitment </p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="achieveuourgoal">
            <div class="achieveuourgoal-with">
                <div class="achieveuourgoal-with-photo">
                    <div class="achieveuourgoal-reviews">
                        <h5>200+<span>five ster reviews
                        </span></h5>
                    </div>
                    <div class="achieveuourgoal-reviews-photo">
                        <img src="{{asset('opcn/images/resource/learn/bookcoverbig.png')}}" alt="">
                    </div>
                    <div class="achieveuourgoal-reviews-photos">
                        <img src="{{asset('opcn/images/resource/learn/bookcover.png')}}" alt="">
                    </div>
                </div>
                <div class="achieveuourgoal-with-text">
                    <div class="achieveuourgoal-with-text-title">
                        <h3>Achieve Your</h3>
                        <h3>Goals With OPSC</h3>
                        <p>Empower Your Goals Through Free Courses. Unlock your skill,   <br>
                            potential, expand your knowledge, and achieve your aspirations with <br>
                            a diverse range of high-quality courses offered on this online learning platform.</p>
                    </div>
                    <div class="achieveuourgoal-with-text-paragraph">
                        <p>Upgrade your skills with us.</p>
                        <p>Access more then 10<sup>+</sup> online courses</p>
                        <p>Learn the latest skills</p>
                    </div>
                    <div class="achieveuourgoal-with-text-apply">
                        <button>Apply now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
                        <div class="free_courses">
                            <div class="inner_free_courses">
                                <div class="free_course_details">
                                    <img src="{{asset('opcn/images/resource/learn/free_courses_correct.png')}}">
                                    <h2>Free Courses</h2>
                                </div>
                                <div class="free_courses_text">
                                    <span>Improve your skills and stay current with the industry with these expert courses!</span>    
                                </div>
                            </div>
                            <div class="selection_course">
                            <div class="selection_menu">
                                <ul>
                                    <li><a href="#" onclick="activateMenuItem(event, 0)">Most Popular</a></li>
                                    <li><a href="#" onclick="activateMenuItem(event, 1)">IT/Telecommunications</a></li>
                                    <li><a href="#" onclick="activateMenuItem(event, 2)">Engineering/Architecture </a></li>
                                    <li><a href="#" onclick="activateMenuItem(event, 2)">General Management/Administration </a></li>
                                    <li><a href="#" onclick="activateMenuItem(event, 2)">Teaching/Education</a></li>
                                </ul>
                                </div> 
                            </div>

                            
                            <div class="showing_courses_list">
                                @foreach ($posting as $posting)
                                <div class="showing_courses_details">
                                    <div class="details_image_courses">
                                        <img src="https://d8it4huxumps7.cloudfront.net/uploads/images/courses/819/banners/644bbf72551f7_Banner__2_.jpg?d=562x322" alt="">
                                    </div>
                                    <div class="courses_inners">
                                        <div class="details_courses_title">
                                            <h2>{{$posting->title}}</h2>
                                        </div>
                                        <div class="details_courses_feature">
                                            <span><i class="fas fa-check"></i>
                                            Duration of the Cours -25 hours | 5 weeks
                                            </span>
                                            <span><i class="fas fa-check"></i>
                                                % Assigment and 1 project
                                                </span>
                                            <span><i class="fas fa-check"></i>
                                            Duration of the Cours -25 hours | 5 weeks
                                            </span>
                                            <span><i class="fas fa-check"></i>
                                                Unique Industry-Led Content
                                                </span>
                                            <span><i class="fas fa-check"></i>
                                            Immersive Hands-On learning
                                            </span>
                                    </div>
                                
                                    <div class="course_price">
                                        <div class="price_details">
                                            <div class="price_info">
                                                <span><i class="fas fa-dollar-sign"></i> Free</span>
                                            </div>
                                            <div class="price_offer">
                                                <div class="price_offer_p">
                                                    (4000)
                                                </div>
                                                <div class="price_offer_span">
                                                    100% OFF
                                                </div>
                                            </div>
                                        </div>
                                        <div class="courses_explore">
                                            <a href="
                                            @if (!auth()->check())
                                                    {{ url('loginsubcreate') }}
                                                @else
                                                    {{ url('coursesintro',$posting->id)}}
                                                @endif">
                                                <span>Explore Now <i class="fas fa-chevron-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            
                            
                         @endforeach
                    </div>
                            
                        
                    


                    
                    
                </div>

        
            </div>
    </section>

    <section>
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
    </section>
    @endsection