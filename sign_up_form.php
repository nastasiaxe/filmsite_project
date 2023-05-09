<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf8">
  <title> Регистрация </title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <form method="POST" action="sign_up.php" enctype="multipart/form-data">
    <label>Имя: </label>
    <input type="text" name="name" placeholder="Введите свое имя">
    <label>Пароль: </label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтвердите пароль: </label>
    <input type="password" name="confirm_password" placeholder="Введите пароль еще раз">
    <label>Почта: </label>
    <input type="email" name="email" placeholder="Введите свой e-mail">
    <label>Аватар профиля: </label>
    <input type="file" name="pic" >
    <button type="submit">Зарегистрироваться</button>
    <p>
      У вас уже есть аккаунт? <a href="index.php">Войти</a>
    </p> 
    <?php
      if (isset($_SESSION['message'])) {
        echo '<p>' . $_SESSION['message'] . '</p';
      }
       unset($_SESSION['message']);
      ?>
  </form>
</body>
</html>