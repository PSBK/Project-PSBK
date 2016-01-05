<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 2:28 PM
 */
include_once("../Setting.php");
$s = new Setting();


//origin, destination, seat, date
if (isset($_GET['origin']) || isset($_GET['origin']) || isset($_GET['destination']) || isset($_GET['date']) || isset($_GET['seat'])) {
    $origin = $_GET['origin'];
    $destination = $_GET['destination'];
    $date = $_GET['date'];
    $seat = $_GET['seat'];
    $url = $s->getTrips() . "?origin='$origin'&destination='$destination'&date='$date'&seat='$seat'";
    $xml = simplexml_load_file($url);
    echo json_encode($xml);
} else {
    echo "{}";
}

