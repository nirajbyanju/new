<div class="page">
  <div class="page-main">

      <!--APP-SIDEBAR-->
      <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
      <aside class="app-sidebar">
          <div class="side-header">
              <a class="header-brand1" href="{{url('/')}}">
                  <img src="{{asset('opcn/images/logo.png')}}" class="header-brand-img light-logo1" alt="logo">
              </a><!-- LOGO -->
              <a aria-label="Hide Sidebar" class="app-sidebar__toggle ml-auto" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
          </div>
          
          <div class="sidebar-navs">
              <ul class="nav  nav-pills-circle">
                  <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Settings">
                      <a class="nav-link text-center m-2" href="{{ route('profile.edit') }}">
                          <i class="fe fe-settings"></i>
                      </a>
                  </li>
                  <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Chat">
                      <a class="nav-link text-center m-2">
                          <i class="fe fe-mail"></i>
                      </a>
                  </li>
                  <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Followers">
                      <a class="nav-link text-center m-2">
                          <i class="fe fe-user"></i>
                      </a>
                  </li>
                  <li class="nav-item" data-toggle="tooltip" data-placement="top" title="Logout">
                    <form style="padding: 0; margin: 0;  " method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link text-center m-2">
                            
                        <button style=" background-color: transparent !important; margin:0; padding:0; border: none; " type="submit"><i class="fe fe-power"></i></button>
            
                      </a>
                      </form> 

                  </li>
              </ul>
          </div>
          <ul class="side-menu">
              <li><h3>Main</h3></li>
              <li class="slide">
                  <a class="side-menu__item"  data-toggle="slide" href="{{ url('/dashboard') }}"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                  
              </li>
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="{{ url('profileinfo', Auth::user()->id) }}"><i class="side-menu__icon ti-layout-accordion-separated"></i><span class="side-menu__label">My Profile</span><i class="angle fa fa-angle-right"></i></a>
      
              </li>
              @if((Auth::user()->type)=='admin')
                <li><h3>Posting Opporunitity</h3></li>
                <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ route('postingajob') }}"><i class="side-menu__icon ti-panel"></i><span class="side-menu__label">Post a Job</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('postingajob') }}" class="slide-item">Posting a Job</a></li>
                        <li><a href="{{ route('postajobtable') }}" class="slide-item"> Posting Job Edit</a></li>
                    </ul>
                </li>
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-layers"></i><span class="side-menu__label">Post a opporunity</span><i class="angle fa fa-angle-right"></i></a>
                  <ul class="slide-menu">
                      <li><a href="{{ route('posting_opporunity') }}" class="slide-item"> Posting a Opporunity</a></li>
                      <li><a href="{{ route('opporunitytable') }}" class="slide-item"> Posting Opportunity Edit</a></li>
                      <li><a href="{{ route('opporunitytable') }}" class="slide-item"> Colors</a></li>
                  </ul>
              </li>
              @endif
              @if((Auth::user()->type)=='admin')
              <li><h3>Learn</h3></li>
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-bar-chart"></i><span class="side-menu__label">Courses</span><i class="angle fa fa-angle-right"></i></a>
                  <ul class="slide-menu">
                      <li><a href="{{ route('managecourse_view') }}" class="slide-item">Manage Courses</a></a></li>
                      <li><a href="{{ route('course_add') }}" class="slide-item"> Add new Courses</a></li>
                      <li><a href="{{ route('learncategory') }}" class="slide-item">Courses Category</a></a></li>
                      <li><a href="{{ route('coupons_view') }}" class="slide-item">Coupons</a></li>
                  </ul>
              </li>
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">Enrolment</span><i class="angle fa fa-angle-right"></i></a>
                  <ul class="slide-menu">
                      <li><a href="tables.html" class="slide-item">Enroll History</a></li>
                      <li><a href="datatable.html" class="slide-item"> Enroll Student </a></li>
                  </ul>
              </li>
              <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">Report</span><i class="angle fa fa-angle-right"></i></a>
                <ul class="slide-menu">
                    <li><a href="tables.html" class="slide-item">Admin revenue</a></li>
                    <li><a href="datatable.html" class="slide-item">Instructor revenue</a></li>
                </ul>
            </li>
            @endif
            @if((Auth::user()->type)=='admin')
              <li><h3>Blog</h3></li>
              <li class="slide">
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-shield"></i><span class="side-menu__label">Blog</span><i class="angle fa fa-angle-right"></i></a>
                  <ul class="slide-menu">
                      <li><a href="{{ route('blogposts') }}" class="slide-item">Post</a></li>
                      <li><a href="{{ route('viewcategory') }}" class="slide-item">Categories</a></li>
                  </ul>
              </li>
              
            </li>
            @endif
            @if((Auth::user()->type)=='admin')
            <li><h3>Pop Message</h3></li>
              <li class="slide">
              <li class="slide">
                  <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-shield"></i><span class="side-menu__label">Pop Message</span><i class="angle fa fa-angle-right"></i></a>
                  <ul class="slide-menu">
                      <li><a href="{{ route('popmessageview') }}" class="slide-item">Pop Message </a></li>
                  </ul>
              </li>
              
            </li> 
            @endif    
        </ul>
 
      </aside>
