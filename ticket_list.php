<?
ob_start();
session_start();
include_once("./Setting.php");
include_once("./Cities.php");
include_once("./Order.php");
$s = new Setting();

$msg = "No Access";
$msg = base64_encode($msg);
if (!isset($_SESSION["uid"]) || !isset($_SESSION["mail"]) || $_SESSION["uid"] == "" || $_SESSION["uid"] == null) {
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
} else {
    $uid = $_SESSION["uid"];
    $mail = $_SESSION["mail"];
}

$url = $s->getOrder() . "?user='$uid";
//echo $getMeUrlOnichan;
$data = simplexml_load_file($url);

include_once("./header.php");
?>
<div style="height: 88px; background-color: transparent;"></div>
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
                            <a href="./confirmPayment.php?oid=<?= $ticket->order_id; ?>">
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

</body>
</html>