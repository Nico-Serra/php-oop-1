<?php
/*
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
*/

include_once __DIR__ . '/db.php'

?>

<?php include_once __DIR__ . '/layout/head.php' ?>

<main class="py-5">
    <div class="container">
        <h1 class="text-center my-4 text-white">List Production</h1>
        <div class="row row-cols-md-3 g-5 my-4">
            <?php foreach ($films as $film) : ?>
                <div class="col">
                    <div class="card bg-dark">
                        <div class="card-body text-white">
                            <h4>Title: <?php echo $film->title ?></h4>
                            <p>Language: <?php echo $film->language ?></p>
                            <p>Voto: <?php echo $film->vote ?></p>
                            <p>Genere: <?php echo $film->genre->name . ' , ' . $film->genreExtra->name ?></p>
                            <p>Descrizione: <?php echo $film->genre->description ?></p>

                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <h2 class="text-center my-4 text-white">Movies</h2>
        <div class="row row-cols-md-3 g-5 my-4">
            <?php foreach ($movies as $movie) : ?>
                <div class="col">
                    <div class="card bg-dark">
                        <div class="card-body text-white">
                            <h4>Title: <?php echo $movie->title ?></h4>
                            <p>Language: <?php echo $movie->language ?></p>
                            <p>Voto: <?php echo $movie->vote ?></p>
                            <p>Genere: <?php echo $movie->genre->name . ' , ' . $movie->genreExtra->name ?></p>
                            <p>Descrizione: <?php echo $movie->genre->description ?></p>
                            <p>Profitti: <?php echo $movie->profits ?></p>
                            <p>Durata: <?php echo $movie->duration ?></p>
                            <p>Anno di produzione: <?php echo $movie->year ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <h2 class="text-center my-4 text-white">Serie TV</h2>
        <div class="row row-cols-md-3 g-5 my-4">
            <?php foreach ($series as $serie) : ?>
                <div class="col">
                    <div class="card bg-dark">
                        <div class="card-body text-white">
                            <h4>Title: <?php echo $serie->title ?></h4>
                            <p>Language: <?php echo $serie->language ?></p>
                            <p>Voto: <?php echo $serie->vote ?></p>
                            <p>Genere: <?php echo $serie->genre->name . ' , ' . $serie->genreExtra->name  ?></p>
                            <p>Descrizione: <?php echo $serie->genre->description ?></p>
                            <p>Numero di stagioni: <?php echo $serie->numberSeason ?></p>
                            <p>Totale Episodi: <?php echo $serie->totalEpisodes ?></p>
                            <p>Anno di produzione: <?php echo $serie->yearOfProduction ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>

<?php include_once __DIR__ . '/layout/foot.php' ?>