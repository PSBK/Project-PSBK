<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 3:12 PM
 */
ob_start();
session_start();
include_once("./Setting.php");
$s = new Setting();

if (!isset($_GET["oid"])) {
    header("Location : ./ticket.php");
} else {
    $oid = $_GET["oid"];
}

$url = $s->updateToPaid() . "?id=" . $oid;

$data = simplexml_load_file($url);

if ($data->count() != 0) {
    $msg = "Ticket Update Success";
    $msg = base64_encode($msg);
    header("Location : ./index.php?msg=" . $msg);
} else {
    $msg = "Ticket Update Failed";
    $msg = base64_encode($msg);
    header("Location : ./index.php?msg=" . $msg);
}

ob_end_flush();