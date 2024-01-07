<!DOCTYPE html>
<html lang="zxx">
<head>

@include('frontend.includes.header')

@include('frontend.includes.css')
</head>


<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	@include('frontend.includes.topbar')
	
		@yield('khairul')
			
	{{-- <h1 class="bg-light ">hello hi</h1> --}}
	
	@include('frontend.includes.footer')
 
	@include('frontend.includes.js')
</body>
</html>