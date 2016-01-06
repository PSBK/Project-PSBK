<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 9:43 PM
 */
session_start();
include_once("./Setting.php");
include_once("./order.php");

$s = new Setting();

if (isset($_GET['tid']) || $_GET['tid'] == "" || $_GET['tid'] == null) {
    $tripId = $_GET['tid'];
} else {
    header("Location: " . $s->getPath());
}

//print_r($_SESSION);

if (!isset($_SESSION['name'])) {
    $fr = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    $fr = base64_encode($fr);
    header("Location: ". $s->getPath() . "login.php?fr=" . $fr);
    return;
} else {
}

//$order = new Order();

$order = unserialize($_SESSION['order']);
//print_r($order);
if ($order->getIdDeparture() == "" || $order->getIdDeparture() == null) {
    $order->setIdDeparture($tripId);
    if ($order->getType() == "ow") {
        $_SESSION['order'] = serialize($order);
        header("Location:" . $s->getPath() . "processOrder.php");
    } else {
        $_SESSION['order'] = serialize($order);
        header("Location:" . $s->getPath() . "tripList.php");
    }
} else {
    $order->setIdReturn($tripId);
    $_SESSION['order'] = serialize($order);
    header("Location:" . $s->getPath() . "processOrder.php");
}



