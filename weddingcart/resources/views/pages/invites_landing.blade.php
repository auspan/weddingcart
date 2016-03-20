<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<link href="css/css.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div
				{
					font-size:10px
				}
		</style>
		<style type="text/css">
			@media print 
			{  
				.gm-style .gmnoprint, .gmnoprint
					{
				    display:none  
				    }
			}
			@media screen 
			{  
				.gm-style .gmnoscreen, .gmnoscreen 
					{    display:none  
					}
			}
		</style>
		<style type="text/css">
			.gm-style
			{
				font-family:Roboto,Arial,sans-serif;font-size:11px;
				font-weight:400;text-decoration:none
			}
			.gm-style img
			{
				max-width:none
			}
		</style>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="author" content="SemiColonWeb">

	<!-- Stylesheets
	============================================= -->
	<link href="css/mystyle.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/dark.css" type="text/css">
	<link rel="stylesheet" href="css/font-icons.css" type="text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css">

	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<!-- External JavaScripts
	============================================= -->
	<script style="" type="text/javascript" src="js/jquery_002.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>

	<!-- Document Title
	============================================= -->
	<title>WeddingCart | Transforming Indian Weddings</title>

	<script src="js/common.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/map.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/util.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/geocoder.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/marker.js" charset="UTF-8" type="text/javascript"></script>
	<style id="fit-vids-style">
		.fluid-width-video-wrapper
		{
			width:100%;position:relative;padding:0;
		}
		.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed 
		{
			position:absolute;top:0;left:0;width:100%;height:100%;
		}
	</style>
	<script src="js/stats.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/onion.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/infowindow.js" charset="UTF-8" type="text/javascript"></script>
	<script src="js/controls.js" charset="UTF-8" type="text/javascript"></script>
