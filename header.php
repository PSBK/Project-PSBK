<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 11/18/15
 * Time: 9:53 AM
 */
//session_start();
include_once("./Order.php");
include_once("./Setting.php");
include_once("./Cities.php");

$s = new Setting();
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

<!--<div id="preloader">-->
<!--    <div class="sk-spinner sk-spinner-wave">-->
<!--        <div class="sk-rect1"></div>-->
<!--        <div class="sk-rect2"></div>-->
<!--        <div class="sk-rect3"></div>-->
<!--        <div class="sk-rect4"></div>-->
<!--        <div class="sk-rect5"></div>-->
<!--    </div>-->
<!--</div>-->

<div class="layer"></div>
<!-- Mobile menu overlay mask -->

<!-- Header================================================== -->
<header style="background: url(./img/pattern.png) rgba(0, 0, 0, 0.5);">
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>+62 897-8856-792</strong>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <ul id="top_links">
                        <li>
                            <form action="logginIn.php" method="get">
                                <div class="dropdown dropdown-access" id="login_area">
                                    <?
                                    if (isset($_SESSION["name"])) {
                                        if ($_SESSION["name"] != "" || $_SESSION["name"] != null) {
                                            ?>
                                            <a class="dropdown-toggle"><?= $_SESSION["name"]; ?></a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="./logOut.php" class="dropdown-toggle">Log Out</a>
                                            <?
                                        }
                                    } else {
                                        ?>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign
                                            in</a>
                                        <div class="dropdown-menu">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="inputUsernameEmail"
                                                       placeholder="Email" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" id="inputPassword"
                                                       placeholder="Password" name="pass" required>
                                            </div>
                                            <!--                                            <a id="forgot_pw" href="#">Forgot password?</a>-->
                                            <input type="submit" name="" value="Sign in" id="Sign_in"
                                                   class="button_drop">
                                            <a href="register.php"> <input value="Register"
                                                                           id="Sign_up"
                                                                           class="button_drop outline"></a>
                                        </div>
                                        <?
                                    }
                                    ?>
                                </div>
                            </form>
                            <!-- End Dropdown access -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container-->
    </div>
    <!-- End top line-->

    <div class="container" style="color: white;">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div id="logo">
                    <a href="./index.php"><img src="img/logo_bisma.png" width="160" height="34" alt="Bisma"
                                               data-retina="true" class="logo_normal"></a>
                    <a href="./index.php"><img src="img/logo_bisma.png" width="160" height="34" alt="Bisma"
                                               data-retina="true" class="logo_sticky"></a>
                </div>
            </div>
            <nav class="col-md-9 col-sm-9 col-xs-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>

                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo_bisma.png" width="160" height="34" alt="City tours" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="./index.php" class="show-submenu">Home </a>
                        </li>
                        <li class="submenu">
                            <a href="./promoList.php" class="show-submenu">Promo</a>
                        </li>
                        <?
                        if (isset($_SESSION["name"])) {
                            ?>
                            <li class="submenu">
                                <a href="./ticket_list.php" class="show-submenu">Tickets</a>
                            </li>
                            <?
                        } else {
                            ?>
                            <li class="submenu">
                                <a href="./register.php" class="show-submenu">Register</a>
                            </li>
                            <?
                        }
                        ?>

                        <li class="submenu">
                            <a href="javascript:void(0);" class="show-submenu">Payment </a>
                        </li>
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
                            </a>
                            <?
                            if (isset($_SESSION["order"])) {
                                $order = unserialize($_SESSION["order"]);
                                if ($order->getIdDeparture() != "" || $order->getIdDeparture() != null) {
                                    ?>
                                    <ul class="dropdown-menu" id="cart_items">
                                        <li>
                                            <div class="image"><img src="img/thumb_cart_1.jpg" alt=""></div>
                                            <strong>
                                                <?
                                                $url1 = $s->getDetailTrip() . "?id='" . $order->getIdDeparture() . "'";
                                                $data1 = simplexml_load_file($url1);
                                                ?>

                                                <a href="#"><?= Cities::getName((string)$data1->children()[0]->asal) . " - " .
                                                    Cities::getName((string)$data1->children()[0]->tujuan); ?></a>
                                                <?= $order->getSeat(); ?> Person(s)
                                                <?
                                                $hargaIni = $order->getSeat() * $data1->children()[0]->harga;
                                                echo $hargaIni;
                                                ?>
                                            </strong>
                                            <!--                                        <a href="#" class="action"><i class="icon-trash"></i></a>-->
                                        </li>
                                        <?
                                        if ($order->getType() == "pp" && $order->getIdReturn() != null) {
                                            ?>
                                            <li>
                                                <div class="image"><img src="img/thumb_cart_2.jpg" alt=""></div>
                                                <strong>
                                                    <?
                                                    $url2 = $s->getDetailTrip() . "?id='" . $order->getIdReturn() . "'";
                                                    $data2 = simplexml_load_file($url2);
                                                    ?>

                                                    <a href="#"><?= Cities::getName((string)$data2->children()[0]->asal) . " - " .
                                                        Cities::getName((string)$data2->children()[0]->tujuan); ?></a>
                                                    <?= $order->getSeat(); ?> Person(s)
                                                    <?
                                                    $hargaItu = $order->getSeat() * $data2->children()[0]->harga;
                                                    echo $hargaItu;
                                                    ?>
                                            </li>
                                            <?
                                        }
                                        ?>
                                        <li>
                                            <div>Total: <span><?= ($hargaIni + $hargaItu); ?></span></div>
                                            <!--                                    <a href="origin/cart.html" class="button_drop">Go to cart</a>-->
                                            <a href="origin/payment.html" class="button_drop outline">Check out</a>
                                        </li>
                                    </ul>
                                    <?
                                }
                            }
                            ?>
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

