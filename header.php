<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 11/18/15
 * Time: 9:53 AM
 */
?>

<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template"/>
    <meta name="description"
          content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>BISMA - Bus Ticket Online</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    <link href="css/base.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">

    <!-- Google web fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!--[if lte IE 8]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please upgrade your browser.</p>
<![endif]-->

<div id="preloader">
    <div class="sk-spinner sk-spinner-wave">
        <div class="sk-rect1"></div>
        <div class="sk-rect2"></div>
        <div class="sk-rect3"></div>
        <div class="sk-rect4"></div>
        <div class="sk-rect5"></div>
    </div>
</div>
<!-- End Preload -->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+62 897-8856-792</strong></div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        <li>
                            <div class="dropdown dropdown-access">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>

                                <div class="dropdown-menu">
                                    <!--<div class="row">-->
                                    <!--<div class="col-md-6 col-sm-6 col-xs-6">-->
                                    <!--<a href="#" class="bt_facebook">-->
                                    <!--<i class="icon-facebook"></i>Facebook </a>-->
                                    <!--</div>-->
                                    <!--<div class="col-md-6 col-sm-6 col-xs-6">-->
                                    <!--<a href="#" class="bt_paypal">-->
                                    <!--<i class="icon-paypal"></i>Paypal </a>-->
                                    <!--</div>-->
                                    <!--</div>-->
                                    <!--<div class="login-or">-->
                                    <!--<hr class="hr-or">-->
                                    <!--<span class="span-or">or</span>-->
                                    <!--</div>-->
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputUsernameEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="inputPassword"
                                               placeholder="Password">
                                    </div>
                                    <a id="forgot_pw" href="#">Forgot password?</a>
                                    <input type="submit" name="" value="Sign in" id="Sign_in" class="button_drop">
                                    <input type="submit" name="" value="Sign up" id="Sign_up"
                                           class="button_drop outline">
                                </div>
                            </div>
                            <!-- End Dropdown access -->
                        </li>
                        <!--<li><a href="wishlist.html" id="wishlist_link">Wishlist</a></li>-->
                    </ul>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <a href="index.php"><img src="img/logo_bisma.png" width="160" height="34" alt="City tours"
                                              data-retina="true" class="logo_normal"></a>
                    <a href="index.php"><img src="img/logo_bisma.png" width="160" height="34" alt="City tours"
                                              data-retina="true" class="logo_sticky"></a>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>

                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_sticky.png" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="index.php" class="show-submenu">Home </a>
                            <!--<ul>-->
                            <!--<li><a href="index.html">With Hotels and Tours</a></li>-->
                            <!--<li><a href="index_2.html">With Only tours</a></li>-->
                            <!--<li><a href="index_3.html">Single image</a></li>-->
                            <!--<li><a href="index_4.html">Header video</a></li>-->
                            <!--<li><a href="index_7.html">With search panel</a></li>-->
                            <!--<li><a href="index_5.html">With map</a></li>-->
                            <!--<li><a href="index_6.html">With search bar</a></li>-->
                            <!--<li><a href="index_8.html">Search bar + Video <img src="img/new.png" alt=""-->
                            <!--class="pull-right hidden-sm hidden-xs"></a>-->
                            <!--</li>-->
                            <!--<li><a href="index_9.html">Text Rotator <img src="img/new.png" alt=""-->
                            <!--class="pull-right hidden-sm hidden-xs"></a>-->
                            <!--</li>-->
                            <!--<li><a href="index_10.html">Cookie Bar (EU) <img src="img/new.png" alt=""-->
                            <!--class="pull-right hidden-sm hidden-xs"></a>-->
                            <!--</li>-->
                            <!--<li><a href="index_11.html">Popup Advert <img src="img/new.png" alt=""-->
                            <!--class="pull-right hidden-sm hidden-xs"></a>-->
                            <!--</li>-->
                            <!--</ul>-->
                        </li>
                        <li class="submenu">
                            <a href="promoList.php" class="show-submenu">Promo <i class="icon-down-open-mini"></i></a>
                            <!--<ul>-->
                            <!--<li><a href="all_tours_list.html">All tours list</a></li>-->
                            <!--<li><a href="all_tours_grid.html">All tours grid</a></li>-->
                            <!--<li><a href="single_tour.html">Single tour page</a></li>-->
                            <!--<li><a href="single_tour_with_gallery.html">Single tour with gallery</a></li>-->
                            <!--<li><a href="single_tour_working_booking.php">Single tour working booking</a></li>-->
                            <!--</ul>-->
                        </li>
                        <li class="submenu">
                            <a href="./ticket_list.php" class="show-submenu">Tickets <i
                                    class="icon-down-open-mini"></i></a>
                            <!--<ul>-->
                            <!--<li><a href="all_hotels_list.html">All hotels list</a></li>-->
                            <!--<li><a href="all_hotels_grid.html">All hotels grid</a></li>-->
                            <!--<li><a href="single_hotel.html">Single hotel page</a></li>-->
                            <!--<li><a href="single_hotel_working_booking.php">Single hotel working booking</a></li>-->
                            <!--</ul>-->
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Payment <i
                                    class="icon-down-open-mini"></i></a>
                            <!--<ul>-->
                            <!--<li><a href="all_transfer_list.html">All transfers list</a></li>-->
                            <!--<li><a href="all_transfer_grid.html">All transfers grid</a></li>-->
                            <!--<li><a href="single_transfer.html">Single transfer page</a></li>-->
                            <!--</ul>-->
                        </li>
                        <!--<li class="megamenu submenu">-->
                        <!--<a href="javascript:void(0);" class="show-submenu-mega">Pages &amp; elements<i-->
                        <!--class="icon-down-open-mini"></i></a>-->

                        <!--<div class="menu-wrapper">-->
                        <!--<div class="col-md-4">-->
                        <!--<h3>Pages</h3>-->
                        <!--<ul>-->
                        <!--<li><a href="about.html">About us</a></li>-->
                        <!--<li><a href="general_page.html">General page</a></li>-->
                        <!--<li><a href="tourist_guide.html">Tourist guide</a></li>-->
                        <!--<li><a href="cart.html">Cart Tours</a></li>-->
                        <!--<li><a href="payment.html">Payment Tours</a></li>-->
                        <!--<li><a href="confirmation.html">Confirmation Tours</a></li>-->
                        <!--<li><a href="cart_hotel.html">Cart Hotel</a></li>-->
                        <!--<li><a href="payment_hotel.html">Payment Hotel</a></li>-->
                        <!--<li><a href="confirmation_hotel.html">Confirmation Hotel</a></li>-->
                        <!--<li><a href="wishlist.html">Wishlist page</a></li>-->
                        <!--<li><a href="faq.html">Faq <img src="img/new.png" alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a></li>-->
                        <!--<li><a href="pricing_tables.html">Pricing tables <img src="img/new.png" alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="page_with_map.html"><i class="icon-map"></i> Full screen map<img-->
                        <!--src="img/new.png" alt="" class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="admin.html"><i class="icon-cog-1"></i> Admin area <img-->
                        <!--src="img/new.png" alt="" class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--<h3>Pages</h3>-->
                        <!--<ul>-->
                        <!--<li><a href="contact_us_1.html">Contact us 1</a></li>-->
                        <!--<li><a href="contact_us_2.html">Contact us 2</a></li>-->
                        <!--<li><a href="blog_right_sidebar.html">Blog</a></li>-->
                        <!--<li><a href="blog.html">Blog left sidebar</a></li>-->
                        <!--<li><a href="login.html">Login</a></li>-->
                        <!--<li><a href="register.html">Register</a></li>-->
                        <!--<li><a href="invoice.html" target="_blank">Invoice</a></li>-->
                        <!--<li><a href="404.html">404 Error page</a></li>-->
                        <!--<li><a href="site_launch/index.html">Site launch / Coming soon</a></li>-->
                        <!--<li><a href="gallery_3_columns.html">Gallery 3 columns <img src="img/new.png"-->
                        <!--alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="gallery_4_columns.html">Gallery 4 columns <img src="img/new.png"-->
                        <!--alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="timeline.html">Tour timeline <img src="img/new.png" alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="general_page.html"><i class="icon-light-up"></i> Weather Forecast-->
                        <!--<img src="img/new.png" alt="" class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</div>-->
                        <!--<div class="col-md-4">-->
                        <!--<h3>Elements</h3>-->
                        <!--<ul>-->
                        <!--<li><a href="index.html"><i class="icon-columns"></i> Header transparent</a>-->
                        <!--</li>-->
                        <!--<li><a href="header_plain.html"><i class="icon-columns"></i> Header plain</a>-->
                        <!--</li>-->
                        <!--<li><a href="header_transparent_colored.html"><i class="icon-columns"></i>-->
                        <!--Header transparent colored</a></li>-->
                        <!--<li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working-->
                        <!--newsletter <img src="img/new.png" alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a></li>-->
                        <!--<li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a>-->
                        <!--</li>-->
                        <!--<li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a>-->
                        <!--</li>-->
                        <!--<li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>-->
                        <!--<li><a href="newsletter_template/newsletter.html" target="blank"><i-->
                        <!--class=" icon-mail"></i> Responsive email template <img src="img/new.png"-->
                        <!--alt=""-->
                        <!--class="pull-right hidden-sm hidden-xs"></a>-->
                        <!--</li>-->
                        <!--<li><a href="index.html"><i class="icon-circle color_1"></i> Color version 1</a>-->
                        <!--</li>-->
                        <!--<li><a href="color_2/index.html"><i class="icon-circle color_2"></i> Color-->
                        <!--version 2</a></li>-->
                        <!--<li><a href="color_3/index.html"><i class="icon-circle color_3"></i> Color-->
                        <!--version 3</a></li>-->
                        <!--<li><a href="color_4/index.html"><i class="icon-circle color_4"></i> Color-->
                        <!--version 4</a></li>-->
                        <!--</ul>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--&lt;!&ndash; End menu-wrapper &ndash;&gt;-->
                        <!--</li>-->
                    </ul>
                </div>
                <!-- End main-menu -->
                <ul id="top_tools">
                    <li>
                        <div class="dropdown dropdown-search">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>

                            <div class="dropdown-menu">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                                <i class="icon-search"></i>
                                            </button>
                                            </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown dropdown-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart
                                (0) </a>
                            <ul class="dropdown-menu" id="cart_items">
                                <li>
                                    <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                    <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div class="image"><img src="img/thumb_cart_3.jpg" alt=""></div>
                                    <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                    <a href="#" class="action"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <div>Total: <span>$120.00</span></div>
                                    <a href="cart.html" class="button_drop">Go to cart</a>
                                    <a href="payment.html" class="button_drop outline">Check out</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End dropdown-cart-->
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- container -->
</header>
<!-- End Header -->

