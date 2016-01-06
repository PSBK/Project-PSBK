<?
ob_start();
session_start();
include_once("./header.php");
include_once("./Setting.php");

$s = new Setting();

if (isset($_SESSION['uid'])) {
    $msg = "Already Logged In";
    $msg = base64_encode($msg);
    ?>
    <script>
        window.location = "<?= $s->getPath();?>index.php?msg=<?=$msg;?>"
    </script>
    <?
}
//email, password, nama, kota, noKtp, noTelp
?>
<section id="hero" class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                <div id="login">
                    <div class="text-center"><img src="img/logo_bisma.png" alt="" data-retina="true"></div>
                    <hr>
                    <form action="setRegister.php" method="post">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class=" form-control" placeholder="Username" id="nama" name="nama"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class=" form-control" placeholder="Email" id="email" name="email"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input class=" form-control" id="password2" placeholder="City" id="kota" name="kota"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Id Number</label>
                            <input type="number" class=" form-control" id="noKtp" name="noKtp" placeholder="ID Number"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="tel" class=" form-control" id="noTelp" name="noTelp" placeholder="Phone"
                                   required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class=" form-control" id="password1" placeholder="Password"
                                   name="password" required>
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">Create an account</button>
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
</body>
</html>