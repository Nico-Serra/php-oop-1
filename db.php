<?php
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/Models/TvSerie.php';
include_once __DIR__ . '/Models/Movie.php';

$films = [];

/*
Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
*/
$avengers = new Production('Avengers', 'English', 10, new Genre('Fantasy', 'The Avengers are a fictional team of superheroes '), new Genre('Fantasy', 'null'));
$hulk = new Production('Hulk', 'English', 7, new Genre('Action & fantasy', 'He is a SuperHero'), new Genre('Fantasy', 'null'));
$captainAmerica = new Production('Captain America', 'English', 10, new Genre('Action', 'He is a SuperHero'), new Genre('Fantasy', 'null'));
$ironMan = new Production('Iron Man', 'English', 9, new Genre('Action', 'He is a SuperHero'), new Genre('Fantasy', 'null'));
$thor = new Production('Thor', 'English', 8, new Genre('Fantasy', 'He is a SuperHero'), new Genre('Fantasy', 'null'));

// $movie = new Movie('Transformers', 'English', '8', new Genre('Action & Fantasy', 'Cars transform in robot'),'5000000€', '2h', 2007);

$movies = [
    new Movie('Transformers', 'English', 8, new Genre('Action', 'Cars transform in robot'), new Genre('Fantasy', ''), '5000000€', '2h', 2007),
    new Movie('la vita è bella', 'Italian', 10, new Genre('Drama', 'Show the drama of second war world'), new Genre('Comedy', ''), '5000000€', '2h', 2007),
    new Movie('Transformers 2', 'English', '8', new Genre('Action', 'Cars transform in robot'), new Genre('Fantasy', ''), '5000000€', '2h', 2007),
    new Movie('Jhonny English', 'English', '8', new Genre('Action', 'American Spy'), new Genre('Comedy', 'American Spy'), '5000000€', '2h', 2007),
    new Movie('Transformers 3', 'English', '8', new Genre('Action', 'Cars transform in robot'), new Genre('Fantasy', 'Cars transform in robot'), '5000000€', '2h', 2007),
];

$series = [
    new TvSeries('The Office', 'English', 10, new Genre('Comedy', 'The Office is an American mockumentary sitcom television series '), new Genre('Show', ''), 9, 201, 2005),
    new TvSeries('Stranger Things', 'English', 10, new Genre('Fantasy', 'The series centers around the residents of Hawkins'), new Genre('Dark', ''), 5, 34, 2016),
    new TvSeries('La casa de Papel', 'Espanol', 10, new Genre('Action', 'Gang of thieves rob a bank'), new Genre('Drama', ''), 5, 41, 2017),
];
//var_dump($hulk);
//var_dump($movie);

//var_dump($avengers, $hulk);


array_push($films, $avengers);
array_push($films, $hulk);
array_push($films, $captainAmerica);
array_push($films, $ironMan);
array_push($films, $thor);
//var_dump($films);


//var_dump($films);

//$avengers->getInfoProduct();
//$hulk->getInfoProduct();
