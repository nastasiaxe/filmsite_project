<?php
session_start();
require("select_db.php");
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
<nav class="navigation">
    <ul class="main-nav">
        <li class="main-nav-item"><a href="../page_1/page_1.php"><p class="logo nav-text">MOVIEMINDS <img src="image\pin.png" width="32" height="16"></p></a></li>
        <li class="main-nav-item"><a href="../page_1/page_1.php"><p class="nav-text">Главная</p></a></li>
        <li class="main-nav-item"><a href="../page_5/page_5.php"><p class="nav-text">Подборка</p></a></li>
        <li class="main-nav-item"><a href="#"><p class="nav-text">Фильмы</p></a></li>
        <li class="main-nav-item"><a href="../page_3/page_3.php"><p class="nav-text">Мой профиль</p></a></li>
    </ul>
</nav>
<main class="account">
    <h1>Личный кабинет</h1>
    <div class="actions">
        <div class="action"><a href= "#">Закладки</a></div>
        <div class="action"><a href= "#">Отзывы</a></div>
        <div class="action"><a href= "#">Друзья</a></div>
        <div class="action"><a href= "#">Настройки профиля</a></div>
    </div>
    <div class="user-information">
        <div class="image-setting">
            <p><?php echo $user_name['name'] ?></p>
            <img src="image/user.png" width="145" height="190">
        </div>
        <div class="user-actions">
            <a href="#">
                <div class="button">
                    <p class="letter">Отправить сообщение</p>
                    <img src="image/letter.png" width="42" height="42">
                </div>
            </a>
            <h2>Недавние действия</h2>
            <div class="usact">
                    <div class="usact-1">
                        <p><?php echo $user_name['name'] ?> поставил фильму “Гарри Поттер и Узник Азкабана” оценку 10</p> <p> 05.04.2023 </p>
                    </div>
                    <div class="usact-2">
                        <p><?php echo $user_name['name'] ?> поставил фильму “Шрек(2001)” оценку 10</p> <p> 02.02.2023 </p> 
                    </div>
                </div>
        </div>
    </div>
    <p> <button type="submit">Заблокировать</button> </p>
    <p> <button type="submit">Пожаловаться</button> </p>

</main>