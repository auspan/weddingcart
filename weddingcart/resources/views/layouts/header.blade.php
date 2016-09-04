<header id="header">
    <div id="header-wrap">
        <div class="container clearfix">
            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="#" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png" alt="WeddingCart Logo">
                </a>
                <a href="#" class="retina-logo" data-dark-logo="images/logo2x.png"><img src="images/logo2x.png" alt="WeddingCart Logo">
                </a>
            </div><!-- #logo end -->

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu">
                <ul class="one-page-menu sf-menu">
                    <li><a href="/home" data-href="#most-toppest"><div>Start</div></a></li>
                    <li><a href="showCouple" data-href="#section-couple"><div>The Couple</div></a></li>
                    <li class=""><a href="showWishlistSection" data-href="#section-list"><div>Wish List</div></a></li>
                    <li class=""><a href="showEvents" data-href="#section-events"><div>Functions</div></a></li>
                    <li class=""><a href="showGuests" data-href="#section-guests"><div>Guests</div></a></li>
                    {{--<li><a href="/home"><div>Home</div></a></li>--}}
                    <li><a href="" class="disable-anchor-click"><div>{{ Auth::user()->name }}</div></a>
                        <ul>
                            <li>
                                <a href="/logout">Sign Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- #primary-menu end -->
        </div>
    </div>
</header><!-- #header end -->
