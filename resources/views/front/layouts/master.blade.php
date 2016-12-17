
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Basic page needs -->
<meta charset="utf-8">
<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>MyStore premium HTML5 &amp; CSS3 template</title>
<meta name="description" content="">

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>

<!-- CSS Style -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- font-awesome & simple line icons CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/simple-line-icons.css') }}" media="all">

<!-- owl.carousel CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.transitions.css') }}">

<!-- animate CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" media="all">

<!-- flexslider CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}" >

<!-- jquery-ui.min CSS  -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}">

<!-- Mean Menu CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/meanmenu.min.css') }}">

<!-- nivo-slider css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nivo-slider.css') }}">

<!-- style CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all">
</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

<div id="page"> 
	
	<!-- Header -->
		@include('front.includes.header')
	<!-- end header --> 
	
	<!-- Start Menu Area -->
		@include('front.includes.menu.menu-area')
	<!-- End Menu Area --> 
	
	<!-- Start Mobile Menu -->
		@include('front.includes.menu.menu-mobile')
	<!-- End Mobile Menu --> 
	
	@yield('content')
	
	<!-- our clients Slider -->
	@include('front.includes.client-slider')
	@include('front.includes.bottom-services')
	
	<!-- Footer -->
	@include('front.includes.footer')
	<!-- End Footer --> 
	
	<!--Newsletter Popup Start-->
	@include('front.includes.newsletter-popup')
	<!--End of Newsletter Popup--> 
	
</div>

<!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script> 
<!-- bootstrap js --> 
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
<!-- Mean Menu js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script> 
<!-- owl.carousel.min js --> 
<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 
<!-- bxslider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.bxslider.js') }}"></script> 
<!--jquery-ui.min js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script> 
<!-- countdown js --> 
<script type="text/javascript" src="{{ asset('assets/js/countdown.js') }}"></script> 
<!-- wow JS --> 
<script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script> 
<!--cloud-zoom js --> 
<script type="text/javascript" src="{{ asset('assets/js/cloud-zoom.js') }}"></script> 
<!-- main js --> 
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script> 
<!-- nivo slider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.nivo.slider.js') }}"></script> 
<!-- flexslider js --> 
<script type="text/javascript" src="{{ asset('assets/js/jquery.flexslider.js') }}"></script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
			var dthen1 = new Date("12/25/16 11:59:00 PM");
			start = "08/04/15 03:02:11 AM";
			start_date = Date.parse(start);
			var dnow1 = new Date(start_date);
			if(CountStepper>0)
					ddiff= new Date((dnow1)-(dthen1));
			else
					ddiff = new Date((dthen1)-(dnow1));
			gsecs1 = Math.floor(ddiff.valueOf()/1000);
			
			var iid1 = "countbox_1";
			CountBack_slider(gsecs1,"countbox_1", 1);
	</script>
</body>

</html>