</head>

	<body class="stretched device-lg">

	<!-- Document Wrapper
	============================================= -->
		<div style="animation-duration: 1.5s; opacity: 1;" id="wrapper" class="clearfix">

			<div id="most-toppest">
				
			</div>

			<section style="height: 631px; transform: translate(0px, 0px);" id="slider" class="slider-parallax full-screen page-section dark clearfix">

			<div class="fslider" data-speed="2000" data-pause="6000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
				<div class="flexslider" style="height: 100% !important;">
					<div class="slider-wrap" style="height: inherit;">
						<div class="slide" style="background: transparent url(&quot;images/slider/swiper/1.jpg&quot;) repeat scroll center center / cover ; height: 100% ! important; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></div>
						<div class="slide" style="background: transparent url(&quot;images/slider/swiper/2.jpg&quot;) repeat scroll center center / cover ; height: 100% ! important; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"></div>
						<div class="slide flex-active-slide" style="background: transparent url(&quot;images/slider/swiper/3.jpg&quot;) repeat scroll center center / cover ; height: 100% ! important; width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"></div>
					</div>
				</div>
			</div>

			<div class="container vertical-middle dark center clearfix" style="z-index: 2; position: absolute; top: 50%; width: 100%; padding-top: 0px; padding-bottom: 0px; margin-top: -272px; opacity: 1.11111;">

				<div class="wedding-head clearfix">
					<div class="first-name">{{$groom_name}}</div>
					<div class="and">&amp;</div>
					<div class="last-name">{{$bride_name}}</div>
				</div>

				<div class="divider divider-short divider-center"><i class="icon-heart3"></i></div>

				<p class="lead">Getting <strong>Hitched</strong> on:</p>

				<div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter is-countdown" style="max-width:700px;">
					<span class="countdown-row countdown-show4">
						<span class="countdown-section">
							<span class="countdown-amount">{{ $days }}</span>
							<span class="countdown-period">Days</span></span>
						<span class="countdown-section">
							<span class="countdown-amount">{{ $hours }}</span><span class="countdown-period">Hours</span></span>
						<span class="countdown-section">
							<span class="countdown-amount">{{ $minutes }}</span>
							<span class="countdown-period">Minutes</span></span>
						<span class="countdown-section">
							<span class="countdown-amount">{{ $seconds }}</span>
							<span class="countdown-period">Seconds</span>
							</span>
						</span>
					</div>

			</div>


			<script>

				jQuery(document).ready( function($){
					var newDate = new Date(2016, 5, 31);
					$('#countdown-ex1').countdown({until: newDate});
				});
				jQuery(window).load(function(){
					var t=setTimeout(function(){
						$( '.flexslider .slide' ).resize();
					},500);
				});
			</script>

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
							<li class=""><a href="javascript::void(0)" data-href="#section-couple"><div>The Couple</div></a></li>
							<li class=""><a href="javascript::void(0)" data-href="#section-list"><div>Wish List</div></a></li>
							<li class=""><a href="javascript::void(0)" data-href="#section-events"><div>Events Schedule</div></a></li>
							<li class=""><a href="javascript::void(0)" data-href="#section-locations"><div>Locations</div></a></li>
							<li class=""><a href="javascript::void(0)" data-href="#section-rsvp"><div>RSVP</div></a></li>
						</ul>

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		<section style="margin-bottom: 0px;" id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div id="section-couple" class="heading-block title-center page-section">
						<h2>The Couple</h2>
						<span>Meet the Bride &amp; the Groom</span>
					</div>

					<div class="col-md-6 bottommargin">
						<div class="team team-list clearfix">
							<div class="team-image" style="width: 150px;">
								<img class="img-circle" src="{{ asset('../uploads/' . $groom_image) }}" alt="Bryant Kellam">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>{{$groom_name}}</h4><span>Groom</span></div>
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
								<img class="img-circle" src="{{ asset('../uploads/' . $bride_image) }}" alt="Leanna Pyburn">
							</div>
							<div class="team-desc">
								<div class="team-title"><h4>{{$bride_name}}</h4><span>Bride</span></div>
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
                    
                    <div class="center bottommargin-lg">
                        <a href="#" class="button button-rounded button-xlarge">Contribute</a>
                    </div>

					<div class="clear"></div>

					<div id="section-events" class="heading-block title-center topmargin-lg page-section">
						<h2>Events Schedule</h2>
						<span>List of all the Scheduled Events for your Information</span>
					</div>

					<div class="col_one_third">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/mehndi.jpg" alt="Mehndi">
							</div>
							<div class="fbox-desc">
								<h3>Mehndi Ceremony<span class="subtitle">Hotel Park Land, 25th May</span></h3>
							</div>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/wedding.jpg" alt="Wedding">
							</div>
							<div class="fbox-desc">
								<h3>Wedding Ceremony<span class="subtitle">Vivanta by Taj, 31st May</span></h3>
							</div>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box center media-box fbox-bg">
							<div class="fbox-media">
								<img src="images/reception.jpg" alt="Reception">
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
			

				<div id="google-map1" style="height: 500px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;" class="gmap"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 555px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 555px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 299px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 299px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 811px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 811px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 43px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 43px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1067px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1067px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -213px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -213px; top: 252px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1323px; top: -4px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1323px; top: 252px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 555px; top: -4px;"><canvas width="256" height="256" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" draggable="false"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 555px; top: 252px;"><canvas width="256" height="256" style="-moz-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;" draggable="false"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 299px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 299px; top: 252px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 811px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 811px; top: 252px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 43px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 43px; top: 252px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1067px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1067px; top: 252px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -213px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -213px; top: 252px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1323px; top: -4px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1323px; top: 252px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 299px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_005.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 555px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_003.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -213px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_004.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 811px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_002.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1067px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_013.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 811px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_014.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 43px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_007.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 299px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_008.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1067px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1323px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_009.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 43px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_010.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -213px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_006.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 1323px; top: -4px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_011.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 555px; top: 252px; transition: opacity 200ms ease-out 0s;"><img alt="" draggable="false" src="images/vt_012.png" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 525px; top: 160px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2016 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img draggable="false" src="images/mapcnt6.png" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;"></div></div><div style="z-index: 1000001; position: absolute; right: 161px; bottom: 0px; width: 121px;" class="gmnoprint"><div class="gm-style-cc" style="-moz-user-select: none; height: 14px; line-height: 14px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2016 Google</span></div></div></div><div style="position: absolute; right: 0px; bottom: 0px;" class="gmnoscreen"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 Google</div></div><div draggable="false" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 92px; bottom: 0px;" class="gmnoprint gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="width: 25px; height: 25px; margin-top: 10px; overflow: hidden; display: none; margin-right: 14px; position: absolute; top: 0px; right: 0px;"><img class="gm-fullscreen-control" draggable="false" src="images/sv5.png" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div><div class="gm-style-cc" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/maps/@28.6139391,77.2090212,12z/data=%2110m1%211e1%2112b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" title="Report errors in the road map or imagery to Google" target="_new">Report a map error</a></div></div><div controlheight="55" controlwidth="28" draggable="false" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 69px; right: 28px;" class="gmnoprint"><div controlheight="55" controlwidth="28" style="position: absolute; left: 0px; top: 0px;" class="gmnoprint"><div style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;" draggable="false"><div style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;" title="Zoom in"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img draggable="false" src="images/tmapctrl.png" style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;" title="Zoom out"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img draggable="false" src="images/tmapctrl.png" style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a title="Click to see this area on Google Maps" href="https://maps.google.com/maps?ll=28.613939,77.209021&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" target="_blank" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img draggable="false" src="images/google4.png" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;"></div></a></div></div></div>

				<script type="text/javascript" src="js/js"></script>
				<script type="text/javascript" src="js/jquery.js"></script>

				<script type="text/javascript">

					$('#google-map1').gMap({

						address: 'New Delhi, India',
						maptype: 'ROADMAP',
						zoom: 12,
						markers: [
							{
								address: 'Hotel Park Land, Defence Colony, New Delhi',
								html: 'Mehndi Ceremony'
							},
							{
								address: 'Vivanta by Taj - Ambassador, New Delhi',
								html: 'Wedding Ceremony'
							},
							{
								address: 'Le Meridien Hotel, Near Bhikaji Cama Place, New Delhi',
								html: 'Reception Party'
							}
						],
						doubleclickzoom: false,
						controls: {
							panControl: false,
							zoomControl: true,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							overviewMapControl: false
						}

					});

				</script>

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
								<input aria-required="true" name="wedding-rsvp-name" id="wedding-rsvp-name" required="true" class="form-control required input-lg" placeholder="Your Full Name" type="text">
							</div>

							<div class="col_full">
								<input aria-required="true" name="wedding-rsvp-email" id="wedding-rsvp-email" required="true" class="form-control required email input-lg" placeholder="Your E-mail Address" type="text">
							</div>

							<div class="col_full">
								<input aria-required="true" min="1" max="10" name="wedding-rsvp-guests" id="wedding-rsvp-guests" class="form-control required input-lg" placeholder="No. of Guests" type="number">
							</div>

							<div class="col_full">
								<select aria-required="true" name="wedding-rsvp-events" id="wedding-rsvp-events" required="" class="form-control required input-lg">
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
							<p class="heading-block title-center topmargin page-section" style="text-align: center;"><h2>If Want To Register Click Below</h2></p>
							<div class="col_full nobottommargin">
								<a href="{{url('/register')}}"><button type="button" name="register" id="register" class="button button-3d btn-block nomargin button-dark button-xlarge" value="Register">Register Here</button></a>
							</div>

						</form>

						<script type="text/javascript">

							jQuery("#wedding-rsvp-form").validate({
								submitHandler: function(form) {
									jQuery('.form-process').fadeIn();
									jQuery(form).ajaxSubmit({
										target: '#wedding-rsvp-form-result',
										success: function() {
											jQuery('.form-process').fadeOut();
											jQuery(form).find('.form-control').val('');
											jQuery('#wedding-rsvp-form-result').attr('data-notify-msg', jQuery('#wedding-rsvp-form-result').html()).html('');
											SEMICOLON.widget.notifications(jQuery('#wedding-rsvp-form-result'));
										}
									});
								}
							});

						</script>

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
	<div style="display: none;" id="gotoTop" class="icon-angle-up"></div>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="js/functions.js"></script>


</body></html>