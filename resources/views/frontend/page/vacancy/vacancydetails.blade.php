@extends('frontend.layouts.layout') 
@section('title', $posting->position)
@section('content')
    @push('head')
            
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



            <link href="{{asset('opcn/css/detail.css')}}" rel="stylesheet">
            <style>
                .content {
  padding: 8px 90px;
  font-family: "Roboto", sans-serif;
}

.content p {
  line-height: 1.9;
}

.content img {
  max-height: 500px;
}

/* Share Buttons */

.share-btn-container {
  background: #fff;
  display: flex;
  flex-direction: column;
  padding: 16px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
  position: fixed;
  top: 50%;
  transform: translateY(-50%);
}

.share-btn-container a i {
  font-size: 32px;
}

.share-btn-container a {
  margin: 12px 0;
  transition: 500ms;
}

.share-btn-container a:hover {
  transform: scale(1.2);
}

.share-btn-container .fa-facebook {
  color: #3b5998;
}

.share-btn-container .fa-twitter {
  color: #1da1f2;
}

.share-btn-container .fa-linkedin {
  color: #0077b5;
}

.share-btn-container .fa-pinterest {
  color: #bd081c;
}

.share-btn-container .fa-whatsapp {
  color: #25d366;
}

/* Media Queries */

@media (max-width: 550px) {
  .content {
    padding: 8px 32px;
  }

  .share-btn-container {
    transform: unset;
    top: unset;
    left: 0;
    bottom: 0;
    width: 100%;
    flex-direction: row;
    box-shadow: 4px 0 8px rgba(0, 0, 0, 0.3);
    padding: 16px 0;
    justify-content: center;
  }

  .share-btn-container a {
    margin: 0 32px;
  }
}
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
        @endpush
    @push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    @endpush
    <div class="boxed_wrapper">

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
                                                <img src="{{asset('opcn/images/job-detail-bg.jpg')}}" alt="#">
                                                <div class="twm-jobs-category green"><span class="twm-bg-green">{{$posting->jobstypes}}</span></div>
                                            </div>
                                            
                                            
                                            <div class="twm-mid-content">

                                                <div class="twm-media">
                                                    <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="Image">
                                                </div>
                                                <h1 class="twm-job-title">{{$posting->tittleofopportunity}}</h1>
                                                <h4 class="twm-job-title">{{$posting->position}}<span class="twm-job-post-duration">/ {{Carbon\Carbon::parse($posting->publishdate)->diffForHumans()}}</span></h4>
                                                <div class="twm-job-self-mid">
                                                    <div class="twm-job-self-mid-left">
                                                        <a href="#" class="twm-job-websites site-text-primary">{{$posting->website}}</a>
                                                        <div class="twm-jobs-amount">{{$posting->salary}}<span>/ Month</span></div>
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
                                    <span>

                                        
                                        <?php
                                            $requirement = "{$posting->descriptions}";

                                            // Replace | with Font Awesome checkmark icon
                                            $requirement = str_replace("|", '<i id="detailsli" class="fas fa-check"></i> ', $requirement);

                                            echo $requirement;
                                            ?>
                                           
                                                                                    
                                     </span></li>
                                <div id="editor">
                                    <p></p>
                                </div>
                                <script src="./node_modules/ckeditor/ckeditor.js"></script>
                                <script>
                                    CKEDITOR.replace( 'editor' );
                                </script>
                                <h4 class="twm-s-title">Share Profile</h4>
                                
                                <h4 class="twm-s-title">Location</h4>
                                <div class="twm-m-map mb-5">
                                    <div class="twm-m-map-iframe">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.316259514366!2d85.29111321978858!3d27.708955944403495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1854939daef1%3A0xdccdbbf1c295134f!2sDharahara!5e0!3m2!1sen!2snp!4v1676915715333!5m2!1sen!2snp" width="600" height="310" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                                <i class="fas fa-user-clock"></i>
                                                <span class="twm-title">@if(Carbon\Carbon::now()->lt($posting->dateline))
                                                    <div class="text-success">Available</div>
                                                    @else
                                                    <div class="text-danger">Closed</div>
                                                    @endif</i></span>
                                            </li>
                                            <li>
                                                <i class="fas fa-eye"></i>
                                                <span class="twm-title">{{$posting->views}} Views</span>
                                            </li>
                                            <li>
                                                <i class="fas fa-file-signature"></i>
                                                <span class="twm-title">{{$posting->numberofvacancy}} vacancies available</span>
                                            </li>
                                        </ul>
                                        <ul class="twm-job-hilites2">

                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-calendar-alt"></i>
                                                    <span class="twm-title">Date Posted</span>
                                                    <div class="twm-s-info-discription">{{Carbon\Carbon::parse($posting->publishdate)->format('j')}} <sup>th</sup>
                                                        {{Carbon\Carbon::parse($posting->publishdate)->format('F Y')}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    <span class="twm-title">Location</span>
                                                    <div class="twm-s-info-discription">{{$posting->workingplace}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-user-tie"></i>
                                                    <span class="twm-title">Job Title</span>
                                                    <div class="twm-s-info-discription">{{$posting->position}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-clock"></i>
                                                    <span class="twm-title">Experience</span>
                                                    <div class="twm-s-info-discription">{{$posting->experiencerequirment}}  relevant field experience</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-suitcase"></i>
                                                    <span class="twm-title">Qualification</span>
                                                    <div class="twm-s-info-discription">{{$posting->educationrequirement}}</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    <i class="fas fa-user-check"></i>
                                                    <span class="twm-title">Position Level</span>
                                                    <div class="twm-s-info-discription">{{$posting->jobslevel}}  </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="twm-s-info-inner">
                                                    
                                                    <i class="fas fa-money-bill-wave"></i>
                                                    <span class="twm-title">Offered Salary</span>
                                                    <div class="twm-s-info-discription">{{$posting->salary}}</div>
                                                </div>
                                            </li>

                                        </ul>
                                        
                                    </div>
                                </div>

                                <div class="widget tw-sidebar-tags-wrap">
                                    <h4 class="section-head-small mb-4">Job Skills</h4>
                                    
                                    <div class="tagcloud">
                                        <?php
                                       $tags = "{$posting->tags}";
    
                                        // Split the paragraph into lines
                                        $lines = explode(",", $tags);
    
                                        // Create the HTML ul element
                                        $tagss = '';
                                        foreach ($lines as $line) {
                                            $tagss .= '<a>' . $line . '</a>';                                 }
                                        $tagss .= '';
    
                                        // Close the database connection
                                        
                                        ?>
                                        
                                        
                                             <?php echo $tagss; ?>
                                    </div>
                                </div>

                            </div>

                            <div class="twm-s-info3-wrap mb-5">
                                <div class="twm-s-info3">
                                    <div class="twm-s-info-logo-section">
                                        <div class="twm-media">
                                            <img src="{{asset('opcn/uploads/posting/Logo/' .$posting->uploadcompanylogo)}}" alt="#">
                                        </div>
                                        <h4 class="twm-title">{{$posting->position}}</h4>
                                    </div>
                                    <ul>

                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-building"></i>
                                                <span class="twm-title">Company</span>
                                                <div class="twm-s-info-discription">{{$posting->nameofcompany}}t</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-mobile-alt"></i>
                                                <span class="twm-title">Phone</span>
                                                <div class="twm-s-info-discription">{{$posting->phonenumber}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-at"></i>
                                                <span class="twm-title">Email</span>
                                                <div class="twm-s-info-discription">{{$posting->emailid}}</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-desktop"></i>
                                                <span class="twm-title">Website</span>
                                                <div class="twm-s-info-discription">https://themeforest.net</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="twm-s-info-inner">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span class="twm-title">Address</span>
                                                <div class="twm-s-info-discription">{{$posting->workingplace}}
                                                    </div>
                                            </div>
                                        </li>

                                    </ul>
                                    <a href="about-1.html" class=" site-button">Vew Profile</a>
                                    
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


</div>
<div class="share-btn-container">
    <a href="#" class="facebook-btn">
        <i class="fab fa-facebook"></i>
    </a>

    <a href="#" class="twitter-btn">
        <i class="fab fa-twitter"></i>
    </a>

    <a href="#" class="pinterest-btn">
        <i class="fab fa-pinterest"></i>
    </a>

    <a href="#" class="linkedin-btn">
        <i class="fab fa-linkedin"></i>
    </a>

    <a href="#" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const facebookBtn = document.querySelector(".facebook-btn");
        const twitterBtn = document.querySelector(".twitter-btn");
        const pinterestBtn = document.querySelector(".pinterest-btn");
        const linkedinBtn = document.querySelector(".linkedin-btn");
        const whatsappBtn = document.querySelector(".whatsapp-btn");

        function init() {
            // Use a sample image URL for demonstration purposes
            const pinterestImg = document.querySelector(".pinterest-img");
            const postUrl = encodeURI(document.location.href);
            const postTitle = encodeURI("Hi everyone, please check this out: ");
            const postImg = encodeURI(pinterestImg ? pinterestImg.src : '');

            if (facebookBtn) {
                facebookBtn.setAttribute(
                    "href",
                    `https://www.facebook.com/sharer.php?u=${postUrl}`
                );
            }

            if (twitterBtn) {
                twitterBtn.setAttribute(
                    "href",
                    `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
                );
            }

            if (pinterestBtn && pinterestImg) {
                pinterestBtn.setAttribute(
                    "href",
                    `https://pinterest.com/pin/create/bookmarklet/?media=${postImg}&url=${postUrl}&description=${postTitle}`
                );
            }

            if (linkedinBtn) {
                linkedinBtn.setAttribute(
                    "href",
                    `https://www.linkedin.com/shareArticle?url=${postUrl}&title=${postTitle}`
                );
            }

            if (whatsappBtn) {
                whatsappBtn.setAttribute(
                    "href",
                    `https://wa.me/?text=${postTitle} ${postUrl}`
                );
            }
        }

        init();
    });
</script>



@endsection