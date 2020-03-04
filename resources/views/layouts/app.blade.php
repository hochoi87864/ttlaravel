<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="">
    <head>
		<meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop bán máy tính và linh kiện</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/thuctap1.png')}}">
		
		<!-- Fonts
		============================================ -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
		
 		<!-- CSS  -->
		
		<!-- Bootstrap CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        
		<!-- owl.carousel CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
        
		<!-- owl.theme CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}">
           	
		<!-- owl.transitions CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}">
        
		<!-- font-awesome.min CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
		
		<!-- font-icon CSS
		============================================ -->      
        <link rel="stylesheet" href="{{asset('fonts/font-icon.css')}}">
		
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
		
		<!-- mobile menu CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
		
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="{{asset('custom-slider/css/nivo-slider.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('custom-slider/css/preview.css')}}" type="text/css" media="screen" />
        
 		<!-- animate CSS
		============================================ -->         
        <link rel="stylesheet" href="{{asset('css/animate.css')}}">
        
 		<!-- normalize CSS
		============================================ -->        
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
   
        <!-- main CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        
        <!-- style CSS
		============================================ -->          
        <link rel="stylesheet" href="{{asset('style.css')}}">
        
        <!-- responsive CSS
		============================================ -->          
		<link rel="stylesheet" href="{{asset('css/responsive.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
        
        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body class="home-one">
		@if(\Session::has('success'))
			<div class="alert alert-success alert-dismissible fade in col-sm-6" style="position: fixed;z-index: 99999;top: 10%;left: 50%;transform: translate(-50%,0);">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Thành công !!! </strong>{{\Session::get('success')}}.
		  </div>
		@endif
		@if(\Session::has('warning'))
			<div class="alert alert-warning alert-dismissible fade in col-sm-6" style="position: fixed;z-index: 99999;top: 10%;left: 50%;transform: translate(-50%,0);">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Hết hàng !!! </strong>{{\Session::get('warning')}}.
		  </div>
		@endif
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!-- Add your site or application content here -->
		<!-- header area start -->
		@include('components.header')
		<!-- header area end -->
		  
		@yield('content')
		<div style="margin-bottom: 100px"></div>
		<!-- Brand Logo Area Start -->
		{{-- <div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="brand-carousel">
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg1-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg2-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg3-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg4-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg5-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg2-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg3-brand.jpg')}}" alt="" /></a></div>
						<div class="brand-item"><a href="#"><img src="{{asset('img/brand/bg4-brand.jpg')}}" alt="" /></a></div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- Brand Logo Area End -->
		<!-- FOOTER START -->
		@include('components.footer')
		<!-- FOOTER END -->
		
        <!-- JS -->
        
 		<!-- jquery-1.11.3.min js
		============================================ -->         
		<script src="{{asset('theme_admin/vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('theme_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	  
 		<!-- bootstrap js
		============================================ -->         
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
		
		<!-- Nivo slider js
		============================================ --> 		
		<script src="{{asset('custom-slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
		<script src="{{asset('custom-slider/home.js')}}" type="text/javascript"></script>
        
   		<!-- owl.carousel.min js
		============================================ -->       
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
		
		<!-- jquery scrollUp js 
		============================================ -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
		
		<!-- price-slider js
		============================================ --> 
        <script src="{{asset('js/price-slider.js')}}"></script>
		
		<!-- elevateZoom js 
		============================================ -->
		<script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
		
		<!-- jquery.bxslider.min.js
		============================================ -->       
        <script src="{{asset('js/jquery.bxslider.min.js')}}"></script>
		
		<!-- mobile menu js
		============================================ -->  
		<script src="{{asset('js/jquery.meanmenu.js')}}"></script>	
        
   		<!-- wow js
		============================================ -->       
        <script src="{{asset('js/wow.js')}}"></script>
        
   		<!-- plugins js
		============================================ -->         
        <script src="{{asset('js/plugins.js')}}"></script>
        
   		<!-- main js
		============================================ -->           
		<script src="{{asset('js/main.js')}}"></script>
		{{-- ---- --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
		@yield('script')
    </body>
</html>