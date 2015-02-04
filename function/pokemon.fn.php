<?php

function getAllPokemons($link) {
    $sql = 'SELECT * FROM pokemon';
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_all($query);
}

function createPokemon($link, array $pokemon) {
    // name | hp | type | level | trainer | attack | defense | evolution_id

    $columns = ''; // 'name, type'
    $values  = ''; // '"Pikachu", "electric"'

    foreach ($pokemon as $column => $value) {

    }

    $sql = 'INSERT INTO pokemon ('.$columns.') VALUES ('.$values.')';
    mysqli_query($link, $sql);
}