<?php

class Movie {

    public $title;
    public $genre;
    public $duration;
    public $nation;
    public $year;
    public $vote;
    public $recommended = false;

    function __construct(string $title, Genre $genre, int $duration, string $nation, int $year, float $vote) {

        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->nation = $nation;
        $this->year = $year;
        $this->vote = $vote;

        if($vote >= 2.8){
            $this->recommended = true;
        }
    }
} 