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

                    <li><a href="/invites"><div>Guest</div></a></li>
                    <li><a href="/logout"><div>{{ Auth::user()->name }}</div></a></li>

                <!--    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" style="width: 50px">
                          <li><a href="{{ url('/logout')  }}">Sign Out</a></li>
                        </ul>
                    </li>   -->

                </ul>


                <!-- Top Search
                {{--============================================= -->--}}
                {{--<div id="top-search">--}}
                    {{--<a href="#" id="top-search-trigger">--}}
                        {{--<i class="icon-search3"></i>--}}
                        {{--<i class="icon-line-cross"></i>--}}
                    {{--</a>--}}
                    {{--<form action="search.html" method="get">--}}
                        {{--<input name="q" class="form-control" placeholder="Type &amp; Hit Enter.." type="text">--}}
                    {{--</form>--}}
                {{--</div><!-- #top-search end -->--}}

            </nav><!-- #primary-menu end -->
        </div>
    </div>

    <script>
    $('#uls').click(function(){
        $('#lis').css("display","inherit");
    })
    </script>
</header><!-- #header end -->
