<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 2:50 AM
 */

include_once("../Setting.php");

$s = new Setting();

if (isset($_GET['email']) && isset($_GET['pass'])) {
    $mail = ($_GET['email']);
    $pass = ($_GET['pass']);
    $url = $s->getLoginUrl() . "?email='" . $mail . "'&password='" . $pass . "'";
    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}