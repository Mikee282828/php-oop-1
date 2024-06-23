<?php
include __DIR__ . "/Movie.php";
$film = new Movie("prova1","Questo è la descrizione del film...",2024,"didattico");

$unAltroFilm = new Movie("prova2","Questo è la descrizione di unAltroFilm...",2024,"didattico");

$unAltroAncora = new Movie("prova3","Questo è la descrizione di unAltroAncora...",2024,"didattico3");

$lista = [$film, $unAltroFilm,$unAltroAncora];
$prop = ["name","description","year","genre"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
</head>

<body>
    <?php
    foreach($lista as $film){
        echo 
            "<ul>
                <li>
                    Nome : $film->name
                </li>
                <li>
                    Descrizione : $film->description
                </li>
                <li>
                    Anno : $film->year
                </li>
                <li>
                    Genere : $film->genre
                </li>
                <li>" 
                .
                $film->stampa()
                .
                "
                </li>
            </ul>";
    }
    ?>
</body>

</html>