<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 6:43 PM
 */

include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $url = $s->getDetailTrip() . "?id='$id'";
    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}