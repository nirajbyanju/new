@extends('frontend.layouts.layout') 
@section('title', 'Dashboard')
@section('content')
    @push('head')
    <link href="{{asset('opcn/frontend/css/opportunity-view.css')}}" rel="stylesheet">
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
<link href="{{asset('opcn/css/nice-select.css')}}" rel="stylesheet">
<style>
    .box {
    display: grid;
    align-items: center;
    justify-items: center;
    width: 40%;
    height: auto;
    transition: transform .5s ease-in;
}

.box img {
    max-width: 100%;
    max-height: 100%;
    width: 100%;
}

.box:hover {
    transform: scale(1.2);
}
   .blurred-background {
        filter: blur(5px);
        -webkit-filter: blur(5px);
        -moz-filter: blur(5px);
        -o-filter: blur(5px);
        -ms-filter: blur(5px);
        }
    #DIV_1 {
        background-color: rgb(255, 255, 255);
        border-radius: 4px;
        border: 0px solid rgb(79, 79, 79);
        box-shadow: rgba(0, 0, 0, 0.9) 0px 0px 5px 0px;
        top: 10rem;
        left: 50%;
        transform: translate(-50%, 0);
        
        
        position: fixed;
        /* -1/2 of the width */
        padding: 0.5rem;
        font-family: Roboto;
        font-size: 13px;
        line-height: 18.5714px;
        width: 31rem;
        z-index: 1100;
        }
    @media (max-width: 767px) {
    #DIV_1 {
        width: 50%;
        top: 8rem;
    }
    }
    @media (max-width: 767px) {
    #P_2 {
        width: 50%;
    }
    }
    @media (max-width: 767px) {
    #IMG_3 {
        width: 50%;
    }
    }
    #P_2 {
        block-size: 246.534px;
        border-block-end-color: rgb(79, 79, 79);
        border-block-start-color: rgb(79, 79, 79);
        border-inline-end-color: rgb(79, 79, 79);
        border-inline-start-color: rgb(79, 79, 79);
        box-sizing: border-box;
        caret-color: rgb(79, 79, 79);
        color: rgb(79, 79, 79);
        column-rule-color: rgb(79, 79, 79);
        cursor: default;
        height: auto;
        inline-size: 246.534px;
        margin-block-end: 10px;
        margin-block-start: 0px;
        perspective-origin: 123.261px 123.261px;
        text-decoration: none solid rgb(79, 79, 79);
        text-emphasis-color: rgb(79, 79, 79);
        text-size-adjust: 100%;
        transform-origin: 123.267px 123.267px;
        border: 0px none rgb(79, 79, 79);
        font: 13px / 19.5px Roboto;
        margin: 0px 0px 10px;
        outline: rgb(79, 79, 79) none 0px;
        width: 30rem;
    }/*#P_2*/

    #IMG_3 {
        block-size: auto;
        border-block-end-color: rgb(79, 79, 79);
        border-block-start-color: rgb(79, 79, 79);
        border-inline-end-color: rgb(79, 79, 79);
        border-inline-start-color: rgb(79, 79, 79);
        box-sizing: border-box;
        caret-color: rgb(79, 79, 79);
        color: rgb(79, 79, 79);
        column-rule-color: rgb(79, 79, 79);
        cursor: default;
        vertical-align: middle;
        perspective-origin: 7.70421875rem 7.70421875rem;
        text-decoration: none solid rgb(79, 79, 79);
        text-emphasis-color: rgb(79, 79, 79);
        text-size-adjust: 100%;
        transform-origin: 7.70421875rem 7.70421875rem;
        vertical-align: middle;
        border: 0px none rgb(79, 79, 79);
        font: 13px / 19.5px Roboto;
        outline: rgb(79, 79, 79) none 0px;
        }/*#IMG_3*/



    #BUTTON_4 {
        cursor: pointer;
        border: 1px solid #fff;
        padding: 1% 2%;
        background: #c4161c;
        box-shadow: 0 0 4px rgb(0 0 0 / 30%);
        position: absolute;
        top: 0;
        right: -15px;
        border-radius: 5px;
        color: #FFF;
    }
