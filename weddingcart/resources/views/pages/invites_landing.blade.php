<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">


	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="SemiColonWeb">

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
	<script type="text/javascript" src="js/jquery_002.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>

	<script src="js/common.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/map.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/util.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/geocoder.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/marker.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/infowindow.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/onion.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/stats.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/controls.js" charset="UTF-8" type="text/javascript"></script>

	<meta name="_token" content="{{ csrf_token() }}">
	</head>

<body class="stretched device-lg">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix animate">

		<div id="most-toppest"></div>

		<section id="slider" class="slider-parallax full-screen page-section dark clearfix sectionstyl">

			<div class="fslider divtopstyl" >
				<div class="flexslider divflexstyl">
					<div class="slider-wrap divslidr">
						<div class="slide flex-active-slide divslidflex"></div>
						<div class="slide divslidflex1"></div>
						<div class="slide divslidflex2"></div>
					</div>
				</div>
			</div>

			<div class="container vertical-middle dark center clearfix divconverticl">

				<div class="wedding-head clearfix">
					<div class="first-name">{{ $groom_name }}</div>
					<div class="and">&amp;</div>
					<div class="last-name">{{ $bride_name }}</div>
				</div>

				<div class="divider divider-short divider-center"><i class="icon-heart3"></i></div>

				<p class="lead">Getting <strong>Hitched</strong> on:</p>
				<div id="divforcountdown" class="countdown"></div>
				<div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter is-countdown" style="max-width:700px;"><span class="countdown-row countdown-show4"><span class="countdown-section"><span id="days" class="countdown-amount"></span><span class="countdown-period">Days</span></span><span class="countdown-section"><span id="hours" class="countdown-amount"></span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span id="minutes" class="countdown-amount"></span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span id="seconds" class="countdown-amount"></span><span class="countdown-period">Seconds</span></span></span>
				<div id="dates" class="hide-content">{{ $wedding_date }}</div>

				</div>
				<center><strong><div id="checkWedding" style="font-size: 24px"></div></strong></center>

			</div>

  


	
		</section>

		<!-- Header
		============================================= -->
		<header class="" id="header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<div id="logo"></div>

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-2 center">

						<ul class="one-page-menu sf-js-enabled">
							<li><a href="#" data-href="#most-toppest"><div>Start</div></a></li>
							<li><a href="#" data-href="#section-couple"><div>The Couple</div></a></li>
							<li class=""><a href="#" data-href="#section-list"><div>Wish List</div></a></li>
							<li class=""><a href="#" data-href="#section-events"><div>Events Schedule</div></a></li>
							<li class=""><a href="#" data-href="#section-locations"><div>Locations</div></a></li>
							<li class=""><a href="#" data-href="#section-rsvp"><div>RSVP</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section id="content" class="sectionmar">

			<div class="content-wrap">

				<div class="container clearfix">

					<div id="section-couple" class="heading-block title-center page-section">
						<h2>The Couple</h2>
						<span>Meet the Bride &amp; the Groom</span>
					</div>

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="{{ asset('../uploads/'.$groom_image) }}" alt="Bryant Kellam">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>{{ $groom_name }}</h4><span>Groom</span></div>
								<div class="team-content">Lorem ipsum dolor sit amet,
consectetur adipisicing elit. Commodi, pariatur, magni! Omnis reiciendis
 architecto, cupiditate fuga dolores nam accusamus iste molestias quos
mollitia totam eius porro culpa incidunt, sunt rerum molestiae aliquid
non hic.</div>
								<div class="line topmargin-sm nobottommargin"></div>
								<a href="#" class="social-icon si-borderless si-small si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-small si-linkedin" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-small si-twitter" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="{{ asset('../uploads/'.$bride_image) }}">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>{{ $bride_name }}</h4><span>Bride</span></div>
								<div class="team-content">Blanditiis adipisci laudantium
