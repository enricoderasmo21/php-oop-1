<?php

$avatar = new Movie("Avatar", new Genre("Sci-fi", "Azione"), 162, "USA", 2009, 4.5,);
$seabiscuit = new Movie("Seabiscuit : Un mito senza tempo", new Genre("Biografico", "Sportivo"), 140, "USA", 2003, 4.2,);
$ronin = new Movie("47 Ronin", new Genre("Azione", "Fantastico"), 128, "USA", 2013, 2.1,);
$gli_spietati = new Movie("Gli spietati", new Genre("Western", "Drammatico"), 131, "USA", 1992, 4.2,);
$will_hunting = new Movie("Will Hunting - Genio ribelle", new Genre("Drammatico", "Romantico"), 126, "USA", 1992, 4.2,);

$movies[] = $avatar;
$movies[] = $seabiscuit;
$movies[] = $ronin;
$movies[] = $gli_spietati;
$movies[] = $will_hunting;