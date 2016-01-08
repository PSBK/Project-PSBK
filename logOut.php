<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/29/15
 * Time: 4:27 PM
 */
ob_start();
session_start();
session_destroy();


$_SESSION["greetings"] = 0;
header("Location: index.php");

ob_end_flush();