<?php

/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 7:03 PM
 */
include_once("Setting.php");

class Cities
{

    static function getName($code)
    {
        $s = new Setting();
        $url = $s->getCityName() . "?code=" . $code;

        $data = simplexml_load_file($url);

        return (string)$data->children()[0]->description;
    }

}