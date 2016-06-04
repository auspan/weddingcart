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
                <ul class="sf-menu">
                    <li><a href="/home"><div>Home</div></a></li>
                    <li><a href="/logout"><div>{{ Auth::user()->name }}</div></a>
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