.home-view-opportunity{
    display: flex;
    margin-top: 90px;
}
.home-text-showing-text-heading h3{
    color: #1c4980;
    font-weight: 700;
    font-size: 60px;
    letter-spacing: 3px;
    text-align: left;
}
.home-text-showing-text-heading p{
    text-align: left;
    color: #a8b7cc;
    font-weight: 600;
    font-size: 20px;
    line-height: 140%;
    margin: 0;
    font-weight: 500;
    margin-top: 20px;

}
.main-image img{
    width: 460px;
    position: relative;
    right: -248px;
    top: -20px;
    
}
.home-text-showing-text-form {
    margin-top: 50px;
}
.home-text-showing-text-form form input{
    border: solid 2px #dadfe6;
    border-radius: 30px;
    height: 50px;
    width: 350px;
    padding-left: 30px;
    background: #eef5ff;
    font-size: 17px;
    font-weight: 600;

}
.home-text-showing-text-form button{
    height: 60px;
    width: 160px;
    background: #1c4980;
    color: #fff;
    border-radius: 30px;
    padding: 5px;
    font-size: 17px;
    font-weight: 600;
    position: relative;
    right: 45px;

}
.showing-icon{
    position: absolute;
    left: 355px;
    top: -94px;
    }
    .showing-icon img{
        height: 559px;
    }
.feature-showing-menu{
    display: flex;
}
.feature-showing-text h1 span{
    font-weight: 500;
    font-size: 40px;
    line-height: 48px;
}
.feature-showing-text h1 {
    color: #1c4980;
    font-weight: 700;
    font-size: 50px;
    line-height: 60px;
    margin-bottom: 44px;
    width: 521px;
}
.feature-showing-text p {
    color: #1c4980;
    font-weight: 450;
    font-size: 20px;
    line-height: 140%;
    margin: 0;
}
.feature-showing-text{
    margin-right: 91px;
    padding-right: 10px;
}
.feature-showing-image {
    margin: 10px;
    display: flex;
    flex-wrap: wrap;
}

.feature-showing-image a img{
    width: 140px;
    height: auto;
    margin: 10px;
}
.first-text-learn{
    position: relative;
    left: 20px;
    top: 20px;
    font-weight: 600;
    font-size: 18px;
    line-height: 22px;
    z-index: 1;
}
.feature-showing-image-a {
    margin-bottom: 10px;
    position: relative;
}
.feature-showing-image-a span{
    position:absolute;
    z-index: 1;
    left: 17px;
    bottom: 67px;  
    font-weight: 650; 
    font-size: 17px;
    color: #1c4980;
}
.feature-showing-image a:hover{
    position: relative;
    bottom: 15px;
    transition: .2;
    transition-timing-function: ease-out;
}
.row{
    display: flex;
    flex-wrap: wrap;
    
}
.opp_slider_header{
    margin: 0;
    flex: 0;
    padding-left: 45px;
}

.sec-heading{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 44px;
}
.sec-heading h2{
    color: #1c4980;
    font-weight: 700;
    font-size: 50px;
    line-height: 60px;
}
    .container{
        width: 1128px;
        position: relative;
        right: 37px;
        
    }

.our-partners{
    margin-bottom: 50px;
}
.owl-nav{
    display: none;
}
.mobileapps-launcing{
    margin: 30px;
}
.mobileapps-launcing img{
    border-radius: 10px;
}
.feature-showing-image-a img{
    border-radius: 5px;
}
</style>
@endpush
@push('script')


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
};

document.getElementById("BUTTON_4").addEventListener("click", closePopup);

</script>

@endpush
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
<!-- Modal -->



                    <!-- banner-section -->
                    <section>
                        
                        <div class="auto-container">
                            <section class="testimonial-section sec-pads">
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
                                        <h3>Get New</h3>
                                        <h3>Opportunity</h3>
                                        <p>But I must explainto you how all this mistaken idea of<br>
                                            denouring pleasure and praising</p>
                                    </div>
                                    <div class="home-text-showing-text-form">
                                        <form action="">
                                            <input type="text" placeholder="Type email address">
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
                    <section class="our-partners">
                        <div class="oppsilder">
                            <div class="opp_slider_header">
                                <h2> Get Opporunity in</h2> 
                                <span>Dream Country:</span>
                            </div>
                            <div class="opp_slider_photo">
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry1.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry2.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry3.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry4.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry5.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry6.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry7.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry8.png')}}">
                                </div>
                                <div class="opp_inner">
                                    <img src="{{asset('opcn/images/opportunity\country/cuntry8.png')}}">
                                </div>
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
                                    <span>Connecting</span><br>
                                    Talent, Hard working,Committed
                                </h1>
                                <p>
                                    Discover opportunities to learn, demonstrate skills, <br>
                                    build your resume, and land a job at your dream  <br>
                                    company from around the world.
                                </p>
                                </div>
                                <div class="feature-showing-image">
                                    <div class="first-menu-show">
                                        <a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/learn.png')}}" alt="">
                                            <span>learn</span>
                                        </a>
                                        <a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/pratice.png')}}" alt="">
                                            <span>Pratice</span>
                                        </a>
                                        <a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/test.png')}}" alt="">
                                            <span>Test</span>
                                        </a>
                                        <a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/vacancy.png')}}" alt="">
                                            <span>Vacancy</span>
                                        </a><a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/opporunity.png')}}" alt="">
                                            <span>Opporunity</span>
                                        </a>
                                        <a class="feature-showing-image-a">
                                            <img src="{{asset('opcn/images/resource/home/blogs.png')}}" alt="">
                                            <span>Blogs</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


        <!-- testimonial-section -->
