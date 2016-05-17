<!-- Page Sub Menu
============================================= -->
<div id="page-menu">

    <div id="page-menu-wrap">

        <div class="container clearfix">

            <div class="menu-title">
                <div style='margin:11px'>
                    <div class="dropdown-menu">
                        <a class="account" >
                            <span style="color: white">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="submenu" style="display: none; ">
                            <ul class="root">
                                <li >
                                    <a href="{{ url('/home') }}" id="1" >Dashboard</a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}">Sign Out</a>
                                </li>
                            </ul>
                        </div>
                    </div>

              </div>

            </div>

            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="current"><a href="{{ url('/wedding') }}">Wedding</a></li>
                    <li><a href="{{ url('/showproducts') }}">Wish List</a></li>
                    <li><a href="{{ url('/invites') }}">Invite</a></li>
                    <li><a href="#">Send</a></li>
                </ul>
            </nav>

            <div id="page-submenu-trigger"><i class="icon-reorder"></i>
            </div>

        </div>

    </div>
</div>
