@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')

<section class="page-title style-two" style="background-image: url({{asset('opcn/images/background/page-title2.jpg')}});">
    <div class="auto-container">
        <div class="content-box centred mr-0">
            <div class="title">
                <h1>Our Services</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
</section>
<!-- about-section -->
<!-- news-section -->
<section class="news-section sec-pad">
    <div class="auto-container">
        
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
                            
                            <h3><a href="blog-details.html">Directly Recuitment</a></h3>
                            <p>Since its establishment, OPCN has offered direct recruitment services.
                                Identifying the direct hiring and selection process at your prestigious firm is the goal of this technique.
                                By using OPCN as your staffing company, we can assist your business in reducing the time needed for the hiring
                                 process by quickly placing the ideal candidate. </p>
                            
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
                            
                            <h3><a href="blog-details.html">Vacancy Announcement</a></h3>
                            <p>OPCN
                                Vacancy announcements are the method through which an organization informs prospective candidates
                                 about the position being listed on our website www.opcn.com.
                                
                                Since each organization develops and administers announcements on its own, there is no standard format 
                                for them, so candidates should carefully read each component. </p>
                            
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
                           
                            <h3><a href="blog-details.html">Banners Advertisement</a></h3>
                            <p>Online website banner advertisements offer an immediate, inexpensive worldwide reach.
                                You have the chance to attract potential customers' attention for the least amount of money.<br>
                                The site consistently ranks highly on search engine like Google, under the key phrase “OPCN” </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news-section end -->

                        
</section>


@endsection
