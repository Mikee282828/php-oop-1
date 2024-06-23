<?php
class Movie
{
    public $name;
    public $description;
    public $year;
    public $genre;
    public function saluto($description){
        echo $description;
    }
}
$film = new Movie();
$film->name = "prova1";
$film->description = "Questo è la descrizione del film...";
$film->year = 2024;
$film->genre = "didattico";

$unAltroFilm = new Movie();
$unAltroFilm->name = "prova2";
$unAltroFilm->description = "Questo è la descrizione di unAltroFilm...";
$unAltroFilm->year = 2024;
$unAltroFilm->genre = "didattico2";
$lista = [$film, $unAltroFilm];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
</head>

<body>
    <ul>
        <li>
            Nome : <?= $film->name ?>
        </li>
        <li>
            Descrizione : <?= $film->description ?>
        </li>
        <li>
            Anno : <?= $film->year ?>
        </li>
        <li>
            Genere : <?= $film->genre ?>
        </li>
        <li>
            Saluto : <?php $film->saluto("ciao") ?>
        </li>
    </ul>

    <ul>
        <li>
            Nome : <?= $unAltroFilm->name ?>
        </li>
        <li>
            Descrizione : <?= $unAltroFilm->description ?>
        </li>
        <li>
            Anno : <?= $unAltroFilm->year ?>
        </li>
        <li>
            Genere : <?= $unAltroFilm->genre ?>
        </li>
        <li>
            Saluto : <?php $unAltroFilm->saluto("ciao") ?>
        </li>
    </ul> 
</body>

</html>