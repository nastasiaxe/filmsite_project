<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf8">
  <title> Авторизация и регистрация </title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <form name="signup" method="POST" action="sign_in.php">
    <label>E-mail: </label>
    <input type="email" name="email" placeholder="Введите логин">
    <label>Пароль: </label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
      У вас еще нет аккаунта? <a href="sign_up_form.php">Зарегистрироваться</a>
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