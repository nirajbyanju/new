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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>

</style>
<body>
  <div class="auto-container">
  <div class="position-relative">

        <div class="form-row">
          <div class="col-md-8">
            <div class="login-box">
            <div class="form-logo">
              <a href="{{ url('/') }}">
                <img src="{{asset('opcn/images/logo.png')}}">
              </a>
            </div>
            <section id="tranding">
            
              <div class="swiper tranding-slider">
              <div class="swiper-wrapper">
                  <!-- Slide-start -->
                  <div class="swiper-slide tranding-slide">
                      <div class="tranding-slide-img">
                          <a href="{{url('/internship')}}"><img src="{{asset('opcn/images/slider/internships.png')}}" alt="Tranding"></a>
                      </div> 
                  </div>
                  <!-- Slide-end -->
                  <!-- Slide-start -->
                  <div class="swiper-slide tranding-slide">
                  
                      <div class="tranding-slide-img">

                              <a href="{{url('/onlinecourses')}}"><img  src="{{asset('opcn/images/slider/onlinecourse.png')}}" alt="Tranding"></a>

                      </div> 
                  </div>
                  <!-- Slide-end -->
                  <!-- Slide-start -->
                  <div class="swiper-slide tranding-slide">
                  <div class="tranding-slide-img">
                      <a href="{{url('/entreneurshipview')}}"><img src="{{asset('opcn/images/slider/entrepreneurship.png')}}" alt="Tranding"></a>
                  </div> 
                  </div>
                  <!-- Slide-end -->
                  <!-- Slide-start -->
                  <div class="swiper-slide tranding-slide">
                      <div class="tranding-slide-img">
                          <a href="{{url('/scholarshipview')}}"> <img src="{{asset('opcn/images/slider/scholarships.png')}}" alt="Tranding"></a>
                      </div> 
                  </div>
                  <!-- Slide-end -->
                  
              </div>
      
              <div class="tranding-slider-control">
                  <div class="swiper-pagination"></div>
              </div>
              </div>
              </div>
          </section>
      
          <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
          <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
          <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
          <script >
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
            <div>

            </div>
            <div class="carousel"></div>
          </div>
          <div class="col-md-4">
            <div class="item">
              <div class="content">
                <div class="form-title">
                  <h2 class="form-welcome">Welcome!</h2>
                </div>
                
              <div class="panel-body">
                  <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row">

                      <div class="col-md-6 mb-3 form-icon">
                      <label title="Authorized Company person First Name" for="validationServer01" id="validationServer01">First Name</label>
                      <input title="Authorized Company person First Name" type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="{{ old('firstname') }}" required oninput="checkInput(this, 1)">
                      @if ($errors->first('firstname'))
                        <p style="color: red">{{ $errors->first('firstname') }}</p>
                         @endif
                      </div>
        
                      <div class="col-md-6 mb-3 form-icon">
                         <label title="Authorized Company Person Last Name" for="validationServer02" id="validationServer01" >Last Name</label>
                         <input title="Authorized Company Person Last Name" type="text" name="lastname" class="form-control " id="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required  oninput="checkInput(this, 1)">
                         @if ($errors->first('lastname'))
                        <p style="color: red">{{ $errors->first('lastname') }}</p>
                         @endif
                      </div>
                    </div>
                    <div class="form-row">

                      <div class="col-md-4 mb-3 form-icon">
                        <label for="validationServer02" id="validationServer01" >Type</label>
                        <select class="form-control " name="type" required>
                          <option value=""disabled selected>Type</option>
                          <option value="creater" >creater</option>
                          <option value="user">user</option>
                        </select>
                        @if ($errors->first('type'))
                        <p style="color: red">{{ $errors->first('type') }}</p>
                         @endif
                      </div>

                      <div class="col-md-8 mb-3 form-icon">
                        <label for="validationServer01" id="validationServer01">User / Company Name</label>
                        <input type="text" class="form-control " name="username" id="username" placeholder="User Name" value="{{ old('username') }}" required oninput="checkInput(this, 1)">
                        @if ($errors->first('username'))
                        <p style="color: red">{{ $errors->first('username') }}</p>
                         @endif
                      </div>    
                      </div>
                    <div class="form-row">

                      <div class="col-md-12 mb-3 form-icon">
                      <label for="validationServer01" id="validationServer01">Email</label>
                      <input type="email" class="form-control " name="email" id="email" placeholder="Email" value="{{ old('email') }}" required oninput="checkInput(this, 1)">
                      @if ($errors->first('email'))
                            <p style="color: red">{{ $errors->first('email') }}</p>
                      @endif
                      </div>
                    </div>
                    <div class="form-row">

                        <div class="col-md-6 mb-3 form-icon">
                        <label for="validationServer01" id="validationServer01">Password</label>
                        <input type="password" class="form-control " name="password" id="password" placeholder="User Name" value="{{ old('password') }}" {{-- required autocomplete="new-password" --}} oninput="checkInput(this, 1)">
                        </div>
          
                        <div class="col-md-6 mb-3 form-icon">
                          <label for="validationServer02" id="validationServer01" >Confirm Password</label>
                          <input type="password" class="form-control " name="password_confirmation" id="cpassword" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" {{-- required autocomplete="new-password" --}} oninput="checkInput(this, 1)">
                        </div>
                      </div>
                      @if ($errors->first('password'))
                        <p style="color: red">{{ $errors->first('password') }}</p>
                         @endif
                         @if ($errors->first('password_confirmation'))
                         <p style="color: red">{{ $errors->first('password_confirmation') }}</p>
                          @endif
                      <div class="form-row">
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
                      <div class="form-row">
                        <div class="col-md-12">
                          <button type="submit" class="login-button">Register</button>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12 mb-3 form-logins">
                          Already have an account?
                          <a href="{{ route('login') }}">Login</a>
                        </div>
                      </div>
                        
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>



  
  <script>
    
    function checkInput(input, length) {
    if (input.value.trim().length >= length) {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
    } else {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
    }
  }

    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
    useCurrent: false //Important! See issue #1075
    });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
  </script>
</body>
</html>