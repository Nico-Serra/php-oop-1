<?php

class Genre
{
    public $listGenre;

    public function __construct($genre1,$genre2,$genre3, public string $description)
    {
        $this->listGenre = [$genre1,$genre2,$genre3];
        $this->description = $description;
    }
}
