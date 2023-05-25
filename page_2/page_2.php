<?php
    require("select_from_db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Фильмы - сервис просмотра и комментирования</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>
<nav class="navigation">
    <ul class="main-nav">
        <li class="main-nav-item"><a class="nav-item" href="../page_1/page_1.php"><p class="logo nav-text">MOVIEMINDS <img src="images\pin.png" width="32" height="16"></p></a></li>
        <li class="main-nav-item"><a class="nav-item" href="../page_1/page_1.php"><p class="nav-text">Главная</p></a></li>
        <li class="main-nav-item"><a class="nav-item" href="../page_5/page_5.php"><p class="nav-text">Подборка</p></a></li>
        <li class="main-nav-item"><a class="nav-item" href="#"><p class="nav-text">Фильмы</p></a></li>
        <li class="main-nav-item"><a class="nav-item" href="../page_6/page_6.php"><p class="nav-text">Регистрация/Вход</p></a></li>
    </ul>
</nav>
<main>
<section class="main">
    <div class="photo-preview">
        <div class="image-container"><img src="images\film.png" width="250" height="350"></div>
        <p><?php echo $film_title['title'] ?></p>
    </div>
    <div class="discription">
        <div class="name">
            <div class="rate"><p>Рейтинг</p><p><?php echo $film_rating['rating'] ?></p></div>
            <div><h1><?php  ?></h1></div>
        </div>
        <p class="italic"></p>
        <p><span>Жанр:</span> <?php echo $film_genre['genre'] ?></p>
        <p><span>Страна:</span> <?php echo $film_country['country'] ?></p>
        <p><span>Год:</span> <?php echo $film_year['year'] ?></p>
        <p><span>В главных ролях:</span> <?php echo $film_actors['actors'] ?></p>
        <p><span>Сюжет:</span> <?php echo $film_plot['description'] ?></p>
        <button type="submit">Оставить отзыв</button>
    </div>
</section>
<section class="users-reaction">
    <ul class="reactions">
        <li class="reaction"><a href="#"><div class="reaction-box"><p>Мой любимый фильм!</p></div></a></li>
        <li class="reaction"><a href="#"><div class="reaction-box"><p>Каждый день пересматриваю 10/10</p></div></a></li>
        <li class="reaction"><a href="#"><div class="reaction-box"><p>Фродо раздражает, но фильм крутой!!</p></div></a></li>
    </ul>
</main>
</section>
<section class="buttons">
</section>
</html>
