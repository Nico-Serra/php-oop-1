<?php
class Movie extends Production
{
    // public $profits;
    // public $duration;
    // public $year;

    public function __construct($title, $language, $vote, $genre, $genreExtra, public $profits, public $duration, public $year)
    {
        parent::__construct($title, $language, $vote, $genre, $genreExtra);
    }
}