<!--/APP-SIDEBAR-->

      <!-- Mobile Header -->
      <div class="mobile-header">
          <div class="container-fluid">
              <div class="d-flex">
                  <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                  <a class="header-brand" href="index.html">
                      <img src="{{asset('opcn/images/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
                      <img src="{{asset('opcn/images/logo.png')}}" class="header-brand-img desktop-logo mobile-light" alt="logo">
                  </a>
                  <div class="d-flex order-lg-2 ml-auto header-right-icons">
                      <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                      </button>
                      <div class="dropdown profile-1">
                          <a href="#" data-toggle="dropdown" class="nav-link pr-2 leading-none d-flex">
                              <span>
                                  <img src="{{ asset('opcn/uploads/userphoto/' .$details->photo) }}" alt="profile-user" class="avatar  profile-user brround cover-image">
                              </span>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                              <div class="drop-heading">
                                  <div class="text-center">
                                      <h5 class="text-dark mb-0">{{ Auth::user()->name }}</h5>
                                      <small class="text-muted">Administrator</small>
                                  </div>
                              </div>
                              <div class="dropdown-divider m-0"></div>
                              <a class="dropdown-item" href="{{ url('profileinfo', Auth::user()->id) }}">
                                  <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                              </a>
                              <a class="dropdown-item" href="#">
                                  <span class="float-right"></span>
                                  <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                              </a>
                              <a class="dropdown-item" href="#">
                                  <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">
                                  <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                              </a>
                              <a class="dropdown-item" href="{{ route('logout') }}">
                                  <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                              </a>
                          </div>
                      </div>
                      <div class="dropdown d-md-flex header-settings">
                          <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                              <i class="fe fe-align-right"></i>
                          </a>
                      </div><!-- SIDE-MENU -->
                  </div>
              </div>
          </div>
      </div>F

      <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
          <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
              <div class="d-flex order-lg-2 ml-auto">
                  <div class="dropdown d-sm-flex">
                      <a href="#" class="nav-link icon" data-toggle="dropdown">
                          <i class="fe fe-search"></i>
                      </a>
                      <div class="dropdown-menu header-search dropdown-menu-left">
                          <div class="input-group w-100 p-2">
                              <input type="text" class="form-control " placeholder="Search....">
                              <div class="input-group-append ">
                                  <button type="button" class="btn btn-primary ">
                                      <i class="fa fa-search" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div><!-- SEARCH -->
                  <div class="dropdown d-md-flex">
                      <a class="nav-link icon full-screen-link nav-link-bg">
                          <i class="fe fe-maximize fullscreen-button"></i>
                      </a>
                  </div><!-- FULL-SCREEN -->
                  <div class="dropdown d-md-flex notifications">
                      <a class="nav-link icon" data-toggle="dropdown">
                          <i class="fe fe-bell"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <div class="notifications-menu">
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <div class="fs-16 text-success mr-3">
                                      <i class="fa fa-thumbs-o-up"></i>
                                  </div>
                                  <div class="">
                                      <strong>Someone likes our posts.</strong>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <div class="fs-16 text-primary mr-3">
                                      <i class="fa fa-commenting-o"></i>
                                  </div>
                                  <div class="">
                                      <strong>3 New Comments.</strong>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <div class="fs-16 text-danger mr-3">
                                      <i class="fa fa-cogs"></i>
                                  </div>
                                  <div class="">
                                      <strong>Server Rebooted</strong>
                                  </div>
                              </a>
                          </div>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item text-center">View all Notification</a>
                      </div>
                  </div><!-- NOTIFICATIONS -->
                  <div class="dropdown d-md-flex message">
                      <a class="nav-link icon text-center" data-toggle="dropdown">
                          <i class="fe fe-mail"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <div class="message-menu">
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/1.jpg')}}"></span>
                                  <div>
                                      <strong>Madeleine</strong> Hey! there I' am available....
                                      <div class="small text-muted">
                                          3 hours ago
                                      </div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/1.jpg')}}"></span>
                                  <div>
                                      <strong>Anthony</strong> New product Launching...
                                      <div class="small text-muted">
                                          5 hour ago
                                      </div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/1.jpg')}}"></span>
                                  <div>
                                      <strong>Olivia</strong> New Schedule Realease......
                                      <div class="small text-muted">
                                          45 mintues ago
                                      </div>
                                  </div>
                              </a>
                              <a class="dropdown-item d-flex pb-3" href="#">
                                  <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/1.jpg')}}"></span>
                                  <div>
                                      <strong>Sanderson</strong> New Schedule Realease......
                                      <div class="small text-muted">
                                          2 days ago
                                      </div>
                                  </div>
                              </a>
                          </div>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item text-center">See all Messages</a>
                      </div>
                  </div><!-- MESSAGE-BOX -->
              </div>
          </div>
      </div>
