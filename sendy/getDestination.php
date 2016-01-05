<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 4:08 PM
 */

include_once("../Setting.php");


if (isset($_GET['code'])) {
    $code = $_GET['code'];
}

$s = new Setting();
header("Content-type: text/xml");
echo file_get_contents($s->getDestination());