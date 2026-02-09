<?php

require_once("../models/Genre.php"); 
require_once("../models/Movie.php");

$genres =[
    $drammatico = new Genre("Drammatico", "Storie profonde e coinvolgenti."),
$romantico = new Genre("Romantico", "Focalizzato sulle relazioni amorose."),
$fantascienza = new Genre("Fantascienza", "Esplorazione di concetti futuristici.")
];

$movies = [
$titanic = new Movie("Titanic", "James Cameron", 194, 1997, "Sul transatlantico più famoso della storia, l'amore proibito tra Jack e Rose viene spezzato dal tragico scontro con un iceberg.",[$drammatico, $romantico]),
$avatar = new Movie("Avatar", "James Cameron", 162, 2009, "Su un mondo alieno, un ex marine paralizzato intraprende una missione che lo porterà a lottare per proteggere la civiltà dei Na'vi.",[$fantascienza, new Genre("Azione", "Scene dinamiche e combattimenti")]),
$matrix = new Movie("Matrix", "Lana & Lilly Wachowski", 136, 1999, "Un programmatore scopre che la realtà è una simulazione creata dalle macchine e si unisce a una ribellione per liberare l'umanità.",[$fantascienza] )
];
// var_dump($titanic);
// var_dump($avatar);
// var_dump($matrix);