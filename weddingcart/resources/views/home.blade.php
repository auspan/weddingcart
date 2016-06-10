<!DOCTYPE html>
<!-- saved from url=(0031)http://dipankarpaul.com/auspan/ -->
<html dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<meta name="author" content="WeddingCart">

	<!-- Stylesheets
    ============================================= -->
	<link href="css/css.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/dark.css" type="text/css">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<link rel="stylesheet" href="css/mystyle.css" type="text/css">
	<link rel="stylesheet" href="css/newstyle.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
    ============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/datepicker.js"></script>

	<!-- Document Title
    ============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>


</head>

<body class="stretched device-lg">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix animate">

	<!-- Top Bar
    ============================================= -->
	<div id="top-bar" class="hidden-xs">

		<div class="container clearfix">

			<div class="col_half nobottommargin">

				<p class="nobottommargin">Transforming Indian Weddings | <strong>Call:</strong> 1800-547-2145</p>

			</div>

			<div class="col_half col_last fright nobottommargin">

				<!-- Top Links
                ============================================= -->
				<div class="top-links">
					<ul class="sf-menu clearfix">
						<li><a href="#">HELP</a>
						</li>
						<li><a href="#">COUPLE</a>
						</li>
						<li><a href="#">GUEST</a>
						</li>
						<li><a href="{{ url('/login') }}">Login</a>
						</li>
						<li><a href="{{ url('/register') }}">Register</a>
						</li>
					</ul>
				</div><!-- .top-links end -->

			</div>

		</div>

	</div><!-- #top-bar end -->


	@yield('content')

	@include('layouts.footer')


</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="js/newjs.js"></script>


</body></html>