<?php
include_once("header.php");
include_once("rio/Kota.php");

$url = "http://localhost/PSBK-UI/xml/listkota.xml";



?>
<section id="search_container">
    <div id="search">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#transfers" data-toggle="tab">Bus</a></li>
        </ul>

        <div class="tab-content">
            <!--<div class="tab-pane active" id="tours">-->
            <!--<h3>Search Tours in Paris</h3>-->

            <!--<div class="row">-->
            <!--<div class="col-md-6">-->
            <!--<div class="form-group">-->
            <!--<label>Search terms</label>-->
            <!--<input type="text" class="form-control" id="firstname_booking" name="firstname_booking"-->
            <!--placeholder="Type your search terms">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-6">-->
            <!--<div class="form-group">-->
            <!--<label>Things to do</label>-->
            <!--<select class="ddslick" name="category">-->
            <!--<option value="0" data-imagesrc="img/icons_search/all_tours.png" selected>All tours-->
            <!--</option>-->
            <!--<option value="1" data-imagesrc="img/icons_search/sightseeing.png">City sightseeing-->
            <!--</option>-->
            <!--<option value="2" data-imagesrc="img/icons_search/museums.png">Museum tours</option>-->
            <!--<option value="3" data-imagesrc="img/icons_search/historic.png">Historic Buildings-->
            <!--</option>-->
            <!--<option value="4" data-imagesrc="img/icons_search/walking.png">Walking tours</option>-->
            <!--<option value="5" data-imagesrc="img/icons_search/eat.png">Eat & Drink</option>-->
            <!--<option value="6" data-imagesrc="img/icons_search/churches.png">Churces</option>-->
            <!--<option value="7" data-imagesrc="img/icons_search/skyline.png">Skyline tours</option>-->
            <!--</select>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; End row &ndash;&gt;-->
            <!--<div class="row">-->
            <!--<div class="col-md-3">-->
            <!--<div class="form-group">-->
            <!--<label><i class="icon-calendar-7"></i> Date</label>-->
            <!--<input class="date-pick form-control" data-date-format="M d, D" type="text">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3">-->
            <!--<div class="form-group">-->
            <!--<label><i class=" icon-clock"></i> Time</label>-->
            <!--<input class="time-pick form-control" value="12:00 AM" type="text">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-2 col-sm-3 col-xs-6">-->
            <!--<div class="form-group">-->
            <!--<label>Adults</label>-->

            <!--<div class="numbers-row">-->
            <!--<input type="text" value="1" id="adults" class="qty2 form-control" name="adults">-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-2 col-sm-3 col-xs-6">-->
            <!--<div class="form-group">-->
            <!--<label>Children</label>-->

            <!--<div class="numbers-row">-->
            <!--<input type="text" value="0" id="children" class="qty2 form-control" name="children">-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->

            <!--</div>-->
            <!--&lt;!&ndash; End row &ndash;&gt;-->
            <!--<hr>-->
            <!--<button class="btn_1 green"><i class="icon-search"></i>Search now</button>-->
            <!--</div>-->
            <!--&lt;!&ndash; End rab &ndash;&gt;-->
            <!--<div class="tab-pane" id="hotels">-->
            <!--<h3>Search Hotels in Paris</h3>-->

            <!--<div class="row">-->
            <!--<div class="col-md-3">-->
            <!--<div class="form-group">-->
            <!--<label><i class="icon-calendar-7"></i> Check in</label>-->
            <!--<input class="date-pick form-control" data-date-format="M d, D" type="text">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-3">-->
            <!--<div class="form-group">-->
            <!--<label><i class="icon-calendar-7"></i> Check out</label>-->
            <!--<input class="date-pick form-control" data-date-format="M d, D" type="text">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-2 col-sm-3 col-xs-5">-->
            <!--<div class="form-group">-->
            <!--<label>Adults</label>-->

            <!--<div class="numbers-row">-->
            <!--<input type="text" value="1" id="adults" class="qty2 form-control" name="adults_2">-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-2 col-sm-3 col-xs-5">-->
            <!--<div class="form-group">-->
            <!--<label>Children</label>-->

            <!--<div class="numbers-row">-->
            <!--<input type="text" value="0" id="children" class="qty2 form-control" name="children_2">-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-2 col-sm-3 col-xs-12">-->
            <!--<div class="form-group">-->
            <!--<label>Rooms</label>-->

            <!--<div class="numbers-row">-->
            <!--<input type="text" value="1" id="children" class="qty2 form-control" name="rooms">-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; End row &ndash;&gt;-->
            <!--<div class="row">-->
            <!--<div class="col-md-6">-->
            <!--<div class="form-group">-->
            <!--<label>Hotel name</label>-->
            <!--<input type="text" class="form-control" id="hotel_name" name="hotel_name"-->
            <!--placeholder="Optionally type hotel name">-->
            <!--</div>-->
            <!--</div>-->
            <!--<div class="col-md-6">-->
            <!--<div class="form-group">-->
            <!--<label>Preferred city area</label>-->
            <!--<select class="form-control" name="area">-->
            <!--<option value="Centre" selected>Centre</option>-->
            <!--<option value="Gar du Nord Station">Gar du Nord Station</option>-->
            <!--<option value="La Defance">La Defance</option>-->
            <!--</select>-->
            <!--</div>-->
            <!--</div>-->
            <!--</div>-->
            <!--&lt;!&ndash; End row &ndash;&gt;-->
            <!--<hr>-->
            <!--<button class="btn_1 green"><i class="icon-search"></i>Search now</button>-->
            <!--</div>-->
            <div class="tab-pane active" id="transfers">
                <h3>Search Bus</h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="select-label">Origin</label>
                            <select class="form-control">
                            
                            <?php
							$url1 = "http://localhost/PSBK-UI/xml/listkota.xml";
							$KotaAsal = new Kota();
							$data = $KotaAsal->loadKotaAsal($url1);
							foreach ($data->children() as $cities)
							{
								//echo $cities->nama;
								
								$test = '<option value="'.$cities->kota_id.'">' .$cities->nama .'</option>';
								
								echo $test;
							}
							?>
                            
                                <!--option value="orly_airport">Jakarta</option>
                                <option value="gar_du_nord">Medan</option>
                                <option value="hotel_rivoli">Surabaya</option-->
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="select-label">Destination</label>
                            <select class="form-control">
                            
                            <?php
							$url2 = "http://localhost/PSBK-UI/xml/listkota.xml";
							$KotaTujuan = new Kota();
							$data2 = $KotaTujuan->loadKotaAsal($url2);
								foreach ($data2->children() as $city)
							{
							?>
                            	<option value="<?php echo $city->kota_id;?>"><?php echo $city->nama;?></option>
                            <?php
							}
							?>
                               
                            </select>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i> Date</label>
                            <input class="date-pick form-control" data-date-format="M d, D" type="text">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-3">
                        <div class="form-group">
                            <label>Adults</label>

                            <div class="numbers-row">
                                <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-9">
                        <div class="form-group">
                            <div class="radio_fix">
                                <label class="radio-inline" style="padding-left:0">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"
                                           checked> One Way
                                </label>
                            </div>
                            <div class="radio_fix">
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    Return
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <hr>
                <button class="btn_1 green"><i class="icon-search"></i>Search now</button>
            </div>
        </div>
    </div>
