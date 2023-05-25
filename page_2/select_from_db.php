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

    $rating = $connection->query("SELECT rating FROM films WHERE film_id = $f_id");
    $film_rating = $rating->fetch_assoc();

    $year = $connection->query("SELECT year FROM films WHERE film_id = $f_id");
    $film_year = $year->fetch_assoc();

    $country = $connection->query("SELECT country FROM films WHERE film_id = $f_id");
    $film_country = $country->fetch_assoc();

    $actors = $connection->query("SELECT actors FROM films WHERE film_id = $f_id");
    $film_actors = $actors->fetch_assoc();

?>