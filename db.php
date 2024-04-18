<?php
include_once __DIR__ . '/Models/Production.php';
include_once __DIR__ . '/Models/Genre.php';



$films = [];

/*
Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
*/
$avengers = new Production('Avengers', 'English', 10, new Genre('Fantasy', 'The Avengers are a fictional team of superheroes '));
$hulk = new Production('Hulk', 'English', 7, new Genre('Action & fantasy', 'He is a SuperHero'));
$captainAmerica = new Production('Captain America', 'English', 10, new Genre('Action', 'He is a SuperHero'));
$ironMan = new Production('Iron Man', 'English', 9, new Genre('Action', 'He is a SuperHero'));
$thor = new Production('Thor', 'English', 8, new Genre('Fantasy', 'He is a SuperHero'));



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
