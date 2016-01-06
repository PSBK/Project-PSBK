<?

include_once("./Setting.php");
include_once("./Cities.php");
include_once("./Order.php");
$s = new Setting();
$msg = "Some Fields Might Be Empty";
$msg = base64_encode($msg);
session_start();
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
/////////////////////CEK SESSION INPUT///////////////////////////////
if (isset($_SESSION["order"])) {
    $order = unserialize($_SESSION["order"]);
    $origin = $order->getDestination();
    $destination = $order->getOrigin();
    $dDate = $order->getDDate();
    $rDate = $order->getRDate();
    $seat = $order->getSeat();
    $type = $order->getType();
    $date = $rDate;
    if ($order->getIdDeparture() == "" || $order->getIdDeparture() == null) {
        $tripType = "Departure";
    } else {
        $tripType = "Return";
    }
} else {
    /////////////////////CEK POST///////////////////////////////
    if (isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['tipe'])
        && $_POST['origin'] != '' && $_POST['destination'] != ''
    ) {
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $dDate = $_POST['dDate'];
        $rDate = $_POST['rDate'];
        $seat = $_POST['seat'];
        $type = $_POST['tipe'];
        $order = new Order($origin, $destination, $seat, $dDate, $rDate, $type);
        $_SESSION["order"] = serialize($order);
        $date = $dDate;
        $tripType = "Departure";
    } else {
        header("Location: ./index.php?msg=" . $msg);
        ?>
        <!--script>
            window.location = "<?= $s->getPath();?>index.php?msg=<?=$msg;?>"
        </script-->
        <?
    }
}
/////////////////////SET TIPE PERJALANAN////////////////////////
if ($type == 'ow') {
    $typeName = "One Way";
} else {
    $typeName = "Round Trip";
}


//origin, destination, seat, date
$getMeUrlOnichan = $s->getTrips() . "?origin='$origin'&destination='$destination'&date='$date'=&seat='$seat'&type='$type'";
//echo $getMeUrlOnichan;
$data = simplexml_load_file($getMeUrlOnichan);
include_once("./header.php");
?>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">

            <h1><?= Cities::getName($origin) . " - " . Cities::getName($destination); ?></h1>

            <h2 style="color: white; margin-top: 0px"><?= $tripType; ?> Trip</h2>

            <p><?= $seat; ?> Person(s) - <?= $typeName . " - " . $date; ?></p>
        </div>
    </div>
</section><!-- End section -->
<div class="container margin_60">
    <div class="row">
        <div class="col-lg-12 col-md-12">

            <?
            $counter = 1;
            foreach ($data->children() as $trip) {
                ?>

                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.<?= $counter; ?>s">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="img_list"><a href="origin/single_tour.html">
                                    <!--                                    <div class="ribbon popular"></div>-->
                                    <img src="img/tour_box_1.jpg" alt="">

                                    <div class="short_info"><i class="icon_set_1_icon-4"></i><?= $trip->vendor; ?>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="tour_list_desc">
                                <h2><strong><?= $trip->vendor; ?></strong></h2>
                                <ul class="add_info">
                                    <li>
                                        <div class="tooltip_styled tooltip-effect-4">
                                            <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>

                                            <div class="tooltip-content"><h4>Schedule</h4>
                                                <strong>Depart Time</strong> <?= $trip->jam_berangkat; ?><br>
                                                <strong>Arrive Time</strong> <?= $trip->jam_sampai; ?><br>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="price_list">
                                <div>
                                    Rp. <?= $trip->harga_jual; ?><!--span class="normal_price_list">$99</span-->
                                    <br>
                                    <small></small>
                                    <p><a href="./setOrder.php?tid=<?= $trip->id_perjalanan; ?>"
                                          class="btn_1">Get Ticket(s)</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?
            }
            ?>
            <hr>
            <!-- end pagination-->
        </div>
        <!-- End col lg-9 -->
    </div>
    <!-- End row -->
</div><!-- End container -->

<?
include_once("./footer.php");
?>

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<!-- Cat nav mobile -->
<script src="js/cat_nav_mobile.js"></script>
<script>$('#cat_nav').mobileMenu();</script>
<!-- Check and radio inputs -->
<script src="js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>

</body>
</html>