reiciendis distinctio, molestiae, illum. Aut eveniet assumenda expedita
labore nulla commodi numquam perspiciatis, amet doloribus cum sint,
quisquam possimus eos aspernatur distinctio similique perferendis.</div>
								<div class="line topmargin-sm nobottommargin"></div>
								<a href="#" class="social-icon si-borderless si-small si-facebook" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-small si-linkedin" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
								<a href="#" class="social-icon si-borderless si-small si-instagram" title="Instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div id="section-list" class="heading-block center topmargin page-section">
						<h2>Wish List</h2>
						<span>Check out the Wish List of the Couple</span>
					</div>

					<div class="col-lg-8 divcenter bottommargin-lg">
                        <ul class="skills">
                        		@foreach($Wishlist_Items as $product)
                                    <li data-percent="">
                                        <span>{{ $product['product_name'] }}</span>
                                        <div class="progress skills-animated divprogress">
                                            <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
                                        </div>
                                    </li>
                                    @endforeach
                                    </ul>
                                    
                                    					</div>
                    
                    <div class="center bottommargin-lg">
                        <a href="{{ url('wishlistproducts') }}" class="button button-rounded button-xlarge">Gift</a>
                    </div>

					<div class="clear"></div>

					<div id="section-events" class="heading-block title-center topmargin-lg page-section">
						<h2>Events Schedule</h2>
						<span>List of all the Scheduled Events for your Information</span>
					</div>

					<div class="col_one_third">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="../images/mehndi.jpg" alt="Mehndi">
							</div>
							<div class="fbox-desc">
								<h3>Mehndi Ceremony<span class="subtitle">Hotel Park Land, 25th May</span></h3>
							</div>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="../images/wedding.jpg" alt="Wedding">
							</div>
							<div class="fbox-desc">
								<h3>Wedding Ceremony<span class="subtitle">Vivanta by Taj, 31st May</span></h3>
							</div>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="../images/reception.jpg" alt="Reception">
							</div>
							<div class="fbox-desc">
								<h3>Reception Party<span class="subtitle">Le Meridien Hotel, 2nd June</span></h3>
							</div>
						</div>
					</div>

					<div class="clear"></div>

					<div id="section-locations" class="heading-block title-center topmargin-lg page-section">
						<h2>Locations.</h2>
						<span>Lovely Locations at which the Events are scheduled</span>
					</div>

				</div>

				<div id="google-map1" class="gmap divhyper1">
				<div class="gm-style divhyper2">
				<div class="divhyper3">
				<div class="divhyper4">
				<div class="divhyper5">
				<div class="divhyper6">
				<div aria-hidden="true" class="divhyper7">
				<div class="divhyper8"></div>
				<div class="divhyper9"></div>
				<div class="divhyper10"></div>
				<div class="divhyper11"></div>
				<div class="divhyper12"></div>
				<div class="divhyper13"></div>
				<div class="divhyper14"></div>
				<div class="divhyper15"></div>
				<div class="divhyper16"></div>
				<div class="divhyper17"></div>
				<div class="divhyper18"></div>
				<div class="divhyper19"></div>
				<div class="divhyper20"></div>
				<div class="divhyper21"></div>
				</div>
			 	</div></div>
			 	<div class="divhyper22"></div>
			 	<div class="divhyper23"></div>
			 	<div class="divhyper24">
			 	<div class="divhyper25">
			 	<div aria-hidden="true" class="divhyper26">
			 	<div class="divhyper27">
			 	<canvas class="canvasstyl" draggable="false"></canvas></div>
			 	<div class="divhyper28">
			 	<canvas class="canvasstyl" draggable="false"></canvas></div>
			 	<div class="divhyper29"></div>
			 	<div class="divhyper30"></div>
			 	<div class="divhyper31"></div>
			 	<div class="divhyper32"></div>
			 	<div class="dihyper33"></div>
			 	<div class="divhyper34"></div>
			 	<div class="divhyper35"></div>
			 	<div class="divhyper36"></div>
			 	<div class="divhyper37"></div>
			 	<div class="divhyper38"></div>
			 	<div class="divhyper39"></div>
			 	<div class="divhyper40"></div></div></div></div>
			 	<div class="divhyper41">
			 	<div aria-hidden="true" class="divhyper42">
			 	<div class="divhyper43">
			 	<img alt="" draggable="false" src="../images/vt_004.png" class="divhyperimg"></div>
			 	<div class="divhyper44">
			 	<img alt="" draggable="false" src="../images/vt_009.png" class="divhyperimg"></div>
			 	<div class="divhyper45">
			 	<img alt="" draggable="false" src="../images/vt_014.png" class="divhyperimg"></div>
			 	<div class="divhyper46">
			 	<img alt="" draggable="false" src="../images/vt_010.png" class="divhyperimg"></div>
			 	<div class="divhyper47">
			 	<img alt="" draggable="false" src="../images/vt_008.png" class="divhyperimg"></div>
			 	<div class="divhyper48">
			 	<img alt="" draggable="false" src="../images/vt_013.png" class="divhyperimg"></div>
			 	<div class="divhyper49">
			 	<img alt="" draggable="false" src="../images/vt.png" class="divhyperimg"></div>
			 	<div class="divhyper50">
			 	<img alt="" draggable="false" src="../images/vt_007.png" class="divhyperimg"></div>
			 	<div class="divhyper51">
			 	<img alt="" draggable="false" src="../images/vt_006.png" class="divhyperimg"></div>
			 	<div class="divhyper52">
			 	<img alt="" draggable="false" src="../images/vt_003.png" class="divhyperimg"></div>
			 	<div class="divhyper53">
			 	<img alt="" draggable="false" src="../images/vt_011.png" class="divhyperimg"></div>
			 	<div class="divhyper54">
			 	<img alt="" draggable="false" src="../images/vt_005.png" class="divhyperimg"></div>
			 	<div class="divhyper55">
			 	<img alt="" draggable="false" src="../images/vt_002.png" class="divhyperimg"></div>
			 	<div class="divhyper56">
			 	<img alt="" draggable="false" src="../images/vt_012.png" class="divhyperimg"></div></div></div></div>
			 	<div class="divhyper57"></div>
			 	<div class="divhyper58">
			 	<div class="divhyper59"></div>
			 	<div class="divhyper60"></div>
			 	<div class="divhyper61"></div>
			 	<div class="divhyper62"></div></div></div>
			 	<div class="divhyper63">
			 	<div class="divhyper64">Map Data</div>
			 	<div class="divhyper65">Map data ©2016 Google</div>
			 	<div class="divhyper66">
			 	<img draggable="false" src="../images/mapcnt6.png" class="divhyperimg1"></div></div>
			 	<div class="gmnoprint hyper67">
			 	<div class="gm-style-cc divhyper68" draggable="false">
			 	<div class="divhyper69">
			 	<div class="divhyper70"></div>
			 	<div class="divhyper71"></div>
			 	</div>
			 	<div class="divhyper72">
			 	<a class="astyl3">Map Data</a><span>Map data ©2016 Google</span></div></div></div>
			 	<div class="gmnoscreen divhyper73">
			 	<div class="divhyper74">Map data ©2016 Google</div></div>
			 	<div draggable="false" class="gmnoprint gm-style-cc divhyper75">
			 	<div class="divhyper76">
			 	<div class="divhyper70"></div>
			 	<div class="divhyper71"></div></div>
			 	<div class="divhyper72">
			 	<a target="_blank" href="#" class="astyl3">Terms of Use</a></div></div>
			 	<div class="divhyper73">
			 	<img class="gm-fullscreen-control divhyperimg3" draggable="false" src="../../../public/images/sv5.png"></div>
			 	<div class="gm-style-cc divhyper78" draggable="false">
			 	<div class="divhyper76"><div class="divhyper70"></div>
			 	<div class="divhyper71"></div></div>
			 	<div class="divhyper72"><a href="#" class="astyl4" title="Report errors in the road map or imagery to Google" target="_new">Report a map error</a></div></div>
			 	<div controlheight="55" controlwidth="28" draggable="false" class="gmnoprint divhyper79">
			 	<div controlheight="55" controlwidth="28" class="gmnoprint divhyper80">
			 	<div class="divhyper81" draggable="false">
			 	<div class="divhyper82" title="Zoom in">
			 	<div class="divhyper83">
			 	<img draggable="false" src="../images/tmapctrl.png" class="divhyperimg4"></div></div>
			 	<div class="divhyper84"></div>
			 	<div class="divhyper85" title="Zoom out">
			 	<div class="divhyper86">
			 	<img draggable="false" src="../images/tmapctrl.png" class="divhyperimg5"></div></div></div></div></div>
			 	<div class="divhyper87">
			 	<a title="Click to see this area on Google Maps" href="https://maps.google.com/maps?ll=28.613939,77.209021&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" target="_blank" class="astyl5">
			 	<div class="divhyper88">
			 	<img draggable="false" src="../images/google4.png" class="divhyperimg6"></div></a></div></div></div>

				<script type="text/javascript" src="../../../public/js/js"></script>
				<script type="text/javascript" src="../../../public/js/jquery.js"></script>

				<div class="section notopmargin footer-stick">
					<div class="container clearfix">

						<div id="section-rsvp" class="heading-block title-center topmargin page-section">
							<h2>RSVP.</h2>
							<span>Be present at the Wedding to give your Blessings &amp; Love.</span>
						</div>

						<div id="wedding-rsvp-form-result" data-notify-type="success" data-notify-msg="&lt;i class=icon-ok-sign&gt;&lt;/i&gt; Message Sent Successfully!"></div>

						<form novalidate="novalidate" id="wedding-rsvp-form" action="include/rsvp.php" method="post" class="bottommargin-lg divcenter" style="max-width: 500px;" role="form">

							<div class="form-process"></div>

							<div class="col_full">
								<input aria-invalid="true" aria-required="true" name="wedding-rsvp-name" id="wedding-rsvp-name" required="true" class="form-control required input-lg error" placeholder="Your Full Name" type="text"><label style="display: inline;" for="wedding-rsvp-name" class="error" id="wedding-rsvp-name-error">This field is required.</label>
							</div>

							<div class="col_full">
								<input aria-required="true" name="wedding-rsvp-email" id="wedding-rsvp-email" required="true" class="form-control required email input-lg error" placeholder="Your E-mail Address" type="text"><label style="display: inline;" for="wedding-rsvp-email" class="error" id="wedding-rsvp-email-error">This field is required.</label>
							</div>

							<div class="col_full">
								<input aria-required="true" min="1" max="10" name="wedding-rsvp-guests" id="wedding-rsvp-guests" class="form-control required input-lg error" placeholder="No. of Guests" type="number"><label style="display: inline;" for="wedding-rsvp-guests" class="error" id="wedding-rsvp-guests-error">This field is required.</label>
							</div>

							<div class="col_full">
								<select aria-required="true" name="wedding-rsvp-events" id="wedding-rsvp-events" required="" class="form-control required input-lg valid">
									<option selected="selected" value="Wedding Ceremony">Wedding Ceremony</option>
									<option value="Reception">Reception</option>
									<option value="All Events">All Events</option>
									<option value="Not Attending">Not Attending</option>
								</select>
							</div>

							<div class="col_full hidden">
								<input id="wedding-rsvp-botcheck" name="wedding-rsvp-botcheck" class="form-control" type="text">
							</div>

							<div class="col_full nobottommargin">
								<button type="submit" name="wedding-rsvp-submit" id="wedding-rsvp-submit" class="button button-3d btn-block nomargin button-dark button-xlarge" value="submit">Submit</button>
							</div>
							<br>
							<p class="heading-block title-center topmargin page-section" style="text-align: center;">
							<h2>
							    If Want To Register Click Below
							</h2>
							</p>
							<div class="col_full_nobottommargin">
							<a href="{{ url('/register') }}">
									<button type="button" name="register" id="register" class="button button-3d btn-block nomargin button-dark button-xlarge" value="Register Here">Register Here</button>
							</a>
							</div>
						</form>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container center clearfix">

					Copyrights © 2014 All Rights Reserved by WeddingCart.

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up gmnoscreen"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
	<script type="text/javascript" src="js/contribution.js"></script>

</body></html>