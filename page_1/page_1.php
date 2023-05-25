<?php
session_start();
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
    <link href="https://fonts.googleapis.com/css2?family=Oregano:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>
<body>
<header>
<nav class="main-navigation">
<ul class="navigation">
    <li class="navigation-item"><a href="page_1.php">Главная</a></li>
    <li class="navigation-item"><a href="../page_5/page_5.php">Подборка</a></li>
    <li class="navigation-item"><a href="#">Фильмы</a></li>
    <li class="navigation-item"><a href="../page_6/page_6.php">Регистрация/вход</a></li>
</ul>
</nav>
</header>
<section class="logo">
    <div class="main-box">
        <h1>MOVIEMINDS</h1><img src="images/pin.png" width="83" height="58" alt="Значок фильма">
        </div>
</section>
<section class="main">
    <div class="main-images">
        <img class="computers" src="images/computers.png" width="919.24" height="724" alt="Компьютеры">
    </div> 

    <div class="boxes">
        <div class="box-1">
            
            <a href="#"><p>Актуально сегодня</p></a>
        </div>
        <div class="box-2">
            <a href="../page_2/page_2.php"><p>Что посмотреть?</p></a>
        </div>
    </div>
</section>
<footer>
</footer>
</body>
</html>
