<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="author" content="WeddingCart">

    <!-- Stylesheets
    ============================================= -->
    <link href="registerform_files/css.css" rel="stylesheet" type="text/css">
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

                        <ul class="sf-js-enabled">
                            <li class="current"><a href="{{ url('/') }}"><div>Home</div></a></li>
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

                        <div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-unlock"></i>Create your Account</div>
                        
                            <!--<form id="login-form" name="login-form" role="from" class="nobottommargin" action="{ url('/login') }}" method="post">
                                <div class="col_full">
                                    <label for="login-form-username">Username:</label>
                                    <input id="login-form-username" name="login-form-username" class="form-control" type="text">
                                </div>

                                <div class="col_full">
                                    <label for="login-form-password">Password:</label>
                                    <input id="login-form-password" name="login-form-password" value="" class="form-control" type="password">
                                </div>

                                <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                                    <a href="{{ url('/password/reset') }}" class="fright">Forgot Password?</a>
                                </div>
                            </form>-->

                             <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                    <label for="register-form-username">Name:</label>
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input type="text" id="login-form-username" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <label for="register-form-EmailAddress">E-Mail Address:</label>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="col-md-12">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                     <label for="register-form-password">Password:</label>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <label for="register-form-confirmpassword">Confirm Password:</label>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <center>
                        <div class="form-group">
                           <div class="col_full nobottommargin">
                                    <button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="Register">Register Now</button>
                            </div>
                        </div>            
                    </center>
                         <div class="line line-sm"></div>

                            <div class="center">
                                <h4 class="divcenterh4">or Login with:</h4>
                                <a href="#" class="button button-rounded si-facebook si-colored">Facebook</a>
                                    <span class="hidden-xs">or</span>
                                    <a href="#" class="button button-rounded si-google si-colored">Gmail</a>
                                </div>
                        </div>
                    </form>
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

                            <a href="{{ url('/login') }}" class="button button-rounded button-large"><span>Login</span></a>

                        </div>

                    </div>

                    <div class="col_one_third">
    
                            <div class="widget clearfix">
                                <h4>Instagram Photos</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs col-5 instagram-img" data-user="269801886" data-count="15" data-type="tag">
                                    <a class="hyper1" href="#">
                                        <img src="images/12555878_188238081533165_640356224_n.jpg">
                                    </a>
                                    <a class="hyper2" href="#">
                                        <img src="images/12501967_978230242271209_857803718_n.jpg">
                                    </a>
                                    <a class="hyper3" href="#">
                                        <img src="images/12568188_1688046084804432_1926321366_n.jpg">
                                    </a>
                                    <a class="hyper4" href="#">
                                        <img src="images/12716988_1659886770892373_432994149_n.jpg">
                                    </a>
                                    <a class="hyper5" href="#">
                                        <img src="images/12545473_588857034595095_1014176981_n.jpg">
                                    </a>
                                    <a class="hyper6" href="#">
                                        <img src="images/12599353_963222677099849_202858577_n.jpg">
                                    </a>
                                    <a class="hyper7" href="#">
                                        <img src="images/12716901_1262181377131636_624563083_n.jpg">
                                    </a>
                                    <a class="hyper8" href="#">
                                        <img src="images/12545347_464508217083387_1401162239_n.jpg">
                                    </a>
                                    <a class="hyper9" href="#">
                                        <img src="images/12627997_1653493874901913_1543590537_n.jpg">
                                    </a>
                                    <a class="hyper10" href="#">
                                        <img src="images/12547212_473465702839684_1082559451_n.jpg">
                                    </a>
                                    <a class="hyper11" href="#">
                                        <img src="images/12716993_985474188212198_521071465_n.jpg">
                                    </a>
                                    <a class="hyper12" href="#">
                                        <img src="images/12568204_234976083504657_569276587_n.jpg">
                                    </a>
                                    <a class="hyper13" href="#">
                                        <img src="images/12716841_528248660687131_1736073586_n.jpg">
                                    </a>    
                                    <a class="hyper14" href="#">
                                        <img src="images/12446155_767393880071025_1829055534_n.jpg">
                                    </a>
                                    <a class="hyper15" href="#">
                                        <img src="images/12545473_588857034595095_1014176981_n.jpg">
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