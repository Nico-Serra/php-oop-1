<?php 

class TvSeries extends Production {
    // public $numberSeason;
    // public $totalEpisodes;
    // public $yearOfProduction;

    public function __construct($title, $language, $vote, $genre, public $numberSeason, public $totalEpisodes, public $yearOfProduction)
    {
        parent::__construct($title, $language, $vote, $genre);
    }
}