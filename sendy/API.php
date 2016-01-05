<?php

if(isset($_GET['f'])){

    $method = $_GET['f'];
    include_once("Converter.php");
    $conv = new Converter();
    if(method_exists($conv,$method)){
        $conv->$method();
    }

}else{
    die();
}