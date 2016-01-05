<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 6:38 PM
 */

include_once("../Setting.php");
$s = new Setting();

$url = $s->getOrigin();
$xml = simplexml_load_file($url);
echo json_encode($xml);
