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
		<header id="header">

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

					<div class="menu-title"><a href="{{ url('/logout') }}">Logout</a></div>

					<nav>
						<ul>
							<li><a href="{{ url('/home') }}">Dashboard</a></li>
							<li><a href="{{ url('/wedding') }}">Wedding</a></li>
							<li class="current"><a href="{{ url('/wishlist') }}">Wish List</a></li>
							<li><a href="#">Invite</a></li>
							<li><a href="#">Send</a></li>
						</ul>
					</nav>

				<div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

				</div>

			</div>

		</div><!-- #page-menu end -->


		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap clearfix">
            
				<div class="container clearfix bottommargin-lg">
                
                    <div class="heading-block center">

						<span class="divcenter">Please see your wishlist and Messages.</span>
                            
					</div>
					
            
				<ul class="skills col-lg-8 divcenter">
				@foreach($Wishlist_Items as $items)
							<li data-percent="80">
								<span>{{ $items }}</span>
								<div  class="progress skills-animated divprogress">
									<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
								</div>
							</li>
							@endforeach
							

				
						</ul>
                
				</div>	
                
				<div class="container clearfix bottommargin-lg">

					<h3 class="center">Messages</h3>

					<div id="oc-testi" class="owl-carousel testimonials-carousel owl-theme owl-loaded">

				<div class="owl-stage-outer"><div class="owl-stage owl_display"><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/4.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/5.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/6.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/4.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/5.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/6.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div></div></div><div class="owl-controls with-carousel-dots"><div class="owl-nav"><div style="" class="owl-prev"><i class="icon-angle-left"></i></div><div style="" class="owl-next"><i class="icon-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>

					

				</div>


				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

				<div class="center bottommargin-lg">

					<a href="{{ url('/wedding') }}" class="button button-rounded button-xlarge">Wedding</a>
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
                                	<img src="images/12568308_201211800231310_1937323706_n.jpg">
                                </a>
                                <a class="hyper2" href="#">
                                	<img src="images/12543347_1703597009911985_2004212502_n.jpg">
                                </a>
                                <a class="hyper3" href="#">
                                	<img src="images/12677677_1662752633989010_115197107_n.jpg">
                                </a>
                                <a class="hyper4" href="#">
                                	<img src="images/12552306_206052283082483_286332006_n.jpg">
                                </a>
                                <a class="hyper5" href="#">
                                	<img src="images/12523595_1090222924345971_1516258486_n.jpg">
                                </a>
                                <a class="hyper6" href="#">
                                	<img src="images/12558648_1550750631909646_1827577161_n.jpg">
                                </a>
                                <a class="hyper7" href="#">
                                	<img src="images/12568288_572701102887301_345731773_n.jpg">
                                </a>
                                <a class="hyper8" href="#">
                                	<img src="images/12543317_1224647767563518_1652623845_n.jpg">
                                </a>
                                <a class="hyper9" href="#">
                                	<img src="images/12568230_789244324534380_367418320_n.jpg">
                                </a>
                                <a class="hyper10" href="#">
                                	<img src="images/12545312_1546420409003993_2071808749_n.jpg">
                                </a>
                                <a class="hyper11" href="#">
                                	<img src="images/12545496_1670786839859133_1863616599_n.jpg">
                                </a>
                                <a class="hyper12" href="#">
                                	<img src="images/12519499_1690112154537928_1092952691_n.jpg">
                                </a>
                                <a class="hyper13" href="#">
                                	<img src="images/12543311_946463132107916_289156328_n.jpg">
                                </a>
                                <a class="hyper14" href="#">
                                	<img src="images/12545439_553408584827474_1682081640_n.jpg">
                                </a>
                                <a class="hyper15" href="#">
                                	<img src="images/12547591_887750131341204_79316828_n.jpg">
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