<section class="testimonial-section bg-color-1 sec-pad">
    <figure class="image-layer"><img src="{{asset('opcn/images/resource/testimonial-image-1.png')}}" alt=""></figure>
    <div class="anim-icon">
        <div class="icon anim-icon-1 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
        <div class="icon anim-icon-2 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
        <div class="icon anim-icon-3 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-2.png')}});"></div>
        <div class="icon anim-icon-4 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-1.png')}});"></div>
        <div class="icon anim-icon-5 rotate-me" style="background-image: url({{asset('opcn/images/icons/anim-icon-3.png')}});"></div>
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
                                <p>“I have had a great experience using Opportunities Circle Nepal to post job vacancies and school scholarship opportunities. The platform is easy to use and has made it straightforward for me to reach a wide audience of qualified candidates. The response rate has been excellent and I have been able to fill positions and award scholarships quickly and efficiently. Thank you, Opportunities Circle Nepal, for providing such a valuable and convenient service.”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-3.png')}}" alt=""></figure>
                                <h3>Bimal Nhemafulki</h3>
                                <span class="designation">CEO of Ktm Immigration</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“  I have found Opportunities Circle Nepal to be an excellent resource for staying informed and connected. The platform is easy to use, accessible from any device, and provides a wealth of useful and relevant information. I have also found the conversations with Opportunities Circle Nepal to be interesting and engaging. I highly recommend Opportunities Circle Nepal to other students looking for a reliable and comprehensive resource for academic and professional development. Thank you, Opportunities Circle Nepal!”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-2.png')}}" alt=""></figure>
                                <h3>Er. Puja Byanju</h3>
                                <span class="designation">Engineer at Innovation Costantacy</span>
                            </div>
                        </div>
                        <div class="testimonial-content">
                            <div class="text">
                                <p>“ I have been using Opportunities Circle Nepal and it has exceeded my expectations. It is easy to use, accessible from anywhere, and provides useful and relevant information. The platform is also interesting and personalized to my specific needs and interests. I cherish every chance I get to use Opportunities Circle Nepal and highly recommend it to others.”</p>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{asset('opcn/images/resource/testimonial-4.png')}}" alt=""></figure>
                                <h3>Er. Sunil Kharbuja</h3>
                                <span class="designation">senior Engineerr</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-section end -->
        
        <!-- place-section -->
        <section class="our-partners">
                <div class="sec-heading">
                    <h2>Our Partners</h2>                
                </div>
                
                <div class="oppsilder">
                    <div class="opp_slider_header">
                        <h2> Get Opporunity in</h2> 
                        <span>Dream Country:</span>
                    </div>
                    <div class="opp_slider_photo">
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry1.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry2.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry3.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry4.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry5.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry6.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry7.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry8.png')}}">
                        </div>
                        <div class="opp_inner">
                            <img src="{{asset('opcn/images/opportunity\country/cuntry8.png')}}">
                        </div>
                    </div>
                </div>                
            </div>
            </div>
        </section>
        <!-- place-section end -->
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
        
        <!-- Mobile apps notification and information-->
        <section>
            <div class="auto-container">
                <div class="mobileapps-launcing">
                    <img src="{{asset('opcn/images/resource/mobileapplaunchingsoon.png')}}" alt="">
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
                            <div class="icon-box"><i class="icon-25"></i></div>
                            <h2>Subscribe to Newsletter</h2>
                            <p>and receive new ads in inbox</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Input your email address" required="">
                                <button type="submit" class="theme-btn-one">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    <!-- subscribe-section end -->
    


@endsection