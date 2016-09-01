<!-- Header
============================================= -->
<header class="" id="header">

    <div id="header-wrap">

        <div class="container clearfix">

            <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

            <div id="logo">
                <a href="#" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/logo.png"
                                                                                        alt="WeddingCart Logo"></a>
                <a href="#" class="retina-logo" data-dark-logo="images/logo2x.png"><img
                            src="images/logo2x.png" alt="WeddingCart Logo"></a>
            </div>

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="style-2 center">

                <ul class="one-page-menu sf-menu">
                    <li><a href="#" data-href="#most-toppest"><div>Start</div></a></li>
                    <li><a href="#" data-href="#section-couple"><div>The Couple</div></a></li>
                    <li class=""><a href="#" data-href="#section-list"><div>Wish List</div></a></li>
                    <li class=""><a href="#" data-href="#section-events"><div>Events Schedule</div></a></li>
                    <li class=""><a href="#" data-href="#section-guests"><div>Guests</div></a></li>
                    <li><a href="" class="disable-anchor-click"><div>{{ Auth::user()->name }}</div></a>
                        <ul>
                            <li>
                                <a href="/logout">Sign Out</a>
                            </li>
                        </ul>
                    </li>
                    {{--<li class=""><a href="#" data-href="#section-guests"><div>Add Photos</div></a></li>--}}
                    {{--<li class=""><a href="#" data-href="#section-locations"><div>Locations</div></a></li>--}}
                    {{--<li class=""><a href="#" data-href="#section-rsvp"><div>RSVP</div></a></li>--}}
                </ul>

            </nav><!-- #primary-menu end -->

        </div>

    </div>

</header><!-- #header end -->
