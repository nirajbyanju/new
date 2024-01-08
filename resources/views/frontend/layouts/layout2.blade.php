<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="google-site-verification" content="8JoUkVqoemmxpxknGeYjwJp18hckKG7nhB4zjUV4YOI" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<title> @yield('title')</title>
		@include('frontend.include.head')
        <!-- Fav Icon -->
        <link rel="icon" href="{{asset('opcn/images/favicon.ico')}}" type="image/x-icon">
        <!-- Google Fonts -->
       
        
    </head>


<body>

		@include('frontend.include.alert')
    	<!-- initiate header-->
    	@include('frontend.include.header2')
    	<div class="row">
			<div class="col-md-12 col-lg-12">
				
											  
				<!-- yeild contents here -->
	    		@yield('content')	<!-- table-responsive -->
				
			
		</div>
	</div>
</div>
</div>   		

		<!-- initiate header-->
		@include('frontend.include.footer')

	<!-- initiate scripts-->
	@include('frontend.include.script')	
    <!-- JQUERY JS -->


</body><!-- End of .page_wrapper -->
</html>
