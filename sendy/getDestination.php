<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 4:08 PM
 */

include_once("../Setting.php");


if (isset($_GET["code"])) {
    $code = $_GET["code"];
}

$s = new Setting();
//$urls = "http://192.168.1.115/publish/ticbusonws.asmx/getDestination?code='" . $_GET["code"] . "'";
$url = $s->getDestination() . "?code=" . $code;
//echo $urls;
//echo $_GET["code"];
header("Content-type: text/xml");
echo file_get_contents($url);