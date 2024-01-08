<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title> {{$posting['nameofcompany']}}</title>
    <meta name="description" content="Opportunities Circle Nepal Scholarships, Fellowships, Internships, Jobs" />
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
    <meta name="keywords" content="Opportunities, Circle, Nepal, Scholarships, Fellowships, Internships, Jobs, nepal, vacancy">
     <!-- facebook-og -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{$posting['nameofcompany']}}" />
    <meta property="og:description" content="Opportunities Circle Nepal Scholarships, Fellowships, Internships, Jobs" />
    <meta property="og:url" content="{{URL::full()}}" />
    <meta property="og:site_name" content="OPCN" />
    <meta property="article:publisher" content="https://www.facebook.com/profile.php?id=100084303498818" />
    <meta property="article:section" content="OPCN" />
    <meta property="article:published_time" content="" />
    <meta property="article:modified_time" content="" />
    <meta property="og:updated_time" content="" />
    <meta property="og:image" content="{{asset('images/job-detail-bg.jpg')}}" />
    <meta property="og:image:secure_url" content="{{asset('images/job-detail-bg.jpg')}}" />
    <meta property="og:image:width" content="726" />
    <meta property="og:image:height" content="322" />

    <!-- Twitter-og -->
    <meta name="twitter:card" content="{{asset('images/job-detail-bg.jpg')}}" />
    <meta name="twitter:description" content="Opportunities Circle Nepal Scholarships, Fellowships, Internships, Jobs" />
    <meta name="twitter:title" content="{{$posting['nameofcompany']}}" />
    <meta name="twitter:site" content="{{URL::full()}}" />
    <meta name="twitter:image" content="{{asset('images/job-detail-bg.jpg')}}" />
    <meta name="twitter:creator" content="@opportunitiesc8" />
<style>
   div#social-links {
                margin: 25px;
                max-width: 500px;
            }
            div#social-links ul li {
                display: inline-block;
                
            }          
            div#social-links ul li a {
                padding: 15px;
                border: 1px solid #ccc;
                margin: 4px;
                
                font-size: 30px;
                color: #3854a5;
                background-color: #ccc;
                border-radius: 10px;
            }
            .sharecentre{
                display: flex;
                justify-content: center;
            }
</style>
<!-- Fav Icon -->
<link rel="icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="@yield('bootstrap')" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<!-- Stylesheets -->
<link href="{{asset('opcn/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/color.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/style.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/responsive.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/imageslider.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/detail.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/feather.css')}}" rel="stylesheet">
</head>


