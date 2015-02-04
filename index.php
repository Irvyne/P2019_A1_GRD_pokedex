<?php

require 'function/database.fn.php';
require 'function/pokemon.fn.php';

$parameters = require 'config/parameters.php';

$link = database_connect($parameters);

$pokemons = getAllPokemons($link);

var_dump($pokemons);





$pokemon = [
    'name' => 'Pikachu',
    'type' => 'electric',
];

createPokemon($link, $pokemon);