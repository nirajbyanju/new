<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google-site-verification" content="8JoUkVqoemmxpxknGeYjwJp18hckKG7nhB4zjUV4YOI" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title> @yield('title')</title>
		@include('backend.include.head')
        <!-- Fav Icon -->
        <link rel="icon" href="{{asset('opcn/images/favicon.ico')}}" type="image/x-icon">
        <!-- Google Fonts -->
       
        
    </head>


<body class="app sidebar-mini">
	 <!-- GLOBAL-LOADER -->
	 <div id="global-loader">
		<img src="assets/images/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

    	<!-- initiate header-->
    	@include('backend.include.header')
    	<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="card">
											  
				<!-- yeild contents here -->
	    		@yield('content')	<!-- table-responsive -->
				
			</div>
		</div>
	</div>
</div>
</div>   		

		<!-- initiate header-->
		@include('backend.include.footer')

		@include('backend.include.sidebar')

	<!-- initiate scripts-->
	@include('backend.include.script')	
    <!-- JQUERY JS -->


</body><!-- End of .page_wrapper -->
</html>






























{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>@yield('title','') | Radmin - Laravel Admin Starter</title>
	<!-- initiate head with meta tags, css and script -->
	@include('include.head')

</head>
<body id="app" >
    <div class="wrapper">
    	<!-- initiate header-->
    	@include('include.header')
    	<div class="page-wrap">
	    	<!-- initiate sidebar-->
	    	@include('include.sidebar')

	    	<div class="main-content">
	    		<!-- yeild contents here -->
	    		@yield('content')
	    	</div>

	    	<!-- initiate chat section-->
	    	@include('include.chat')


	

    	</div>
    </div>
    
	<!-- initiate modal menu section-->
	@include('include.modalmenu')

	<!-- initiate scripts-->
	@include('include.script')	
</body>
</html> --}}