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
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
  <nav class="navigation">
    <ul class="main-nav">
        <li class="main-nav-item"><a href="../page_1/page_1.php"><p class="logo nav-text">MOVIEMINDS <img src="../page_1/images/pin.png" width="32" height="16"></p></a></li>
        <li class="main-nav-item"><a href="../page_1/page_1.php"><p class="nav-text">Главная</p></a></li>
        <li class="main-nav-item"><a href="page_5.php"><p class="nav-text">Подборка</p></a></li>
        <li class="main-nav-item"><a href="#"><p class="nav-text">Фильмы</p></a></li>
        <li class="navigation-item"><a href="../page_6/page_6.php"><p class="nav-text">Регистрация/вход</p></a></li>
    </ul>
</nav>
</header>
<main>
<p>Введите фрагмент названия:</p>
<input type="text" name="title">
<br>
<p>Выберите жанр:</p>
<select name="genre">
  <optgroup label="Жанры">
    <option value="anime">Аниме</option>
    <option value="arthouse">Арт-хаус</option>
    <option value="biography">Биография</option>
    <option value="action">Боевик</option>
    <option value="western">Вестерн</option>
    <option value="detective">Детектив</option>
    <option value="kids">Детский</option>
    <option value="drama">Драма</option>
    <option value="history">История</option>
    <option value="comedy">Комедия</option>
    <option value="crime">Криминал</option>
    <option value="melodrama">Мелодрама</option>
    <option value="mystery">Мистика</option>
    <option value="cartoon">Мультфильм</option>
    <option value="musical">Мюзикл</option>
    <option value="noir">Нуар</option>
    <option value="adventure">Приключения</option>
    <option value="romance">Романтика</option>
    <option value="horror">Ужасы</option>
    <option value="fantasy">Фантастика</option>
    <option value="fantasy">Фэнтези</option>
  </optgroup>
</select>
<br>
<label for="year-slider">Укажите год:</label>
<span id="selected-year"></span>
<input type="range" min="1930" max="2023" value="2000" step="1" id="year-slider">
<br>
<p>Выберите страну:</p>
<select name="country">
  <optgroup label="Страны">
    <option value="usa">США</option>
    <option value="uk">Великобритания</option>
    <option value="france">Франция</option>
    <option value="russia">Россия</option>
    <option value="china">Китай</option>
    <option value="japan">Япония</option>
    <option value="india">Индия</option>
    <option value="spain">Испания</option>
    <!-- Добавьте другие страны -->
  </optgroup>
</select>
</section>
<button type="submit">Найти</button>
</main>
<footer>
<p>Сервис просмотра и комментирования фильмов &copy; 2021</p>
</footer>
</body>
<script src="index.js"></script>
</html>
