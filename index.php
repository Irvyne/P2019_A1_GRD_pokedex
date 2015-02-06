<?php

$link = require '_header.php';

$pokemons = getAllPokemons($link);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pokemons</title>
</head>
<body>
<?php
    foreach ($pokemons as $pokemon) {
        echo '<article>';
            echo '<h1><a href="pokemon.php?id='.$pokemon['id'].'">'.$pokemon['name'].'</a></h1>';
            echo '<small>'.$pokemon['type'].'</small>';
        echo '</article>';
    }
?>
</body>
</html>