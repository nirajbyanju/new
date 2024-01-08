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
@section('style') @endsection
@section('script')
    <script src="{{asset('opcn/js/jquery.nice-select.min.js')}}"></script>
    @endsection
@section('content')
  <!-- Page Title -->
  <section class="page-title" style="background-image: url({{asset('opcn/images/background/page-title.jpg')}});">
    <div class="auto-container">
        <div class="content-box centred">
            <div class="title">
                <h1>All Category</h1>
            </div>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>All Category</li>
            </ul>
        </div>
        <div class="search-box-inner">
            <form action="" method="get">
                <div class="input-inner clearfix">
                    <div class="form-group">
                        <i class="icon-2"></i>
                        <input type="search" name="search" placeholder="Search Keyword..." required="">
                    </div>
                    <div class="form-group">
                        <i class="icon-3"></i>
                        <select class="wide">
                           <option data-display="Select Location">Select Location</option>
                           <option value="1">California</option>
                           <option value="2">New York</option>
                           <option value="3">Sun Francis</option>
                           <option value="4">Shicago</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <i class="icon-4"></i>
                        <select class="wide">
                           <option data-display="Select Category">Select Category</option>
                           <option value="1">Education</option>
                           <option value="2">Restaurant</option>
                           <option value="3">Real Estate</option>
                           <option value="4">Home Appliances</option>
                        </select>
                    </div>
                    <div class="btn-box">
                        <button type="submit"><i class="icon-2"></i>Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Page Title -->
<!-- category-section -->
<section class="category-section centred sec-pad">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Explore by Category</h2>
        </div>
        <div class="inner-content clearfix">
            <div class="category-block-one wow fadeInDown animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-analytics"></i></div>
                    <h5>Intership</h5>
                    <span>52</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInDown animated animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-users-class"></i></i></div>
                    <h5>Int. Opportunity</h5>
                    <span>20</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInDown animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-analytics"></i></div>
                    <h5>Account/Finace</h5>
                    <span>35</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInDown animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-chalkboard-teacher"></i></i></div>
                    <h5>IT/Tech Jobs</h5>
                    <span>10</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInDown animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-university"></i></div>
                    <h5>Banking</h5>
                    <span>27</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-people-carry"></i></div>
                    <h5>NGO/INGO</h5>
                    <span>52</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="100ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-chalkboard-teacher"></i></div>
                    <h5>Education</h5>
                    <span>20</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-user-graduate"></i></i></div>
                    <h5>Freshers Jobs</h5>
                    <span>35</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-chair-office"></i></div>
                    <h5>Front Desk</h5>
                    <span>10</span>
                </div>
            </div>
            <div class="category-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(images/shape/shape-1.png);"></div>
                        <div class="shape-2" style="background-image: url(images/shape/shape-2.png);"></div>
                    </div>
                    <div class="icon-box"><i class="fas fa-hospital-user"></i></i></div>
                    <h5>Hospitality</h5>
                    <span>27</span>
                </div>
            </div>
        </div>
        <div class="more-btn"><a href="{{url('categories')}}" class="theme-btn-one">All Categories</a></div>
    </div>
</section>
    <!-- category-section end -->
@endsection