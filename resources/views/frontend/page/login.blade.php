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
@endsection


    <div class="boxed_wrapper">


        <!-- login-section -->
        <section class="login-section bg-color-2">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="inner-box">
                        <h2>Log in</h2>
                      
                        <form action="{{url('/')}}/login-user" method="post" class="login-form">
                           
                            @if(Session::has('success'))
                            <div class='alert alert-success'>{{session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class='alert alert-danger'>{{session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="">
                                <label>Choose your User Types</label><br>

                                <input type="radio" id="usertype" name="usertype" value="user">
                                 <label for="usertype">User &nbsp &nbsp </label>
                                <input type="radio" id="usertype" name="usertype" value="admin">
                                 <label for="usertype">Admin &nbsp &nbsp   </label>
                                <input type="radio" id="usertype" name="usertype" value="superadmin">
                                 <label for="usertype">Supper User</label>
                                
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Enter your Email">
                                <span class="text-danger">@error('email') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter your Password" >
                                <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            <div class="form-group">
                                <div class="text"><a href="login.html">Forget Password?</a></div>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" class="theme-btn-one">Login Now</button>
                            </div>
                        </form>
                        <div class="other-content centred">
                            <div class="text"><span>or</span></div>
                            <ul class="social-links clearfix">
                                <li><a href="login.html"><i class="fab fa-facebook-f"></i>Login with Facebook</a></li>
                                <li><a href="login.html"><i class="fab fa-google-plus-g"></i>Login with Google Plus</a></li>
                            </ul>
                            <div class="othre-text">
                                <p>Don’t have an account? <a href="{{url('signup')}}">Register Now</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login-section end -->

        @endsection
