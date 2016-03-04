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
	<link rel="stylesheet" href="css/style1.css" type="text/css">
    
	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/datepicker.css" type="text/css">
	<!-- / -->

	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
    
	<!-- Travel Demo Specific Script -->
	<script type="text/javascript" src="js/datepicker.js"></script>
	<!-- / -->

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
		<header id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
						<div id="logo">
						<a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="WeddingCart Logo">
						</a>
						<a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo2x.png" alt="WeddingCart Logo">
						</a>
						</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul class="sf-js-enabled">
							<li><a href="#"><div>Home</div></a></li>
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
        
		<!-- Page Sub Menu
		============================================= -->
		<div id="page-menu">

			<div id="page-menu-wrap">

				<div class="container clearfix">

					<div class="menu-title"><a href="{{ url('/logout') }}">Logout</a>
					</div>

					<nav>
						<ul>
							<li><a href="{{ url('/home') }}">Dashboard</a></li>
							<li class="current"><a href="{{ url('/wedding') }}">Wedding</a></li>
							<li><a href="{{ url('/wishlist') }}">Wish List</a></li>
							<li><a href="#">Invite</a></li>
							<li><a href="#">Send</a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i>
				</div>

				</div>

			</div>

		</div><!-- #page-menu end -->
		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap">
            
                <div class="container clearfix divcon">
                	<div class="col_half">
						<img class="img-circle img-responsive" src="{{ asset('../uploads/' . $groom_image) }}" alt="Bryant Kellam" style="width: 300px; height: 300px">
					</div>
					<div class="col_half col_last">
						<img class="img-circle img-responsive" src="{{ asset('../uploads/' . $bride_image) }}" alt="Bryant sdfg" style="width: 300px; height: 300px">
					</div>
                </div>

				<div class="container clearfix">            
            				
                        <div class="center divcentr	">

                            <div class="wedding-head clearfix">
                              <div class="first-name divgrnm">{{ $groom_name }}</div>
                               
                                <div class="and">&amp;</div>
                                <div class="last-name divgrnm">{{  $bride_name  }}</span></div>
                            </div>
            
                            <div class="divider divider-short divider-center"><i class="icon-heart-empty"></i></div>
            
                            <p class="lead">Getting <strong>Hitched</strong> on:</p>
            
                             <div id="countdown-ex1" class="countdown countdown-large divcenter is-countdown divcount">
                             	<span class="countdown-row countdown-show4">
                             		<span class="countdown-section">
                             			<span class="countdown-amount">150</span>
                             			<span class="countdown-period">Days</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">10</span>
                             			<span class="countdown-period">Hours</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">21</span>
                             			<span class="countdown-period">Minutes</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">43</span>
                             			<span class="countdown-period">Seconds</span>
                             		</span>
                             	</span>
                             </div>

                            <div class="divider divider-short divider-center"><i class="icon-heart-empty"></i></div>
                             
                            <!--       
                            <div class="clearfix">
                                <div class="first-name h3">
                                	{{ $groom_name }} 
                                </div>
                                <div class="and h1">&amp;</div>
                                <div class="last-name h3">
                                	{{ $bride_name }}
                                </div>
                            </div>
                            -->
                            
							<div class="center">
                                <a href="#" class="button button-border button-rounded topmargin">Edit</a>
                            </div>
            
                        </div>
            
            
                       
                                                
				</div>
                
				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

				<div class="center bottommargin-lg">

					<a href="{{ url('/wishlist') }}" class="button button-rounded button-xlarge">Wish List</a>
					<a href="#" class="button button-rounded button-xlarge">Invite</a>

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

                            <a href="#" class="button button-rounded button-large"><span>Login</span></a>

						</div>

					</div>

                    <div class="col_one_third">
    
                            <div class="widget clearfix">
                                <h4>Instagram Photos</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs col-5 instagram-img" data-user="269801886" data-count="15" data-type="tag">
                                <a class="hyper1" href="#">
                                	<img src="images/12558402_547049408794875_1617853700_n.jpg">
                                </a>
                                <a class="hyper2" href="#">
                                	<img src="images/12383207_963985040343030_67684426_n.jpg">
                                </a>
                                <a class="hyper3" href="#">
                                	<img src="images/12534181_1786602918230227_1314905307_n.jpg">
                                </a>
                                <a class="hyper4" href="#">
                                	<img src="images/12568159_171240463244250_1061530445_n.jpg">
                                </a>
                                <a class="hyper5" href="#">
                                	<img src="images/12558632_1666422456963463_1738917892_n.jpg">
                                </a>
                                <a class="hyper6" href="#">
                                	<img src="images/12523773_572529349568238_487637340_n.jpg">
                                </a>
                                <a class="hyper7" href="#">
                                	<img src="images/12479171_696074077095741_87380393_n.jpg">
                                </a>
                                <a class="hyper8" href="#">
                                	<img src="images/12558509_121301851587538_672342286_n.jpg">
                                </a>
                                <a class="hyper9" href="#">
                                	<img src="images/12627853_1262476183766609_205311771_n.jpg">
                                </a>
                                <a class="hyper10" href="#">
                                	<img src="images/12555935_1119850771382105_972418581_n.jpg">
                                </a>
                                <a class="hyper11" href="#">
                                	<img src="images/12547212_792018264237243_1018105097_n.jpg">
                                </a>
                                <a class="hyper12" href="#">
                                	<img src="images/12543272_1031928586849968_1593935551_n.jpg">
                                </a>
                                <a class="hyper13" href="#">
                                	<img src="images/12501490_595366037287166_465480814_n.jpg">
                                </a>
                                <a class="hyper14" href="#">
                                	<img src="images/12407307_529542783886737_190742885_n.jpg">
                                </a>
                                <a class="hyper15" href="#">
                                	<img src="images/917867_512320868948686_529445721_n.jpg">
                                </a>
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
	<script type="text/javascript" src="js/newjs.js"></script>


</body></html>