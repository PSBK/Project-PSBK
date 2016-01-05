<?php


$url = "http://192.168.1.111/PSBK/ticbusonws.asmx/Test_WS?param=a";

$aa = file_get_contents($url);

$xml = simplexml_load_file($url);

print_r($xml);
//echo json_encode($xml);
//echo $aa;



header("Content-type: text");
echo $aa;
//
//
//echo $aa;
//
//
//$xml = simplexml_load_string($aa);
//
//
//print_r($xml->children(0));
//
//echo "<NewDataSet> <Table1> <IDKOTA>BDG</IDKOTA> <NAMAKOTA>Bandung</NAMAKOTA> </Table1> <Table1> <IDKOTA>CGK</IDKOTA> <NAMAKOTA>Jakarta</NAMAKOTA> </Table1> <Table1> <IDKOTA>DIY</IDKOTA> <NAMAKOTA>Yogyakarta</NAMAKOTA> </Table1> <Table1> <IDKOTA>SBY</IDKOTA> <NAMAKOTA>Surabaya</NAMAKOTA> </Table1> </NewDataSet>";

//echo '<string xmlns="http://www.w3.org/TR/xml-names/">
//<NewDataSet> <Table1> <IDKOTA>BDG</IDKOTA> <NAMAKOTA>Bandung</NAMAKOTA> </Table1> <Table1> <IDKOTA>CGK</IDKOTA> <NAMAKOTA>Jakarta</NAMAKOTA> </Table1> <Table1> <IDKOTA>DIY</IDKOTA> <NAMAKOTA>Yogyakarta</NAMAKOTA> </Table1> <Table1> <IDKOTA>SBY</IDKOTA> <NAMAKOTA>Surabaya</NAMAKOTA> </Table1> </NewDataSet>
//</string>';


