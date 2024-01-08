
<div class="main-header-postion">
    <section>
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner">
                    <div class="top-inner-contact">
                        <div class="contact-location">
                            <i class="fas fa-map-marker-alt"></i>
                            Nepal
                        </div>
                        <div class="time-to-open">
                            <i class="fa-solid fa-clock"></i>
                            Sun - friday 9.30 AM - 6.00 PM
                        </div>
                        <div class="contact-number">
                             <i class="fa-solid fa-phone"></i>
                            <a href="tel:+977-*********"style="filter: brightness(0) invert(1);">+977-*********</a>
                        </div>
                    </div>
                    <div class="top-inner-social-media">
                        <div class="social-media-icon">
                            <a href="">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-tiktok"></i>
                            </a>
                            <a href="">
                                <i class="fa-brands fa-telegram"></i>
                            </a>
                        </div>
                        <div class="top-header-signin">
                        
                        <div class="logout-index" style="cursor: pointer; filter: brightness(0) invert(1);" onclick="toggleLogoutMenu()">
                            @if (!auth()->check())
                                    <div class="sign-in"><a href="{{ url('login') }}"><i class="fas fa-user"></i> Sign In</a></div>
                                @else
                                @php
                                    $detailss =  \App\Models\UserDetail::where('user_id', Auth::id())->first();
                                @endphp                           
                                    <div class="sign-in"><a href="#">  
                                        <img src="{{ asset('opcn/uploads/userphoto/'.$detailss->photo) }}" alt="user-img" class="avatar-xl rounded-circle">
                                        </i>{{ Auth::user()->username}}</a></div>
                                    </div>
                                @endif
                        </div>
    
                        <!-- Logout Menu -->
                        <div id="logoutMenu" style="display: none; position: relative;">
                            <!-- Add your logout menu content here -->
                            <div class="inner-menu-logout" style="position: absolute; top: 5px; right: 1px; z-index: 9999; width: 90px; background: #0d1927;">
                                <a href="logout.php" style="color: #fff; display: flex; justify-content: space-between; padding: 4px 10px;">
                                    <i class="fas fa-user-cog"></i>
                                    profile
                                </a>
                                <a href="#" onclick="event.preventDefault(); logout()" style="color: #fff; display: flex; justify-content: space-between; padding: 4px 10px;">
                                    <img src="{{asset('opcn/images/menu/login_icon.svg')}}" style="height: 14px; filter: brightness(0) invert(1);">
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="nav-bar">
            <div class="auto-container">
                <div class="header-main">
                <div class="header-main" >
                    <div class="header-logo">
                        <div class="logo-section">
                            <a href="{{url('/')}}">
                                <img src="{{asset('opcn/images/logo.png')}}" alt="">
                            </a>
                        </div>
                        <div class="search-section">
                            <span><i class="fa-sharp fa-solid fa-magnifying-glass"></i></span>
                            
                            <input type="text" autofocus autocomplete="off" name="search" id="searchInput" @if ($search) value="{{ $search }}" @endif placeholder="Search Opportunities">
      
                        </div>  
                        
                            
                    </div>
                    <div class="header-menu">
                        <div class="main-menu-site">
                            <div class="menu-list">
                                <a class="whole-menu" href="{{url('/frontlearn-view')}}">
                                    <en class="icon-menu-showing icon-learn"></en>
                                    <p>Learn</p>                             
                                </a>
                            </div>
                            <div class="menu-list">
                                <a href="{{url('frontpratie-view')}}">
                                <en class="icon-menu-showing icon-pratice"></en>
                                    <p>Pratice</p>
                                </a>
                            </div>
    
                            <div class="menu-list">
                                <a href="{{url('frontopportunity-view')}}">
                                    <en class="icon-menu-showing icon-mentorship"></en>
                                    <p>Opportunity</p>
                                </a>
                            </div>
    
                            <div class="menu-list">
                                <a href="{{url('frontvacancy-view')}}">
                                    <en class="icon-menu-showing icon-job"></en>
                                    <p>Vacancy</p>
                                </a>
                            </div>
    
                            <div class="menu-list">
                                <a href="{{url('frontblogs-view')}}">
                                    <en class="icon-menu-showing icon-Blogs"></en>
                                    <p>Blog</p>
                                </a>
                            </div>
                        </div>
                        <div class="sigin-part">
                            <div class="admin-login">
                                <img src="{{asset('opcn/images/menu/host-icon.svg')}}" alt="">
                                Host
                            </div>
                            <div class="user-login">
                                <a href="{{url('login')}}" style="color: #fff;">
                                    <div id="user-logins">
                                        login
                                        <img src="{{asset('opcn/images/menu/host-icon.svg')}}" alt="">
                                    </div>
                                </a>
                            </div>
                            <div class="menu-all-icon">
                                <img src="{{asset('opcn/images/menu/hamburger_icon.svg')}}" alt="">
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <script>
    function toggleLogoutMenu() {
        var logoutMenu = document.getElementById("logoutMenu");
        logoutMenu.style.display = (logoutMenu.style.display === "block") ? "none" : "block";
    }
    
    // Attach a click event to the document to detect clicks anywhere on the page
    document.addEventListener("click", function(event) {
        var logoutMenu = document.getElementById("logoutMenu");
        var logoutIndex = document.querySelector(".logout-index");
    
        // Check if the click occurred within the logout menu or its related element (e.g., logout-index div)
        if (!logoutMenu.contains(event.target) && !logoutIndex.contains(event.target)) {
            logoutMenu.style.display = "none";
        }
    });
    </script>
    <script>
      const header = document.querySelector('.header-top');
      const newHeader = document.querySelector('.nav-bar');
      const headerHeight = header.clientHeight;
      let scrolled = false;
    
      function updateHeaderPosition() {
        if (window.pageYOffset > 50 && !scrolled) {
          scrolled = true;
          header.style.display = 'none';
          newHeader.style.position = 'fixed';
          newHeader.style.top = '0';
          newHeader.style.right = '0';
          newHeader.style.transition = 'top 0.4s ease-in-out';
        } else if (window.pageYOffset <= 50 && scrolled) {
          scrolled = false;
          header.style.display = 'block';
          newHeader.style.position = 'relative';
          newHeader.style.top = 'auto';
          newHeader.style.transition = 'none';
        }
      }
    
      window.addEventListener('scroll', updateHeaderPosition);
    </script>
    
    
    

            
        
        
        
    
    
    
    
    
    
    
    