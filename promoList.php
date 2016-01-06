<?
ob_start();
session_start();
include_once("./Setting.php");
include_once("./Cities.php");
include_once("./Order.php");
$s = new Setting();
//$msg = "Some Fields Might Be Empty";
//$msg = base64_encode($msg);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);


$typeName = "One Way";
$tripType = "Departure";


$getMeUrlOnichan = $s->getTrips();
//echo $getMeUrlOnichan;
$data = simplexml_load_file($getMeUrlOnichan);
include_once("./header.php");
?>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
            <h1>PROMO TRIP</h1>

            <p><?= $tripType; ?> - <?= $typeName; ?></p>
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

                                    <div class="short_info"><i class="icon_set_1_icon-4"></i>Museums</div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <div class="tour_list_desc">
                                <h3><strong><?= $trip->vendor; ?></h3>

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
                                    <sup>Rp. </sup><?= $trip->harga_jual; ?><!--span class="normal_price_list">$99</span-->
                                    <br>
                                    <small></small>
                                    <form action="./setPromo.php?tid=">
                                        <input type="text" class=" form-control" style="display: none"
                                               value="<?= $trip->id_perjalanan; ?>"
                                               name="tid">

                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group" style="width: 100% !important;">
                                                <div class="numbers-row">
                                                    <input type="text" value="1" id="seat" class="qty2 form-control"
                                                           name="seat">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <input type="submit" name="" value="Order"
                                                   class="btn_1">
                                        </div>
                                    </form>
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
<!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/map.js"></script>
<script src="js/infobox.js"></script>
<script type="text/javascript">
    /* <![CDATA[ */
    (function () {
        try {
            var s, a, i, j, r, c, l = document.getElementsByTagName("a"), t = document.createElement("textarea");
            for (i = 0; l.length - i; i++) {
                try {
                    a = l[i].getAttribute("href");
                    if (a && a.indexOf("/cdn-cgi/l/email-protection") > -1 && (a.length > 28)) {
                        s = '';
                        j = 27 + 1 + a.indexOf("/cdn-cgi/l/email-protection");
                        if (a.length > j) {
                            r = parseInt(a.substr(j, 2), 16);
                            for (j += 2; a.length > j && a.substr(j, 1) != 'X'; j += 2) {
                                c = parseInt(a.substr(j, 2), 16) ^ r;
                                s += String.fromCharCode(c);
                            }
                            j += 1;
                            s += a.substr(j, a.length - j);
                        }
                        t.innerHTML = s.replace(/</g, "&lt;").replace(/>/g, "&gt;");
                        l[i].setAttribute("href", "mailto:" + t.value);
                    }
                } catch (e) {
                }
            }
        } catch (e) {
        }
    })();
    /* ]]> */
</script>
</body>
</html>