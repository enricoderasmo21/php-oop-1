<?php 

require_once './Models/Movie.php';
require_once './Models/Genre.php';
require_once './db.php';

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Blinker:wght@400;600&family=Bungee+Inline&family=Emilys+Candy&family=Fjalla+One&family=Fredoka:wght@300;700&family=Gugi&family=Lato:ital@0;1&family=Libre+Baskerville:ital@1&family=Montserrat:wght@400;600&family=Mynerve&family=Mystery+Quest&family=Noto+Sans:wght@400;700&family=Open+Sans:wght@400;700&family=Roboto:wght@400;500&family=Rowdies:wght@300&family=Rubik+Iso&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="css/style.css">
    <title>PHP oop</title>
</head>

<body>
    <?php include './Views/Partials/Header.php'?>

    <h1 id="title">MOVIES</h1>

    <div id="container-centered">
        
        <table class="table">
            <thead>
                <tr id="table-titles">
                    <th scope="col">Titolo</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Durata</th>
                    <th scope="col">Nazione</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Consigliato</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach($movies as $movie){
                    ?>
                    <tr>
                        <td><?= $movie->title ?></td>
                        <td><?= $movie->genre->getFullGenre() ?></td>
                        <td class="center"><?= $movie->duration . '"' ?></td>
                        <td class="center"><?= $movie->nation ?></td>
                        <td class="center"><?= $movie->year ?></td>
                        <td class="center"><?= $movie->vote . "/5" ?></td>
                        <td class="center"><?= $movie->recommended ? "&#128077;" : "&#128078;" ?></td>
                    </tr>
                    <?php 
                }
                    ?>
            </tbody>
        </table>
    </div>

    <?php include './Views/Partials/Footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>