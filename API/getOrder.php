<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/31/15
 * Time: 12:08 AM
 */
include_once("../Setting.php");
$s = new Setting();
if (isset($_GET['user'])) {
    $userId = $_GET['user'];
    $url = $s->getOrder() . "?user='$userId'";
    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}