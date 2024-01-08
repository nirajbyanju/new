<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link href="{{asset('opcn/frontend/css/login.css')}}" rel="stylesheet">
<link href="{{asset('opcn/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('opcn/frontend/css/register.css') }}" rel="stylesheet">
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
                
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                   @csrf 
                        <div class="form-icon">
                            <div class="form-icon-sub">
                                <label for="validationServer01" id="validationServer01">First Name</label>
                                <input title="Authorized Company person First Name" type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}" required oninput="checkInput(this, 1)">
                                @if ($errors->first('firstname'))
                                    <p style="color: red">{{ $errors->first('firstname') }}</p>
                                @endif
                            </div>
                            <div class="form-icon-sub">
                                <label for="validationServer01" id="validationServer01">Last Name</label>
                                <input title="Authorized Company Person Last Name" type="text" name="lastname" class="form-control " id="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required  oninput="checkInput(this, 1)">
                                @if ($errors->first('lastname'))
                                    <p style="color: red">{{ $errors->first('lastname') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="form-iconing">
                            <div class="form-icon-sub">
                                <label for="validationServer02" id="validationServer01" >Type</label>
                                <select class="form-controls" name="type"required aria-label=".form-select-lg example" >
                                    <option value=""disabled selected>Type</option>
                                    <option value="creater" >creater</option>
                                    <option value="user">user</option>
                                </select>
                                @if ($errors->first('type'))
                                    <p style="color: red">{{ $errors->first('type') }}</p>
                                @endif
                            </div>
                            <div class="form-icon-sub">
                                <label for="validationServer01" id="validationServer01">User Name</label>
                                <input type="text" class="form-control " name="username" id="username" placeholder="User Name" value="{{ old('username') }}" required oninput="checkInput(this, 1)">
                                @if ($errors->first('username'))
                                    <div class="username-error-showings">
                                        <p class="username-error-messages" id="username-error-messages"></p>
                                    </div>
                                @endif                            
                            </div>

                         </div>

                         <div class="form-icon">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email-input" placeholder="Email address"  onblur="validateEmailInput(this)">
                                <div class="showing-message">
                                    <div class="email-error-showings">
                                        <p class="email-error-messages" id="email-error-messages"></p>
                                    </div>
                                    @if ($errors->first('email'))
                                        <p style="color: red">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>

                        <div class="form-icon">
                            <div class="form-icon-sub">
                                <label for="validationServer01" id="validationServer01">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}" {{-- required autocomplete="new-password" --}} oninput="checkInput(this, 1)">
                                
                                <div class="showing-password_get_info">
                                    <div class="showing-pass" onclick="togglePasswordVisibility()">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="hiding-password" style="display: none;" onclick="togglePasswordVisibility()">
                                        <i class="fas fa-eye-slash"></i>
                                    </div>
                                    
                                </div> 
                                <div class="error-showings">
                                    <p class="error-messages" id="password-error-messages"></p>
                                    <p class="success-message" id="password-success-message"></p>
                                </div>
                                @if ($errors->first('password'))
                                    <p style="color: red">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-icon-sub">
                                <label for="validationServer01" id="validationServer01">Confirm Password</label>
                                <input type="password" class="form-control " name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" {{-- required autocomplete="new-password" --}} oninput="checkInput(this, 1)">
                                
                                <div class="showing-password_get_infos">
                                    <div class="showing-passes" onclick="togglePasswordVisibilitys()">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <div class="hiding-passwordes" style="display: none;" onclick="togglePasswordVisibilitys()">
                                        <i class="fas fa-eye-slash"></i>
                                    </div>  
                                </div> 
                                <div class="error-showing">
                                    <p class="error-message" id="password-error-message"></p>
                                </div>
                                @if ($errors->first('password_confirmation'))
                                    <p style="color: red">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                            </div>               
                        </div>
                        </div>
                        <div class="rembering-forgetting">
                        <div class="col-md-12 checkbox_type">
                            <input type="checkbox" name="agreed" value="agreed" id="agreed">
                            <label for="agreed"  >All your information is collected, stored and processed as per our data processing guidelines. By signing up on Unstop, you agree to our
                                <a href="#">Privacy Policy</a> and <a href="#">Terms of Use</a>
                            </label>                      
                            @if ($errors->first('agreed'))
                                <p>{{ $errors->first('agreed') }}</p>
                            @endif
                        </div>
</div>
                        
                        <div class="login-botton">
                            <button class="login-button-form">
                                Register
                            </button>
                        </div>
                        <div class="having-account ">
                            <Span>Don't have an account?
                                <a href="{{ route('login') }}">Log in</a>
                            </Span>
                        </div>                   
                    </form>
                </div>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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
            function togglePasswordVisibilitys() {
            var passwordInput = document.getElementById("password_confirmation                                                                              ");
            var showingPassIcon = document.querySelector(".showing-passes");
            var hidingPassIcon = document.querySelector(".hiding-passwordes");

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


            function validateEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailRegex.test(email);
            }

            function validateEmailInput(emailInput) {
                const value = emailInput.value.trim();
                const errorMessageElement = document.getElementById("email-error-messages");

                if (value === "") {
                    errorMessageElement.textContent = "Required.";
                } else if (!validateEmail(value)) {
                    errorMessageElement.textContent = "Invalid_email.";
                } else {
                    errorMessageElement.textContent = "";
                    // Only check email existence if the email is valid
                    checkEmailExistence();
                }
            }


            function checkInput(input, length) {
                if (input.value.trim().length >= length) {
                    input.classList.remove("is-invalid");
                    input.classList.add("is-valid");
                    input.style.borderColor = "green"; // Set green border color
                } else {
                    input.classList.remove("is-valid");
                    input.classList.add("is-invalid");
                    input.style.borderColor = "red"; // Set red border color
                }
            }

            
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
        loop:true,
        /**/autoplay: {
            delay: 9500,
            disableOnInteraction:false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
        });

        </script>
    </body>