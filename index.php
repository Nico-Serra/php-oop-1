<?php
/*
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

include_once __DIR__ . '/db.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-success">

    <div class="container">
        <h1 class="text-center my-4 text-white">List Production</h1>
        <div class="row row-cols-md-3 g-5 my-4">
            <?php foreach ($films as $film) : ?>
                <div class="col">
                    <div class="card bg-dark">
                        <div class="card-body text-white">
                            <h4>Title: <?php echo $film->title ?></h4>
                            <h5>Language: <?php echo $film->language ?></h5>
                            <h5>Voto: <?php echo $film->vote ?></h5>
                            <h5>Genere: <?php echo $film->genre->name ?></h5>
                            <p>Descrizione<?php echo $film->genre->description ?></p>

                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>