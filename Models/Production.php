<?php


/*
 - definite una classe Production;
 -All'interno della classe dovrete gestire un titolo, una lingua e un voto (su una scala da 1 a 10). La classe deve avere le sue variabili d'istanza, il costruttore e i metodi.Istanziate poi almeno due oggetti Production e stampate a schermo i loro valori;
*/

class Production
{
    // public $title;
    // public $language;
    // public $vote;

    public function __construct(public string $title, public string $language, public int $vote, public Genre $genre, public Genre $genreExtra)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
    }

    public function getInfoProduct()
    {
        echo " Titolo: $this->title Lingua: $this->language Voto: $this->vote";
        echo "<br>";
    }
}
