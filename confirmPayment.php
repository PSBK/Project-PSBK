<?
include_once("header.php");
include_once("./Setting.php");
session_start();
$s = new Setting();

if (isset($_GET['oid']) && isset($_SESSION['uid']) && $_GET['oid'] != "") {
    $id = $_GET['oid'];
} else {
    die();
}

if (isset($_GET['msg'])) {
    $msg = base64_decode($_GET['msg']);
    ?>
    <script>
        alert('<?=$msg;?>');
    </script>
    <?
}

//id, bankName, accNo, accName, Date
?>
<section id="hero" class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <div class="text-center"><img src="img/logo_bisma.png" alt="" data-retina="true"></div>
                    <hr>
                    <form action="./setConfirmPayment.php" method="post">
                        <div class="form-group" style="display: none">
                            <label>ID</label>
                            <input type="text" class=" form-control" placeholder="Username" id="id" name="id"
                                   value="<?= $id; ?>" readonly required>
                        </div>
                        <div class="form-group">
                            <label class="select-label">Bank Name</label>
                            <select class="form-control" id="bankName" name="bankName">
                                <option value="BCA">BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="BRI">BRI</option>
                                <option value="BII">BII</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="Permata">Permata</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Account Number</label>
                            <input class=" form-control" type="number" placeholder="Account Number" id="accNo"
                                   name="accNo"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Account Owner</label>
                            <input type="text" class=" form-control" id="accName" name="accName"
                                   placeholder="Account Owner"
                                   required>
                        </div>
                        <div class="form-group">
                            <label><i class="icon-calendar-7"></i>Transfer Date</label>
                            <input class="date-pick form-control"
                                   data-date-format="dd-mm-yyyy"
                                   type="text"
                                   id="date"
                                   name="date"
                                   data-provide="datepicker1">
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">Confirm Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<? include_once("./footer.php"); ?>

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<!-- Specific scripts -->
<script src="js/pw_strenght.js"></script>

<script src="js/bootstrap-datepicker.js"></script>
<script src="js/bootstrap-timepicker.js"></script>
<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>
</body>
</html>