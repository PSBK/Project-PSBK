<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 7:26 PM
 */
include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = $s->updateToPaid() . "?id='$id'";
    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}