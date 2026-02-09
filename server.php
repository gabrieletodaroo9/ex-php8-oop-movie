<?php
$mex = $_POST["messaggio"]??"";

$jsonstring= file_get_contents("./db/messages.json");
$mexArray= json_decode($jsonstring,true);

$mexArray[] = [
    "consiglio" => $mex,
    "data" => date("Y-m-d H:i:s")
];

$mexJson= json_encode($mexArray);
file_put_contents("./db/messages.json",$mexJson);

header("Location: ./pages/aboutus.php");