<?
session_start();
include_once("./Setting.php");
include_once("./Cities.php");
include_once("./Order.php");
$s = new Setting();
$msg = "No Access";
if (!isset($_SESSION['uid']) || !isset($_SESSION['mail']) || $_SESSION['uid'] == "" || $_SESSION['uid'] == null) {
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
} else {
    $uid = $_SESSION['uid'];
    $mail = $_SESSION['mail'];
}

$url = $s->getOrder() . "?user='$uid";
//echo $getMeUrlOnichan;
$data = simplexml_load_file($url);

include_once("./header.php");
?>
<div class="container margin_60">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Trip ID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Total Seat(s)</th>
                    <th>Status</th>
                    <th>Update</th>
                </tr>
                </thead>
                <tbody>
                <?

                foreach ($data->children() as $ticket) {
                    $url1 = $s->getDetailTrip() . "?id='" . $ticket->id_perjalanan . "'";
                    $data1 = simplexml_load_file($url1);
                    ?>
                    <tr>
                        <td><?= $ticket->id_perjalanan; ?></td>
                        <td><?= $data1->children()[0]->asal; ?></td>
                        <td><?= $data1->children()[0]->tujuan; ?></td>
                        <td><?= $ticket->total_seat; ?></td>
                        <td><?= $ticket->status; ?></td>
                        <td>
                            <a href="./updatePaymentStatus.php?oid=<?= $ticket->order_id; ?>">
                                <button class="btn btn-default">Update</button>
                            </a>
                        </td>
                    </tr>
                    <?
                }
                ?>
                </tbody>
            </table>
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