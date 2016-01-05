<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 12:17 PM
 */
include_once("./Setting.php");
include_once("./Order.php");
session_start();
$s = new Setting();
if (!isset($_GET['tid']) || !isset($_GET['seat'])) {
    header("Location: " . $s->getPath());
}

$tid = $_GET['tid'];
$seat = $_GET['seat'];
$type = "ow";

$order = new Order();

$order->setIdDeparture($tid);
$order->setSeat($seat);
$order->setType($type);

$url = $s->getDetailTrip() . "?id='" . $tid . "'";
$data = simplexml_load_file($url);

$order->setOrigin((string)$data->children()[0]->asal);
$order->setDestination((string)$data->children()[0]->tujuan);
$order->setDDate((string)$data->children()[0]->jam_berangkat);

//print_r($order);

$_SESSION["order"] = serialize($order);

header("Location: " . $s->getPath() . "processOrder.php");


