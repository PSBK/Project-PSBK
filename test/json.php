<?php
$xmlString = file_get_contents("http://localhost:8888/PSBK-UI/test/test.xml");

$xml = simplexml_load_string($xmlString, "SimpleXMLElement", LIBXML_NOCDATA);
$json = json_encode($xml);
$array = json_decode($json,TRUE);

print_r($json);