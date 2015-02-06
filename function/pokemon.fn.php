<?php

/**
 * CRUD
 *
 * Create Read Update Delete
 */

function getAllPokemons($link) {
    $sql = 'SELECT * FROM pokemon';
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_all($query);
}

function getPokemon($link, $id) {
    $sql = "SELECT * FROM pokemon WHERE id = $id";
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_assoc($query);
}

function createPokemon($link, array $pokemon) {
    $columns = ''; // 'name, type'
    $values  = ''; // '"Pikachu", "electric"'

    foreach ($pokemon as $column => $value) {
        $columns .= $column.',';
        $values  .= '"'.$value.'",';
    }

    $columns = substr($columns, 0, -1);
    $values  = substr($values, 0, -1);

    $sql = 'INSERT INTO pokemon ('.$columns.') VALUES ('.$values.')';

    var_dump($sql);

    return mysqli_query($link, $sql);
}

//TODO update

//TODO delete