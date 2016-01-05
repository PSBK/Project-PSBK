<?php

/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 6:55 PM
 */
include_once("Setting.php");

class getCityName
{
    static function __construct($code)
    {
        $s = new Setting();
        $url = $s->getCityName();

        $data = simplexml_load_file($url);

        return (string)$data->children()[0]->description;

    }
}