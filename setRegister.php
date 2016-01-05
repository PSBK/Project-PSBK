<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/27/15
 * Time: 2:37 PM
 */

//email, password, nama, kota, noKtp, noTelp

include_once("./Setting.php");
$s = new Setting();

$email = $_POST['email'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$kota = $_POST['kota'];
$noKtp = $_POST['noKtp'];
$noTelp = $_POST['noTelp'];

$url = $s->setRegister();
$url .= "?email='$email'&password='$password'&nama='$nama'&kota='$kota'&noKtp='$noKtp'&noTelp='$noTelp'";

$data = simplexml_load_file($url);

if ($data->count() == 0) {
    $msg = "User Already Exist";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
}
