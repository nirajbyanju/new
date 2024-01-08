<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('opcn/images/favicon.ico')}}" type="image/x-icon">
    <title>Login</title>
    <link href="{{ asset('opcn/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('opcn/frontend/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('opcn/frontend/css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('opcn/frontend/css/style.css') }}" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script href="{{ asset('opcn/frontend/js/login.js') }}"></script>
</head>
<body>
    <div class="auto-container">
        <div class="showing-login-menu">
            <div class="showing-login-menu-photo">
                <div class="form-logo">
                    <a href="{{ url('/') }}">
                        <img src="opcn/images/logo.png">
                    </a>
                </div>
                <section id="tranding">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/internship')}}"><img src="opcn/images/slider/internships.png" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/onlinecourses')}}"><img  src="opcn/images/slider/onlinecourse.png" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/entreneurshipview')}}">
                                        <img src="opcn/images/slider/entrepreneurship.png" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/scholarshipview')}}"> <img src="opcn/images/slider/scholarships.png" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            
                        </div>
                        <div class="tranding-slider-control">
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                 </section>
            </div>
            <div class="showing-login-menu-form">
                <div class="mobile-form-logo">
                    <a href="{{ url('/') }}">
                        <img src="opcn/images/logo.png" class="center-image">
                    </a>
                </div>
                <div class="form-title">
                    <h2 class="form-welcome">Welcome Back</h2>
                </div>
                <div class="auto-signup">
                    <div class="google-autologin">
                        <div class="google-autologin-logo">
                            <img src="opcn/images/menu/google_logo.png" alt="">
                        </div>
                        <p>Sign up with Google</p>
                    </div>
                    <div class="main-line-text">
                        <div class="text"><span>or</span></div>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}" class="login_form" id="form">
                        @csrf
                        <div class="form-icon">
                            <label for="email" id="email-label">Email Id</label>
                            <input type="text" class="form-control" name="email" id="email-input" value="{{ old('email') }}" placeholder="Enter your email id" required autocomplete="email">
                            <div id="email-error-messages" class="error-showing">
                                <p class="error-message"></p>
                            </div>
                        </div>
                        <div class="form-icon">
                            <label for="password" id="password-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required autocomplete="new-password">
                            @error('email')
                                <div class="error-showing">
                                    <p class="error-message" id="password-error-message">{{ $message }}</p>
                                </div>
                            @enderror

                            <div class="showing-password_get_info">
                                <div class="showing-pass" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye"></i>
                                </div>
                                <div class="hiding-password" style="display: none;" onclick="togglePasswordVisibility()">
                                    <i class="fas fa-eye-slash"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-icon">
                            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                        @endif
                        </div>
                        <div class="rembering-forgetting">
                            <div class="remeber">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="remeber">Remember me</label>
                            </div>
                            <div class="forget-password">
                                @if (Route::has('password.request'))
                                    <p class="forget"><a href="{{ route('password.request') }}">Forgot password ?</a></p>
                                @endif
                            </div>
                        </div>
                        
                        <div class="login-botton">
                            <button class="login-button-form" type="submit">Submit</button>
                        </div>
                        <div class="having-account">
                            <span>Don't have an account? <a href="{{ route('register') }}">Sign up</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Check if a remembered username exists in local storage
        const rememberedUsername = localStorage.getItem('rememberedUsername');
        if (rememberedUsername) {
            document.getElementById('email').value = rememberedUsername;
            document.getElementById('remember').checked = true;
        }

        // Save the username to local storage if "Remember Me" is checked
        document.getElementById('loginBtn').addEventListener('click', function() {
            const username = document.getElementById('username').value;
            const rememberMe = document.getElementById('remember').checked;

            if (rememberMe) {
                localStorage.setItem('rememberedUsername', username);
            } else {
                localStorage.removeItem('rememberedUsername');
            }

            // Perform login logic here
            // ...
        });
    </script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var showingPassIcon = document.querySelector(".showing-pass");
            var hidingPassIcon = document.querySelector(".hiding-password");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showingPassIcon.style.display = "none";
                hidingPassIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                showingPassIcon.style.display = "block";
                hidingPassIcon.style.display = "none";
            }
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            loop: true,
            autoplay: {
                delay: 9500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>




