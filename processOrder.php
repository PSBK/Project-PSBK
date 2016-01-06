<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 10:47 PM
 */
ob_start();
session_start();
include_once("./Setting.php");
include_once("./Order.php");

$s = new Setting();

$actualUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$actualUrl = base64_encode($actualUrl);

if (!isset($_SESSION['uid']) || !isset($_SESSION['mail']) || $_SESSION['uid'] == "" || $_SESSION['uid'] == null) {
    header("Location: " . $s->getPath() . "login.php?fr=" . $actualUrl);
    return;
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


$msg = "ID Depart : $idDepart \\n";
$url = $s->setOrder() . "?idDepart='$idDepart'&seat='$seat'&pp='$pp'&user='$user'";
if ($idReturn != '' || $idReturn != null || $pp != 'ow') {
    $url .= "&idReturn='$idReturn'";
    $msg .= "ID Return : $idReturn \\n";
}

$msg .= "$seat Person(s)\\n";
if ($pp == 'ow') {
    $msg .= "One Way Trip\\n";
} else {
    $msg .= "Return Trip\\n";
}
$msg .= "Ordered by : " . $_SESSION['name'] . "\\n";
$data = simplexml_load_file($url);

if ($data->count() == 0) {
    $msg .= "Order Process Failed";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
} else {
    $_SESSION['order'] = null;
    $msg .= "Order Process Success";
    $msg = base64_encode($msg);
    header("Location: " . $s->getPath() . "index.php?msg=" . $msg);
}

ob_end_flush();
//print_r($data);