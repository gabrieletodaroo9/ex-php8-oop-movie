<?php

class Genre
{
    public $name;
    public $description;

    function __construct($_name,$_description){
        
        $this->name = $_name;
        $this->description = $_description;
    }
}

class Movie
{
    public $title;
    public $director;
    public int $duration;
    public int $year;
    public $trama;
    public $genre;

    function __construct($_title, $_director, $_duration, $_year, $_trama, Genre $_genre)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->trama = $_trama;
        $this->genre = $_genre;
    }

    public function getDurationinHours()
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;
        return "{$hours}h {$minutes}m";
    }
}

$titanic = new Movie("Titanic", "James Cameron", 194, 1997, "Sul transatlantico più famoso della storia, l'amore proibito tra Jack e Rose viene spezzato dal tragico scontro con un iceberg.",new Genre ("Tragedia","Bello"));
$avatar = new Movie("Avatar", "James Cameron", 162, 2009, "Su un mondo alieno, un ex marine paralizzato intraprende una missione che lo porterà a lottare per proteggere la civiltà dei Na'vi.",new Genre ("Fantascienza","Bellissimo"));
$matrix = new Movie("Matrix", "Lana & Lilly Wachowski", 136, 1999, "Un programmatore scopre che la realtà è una simulazione creata dalle macchine e si unisce a una ribellione per liberare l'umanità.",new Genre ("Fantascienza","Stupendo"));

var_dump($titanic);
var_dump($avatar);
var_dump($matrix);
