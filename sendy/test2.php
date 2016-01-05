<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/13/15
 * Time: 3:14 PM
 */


$url = "http://192.168.1.104/publish/ticbusonws.asmx/getOrigin";

//echo $yo = file_get_contents($url);


$xml = simplexml_load_file($url);

//print_r($xml);

//print_r($xml->NewDataSet->Table1[2]);


foreach ($xml->NewDataSet->Table1 as $ch) {
    echo $ch->NAMAKOTA;
}
