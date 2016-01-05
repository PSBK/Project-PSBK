<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 3:03 AM
 */

include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['email']) && isset($_GET['password']) && isset($_GET['nama']) && isset($_GET['kota']) && isset($_GET['noKtp']) && isset($_GET['noTelp'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $nama = $_GET['nama'];
    $kota = $_GET['kota'];
    $noKtp = $_GET['noKtp'];
    $noTelp = $_GET['noTelp'];

    $url = $s->setRegister();
    $url .= "?email='$email'&password='$password'&nama='$nama'&kota='$kota'&noKtp='$noKtp'&noTelp='$noTelp'";

    $xml = simplexml_load_file($url);

    echo json_encode($xml);
} else {
    echo "{}";
}
