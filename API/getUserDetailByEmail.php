<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 7:24 PM
 */


include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['email'])) {
    $user = $_GET['email'];
    $url = $s->getUserDetailByEmail() . "?email='$user'";

    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}