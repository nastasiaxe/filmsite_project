<?php
session_start();
require_once('connect.php');


$email = $_POST['email'];
$password = $_POST['password'];


if(empty($email) || empty($password)){

    $_SESSION['message'] = 'Заполните все поля';
    header('Location: index.php'); 

} else {

    $check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $data = mysqli_fetch_assoc($check_user);

    if($data['password'] === $_POST['password']) {

        header("Location: connect.php"); exit(); // на время, потом будет отправлять на главную страницу

    } else {

        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: index.php');

    }
}
?>