</section>
<!-- End hero -->


<div class="container margin_60">

    <div class="main_title">
        <h2>Bus <span>Promo</span></h2>

        <p>Find your bus schedule here for better price</p>
    </div>

    <div class="row">

        <?php 
			$urlpromo = "http://localhost/PSBK-UI/xml/promo.xml";
			$promo = new Kota();
			$data2 = $promo->loadPromo($urlpromo);
			foreach ($data2->children() as $p)
			{				
		?>
        
        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
            <div class="tour_container">
                <div class="img_container">
                    <a href="single_tour.html">
                        <img src="<?= $p->gambar;?>" class="img-responsive" alt="">

                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <i class="icon_set_1_icon-26"></i><?= $p->kelas ;?><span
                                class="price"><sup>Rp. </sup><?= $p->harga ;?></span>
                        </div>
                    </a>
                </div>
                <div class="tour_title">
                    <h3><?= $p->kota_asal ;?> - <?= $p->kota_tujuan ;?></h3>

                </div>
            </div>
            <!-- End box tour -->
        </div>
        <!-- End col-md-4 -->
<?php
			}
?>
      
    </div>
    <!-- End row -->
    <p class="text-center nopadding">
        <a href="#" class="btn_1 medium"><i class="icon-eye-7"></i>View all Promo (144) </a>
    </p>