<!-- /Mobile Header -->

      <div class="app-content">
          <div class="side-app">

            @stack('maintitle')
  <!-- PAGE-HEADER END -->
              <!-- /Notification -->
    <div class="d-flex  ml-auto header-right-icons header-search-icon">
      <div class="dropdown d-sm-flex">
        <a href="#" class="nav-link icon" data-toggle="dropdown">
          <i class="fe fe-search"></i>
        </a>
        <div class="dropdown-menu header-search dropdown-menu-left">
          <div class="input-group w-100 p-2">
            <input type="text" class="form-control " placeholder="Search....">
            <div class="input-group-append ">
              <button type="button" class="btn btn-primary ">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div><!-- SEARCH -->
      <div class="dropdown d-md-flex">
        <a class="nav-link icon full-screen-link nav-link-bg">
          <i class="fe fe-maximize fullscreen-button"></i>
        </a>
      </div><!-- FULL-SCREEN -->
      <div class="dropdown d-md-flex notifications">
        <a class="nav-link icon" data-toggle="dropdown">
          <i class="fe fe-bell"></i>
          <span class="nav-unread badge badge-success badge-pill">2</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
          <div class="notifications-menu">
            <a class="dropdown-item d-flex pb-3" href="#">
              <div class="fs-16 text-success mr-3">
                <i class="fa fa-thumbs-o-up"></i>
              </div>
              <div class="">
                <strong>Someone likes our posts.</strong>
              </div>
            </a>
            <a class="dropdown-item d-flex pb-3" href="#">
              <div class="fs-16 text-primary mr-3">
                <i class="fa fa-commenting-o"></i>
              </div>
              <div class="">
                <strong>3 New Comments.</strong>
              </div>
            </a>
            <a class="dropdown-item d-flex pb-3" href="#">
              <div class="fs-16 text-danger mr-3">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="">
                <strong>Server Rebooted</strong>
              </div>
            </a>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item text-center">View all Notification</a>
        </div>
      </div><!-- NOTIFICATIONS -->
      <div class="dropdown d-md-flex message">
        <a class="nav-link icon text-center" data-toggle="dropdown">
          <i class="fe fe-mail"></i>
          <span class="nav-unread badge badge-danger badge-pill">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
          <div class="message-menu">
            <a class="dropdown-item d-flex pb-3" href="#">
              <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/1.jpg')}}')}}"></span>
              <div>
                <strong>Madeleine</strong> Hey! there I' am available....
                <div class="small text-muted">
                  3 hours ago
                </div>
              </div>
            </a>
            <a class="dropdown-item d-flex pb-3" href="#">
              <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/12.jpg')}}"></span>
              <div>
                <strong>Anthony</strong> New product Launching...
                <div class="small text-muted">
                  5 hour ago
                </div>
              </div>
            </a>
            <a class="dropdown-item d-flex pb-3" href="#">
              <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/4.jpg')}}"></span>
              <div>
                <strong>Olivia</strong> New Schedule Realease......
                <div class="small text-muted">
                  45 mintues ago
                </div>
              </div>
            </a>
            <a class="dropdown-item d-flex pb-3" href="#">
              <span class="avatar avatar-md brround mr-3 align-self-center cover-image" data-image-src="{{asset('opcn/backend/images/users/15.jpg')}}"></span>
              <div>
                <strong>Sanderson</strong> New Schedule Realease......
                <div class="small text-muted">
                  2 days ago
                </div>
              </div>
            </a>
          </div>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item text-center">See all Messages</a>
        </div>
      </div><!-- MESSAGE-BOX -->
      <div class="dropdown text-center selector profile-1">
                                              <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                                  <span>
                                                    <figure class="thumb-box">
                                                      <?php 
                                                              $username = \App\Models\User::find(Auth::user()->id);
                                                              $userphotos = \App\Models\UserDetail::where('user_id', Auth::user()->id)->first();
              
                                                              $user_full_names = $username->firstname . ' ' . $username->lastname;
              
                                                              
                                                              $full_name_arr = explode(" ", $user_full_names); 
                                                              $full_name_arr_end = end($full_name_arr); 
                                                              $firstWord = !empty($full_name_arr[0])?$full_name_arr[0]:''; 
                                                              $lastWord = !empty($full_name_arr_end[0])?$full_name_arr_end[0]:''; 
                                                              $charF = !empty(mb_substr($firstWord, 0, 1))?mb_substr($firstWord, 0, 1):''; 
                                                              $charL = !empty(mb_substr($lastWord, 0, 1))?mb_substr($lastWord, 0, 1):''; 
                                                              $shortChar = $charF.$charL; 
                                                              
                                                              ?> 
                                                              
                                                      @if($userphotos->photo)
                                                        <img src="{{ asset('opcn/uploads/userphoto/' .$details->photo) }}" alt="profile-user" class="avatar avatar-sm brround cover-image mb-1 ml-0">
                                                      @else
                                                          <div class="profile-image avatar-sm brround cover-image mb-1 ml-0" style="background-color: #3854A5; color: #ffffff;">
                                                              <?php echo trim($shortChar); ?>
                                                          </div> 
                                                      @endif




                                                    </span>
                                                  <span class=" ml-3 d-none d-lg-block ">
                                                      <span class="text-dark">{{ $details->company_name }}</span>
                                                  </span>
                                              </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
          <div class="drop-heading">
            <div class="text-center">
              <h5 class="text-dark mb-0">{{ $authUser->username }}</h5>
              <small class="text-muted">{{ $details->role }}</small>
            </div>
          </div>
          <div class="dropdown-divider m-0"></div>
          <a class="dropdown-item" href="{{ url('profileinfo', Auth::user()->id) }}">
            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
          </a>
          <a class="dropdown-item" href="{{ route('profile.edit') }}">
            <i class="dropdown-icon  mdi mdi-settings"></i> Settings
          </a>
          <a class="dropdown-item" href="#">
            <span class="float-right"></span>
            <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
          </a>
          <a class="dropdown-item" href="#">
            <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
          </a>
          <div class="dropdown-divider mt-0"></div>
          <a class="dropdown-item" href="#">
            <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
          </a>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
          <a class="dropdown-item">
            <i class="dropdown-icon mdi  mdi-logout-variant"></i> <button style=" background-color: transparent !important; " type="submit">Logout</button>

          </a>
          </form>
        </div>
      </div>
      <div class="dropdown d-md-flex header-settings">
        <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
          <i class="fe fe-align-right"></i>
        </a>
      </div><!-- SIDE-MENU -->
    </div>
<!-- /Notification Ends -->

    </div>



  <!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

