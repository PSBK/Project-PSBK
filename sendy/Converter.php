<?php

/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/11/15
 * Time: 10:46 PM
 */
class Converter
{
    private $url = "http://localhost:8888/PSBK-UI/";

    public function getCityOrigin()
    {
        $xml = simplexml_load_string(file_get_contents($this->url . "xml/listkota.xml"));
        echo json_encode($xml);
    }

    public function getCityDestination()
    {
        $xml = simplexml_load_string(file_get_contents($this->url . "xml/listkota.xml"));
        echo json_encode($xml);
    }

    public function getPromoList()
    {
        $xml = simplexml_load_string(file_get_contents($this->url . "xml/promolist.xml"));
        echo json_encode($xml);
    }
}