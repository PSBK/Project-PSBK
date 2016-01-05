<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 10:47 PM
 */
include_once("./Setting.php");
include_once("./Order.php");
session_start();

$s = new Setting();

$actualUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actualUrl = base64_encode($actualUrl);

if (!isset($_SESSION['uid']) || !isset($_SESSION['mail']) || $_SESSION['uid'] == "" || $_SESSION['uid'] == null) {
    header("Location: " . $s->getPath() . "login.php?fr=" . $actualUrl);
} else {
    $user = $_SESSION['uid'];
}

if (!isset($_SESSION["order"])) {
    $msg = "No Access";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
}
$order = unserialize($_SESSION["order"]);
//$order = new Order();

$idDepart = $order->getIdDeparture();
$idReturn = $order->getIdReturn();
$seat = $order->getSeat();
$pp = $order->getType();

//idDepart, seat, pp, id_return, user

$url = $s->setOrder() . "?idDepart='$idDepart'&seat='$seat'&pp='$pp'&user='$user'";
if ($idReturn != '' || $idReturn != null || $pp != 'ow') {
    $url .= "&idReturn='$idReturn'";
}
$data = simplexml_load_file($url);

if ($data->count() == 0) {
    $msg = "Order Process Failed";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
} else {
    $_SESSION['order'] = null;
    $msg = "Order Process Success";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
}

//print_r($data);