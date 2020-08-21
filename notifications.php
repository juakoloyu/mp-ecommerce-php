<?php
    /*
    require_once 'vendor/autoload.php';
    MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
    //$payment = MercadoPago\Payment::find_by_id($_GET["id"]);
    
    $payment = MercadoPago\Payment::find_by_id($_GET['data_id']);
    */
    $entityBody = file_get_contents('php://input');
    $myfile = fopen("webhook.txt", "w") or die("Unable to open file!");
    $txt = $entityBody;
    fwrite($myfile, $txt);
    fclose($myfile);
?>