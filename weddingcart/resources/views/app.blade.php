<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="author" content="WeddingCart">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<base href="/" target="_top">

		{{--Stylesheets--}}
		{{------------------------}}

		<link rel="stylesheet" href="css/css.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/dark.css" type="text/css">
		<link rel="stylesheet" href="css/font-icons.css" type="text/css">
		<link rel="stylesheet" href="css/animate.css" type="text/css">
		<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
		<link rel="stylesheet" href="css/newstyle.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.ui.core.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.ui.theme.css" type="text/css">
		<link rel="stylesheet" href="css/jquery.ui.datepicker.css" type="text/css">
		<link rel="stylesheet" href="css/responsive.css" type="text/css">
		<link rel="stylesheet" href="css/sweetalert.css" type="text/css">
	    <link rel="stylesheet" href="css/dataTables.bootstrap.css" type="text/css">
		<style id="fit-vids-style">
			.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}
		</style>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
		<script type="text/javascript" src="js/typeahead.bundle.js"></script>

	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->



	<!-- Document Title
	============================================= -->
		<title>WeddingCart | Transforming Indian Weddings</title>

	</head>

	<body class="stretched device-lg">

	<!-- Document Wrapper
	============================================= -->
		<div id="wrapper" class="clearfix animate">
		@if(Auth::User())
			@include('layouts.header')

			{{--@include('layouts.menu')--}}
		@endif	

			@yield('content')

		
			@include('layouts.footer')
		

		</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

	@if(Auth::User())	
	@include('layouts.flash')
	@endif
	<!-- Footer Scripts
	============================================= -->

	<script type="text/javascript" src="js/datepicker.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/sweetalert-dev.js"></script>
	<script type="text/javascript" src="js/newjs.js"></script>
	<script type="text/javascript" src="js/images.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
	<script type="text/javascript" src="js/wishlistform.js"></script>
	<script type="text/javascript" src="js/wishlist_ajax.js"></script>
	<script type="text/javascript" src="js/tables.js"></script>
	<script type="text/javascript" src="js/contacts.js"></script>
		</body>
		</html>