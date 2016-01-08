<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/27/15
 * Time: 2:37 PM
 */

//email, password, nama, kota, noKtp, noTelp
ob_start();
session_start();
include_once("./Setting.php");
$s = new Setting();

$email = $_POST["email"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$kota = $_POST["kota"];
$noKtp = $_POST["noKtp"];
$noTelp = $_POST["noTelp"];

$url = $s->setRegister();
$url .= "?email='$email'&password='$password'&nama='$nama'&kota='$kota'&noKtp='$noKtp'&noTelp='$noTelp'";

$data = simplexml_load_file($url);

if ($data->count() == 0) {
    $msg = "Name :" .$nama . "\\nEmail : " . $email ."\\n";
    $msg = "Failed Registered";
    $msg = base64_encode($msg);
} else {
//    $data->children()[0]->user_id;
    $user = $data->children()[0];
    $_SESSION["uid"] = (string)$user->user_id;
    $_SESSION["mail"] = (string)$user->email;
    $_SESSION["name"] = (string)$user->nama;
    $msg = "Name :" .$nama . "\\nID : " . $_SESSION["uid"] . "\\nEmail : " . $email . "\\n";
    $msg .= "Registered successfully!\\nYAY!";
    $msg = base64_encode($msg);
//    print_r($_SESSION);
}

header("Location: " . $s->getPath() . "index.php?msg=" . $msg);

ob_end_flush();