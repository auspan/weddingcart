<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
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
	<link rel="stylesheet" href="css/newstyle.css" type="text/css">
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>

</head>

<body class="stretched device-lg">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix animate">
		<!-- Header
		============================================= -->
		<header class="sticky-header" id="header">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="WeddingCart Logo"></a>
						<a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo2x.png" alt="WeddingCart Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="sf-menu">
							<li class="current"><a href="{{url("/")}}"><div>Home</div></a></li>
							<li><a href="#"><div>Services</div></a></li>
							<li><a href="#"><div>Testimonials</div></a></li>
							<li><a href="#"><div>About</div></a></li>
							<li><a href="#"><div>Contact</div></a></li>
						</ul>

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input name="q" class="form-control" placeholder="Type &amp; Hit Enter.." type="text">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap contdeg">

				<div class="container clearfix">

					<div class="accordion accordion-lg divcenter nobottommargin clearfix accordion-lgdiv">
						<div class="acctitle">
							<i class="acc-closed icon-lock3"></i>
							<i class="acc-open icon-unlock"></i>Login to your Account
						</div>
						<div class="acc_content clearfix acc_content">
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        		{!! csrf_field() !!}
                    			<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
									<div class="col-md-12">
										<label for="login-form-username">E-Mail Address</label>
										<input type="email" id="login-form-username" value="" class="form-control" name="email" value="{{ old('email') }}">
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
                        		</div>
			                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    		    	<div class="col-md-12">
										<label for="login-form-password">Password</label>
										<input type="password" id="login-form-password" value="" class="form-control" name="password">
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
		                                @endif
        		                    </div>
		                        </div>

								<div class="form-group">
									<div class="col-md-12">
										<div class="checkbox">
											<label>
												<input type="checkbox" name="remember"> Remember Me
											</label>
										</div>
									</div>
								</div>

								<div class="form-group">
								   <div class="col_full nobottommargin">
											<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
											<a href="{{ url('/password/reset') }}" class="fright">Forgot Password?</a>
										</div>
								</div>
                   
                            
								<div class="line line-sm"></div>

								<div class="center">
									<h4 class="divcenterh4">or Login with:</h4>
									<a href="{{ url('/social/auth/redirect', ['facebook']) }}" class="button button-rounded si-facebook si-colored">Facebook</a>
										<span class="hidden-xs">or</span>
										<a href="{{ url('/social/auth/redirect', ['google']) }}" class="button button-rounded si-google si-colored">Google</a>
								</div>
							</form>
							<div class="acctitle acctitlec">
								<i class="acc-closed icon-user4"></i>
								<i class="acc-open icon-ok-sign"></i>Don't have an Account?<a href="{{ url('/register') }}"> Register Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_one_third">

						<div class="widget clearfix">

							<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur 
adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
 laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
qui officia deserunt mollit anim id est laborum.</p>

                            <a href="{{url('/login')}}" class="button button-rounded button-large"><span>Login</span></a>

						</div>

					</div>

                    <div class="col_one_third">
    
                            <div class="widget clearfix">
                                <h4>Instagram Photos</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs col-5 instagram-img" data-user="269801886" data-count="15" data-type="tag">
                                </div>
                            </div>
    
    
                        </div>

					<div class="col_one_third col_last">

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
							<form novalidate="novalidate" id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<span class="input-group-addon"><i class="icon-email2"></i></span>
									<input aria-required="true" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" type="email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
								</div>
							</form>
							
						</div>
                        
						<div class="widget clearfix">

							<h5><strong>Be Social &amp; Stay Connected</strong></h5>

							<a href="#" class="social-icon si-dark si-rounded si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
                            
							<a href="#" class="social-icon si-dark si-rounded si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>

							<a href="#" class="social-icon si-dark si-rounded si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-dark si-rounded si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-dark si-rounded si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>


						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_full nobottommargin center">
						Copyrights © 2014 All Rights Reserved by WeddingCart.
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>


</body></html>