<?php

require_once __DIR__ . "/../models/Genre.php"; 
require_once __DIR__ . "/../models/Movie.php";

$genres = [
    $drammatico = new Genre("Drammatico", "Storie profonde, conflitti umani e trame cariche di emozione."),
    $romantico = new Genre("Romantico", "Esplora i sentimenti, le relazioni amorose e i batticuori."),
    $fantascienza = new Genre("Fantascienza", "Viaggi interstellari, tecnologie futuristiche e mondi distopici."),
    $azione = new Genre("Azione", "Adrenalina pura, inseguimenti mozzafiato e scene di combattimento."),
    $crime = new Genre("Crime", "Storie di criminalità, indagini poliziesche e misteri da risolvere."),
    $commedia = new Genre("Commedia", "Pensato per il divertimento, tra situazioni ironiche e risate."),
    $animazione = new Genre("Animazione", "Film realizzati con tecniche grafiche, dai classici ai moderni in 3D."),
    $avventura = new Genre("Avventura", "Viaggi epici e scoperte in luoghi lontani e inesplorati.")
];

$movies = [
$titanic = new Movie("Titanic", "James Cameron", 194, 1997, "Sul transatlantico più famoso della storia, l'amore proibito tra Jack e Rose viene spezzato dal tragico scontro con un iceberg.","https://m.media-amazon.com/images/I/81n3QXOwA1L._AC_UF1000,1000_QL80_.jpg",[$drammatico, $romantico]),
$avatar = new Movie("Avatar", "James Cameron", 162, 2009, "Su un mondo alieno, un ex marine paralizzato intraprende una missione che lo porterà a lottare per proteggere la civiltà dei Na'vi.","https://m.media-amazon.com/images/I/91N1lG+LBIS._AC_UF894,1000_QL80_.jpg",[$animazione, $fantascienza, $azione,$avventura ]),
$matrix = new Movie("Matrix", "Lana & Lilly Wachowski", 136, 1999, "Un programmatore scopre che la realtà è una simulazione creata dalle macchine e si unisce a una ribellione per liberare l'umanità.","https://media-cache.cinematerial.com/p/500x/780ppdrs/the-matrix-blu-ray-movie-cover.jpg?v=1456726624",[$fantascienza,$azione] ),
$theWolfOfWallStreet = new Movie("The Wolf of Wall Street","Martin Scorsese",180, 2014,"The Wolf of Wall Street segue l’impressionante ascesa e la caduta di Jordan Belfort, il broker di New York che conquista una fortuna incredibile truffando milioni di investitori.","https://media.themoviedb.org/t/p/w600_and_h900_face/ouASmpTP0qkHZFTttjczMkhFscS.jpg",[$crime,$drammatico,$commedia]),
$theAvengers = new Movie("The Avengers","Joss Whedon",143,2012,"Quando la comparsa di un nemico inatteso minaccia la tranquillità e la sicurezza del mondo, Nick Fury si trova ad aver bisogno di una squadra che salvi il pianeta dall'orlo del disastro.","https://media.themoviedb.org/t/p/w600_and_h900_face/7oVUxo9FyjLKew0nwmAJgRFfg2G.jpg",[$azione,$avventura,$fantascienza]),
$interstellar = new Movie ("Interstellar","Christopher Nolan",169,2014,"In seguito alla scoperta di un cunicolo spazio-temporale, un gruppo di esploratori si avventura in una eroica missione per oltrepassare le distanze che fino a quel momento avevano reso impraticabili i viaggi interstellari.","https://media.themoviedb.org/t/p/w600_and_h900_face/bMKiLh0mES4Uiococ240lbbTGXQ.jpg",[$azione,$fantascienza,$drammatico])
];
