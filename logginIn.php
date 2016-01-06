<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/27/15
 * Time: 11:24 AM
 */

session_start();
include_once("Setting.php");
$s = new Setting();
if (isset($_SESSION['name'])) {
    unset($_SESSION["uid"]);
    unset($_SESSION["mail"]);
    unset($_SESSION["name"]);
}
$mail = $_GET["email"];
$pass = $_GET["pass"];
//session_destroy();

if(isset($_SESSION["name"])){
    $msg = "Already Logged In";
    $msg = base64_encode($msg);
    header("Location: index.php?msg=" . $msg);
    die();
}

$url = $s->getLoginUrl() . "?email=" . $mail . "&password=" . $pass;
//$urlFalse = "http://192.168.1.172/publish/ticbusonws.asmx/login?email=%27" . $mail . "%27&password=%27" . $pass . "%27";
$urlFalse = "http://localhost:8888/PSBK/xml/loginFalse.xml";
$data = simplexml_load_file($url);
//print_r($data);

if ($data->count() != 0) {
    $uid = (string)$data->children()[0]->user_id;
    $mail = (string)$data->children()[0]->email;
    $name = (string)$data->children()[0]->nama;

    $_SESSION["uid"] = $uid;
    $_SESSION["mail"] = $mail;
    $_SESSION["name"] = $name;

} else {
    $msg = "Login Failed";
    $msg = base64_encode($msg);
    header("Location: index.php?msg=" . $msg);
}

//print_r($_SESSION);
//echo $_SESSION['uid'];
//echo $_SESSION['mail'];
//echo $_SESSION['name'];

if (isset($_GET['fr'])) {
    $fr = $_GET['fr'];
    header("Location: " . base64_decode($fr));
} else {
    header("Location: index.php");
}

