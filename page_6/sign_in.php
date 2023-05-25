<?php
session_start();
require_once('../connect.php');


$email = $_POST['email_us'];
$password = $_POST['password_us'];


if(empty($email) || empty($password)){

    $_SESSION['message'] = 'Заполните все поля';
    header('Location: page_6.php'); 

} else {

    $check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    $data = mysqli_fetch_assoc($check_user);

    if($data['password'] === $_POST['password_us']) {

        header("Location: ../page_1/page_1.html"); exit(); 
    } else {

        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: page_6.php');

    }
}
?>
