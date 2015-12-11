<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 11/18/15
 * Time: 9:57 AM
 */
include_once("header.php"); 
include_once("rio/Kota.php");
include_once("Setting.php");

$setting=new Setting();

?>

<section class="parallax-window" data-parallax="scroll" data-image-src="img/home_bg_1.jpg" data-natural-width="1400"
         data-natural-height="470">
  <div class="parallax-content-1">
    <div class="animated fadeInDown">
      <h1>BUS PROMO</h1>
      <p>Search your trip here, get your ticket for a better price.</p>
    </div>
  </div>
</section>
<!-- End section -->

<div id="position">
  <div class="container">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Category</a></li>
      <li>Page active</li>
    </ul>
  </div>
</div>
<!-- Position --> 

<!--<div class="collapse" id="collapseMap">--> 
<!--    <div id="map" class="map"></div>--> 
<!--</div>--> 
<!-- End Map -->

<div class="container margin_60">
  <div class="row">
    <aside class="col-lg-3 col-md-3">
      <div id="filters_col"> <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters"
                   id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
        <div class="collapse" id="collapseFilters">
          <div class="filter_type">
            <h6>Price</h6>
            <ul>
              <li>
                <label>
                  <input type="checkbox" checked>
                  From 0 to 100.000</label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  From 100.000 to 300.000</label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  From 300.000 to 1.000.000</label>
              </li>
            </ul>
          </div>
          <div class="filter_type">
            <h6>Classes</h6>
            <ul>
              <li>
                <label>
                  <input type="checkbox">
                  <span class="rating"> Economy Class </span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  <span class="rating"> Executive Class </span></label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  <span class="rating"> Business Class </span></label>
              </li>
            </ul>
          </div>
          <div class="filter_type">
            <h6>Facility</h6>
            <ul>
              <li>
                <label>
                  <input type="checkbox">
                  Non Smoking</label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  Direct Trip</label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  Tour guides</label>
              </li>
              <li>
                <label>
                  <input type="checkbox">
                  Access for disabled</label>
              </li>
            </ul>
          </div>
        </div>
        <!--End collapse --> 
      </div>
      <!--End filters col-->
      <div class="box_style_2"> <i class="icon_set_1_icon-57"></i>
        <h4>Need <span>Help?</span></h4>
        <a href="tel://08978856792" class="phone">08978856792</a> <small>Monday to Friday 9.00am - 7.30pm</small> </div>
    </aside>
    <!--End aside -->
    
    <div class="col-lg-9 col-md-9">
      <div id="tools">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="styled-select-filters">
              <select name="sort_price" id="sort_price">
                <option value="" selected>Sort by price</option>
                <option value="lower">Lowest price</option>
                <option value="higher">Highest price</option>
              </select>
            </div>
          </div>
          <!--                    <div class="col-md-3 col-sm-3 col-xs-6">--> 
          <!--                        <div class="styled-select-filters">--> 
          <!--                            <select name="sort_rating" id="sort_rating">--> 
          <!--                                <option value="" selected>Sort by ranking</option>--> 
          <!--                                <option value="lower">Lowest ranking</option>--> 
          <!--                                <option value="higher">Highest ranking</option>--> 
          <!--                            </select>--> 
          <!--                        </div>--> 
          <!--                    </div>-->
          
          <div class="col-md-6 col-sm-6 hidden-xs text-right"> <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#"
                                                                                                        class="bt_filters"><i
                                class=" icon-list"></i></a> </div>
        </div>
      </div>
      <!--/tools -->
      <?php 
			$url = $setting->getUrlPromo();
			$KotaTujuan = new Kota();
			$data = $KotaTujuan->loadPromoList($url);
			foreach ($data->children() as $promo)
			{
	  ?>
      <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4"> 
          
            <div class="img_list"> <a href="single_tour.html"> 
              <!--                                <div class="ribbon popular" ></div>--> 
              <img src="<?= $promo->gambar;?>" alt="">
              <div class="short_info"><i class="icon_set_1_icon-26"></i><?=$promo->kelas;?></div>
              </a> </div>
          </div>
          <div class="clearfix visible-xs-block"></div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="tour_list_desc"> 
             
              <h3><?= $promo->kota_asal;?> - <?= $promo->kota_tujuan;?></h3>
             
              <ul class="add_info">
                <li>
                  <div class="tooltip_styled tooltip-effect-4"> <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                    <div class="tooltip-content">
                      <h4>Schedule</h4>
                      <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                      <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                      <strong>Sunday</strong> <span class="label label-danger">Closed</span> </div>
                  </div>
                </li>
                <li>
                  <div class="tooltip_styled tooltip-effect-4"> <span class="tooltip-item"><i class="icon_set_1_icon-58"></i></span>
                    <div class="tooltip-content">
                      <h4>1 Dinner & 1 Snack</h4>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tooltip_styled tooltip-effect-4"> <span class="tooltip-item"><i class="icon-ticket"></i></span>
                    <div class="tooltip-content">
                      <h4>e-Ticket Ready</h4>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tooltip_styled tooltip-effect-4"> <span class="tooltip-item"><i class="icon_set_1_icon-37"></i></span>
                    <div class="tooltip-content">
                      <h4>One time Transit</h4>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tooltip_styled tooltip-effect-4"> <span class="tooltip-item"><i class="icon_set_1_icon-47"></i></span>
                    <div class="tooltip-content">
                      <h4>No Smoking Trip</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="price_list">
              <div><sup>Rp. </sup><?= $promo->harga;?><span class="normal_price_list">Rp.400.000</span> <small>*Per person</small>
                <p><a href="single_tour.html" class="btn_1">Details</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
							}
			?>
      <!--End strip -->
      
      <hr>
      <div class="text-center">
        <ul class="pagination">
          <li><a href="#">Prev</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </div>
      <!-- end pagination--> 
      
    </div>
    <!-- End col lg-9 --> 
  </div>
  <!-- End row --> 
</div>
<!-- End container -->

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <h3>Need help?</h3>
        <a href="tel://004542344599" id="phone">+45 423 445 99</a> <a href="/cdn-cgi/l/email-protection#cda5a8a1bd8daea4b9b4b9a2b8bfbee3aea2a0" id="email_footer"><span
                        class="__cf_email__" data-cfemail="7119141d013112180508051e0403025f121e1c">[email&#160;protected]</span> 
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
        </a> </div>
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
</body></html>