</div>
<!-- End container -->

<div class="white_bg">
    <div class="container margin_60">
        <div class="main_title">
            <h2>Download our <span>Apps</span></h2>

            <!--<p>-->
            <!--Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.-->
            <!--</p>-->
        </div>
        <!--<div class="row add_bottom_45">-->
        <!--<div class="col-md-4 other_tours">-->
        <!--<ul>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-3"></i>Tour Eiffel<span-->
        <!--class="other_tours_price">$42</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-30"></i>Shopping tour<span-->
        <!--class="other_tours_price">$35</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-44"></i>Versailles tour<span-->
        <!--class="other_tours_price">$20</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-3"></i>Montparnasse skyline<span-->
        <!--class="other_tours_price">$26</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-44"></i>Pompidue<span class="other_tours_price">$26</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-3"></i>Senna River tour<span-->
        <!--class="other_tours_price">$32</span></a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div class="col-md-4 other_tours">-->
        <!--<ul>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-1"></i>Notredame<span class="other_tours_price">$48</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-4"></i>Lafaiette<span class="other_tours_price">$55</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-30"></i>Trocadero<span-->
        <!--class="other_tours_price">$76</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-3"></i>Open Bus tour<span-->
        <!--class="other_tours_price">$55</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-30"></i>Louvre museum<span-->
        <!--class="other_tours_price">$24</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-3"></i>Madlene Cathedral<span class="other_tours_price">$24</span></a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--<div class="col-md-4 other_tours">-->
        <!--<ul>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-37"></i>Montparnasse<span-->
        <!--class="other_tours_price">$36</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-1"></i>D'Orsey museum<span-->
        <!--class="other_tours_price">$28</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-50"></i>Gioconda Louvre musuem<span-->
        <!--class="other_tours_price">$44</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-44"></i>Tour Eiffel<span-->
        <!--class="other_tours_price">$56</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-50"></i>Ladefanse<span-->
        <!--class="other_tours_price">$16</span></a>-->
        <!--</li>-->
        <!--<li><a href="#"><i class="icon_set_1_icon-44"></i>Notredame<span-->
        <!--class="other_tours_price">$26</span></a>-->
        <!--</li>-->
        <!--</ul>-->
        <!--</div>-->
        <!--</div>-->
        <!-- End row -->

        <div class="banner colored add_bottom_30">
            <h4>Download our Apps <span>FREE</span></h4>

            <p>
                YES! We got mobile apps for your convenience. Now you can book your ticket anywhere and anytime you want.
            </p>
            <a href="single_tour.html" class="btn_1 white">Read more</a>
        </div>
        <!--<div class="row">-->
        <!--<div class="col-md-3 col-sm-6 text-center">-->
        <!--<p>-->
        <!--<a href="#"><img src="img/bus.jpg" alt="Pic" class="img-responsive"></a>-->
        <!--</p>-->
        <!--<h4><span>Sightseen tour</span> booking</h4>-->

        <!--<p>-->
        <!--Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor-->
        <!--imperdiet deterruisset, doctus volumus explicari qui ex.-->
        <!--</p>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-sm-6 text-center">-->
        <!--<p>-->
        <!--<a href="#"><img src="img/transfer.jpg" alt="Pic" class="img-responsive"></a>-->
        <!--</p>-->
        <!--<h4><span>Transfer</span> booking</h4>-->

        <!--<p>-->
        <!--Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor-->
        <!--imperdiet deterruisset, doctus volumus explicari qui ex.-->
        <!--</p>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-sm-6 text-center">-->
        <!--<p>-->
        <!--<a href="#"><img src="img/guide.jpg" alt="Pic" class="img-responsive"></a>-->
        <!--</p>-->
        <!--<h4><span>Tour guide</span> booking</h4>-->

        <!--<p>-->
        <!--Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor-->
        <!--imperdiet deterruisset, doctus volumus explicari qui ex.-->
        <!--</p>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-sm-6 text-center">-->
        <!--<p>-->
        <!--<a href="#"><img src="img/hotel.jpg" alt="Pic" class="img-responsive"></a>-->
        <!--</p>-->
        <!--<h4><span>Hotel</span> booking</h4>-->

        <!--<p>-->
        <!--Lorem ipsum dolor sit amet, vix erat audiam ei. Cum doctus civibus efficiantur in. Nec id tempor-->
        <!--imperdiet deterruisset, doctus volumus explicari qui ex.-->
        <!--</p>-->
        <!--</div>-->
        <!--</div>-->
        <!-- End row -->
    </div>
    <!-- End container -->
