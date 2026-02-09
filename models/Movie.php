<?php

require_once("../traits/TitleUpperCase.php");
require_once("../traits/SetSlug.php");

class Movie
{
    public $title;
    public $director;
    public int $duration;
    public int $year;
    public $trama;
    public $url_img;
    public array $genres;

    use TitleUpperCase;
    use SetSlug;

    function __construct($_title, $_director, $_duration, $_year, $_trama, $_url_img, array $_genres)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->duration = $_duration;
        $this->year = $_year;
        $this->trama = $_trama;
        $this->url_img=$_url_img;
        $this->genres = $_genres;
    }

    public function getDurationinHours()
    {
        $hours = floor($this->duration / 60);
        $minutes = $this->duration % 60;
        return "{$hours}h {$minutes}m";
    }
}
