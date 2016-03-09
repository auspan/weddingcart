<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

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
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    
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

</head>

<body class="stretched device-lg">

    <!-- Document Wrapper
    ============================================= -->
    <div id="wrapper" class="clearfix animate">

        <!-- Header
        ============================================= -->
        <header id="header">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
                    ============================================= -->
                        <div id="logo">
                            <a href="#" class="standard-logo" data-dark-logo="images/logo-dark.png">
                                <img src="images/logo.png" alt="WeddingCart Logo">
                            </a>
                            <a href="#" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">
                                <img src="images/logo2x.png" alt="WeddingCart Logo">
                            </a>
                         </div><!-- #logo end -->

                    <!-- Primary Navigation
                    ============================================= -->
                    <nav id="primary-menu">

                        <ul class="sf-js-enabled">
                            <li><a href="#"><div>Home</div></a></li>
                            <li><a href="#"><div>Services</div></a></li>
                            <li><a href="#"><div>Testimonials</div></a></li>
                            <li><a href="#"><div>About</div></a></li>
                            <li><a href="#"><div>Contact</div></a></li>
                        </ul>

                        <!-- Top Search
                        ============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger">
                                <i class="icon-search3"></i>
                                <i class="icon-line-cross"></i>
                            </a>
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
        <div id="page-menu">

            <div id="page-menu-wrap">

                <div class="container clearfix">

                    <div class="menu-title"><a href="{{ url('/logout') }}">Logout</a>
                    </div>

                    <nav>
                        <ul>
                            <li><a href="{{ url('/home') }}">Dashboard</a></li>
                            <li><a href="{{ url('/wedding') }}">Wedding</a></li>
                            <li class="current"><a href="{{ url('/wishlist') }}">Wish List</a></li>
                            <li><a href="#">Invite</a></li>
                            <li><a href="#">Send</a></li>
                        </ul>
                    </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i>
                </div>

                </div>

            </div>

        </div><!-- #page-menu end -->


        <!-- Content
        ============================================= -->
        <section id="content" class="secstyle">

            <div class="content-wrap">

                <div class="container clearfix">
                
                    <div class="heading-block center">
                        <h2>Create your wish list</h2>
                        <span class="divcenter">Select The Products.</span>
                    </div>

                        <div class=" col_full">
                                    
                            <!-- Contact Form Overlay
                            ============================================= -->
                            <div id="contact-form-overlay" class="clearfix">
                            
                                <!-- Contact Form
                                ============================================= -->
                                {!! Form::open(['action'=>'WishlistController@store', 'class'=>'form-horizontal nobottommargin', 'method'=>'post']) !!}
                                <!--<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">-->
        
                                    <div class="form-process"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                         <select id="template-contactform-email" name="product1" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                       <select id="template-contactform-email" name="product2" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product3" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product4" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product5" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                       <select id="template-contactform-email" name="product6" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product7" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product8" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product9" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product10" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product11" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
        
        
                              

                            </div><!-- Contact Form Overlay End -->
            
                        </div>
                                                
                </div>

                <div class="center bottommargin-lg">

                    {!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
                    <a href="#" class="button button-rounded button-xlarge">Back</a>

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

                            <a href="#" class="button button-rounded button-large"><span>Login</span></a>

                        </div>

                    </div>

                    <div class="col_one_third">
    
                            <div class="widget clearfix">
                                <h4>Instagram Photos</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs col-5 instagram-img" data-user="269801886" data-count="15" data-type="tag">
                                <a class="hyper1" href="#">
                                    <img src="images/12716542_1087067497990965_1975228856_n.jpg">
                                </a>
                                <a class="hyper2" href="#">
                                    <img src="images/12717107_1037966666244583_1419513843_n.jpg">
                                </a>
                                <a class="hyper3" href="#">
                                    <img src="images/12717026_764904696975136_1947247048_n.jpg">
                                </a>
                                <a class="hyper4" href="#">
                                    <img src="images/12547514_1062970187100305_1974560465_n.jpg">
                                </a>
                                <a class="hyper5" href="#">
                                    <img src="images/12552315_1555362088109133_711460244_n.jpg">
                                </a>
                                <a class="hyper6" href="#">
                                    <img src="images/12558755_1533563103640840_790578819_n.jpg">
                                </a>
                                <a class="hyper7" href="#">
                                    <img src="images/12728402_500724663449236_210330667_n.jpg">
                                </a>
                                <a class="hyper8" href="#">
                                    <img src="images/12599125_1567149036909350_2114197729_n.jpg">
                                </a>
                                <a class="hyper9" href="#">
                                    <img src="images/12729658_926112394104887_1406965779_n.jpg">
                                </a>
                                <a class="hyper10" href="#">
                                    <img src="images/12558857_229650337371830_1771744222_n.jpg">
                                </a>
                                <a class="hyper11" href="#">
                                    <img src="images/12717087_1272517662765822_460121632_n.jpg">
                                </a>
                                <a class="hyper12" href="#">
                                    <img src="images/12547250_1515888622046349_172707023_n.jpg">
                                </a>
                                <a class="hyper13" href="#">
                                    <img src="images/12716947_1170248046321576_2025413850_n.jpg">
                                </a>
                                <a class="hyper14" href="#">
                                    <img src="images/12599217_576724285837617_11837450_n.jpg">
                                </a>
                                <a class="hyper15" href="#">
                                    <img src="images/12599353_963222677099849_202858577_n.jpg">
                                </a><
                                /div>
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