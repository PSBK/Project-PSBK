<?php
$xmlString = file_get_contents("http://localhost:8888/PSBK-UI/test/test.xml");

$xml = new SimpleXMLElement($xmlString);

print_r($xml);