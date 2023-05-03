<?php 

require_once './Models/Movie.php';

$avatar = new Movie("Avatar", "Sci-fi", 162, "USA", 2009, 4.5,);
$seabiscuit = new Movie("Seabiscuit : Un mito senza tempo", "Biographical", 140, "USA", 2003, 4.2,);
$ronin = new Movie("47 Ronin", "Azione", 128, "USA", 2013, 2.1,);
$gli_spietati = new Movie("Gli spietati", "Western", 131, "USA", 1992, 4.2,);
$will_hunting = new Movie("Will Hunting - Genio ribelle", "Drammatico", 126, "USA", 1992, 4.2,);

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/style.css">
    
    <title>PHP oop</title>
</head>
<body>
    <?php include './Views/Partials/Header.php'?>

    
    <?php include './Views/Partials/Footer.php'?>
</body>
</html>