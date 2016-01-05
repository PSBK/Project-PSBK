<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 7:31 PM
 */

include_once("../Setting.php");
$s = new Setting();

$id = $_GET['id'];
$url = $s->getPromo();
$xml = simplexml_load_file($url);
echo json_encode($xml);
