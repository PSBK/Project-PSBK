<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 7:07 PM
 */
include_once("../Setting.php");
$s = new Setting();

if (isset($_GET['idDepart']) && isset($_GET['seat']) && isset($_GET['pp']) && isset($_GET['user'])) {
    $idDepart = $_GET['idDepart'];
    $seat = $_GET['seat'];
    $pp = $_GET['pp'];
    $user = $_GET['user'];

//idDepart, seat, pp, id_return, user

    $url = $s->setOrder() . "?idDepart='$idDepart'&seat='$seat'&pp='$pp'&user='$user'";
    if (isset($_GET['idReturn'])) {
        $idReturn = isset($_GET['idReturn']);
        $url .= "&idReturn='$idReturn'";
    }

    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}

