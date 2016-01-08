<?
ob_start();
session_start();
include_once("./header.php");
include_once("./Setting.php");

$s = new Setting();

if (isset($_SESSION["uid"])) {
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
                    <form action="logginIn.php" method="get">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class=" form-control" placeholder="Email" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class=" form-control" id="pass" placeholder="Password"
                                   name="pass">
                        </div>

                        <?
                        if (isset($_GET["fr"])) {
                            $frUrl = $_GET["fr"];
                            ?>

                            <div class="form-group" style="display: none;">
                                <label>fr</label>
                                <input class=" form-control" id="fr" name="fr" value="<?= $frUrl; ?>">
                            </div>

                            <?
                        }
                        ?>


                        <div id="pass-info" class="clearfix"></div>
                        <button class="btn_full">Log In</button>
                    </form>
                    <a href="./register.php">
                        <button class="btn_full">Register</button>
                    </a>
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