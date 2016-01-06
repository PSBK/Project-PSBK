<?php
/**
 * Created by PhpStorm.
 * User: korneliussendy
 * Date: 12/30/15
 * Time: 4:51 PM
 */
ob_start();
session_start();
include_once("./Setting.php");
$s = new Setting();

//print_r($_POST);

if (isset($_POST['id']) && isset($_POST['bankName']) && isset($_POST['accNo']) && isset($_POST['accName']) && isset($_POST['date'])) {
    $id = $_POST['id'];
    $bankName = $_POST['bankName'];
    $accNo = $_POST['accNo'];
    $accName = $_POST['accName'];
    $date = $_POST['date'];

    //id, bankName, accNo, accName, date
    $url = $s->setConfirmPayment() . "?id='$id'&bankName='$bankName'&accNo='$accNo'&accName='$accName'&date='$date'";
    $data = simplexml_load_file($url);

    if ($data->count() == 0) {
        $msg = "Confirmation Ticket with ID : $id Failed";
        $msg = base64_encode($msg);
        header("Location: " . $s->getPath() . "confirmPayment.php?oid=$id&msg=$msg");
    } else {
        $msg = "Confirmation Ticket with ID : $id Success";
        $msg = base64_encode($msg);
        header("Location: " . $s->getPath() . "index.php?msg=$msg");
    }

} else {
    die();
}
ob_end_flush();