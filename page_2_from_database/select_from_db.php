<?php
    require("../connect.php");
    // $f_id = $_GET['film_id'];
    $f_id = 5;
    $title = $connection->query("SELECT title FROM films WHERE film_id = $f_id");
    $film_title = $title->fetch_assoc();

    $genre = $connection->query("SELECT genre FROM films WHERE film_id = $f_id");
    $film_genre = $genre->fetch_assoc();

    $plot = $connection->query("SELECT description FROM films WHERE film_id = $f_id");
    $film_plot = $plot->fetch_assoc();

?>