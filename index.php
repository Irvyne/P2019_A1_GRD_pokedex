<?php

require 'function/database.fn.php';
require 'function/pokemon.fn.php';

$parameters = require 'config/parameters.php';

$link = database_connect($parameters);

$pokemons = getAllPokemons($link);

//var_dump($pokemons);

$pokemon = [
    'name'    => 'Mew',
    'type'    => 'water',
    'hp'      => 75,
    'level'   => 99,
    'attack'  => 45,
    'defense' => 40,
];

if (false === createPokemon($link, $pokemon)) {
    var_dump(mysqli_error($link));
}

$pokemon = getPokemon($link, 999);

if (null === $pokemon) {
    echo 'Aucun pokémon avec cet id';
}

var_dump($pokemon);

echo '<h1>'.$pokemon['name'].'</h1>';