</div>
<!-- End white_bg -->

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400"
         data-natural-height="470">
    <div class="parallax-content-1 magnific">
        <div>
            <h3>WE GIVE YOU CONVENIENCE</h3>
            <a href="http://www.wideo.co/embed/10789321445009204390?height=486&width=880" class="video"><i class="icon-play-circled2-1"></i></a>
        </div>
    </div>
</section>
<!-- End section -->

<div class="container margin_60">

    <div class="main_title">
        <h2>Some <span>good</span> reasons</h2>

        <p>
            Why you sould purchase your ticket with us?
        </p>
    </div>

    <div class="row">

        <div class="col-md-4 wow zoomIn" data-wow-delay="0.2s">
            <div class="feature_home">
                <i class="icon_set_1_icon-41"></i>

                <h3><span>+120</span> Bus Promo</h3>

                <p>
                    Yes! We give you new promo everyday, on busy routes. Stay tune on our website!
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>

        <div class="col-md-4 wow zoomIn" data-wow-delay="0.4s">
            <div class="feature_home">
                <i class="icon_set_1_icon-30"></i>

                <h3><span>+1000</span> Customers</h3>

                <p>
                    More than 1000 Customers booked their bus ticket with us. Join them and gent the benefits.
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
            </div>
        </div>

        <div class="col-md-4 wow zoomIn" data-wow-delay="0.6s">
            <div class="feature_home">
                <i class="icon_set_1_icon-57"></i>

                <h3><span>H24 </span> Support</h3>

                <p>
                    We are here for you, 24 hours 7 day a week. Ask us anything, we are gladly to help you.
                </p>
                <a href="about.html" class="btn_1 outline">Read more</a>
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

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Need help?</h3>
                <a href="tel://08978856792" id="phone">+62 897-8856-792</a>
                <a href="/cdn-cgi/l/email-protection#fa929f968aba99938e838e958f8889d4999597" id="email_footer"><span
                        class="__cf_email__" data-cfemail="a1c9c4cdd1e1c2c8d5d8d5ced4d3d28fc2cecc">[email&#160;protected]</span>
                    <script data-cfhash='f9e31' type="text/javascript">
                        /* <![CDATA[ */
                        !function () {
                            try {
                                var t = "currentScript"in document ? document.currentScript : function () {
                                    for (var t = document.getElementsByTagName("script"), e = t.length; e--;)if (t[e].getAttribute("data-cfhash"))return t[e]
                                }();
                                if (t && t.previousSibling) {
                                    var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail");
                                    if (a) {
                                        for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i);
                                        e = document.createTextNode(e), c.parentNode.replaceChild(e, c)
                                    }
                                    t.parentNode.removeChild(t);
                                }
                            } catch (u) {
                            }
                        }()
                        /* ]]> */</script>
                </a>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">Terms and condition</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="#">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-3">
                <h3>Settings</h3>

                <div class="styled-select">
                    <select class="form-control" name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select class="form-control" name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="EUR">EUR</option>
                        <option value="GBP">GBP</option>
                        <option value="RUB">RUB</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-vimeo"></i></a></li>
                        <li><a href="#"><i class="icon-youtube-play"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                    <p>© Citytours 2015</p>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</footer>
<!-- End footer -->

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
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
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