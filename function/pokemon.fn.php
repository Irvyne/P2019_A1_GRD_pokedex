<?php

function getAllPokemons($link) {
    $sql = 'SELECT * FROM pokemon';
    $query = mysqli_query($link, $sql);

    return mysqli_fetch_all($query);
}