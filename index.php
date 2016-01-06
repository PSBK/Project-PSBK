<?php
include_once("./header.php");
//include_once("rio/Kota.php");
include_once("./Setting.php");
$s = new Setting();
$bUrl = $s->getUrl();
$path = $s->getPath();

$_SESSION['order'] = null;

?>
<section id="search_container">
    <div id="search">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#transfers" data-toggle="tab">Bus</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="transfers">

                <form action="tripList.php" method="post">
                    <h3>Search Bus</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="select-label">Origin</label>
                                <select class="form-control" id="origin" name="origin">
                                    <option value="">Select Origin</option>
                                    <?php
                                    $url1 = $s->getOrigin();
                                    $data = simplexml_load_file($url1);
                                    foreach ($data->children() as $cities) {
                                        $test = '<option value="' . $cities->code . '">' . $cities->description . '</option>';
                                        echo $test;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="select-label">Destination</label>
                                <select class="form-control" id="destination" name="destination">
                                    <option value="">Select Destination</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i>Departure Date</label>
                                <input class="date-pick1 form-control"
                                       data-date-format="dd-mm-yyyy"
                                       type="text"
                                       id="dDate"
                                       name="dDate"
                                       data-provide="datepicker1">
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="form-group">
                                <label>Adults</label>

                                <div class="numbers-row">
                                    <input type="text" value="1" id="seat" class="qty2 form-control"
                                           name="seat">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-9">
                            <div class="form-group">
                                <div class="radio_fix" id="radioOW">
                                    <label class="radio-inline" style="padding-left:0">
                                        <input type="radio" name="tipe" id="inlineRadio1" value="ow"
                                               checked> One Way
                                    </label>
                                </div>
                                <div class="radio_fix" id="radioPP">
                                    <label class="radio-inline">
                                        <input type="radio" name="tipe" id="inlineRadio2" value="pp">
                                        Return
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End row -->
                    <div class="row" id="tanggalKembali">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><i class="icon-calendar-7"></i>Return Date</label>
                                <input class="date-pick2 form-control"
                                       data-date-format="dd-mm-yyyy"
                                       type="text"
                                       id="rDate"
                                       name="rDate">
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <!-- End row -->
                    <hr>
                    <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->


<!--<div class="container margin_60">-->
<!---->
<!--    <div class="main_title">-->
<!--        <h2>Bus <span>Promo</span></h2>-->
<!---->
<!--        <p>Find your bus schedule here for better price</p>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!---->
<!--        --><?php
//        $urlpromo = "http://localhost:8888/PSBK-UI/xml/promo.xml";
//        $promo = new Kota();
//        $data2 = $promo->loadPromo($urlpromo);
//        foreach ($data2->children() as $p) {
//            ?>
<!---->
<!--            <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">-->
<!--                <div class="tour_container">-->
<!--                    <div class="img_container">-->
<!--                        <a href="origin/single_tour.html">-->
<!--                            <img src="--><? //= $p->gambar; ?><!--" class="img-responsive" alt="">-->
<!---->
<!--                            <div class="ribbon top_rated"></div>-->
<!--                            <div class="short_info">-->
<!--                                <i class="icon_set_1_icon-26"></i>--><? //= $p->kelas; ?><!--<span-->
<!--                                    class="price"><sup>Rp. </sup>--><? //= $p->harga; ?><!--</span>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    <div class="tour_title">-->
<!--                        <h3>--><? //= $p->kota_asal; ?><!-- - --><? //= $p->kota_tujuan; ?><!--</h3>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            --><?php
//        }
//        ?>
<!---->
<!--    </div>-->
<!--    <!-- End row -->-->
<!--    <p class="text-center nopadding">-->
<!--        <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all Promo (144) </a>-->
<!--    </p>-->
<!--</div>-->
<!-- End container -->

<div class="white_bg">
    <div class="container margin_60">
        <div class="main_title">
            <h2>Download our <span>Apps</span></h2>
        </div>
        <div class="banner colored add_bottom_30">
            <h4>Download our Apps <span>FREE</span></h4>

            <p>
                YES! We got mobile apps for your convenience. Now you can book your ticket anywhere and anytime you
                want.
            </p>
            <a href="<?= $s->getPath() . "apk-bisma.apk" ?>" class="btn_1 white">Download Now</a>
        </div>

    </div>
    <!-- End container -->
</div>
<!-- End white_bg -->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1 magnific">
        <div>
            <h3>WE GIVE YOU CONVENIENCE</h3>
            <a href="http://www.wideo.co/embed/10789321445009204390?height=486&width=880" class="video"><i
                    class="icon-play-circled2-1"></i></a>
        </div>
    </div>
</section>
<!-- End section -->
<div class="container margin_60">
    <div class="main_title">
        <h2>Some <span>good</span> reasons</h2>

        <p>Why you sould purchase your ticket with us?</p>
    </div>
    <div class="row">
        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
            <div class="feature_home">
                <i class="icon_set_1_icon-41"></i>

                <h3><span>+120</span> Bus Promo</h3>

                <p> Yes! We give you new promo everyday, on busy routes. Stay tune on our website!</p>
                <a href="origin/about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>

        <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="feature_home">
                <i class="icon_set_1_icon-30"></i>

                <h3><span>+1000</span> Customers</h3>

                <p>
                    More than 1000 Customers booked their bus ticket with us. Join them and gent the benefits.
                </p>
                <a href="origin/about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>

        <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="feature_home">
                <i class="icon_set_1_icon-57"></i>

                <h3><span>H24 </span> Support</h3>

                <p>
                    We are here for you, 24 hours 7 day a week. Ask us anything, we are gladly to help you.
                </p>
                <a href="origin/about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>

    </div>
    <!--End row -->
    <hr>
    <div class="row">
        <div class="col-md-8 col-sm-6 hidden-xs">
            <img src="img/laptop2.png" alt="Laptop" class="img-responsive laptop">
        </div>
        <div class="col-md-4 col-sm-6">
            <h3><span>Get started</span> with Bisma</h3>

            <p>
                You can book your bus ticket with 3 simple steps :
            </p>
            <ul class="list_order">
                <li><span>1</span>Select trips and options</li>
                <li><span>2</span>Book and purchase ticket</li>
                <li><span>3</span>Show your e-ticket directly</li>
            </ul>
            <a href="all_tour_list.html" class="btn_1">Start now</a>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container -->
<?
include_once("./footer.php");
?>

<div id="toTop"></div>
<!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<script src="js/icheck.js"></script>
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
    $('input.date-pick1').datepicker('setDate', 'today');
    $('input.time-pick1').timepicker({
        minuteStep: 15,
        showInpunts: false
    });

    $('input.date-pick2').datepicker('setDate', 'today');
    $('input.time-pick2').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
<script src="js/jquery.ddslick.js"></script>
<script>
    $("select.ddslick").each(function () {
        $(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>
<script>

    $(document).ready(function () {

        $('#tanggalKembali').hide();

        $('#inlineRadio1').on('ifChecked', function (event) {
            $('#tanggalKembali').toggle();
        });

        $('#inlineRadio2').on('ifChecked', function (event) {
            $('#tanggalKembali').toggle();
        });

        $('input#dDate').datepicker({
            minDate: 0
        });

        $('select#origin').change(function () {
            var codeOrigin = $('select#origin option:selected').val();
//            console.log(codeOrigin);
            if (codeOrigin != "") {
                $.ajax({
                        url: "<?=$s->getPath();?>/sendy/getDestination.php?code=" + "'" + codeOrigin + "'",
                        success: addDestination,
                    }
                )
            } else {
                $('select#destination').empty()
                    .append('<option value="">Select Destination</option>');
            }

        });
        function addDestination(data) {
//            console.log(data);
            $('select#destination').empty()
                .append('<option value="">Select Destination</option>');
            $(data).find("Table1").each(function () {
//                alert($(this).text());
                $('select#destination')
                    .append('<option value="' + $(this).find('code').text() + '">' + $(this).find('description').text() + '</option>');
            });
        };
    });
</script>
<?
if (isset($_SESSION['name']) && $_SESSION['greetings'] != 1) {
    ?>

    <script>
        $(document).ready(function () {
            alert("Welcome <?=$_SESSION['name'];?>");
        });
    </script>
    <?
    $_SESSION['greetings'] = 1;
}
if (isset($_GET["msg"])) {
    $msg = base64_decode($_GET["msg"]);
    ?>
    <script>
        $(document).ready(function () {
            alert("<?=$msg;?>");
        });
    </script>
    <?
}
?>

</body>
</html>