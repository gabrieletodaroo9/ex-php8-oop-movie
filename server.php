<?php
$mex = $_POST["messaggio"]??"";

$jsonstring= file_get_contents("./db/messages.json");
$mexArray= json_decode($jsonstring,true);

$mexArray[] = [
    "consiglio" => $mex,
    "data" => date("Y-m-d H:i:s")
];
// JSON UNESCAPED UNICODE SI USA PER NON FAR FARE L'ESCAPE DEI CARATTERI A PHP DURANTE LA CONVERSIONE
$mexJson= json_encode($mexArray,JSON_UNESCAPED_UNICODE);
file_put_contents("./db/messages.json",$mexJson);


header("Location: ./pages/successMex.php");