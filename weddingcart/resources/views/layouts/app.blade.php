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

<style>
    .swiper-pagination {
        position: absolute;
        width: 100%;
        z-index: 20;
        margin: 0;
        top: auto;
        bottom: 20px;
        text-align: center;
        line-height: 1;
    }

    .swiper-pagination span {
        display: inline-block;
        cursor: pointer;
        width: 10px;
        height: 10px;
        margin: 0 4px;
        opacity: 1;
        background-color: transparent;
        border: 1px solid #FFF;
        border-radius: 50%;
        -webkit-transition: all .3s ease;
        -o-transition: all .3s ease;
        transition: all .3s ease;
    }

    .swiper-pagination span:hover,
    .swiper-pagination span.swiper-active-switch { background-color: #FFF !important; }
</style>

<style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></head>

<body class="stretched device-lg">

    <!-- Document Wrapper
    ============================================= -->
    <div style="animation-duration: 1.5s; opacity: 1;" id="wrapper" class="clearfix">

        <!-- Header
        ============================================= -->
        <header class="sticky-header" id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                    <div id="logo">
                        <a href="http://dipankarpaul.com/auspan/index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="WeddingCart Logo"></a>
                        <a href="http://dipankarpaul.com/auspan/index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo2x.png" alt="WeddingCart Logo"></a>
                    </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="sf-js-enabled">
                            <li><a href="http://dipankarpaul.com/auspan/index.html"><div>Home</div></a></li>
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
        <div class="sticky-page-menu" id="page-menu">

            <div id="page-menu-wrap">

                <div class="container clearfix">

                    <div class="menu-title"><a href="http://dipankarpaul.com/auspan/index.html">Logout</a></div>

                    <nav>
                        <ul>
                            <li><a href="http://dipankarpaul.com/auspan/home.html">Dashboard</a></li>
                            <li class="current"><a href="http://dipankarpaul.com/auspan/wedding.html">Wedding</a></li>
                            <li><a href="http://dipankarpaul.com/auspan/wishlist.html">Wish List</a></li>
                            <li><a href="http://dipankarpaul.com/auspan/invite.html">Invite</a></li>
                            <li><a href="http://dipankarpaul.com/auspan/send.html">Send</a></li>
                        </ul>
                    </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

                </div>

            </div>

        </div><!-- #page-menu end -->

        @yield('content')