<?php
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';
include_once __DIR__ . '/Models/TvSerie.php';
include_once __DIR__ . '/Models/Movie.php';

//$films = [];

/*
Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
*/

$movies = [
    new Movie('Transformers', 'English', 8, new Genre('Action', 'Action', 'Action','Cars transform in robot'), '5000000€', '2h', 2007),
    new Movie('la vita è bella', 'Italian', 10, new Genre('Drama', 'Comedy', 'History','Show the drama of second war world'),  '5000000€', '2h', 2007),
    new Movie('Transformers 2', 'English', '8', new Genre('Action','Fantasy', 'Adventure', 'Cars transform in robot'), '5000000€', '2h', 2007),
    new Movie('Jhonny English', 'English', '8', new Genre('Action','Comedy','', 'American Spy'), '5000000€', '2h', 2007),
    new Movie('Transformers 3', 'English', '8', new Genre('Action', 'Fantasy', '','Cars transform in robot'), '5000000€', '2h', 2007),
    new Movie('Thor', 'English', 8, new Genre('Fantasy','Action', 'Adventure','He is a SuperHero'), '5000000€', '2h', 2007),
    new Movie('Iron Man', 'English', 9,new Genre('Fantasy','Action', 'Adventure','He is a SuperHero'), '5000000€', '2h', 2007),
    new Movie('Captain America', 'English', 10, new Genre('Fantasy','Action', 'Adventure','He is a SuperHero'), '5000000€', '2h', 2007),
    new Movie('Hulk', 'English', 7, new Genre('Fantasy','Action', 'Adventure','He is a SuperHero'), '5000000€', '2h', 2007),
    new Movie('Avengers', 'English', 10, new Genre('Fantasy','Action', 'Adventure','He is a SuperHero'), '5000000€', '2h', 2007),
];

$series = [
    new TvSeries('The Office', 'English', 10, new Genre('Comedy', '','' ,'The Office is an American mockumentary sitcom television series '),  9, 201, 2005),
    new TvSeries('Stranger Things', 'English', 10, new Genre('Fantasy','Dark','Adventure', 'The series centers around the residents of Hawkins'), 5, 34, 2016),
    new TvSeries('La casa de Papel', 'Espanol', 10, new Genre('Action','Adventure','Drama', 'Gang of thieves rob a bank'), 5, 41, 2017),
];
