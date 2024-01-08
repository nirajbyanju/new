@extends('layout')
@section('title') Signup - OPCN @endsection
@section('keywords') login ,signup @endsection
@section('description') This is page to signup OPCN @endsection
@section('content')
        <!-- signup-section -->
        <section class="login-section signup-section bg-color-2">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="inner-box">
                        <h2>Sign up</h2>
                        <div class="other-content centred">
                            <ul class="social-links clearfix">
                                <li><a href="login.html"><i class="fab fa-facebook-f"></i>Login with Facebook</a></li>
                                <li><a href="login.html"><i class="fab fa-google-plus-g"></i>Login with Google Plus</a></li>
                            </ul>
                            <div class="text"><span>or</span></div>
                        </div>
                        <form action="{{url('/')}}/signup" method="post" class="signup-form" enctype="multipart/form-data"  >
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" required="" placeholder="Enter Name">
                                <span class="text-danger">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" required="" placeholder="Enter Email">
                                <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" required="" placeholder="Enter password">
                                <span class="text-danger">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="cpassword" required="" placeholder="Enter Conform password">
                                <span class="text-danger">
                                    @error('cpassword')
                                        {{$message}}
                                    @enderror
                                  </span>
                            </div>
                            <div class="form-group message-btn">
                                <button type="submit" onclick="" class="theme-btn-one">Sign up</button>
                            </div>
                        </form>
                        <div class="othre-text centred">
                            <p>Already have an account? <a href="{{url('login')}}">Sign in</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- signup-section end -->




        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="far fa-long-arrow-up"></span>
        </button>
    </div>
    @endsection