<body>
    <div class="boxed_wrapper">


    <!-- LOADING AREA START ===== -->
    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>
    <!-- LOADING AREA  END ====== -->
     @include('header')
     <section class="page-title style-two" style="background-image: url({{asset('opcn/images/background/page-title2.jpg')}});">
        <div class="auto-container">
            <div class="content-box centred mr-0">
                <div class="title">
                    <h1>{{$posting->categoryofvacancy}}</h1>
                </div>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$posting->categoryofvacancy}}</li>
                </ul>
            </div>
        </div>
    </section>
      <!-- CONTENT START -->
      <div class="page-content">
        <!-- OUR BLOG START -->
        <div class="section-full  p-t120 p-b90 bg-white">
            <div class="container">
            
                <!-- BLOG SECTION START -->
                <div class="section-content">
                    <div class="row d-flex justify-content-center">
                    
                        <div class="col-lg-8 col-md-12">
                            <!-- Candidate detail START -->
                            <div class="cabdidate-de-info">
                                <div class="twm-job-self-wrap">
                                    <div class="twm-job-self-info">
                                        <div class="twm-job-self-top">
                                            <div class="twm-media-bg">
                                                <img src="{{asset('opcn/uploads/opportunity/' .$posting->uploadposter)}}" alt="">
                                                <div class="twm-jobs-category green"><span class="twm-bg-green">{{$posting->fundingtype}}</span></div>
                                            </div>
                                            
                                            
                                            <div class="twm-mid-content">

                                                <div class="twm-media">
                                                    <img src="{{asset('opcn/uploads/opportunity/' .$posting->uploadlogo)}}" alt="">
                                                </div>
                                                <h1 class="twm-job-title">{{$posting->titleofprogram}}</h1>
                                                <h4 class="twm-job-title">{{$posting->position}}<span class="twm-job-post-duration">/ {{Carbon\Carbon::parse($posting->publishdate)->diffForHumans()}}</span></h4>
                                                <p class="twm-job-address"><i class="fas fa-map-marker-alt"></i>&nbsp&nbsp<a href="#" class="twm-job-websites site-text-primary">{{$posting->website}}</a></p>
                                                <div class="twm-job-self-mid">
                                                    <div class="twm-job-self-mid-left">
                                                        
                                                        <div class="twm-jobs-amount"><i class="fas fa-map-marker-alt"></i>&nbsp&nbspSponsor by<span>&nbsp&nbsp{{$posting->sponsorby}}</span></div>
                                                    </div>
                                                    <div class="twm-job-apllication-area">Application ends:
                                                        <span class="twm-job-apllication-date">{{Carbon\Carbon::parse($posting->dateline)->format('j M Y')}}</span>
                                                    </div>
                                                </div>

                                                <div class="twm-job-self-bottom">
                                                    <a class="site-button" data-bs-toggle="modal" href="#apply_job_popup" role="button">
                                                        Apply Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                <h4 class="twm-s-title">Job Description:</h4>

                                <ul><li style="text-align:justify;">
                                    <p>
                                        <?php
                                            $descriptions = "{$posting->descriptions}";
                                            echo $descriptions;
                                        ?>
                                    </p>
                                
                                <h4 class="twm-s-title">Requirments:</h4>
                                <ul><li style="text-align:justify;">
                                    <span>
                                    <?php
                                       $requirement = "{$posting->requirement}";
    
                                        // Split the paragraph into lines
                                        $lines = explode(".", $requirement);
    
                                        // Create the HTML ul element
                                        $postingvacancys = '<ul style="margin-left: 30px;">';
                                        foreach ($lines as $line) {
                                            $postingvacancys .= '<li id="detailsli"><i id="detailslist" class="fas fa-check"></i>' . $line . '</li>';                                 }
                                        $postingvacancys .= '</ul>';
    
                                        // Close the database connection
                                        
                                        ?>
    
                                        <!-- Display the HTML on the website -->
                                       
                                            <?php echo $postingvacancys; ?>
                                     </span></li>
                                <h4 class="twm-s-title">Benefits:</h4>
                                <ul><li style="text-align:justify;">
                                    <span>
                                        <?php
                                        $benefits = "{$posting->benefits}";
     
                                         // Split the paragraph into lines
                                         $lines = explode(".", $benefits);
     
                                         // Create the HTML ul element
                                         $postingvacancys = '<ul style="margin-left: 30px;">';
                                         foreach ($lines as $line) {
                                             $postingvacancys .= '<li id="detailsli"><i id="detailslist" class="fas fa-check"></i>' . $line . '</li>';                                 }
                                         $postingvacancys .= '</ul>';
     
                                         // Close the database connection
                                         
                                         ?>
     
                                         <!-- Display the HTML on the website -->
                                        
                                             <?php echo $postingvacancys; ?>
                                     </span></li>
                                     <h3 class="twm-s-title">Application Process:</h3>

                                <ul><li style="text-align:justify;">
                                    <p>
                                        <?php
                                            $applicationprocess = "{$posting->applicationprocess}";
                                            echo $applicationprocess;
                                        ?>
                                    </p>
                                <h4 class="twm-s-title">Share Profile</h4>
                                <div class="twm-social-tags">{!! $shareComponent !!}</div>
                                
                                <h4 class="twm-s-title">Location</h4>
                                <div class="twm-m-map mb-5">
                                    <div class="twm-m-map-iframe">
                                        <iframe height="310" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.8534521658976!2d-118.2533646842856!3d34.073270780600225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c6fd9829c6f3%3A0x6ecd11bcf4b0c23a!2s1363%20Sunset%20Blvd%2C%20Los%20Angeles%2C%20CA%2090026%2C%20USA!5e0!3m2!1sen!2sin!4v1620815366832!5m2!1sen!2sin"></iframe>
                                    </div>
                                </div>

                                <div class="twm-two-part-section">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-12">
                                            <h4 class="twm-s-title">Office Photos</h4>
                                            <div class="tw-sidebar-gallery">
                                                <ul>
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic1.jpg')}}" title="Title 1" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic1.jpg">
                                                                <img src="{{asset('opcn/images/gallery/pic1.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic2.jpg')}}" title="Title 2" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic2.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic2.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb ">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic3.jpg')}}" title="Title 3"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic3.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic3.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic4.jpg')}}" title="Title 4"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic4.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic4.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic5.jpg')}}" title="Title 5"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic5.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic5.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic6.jpg')}}" title="Title 6"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic6.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic6.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic7.jpg')}}" title="Title 7" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic1.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic7.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic8.jpg')}}" title="Title 8" data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic2.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic8.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb ">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic9.jpg')}}" title="Title 9"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic3.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic9.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic10.jpg')}}" title="Title 10"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic4.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic10.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic11.jpg')}}" title="Title 11"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic5.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic11.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                    <li>
                                                        <div class="tw-service-gallery-thumb">
                                                            <a class="elem" href="{{asset('opcn/images/gallery/pic12.jpg')}}" title="Title 12"  data-lcl-author="" data-lcl-thumb="images/gallery/thumb/pic6.jpg">
                                                                <img src="{{asset('opcn/images/gallery/thumb/pic12.jpg')}}" alt="">
                                                                <i class="fa fa-file-image"></i>     
                                                            </a>
                                                        </div>
                                                    </li>
                                                    
                                                </ul>
            
                                            </div> 
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <h4 class="twm-s-title">Video</h4>
                                            <div class="video-section-first" style="background-image: url({{asset('opcn/images/video-bg.jpg')}});">
                                                <a href="https://www.youtube.com/watch?v=c1XNqw2gSbU" class="mfp-video play-now-video">
                                                    <i class="icon feather-play"></i>
                                                    <span class="ripple"></span>
                                                </a>
                                            </div> 
                                        </div>

                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-12 rightSidebar">

                            <div class="side-bar mb-4">
                                <div class="twm-s-info2-wrap mb-5">
                                    <div class="twm-s-info2">
                                        <h4 class="section-head-small mb-4">Job Information</h4>
                                        <ul class="twm-job-hilites">
                                            <li>
                                                <i class="fas fa-calendar-alt"></i>
                                                <span class="twm-title">{{Carbon\Carbon::parse($posting->publishdate)->format('j M Y')}}</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-eye"></i>
                                                <span class="twm-title">{{$posting->views}} views</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-file-signature"></i>
                                                <span class="twm-title">@if(Carbon\Carbon::now()->lt($posting->dateline))
                                                    {{ Carbon\Carbon::now()->diffInDays($posting->dateline) }} days left
                                                 @else
                                                    Closed
                                                 @endif </span>
                                            </li>
                                        </ul>
                                        <ul class="twm-job-hilites2">

                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span class="twm-title">Date Posted</span>
                                                    <div class="twm-s-info-discription">{{Carbon\Carbon::parse($posting->publishdate)->format('j M Y')}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="twm-title">Sponser by</span>
                                                    <div class="twm-s-info-discription">{{$posting->sponsorby}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-user-tie"></i>
                                                    <span class="twm-title">Position</span>
                                                    <div class="twm-s-info-discription">{{$posting->position}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-clock"></i>
                                                    <span class="twm-title">Project Title</span>
                                                    <div class="twm-s-info-discription">{{$posting->titleofprogram}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-suitcase"></i>
                                                    <span class="twm-title">Open TO</span>
                                                    <div class="twm-s-info-discription">{{$posting->opento}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-user-check"></i>
                                                    <span class="twm-title">Category of Project</span>
                                                    <div class="twm-s-info-discription">{{$posting->categoryofvacancy}}  </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    
                                                    <i class="fas fa-money-bill-wave"></i>
                                                    <span class="twm-title">Funding Type</span>
                                                    <div class="twm-s-info-discription">{{$posting->fundingtype}} on relevant field</div>
                                                </div>
                                            </li>

                                        </ul>
                                        
                                    </div>
                                </div>

                                <div class="widget tw-sidebar-tags-wrap">
                                    <h4 class="section-head-small mb-4">Job Skills</h4>
                                    
                                    <div class="tagcloud">
                                        <a href="javascript:void(0)">Html</a>
                                        <a href="javascript:void(0)">Python</a>
                                        <a href="javascript:void(0)">WordPress</a>                                            
                                        <a href="javascript:void(0)">JavaScript</a>
                                        <a href="javascript:void(0)">Figma</a>
                                        <a href="javascript:void(0)">Angular</a>
                                        <a href="javascript:void(0)">Reactjs</a>
                                        <a href="javascript:void(0)">Drupal</a>
                                        <a href="javascript:void(0)">Joomla</a>
                                    </div>
                                </div>

                            </div>

                            <div class="twm-s-info3-wrap mb-5">
                                <div class="twm-s-info3">
                                    <div class="twm-s-info-logo-section">
                                        <div class="twm-media">
                                            <img src="{{asset('opcn/uploads/opportunity/' .$posting->uploadlogo)}}" alt="">
                                        </div>
                                        <h4 class="twm-title">{{$posting->position}}</h4>
                                    </div>
                                    <ul>

                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-building"></i>
                                                <span class="twm-title">Company</span>
                                                <div class="twm-s-info-discription">{{$posting->sponsorby}}t</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-mobile-alt"></i>
                                                <span class="twm-title">Phone</span>
                                                <div class="twm-s-info-discription">Not Mention</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-at"></i>
                                                <span class="twm-title">Email</span>
                                                <div class="twm-s-info-discription">{{$posting->emails}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-desktop"></i>
                                                <span class="twm-title">Website</span>
                                                <div class="twm-s-info-discription">{{$posting->website}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="twm-title">Address</span>
                                                <div class="twm-s-info-discription">Not Mention
                                                    </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <a href="javascript:;" class=" site-button">Vew Profile</a>
                                    
                                </div>
                            </div>

                            <div class="twm-advertisment" style="background-image:url({{asset('opcn/images/add-bg.jpg')}});">
                                <div class="overlay"></div>
                                <h4 class="twm-title">Recruiting?</h4>
                                <p>Get Best Matched Jobs On your <br>
                                 Email. Add Resume NOW!</p>
                                 <a href="javascript:;" class="site-button white">Read More</a> 
                             </div>


                        </div>
                    
                    </div>
                                            
                </div>
                
            </div>
            
        </div>   
        <!-- OUR BLOG END -->          
        
 
    </div>

    @include('footer')
</div>

<script src="{{asset('opcn/js/jquery.js')}}"></>
<script src="{{asset('opcn/js/popper.min.js')}}"></script>
<script src="{{asset('opcn/js/bootstrap.min.js')}}"></script>
<script src="{{asset('opcn/js/owl.js')}}"></script>
<script src="{{asset('opcn/js/wow.js')}}"></script>
<script src="{{asset('opcn/js/validation.js')}}"></script>
<script src="{{asset('opcn/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('opcn/js/appear.js')}}"></script>
<script src="{{asset('opcn/js/scrollbar.js')}}"></script>
<script src="{{asset('opcn/js/jquery.nice-select.min.js')}}"></script>
<!-- main-js -->
<script src="{{asset('opcn/js/script.js')}}"></script>
<script src="{{asset('opcn/js/custom.js')}}"></script>
<script src="@yield('js')"></script>

</body><!-- End of .page_wrapper -->
</html>