<?php

include 'template/_header.php';

foreach ($pokemons as $pokemon) {
    echo '<article>';
        echo '<h1><a class="btn btn-danger" href="pokemon.php?id='.$pokemon['id'].'">'.$pokemon['name'].'</a></h1>';
        echo '<small>'.$pokemon['type'].'</small>';
    echo '</article>';
}

include 'template/_footer.php';