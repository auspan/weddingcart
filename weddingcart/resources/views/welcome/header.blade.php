<!-- Header
============================================= -->
<header id="header" class="transparent-header dark" data-sticky-class="not-dark">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="#" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png"
                                                                                             alt="WeddingCart Logo"></a>
                <a href="#" class="retina-logo" data-dark-logo="images/logo2x.png"><img
                            src="images/logo2x.png" alt="WeddingCart Logo"></a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">

                <ul class="sf-menu">
                    {{--<li class="current"><a href="{{ url('/') }}">--}}
                            {{--<div>Home</div>--}}
                        {{--</a></li>--}}
                    <li><a href="#section-about">
                            <div>About</div>
                        </a></li>
                    <li><a href="#section-faq">
                            <div>FAQ</div>
                        </a></li>
                    <li><a href="{{ url('/login') }}">
                            <div>Sign In</div>
                        </a></li>
                    <li><a href="{{ url('/register') }}">
                            <div>Register</div>
                        </a></li>
                </ul>

                <!-- Top Search
                ============================================= -->
                {{--<div id="top-search">--}}
                    {{--<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>--}}
                    {{--<form action="#" method="get">--}}
                        {{--<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">--}}
                    {{--</form>--}}
                {{--</div>--}}
                <!-- #top-search end -->

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
