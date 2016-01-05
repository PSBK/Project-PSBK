<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 7:19 PM
 */

include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $url = $s->getUserDetailById() . "?user='$user'";

    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}