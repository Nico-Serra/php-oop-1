<?php
include_once __DIR__ . '/Models/Production.php';

$films = [];

/*
Creare un layout completo per stampare a schermo una lista di produzioni. Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice:

creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
*/
$avengers = new Production('Avengers', 'English', 10);
$hulk = new Production('Hulk', 'English', 7);
$captainAmerica = new Production('Captain America', 'English', 10);
$ironMan = new Production('Iron Man', 'English', 9);
$thor = new Production('Thor', 'English', 8);



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
