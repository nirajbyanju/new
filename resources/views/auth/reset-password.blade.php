{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
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
    <style>
      .backtologin{
        width: 100%;
        display: flex;
        height: 50px;
        justify-content: center;
        align-items: center;
        grid-gap: 10px;
        gap: 10px;
        border-radius: 68px;
        border: 1px solid #DADCE0;
        background: #FFF;
        color: #0073e6;
        font-size: 14px;
        margin-top: 16px;
        transition: .3s;
        cursor: pointer;
      }
    </style>
</head>
<body>
    <div class="auto-container">
        <div class="showing-login-menu">
            <div class="showing-login-menu-photo">
                <div class="form-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('opcn/images/logo.png') }}">
                    </a>
                </div>
                <section id="tranding">
                    <div class="swiper tranding-slider">
                        <div class="swiper-wrapper">
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/internship')}}"><img src="{{ asset('opcn/images/slider/internships.png') }}" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/onlinecourses')}}"><img  src="{{ asset('opcn/images/slider/onlinecourse.png') }}" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/entreneurshipview')}}">
                                        <img src="{{ asset('opcn/images/slider/entrepreneurship.png') }}" alt="Tranding"></a>
                                </div> 
                            </div>
                            <!-- Slide-end -->
                            <!-- Slide-start -->
                            <div class="swiper-slide tranding-slide">
                                <div class="tranding-slide-img">
                                    <a href="{{url('/scholarshipview')}}"> <img src="{{ asset('opcn/images/slider/scholarships.png') }}" alt="Tranding"></a>
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
            <div class="showing-login-menu-form" style="margin-top: 178px;">

                <div class="auto-signup">
                    <div style="display: flex;">
                        <div class="logsingb">
                          <img src="https://d8it4huxumps7.cloudfront.net/uploads/images/login/forgot-password.png?d=60x60" alt="">
                        </div>
                        <div class="logsingbrr">
                          <span style="font-size: 12px;">
                            <strong style="display:block;">Forget Password?</strong>
                            Create a new password to login your account.
                          </span>
                        </div>
                    </div>
                    <div class="main-line-text">
                        <div class="text"><span>or</span></div>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('password.store') }}" class="login_form" id="form">
                        @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
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
                        <label for="password" id="password-label">Confirm Password</label>
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
                     
                       
                        
                        <div class="login-botton">
                            <button class="login-button-form" type="submit">RESET PASSWORD</button>
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
      function togglePasswordVisibilitys() {
    var passwordInput = document.getElementById("password_confirmation");
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





