<?php

require_once("../models/Genre.php"); 
require_once("../models/Movie.php");

$genres =[
    $drammatico = new Genre("Drammatico", "Storie profonde e coinvolgenti."),
$romantico = new Genre("Romantico", "Focalizzato sulle relazioni amorose."),
$fantascienza = new Genre("Fantascienza", "Esplorazione di concetti futuristici.")
];

$movies = [
$titanic = new Movie("Titanic", "James Cameron", 194, 1997, "Sul transatlantico più famoso della storia, l'amore proibito tra Jack e Rose viene spezzato dal tragico scontro con un iceberg.","https://m.media-amazon.com/images/I/81n3QXOwA1L._AC_UF1000,1000_QL80_.jpg",[$drammatico, $romantico]),
$avatar = new Movie("Avatar", "James Cameron", 162, 2009, "Su un mondo alieno, un ex marine paralizzato intraprende una missione che lo porterà a lottare per proteggere la civiltà dei Na'vi.","https://m.media-amazon.com/images/I/91N1lG+LBIS._AC_UF894,1000_QL80_.jpg",[$fantascienza, new Genre("Azione", "Scene dinamiche e combattimenti")]),
$matrix = new Movie("Matrix", "Lana & Lilly Wachowski", 136, 1999, "Un programmatore scopre che la realtà è una simulazione creata dalle macchine e si unisce a una ribellione per liberare l'umanità.","https://media-cache.cinematerial.com/p/500x/780ppdrs/the-matrix-blu-ray-movie-cover.jpg?v=1456726624",[$fantascienza] )
];
// var_dump($titanic);
// var_dump($avatar);
// var_dump($matrix);