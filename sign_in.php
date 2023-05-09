<?php
// неверный логин или пароль
session_start();
require_once('connect.php');


$servername = 'localhost';
$username = 'root';
$passworddb = '';
$connection = mysqli_connect($servername, $username, $passworddb, 'filmsite');
if(isset($_POST['submit']))

$email = $_POST['email'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
$data = mysqli_fetch_assoc($check_user);


if($data['password'] === md5(md5($_POST['password']))) {

    header("Location: connect.php"); exit(); // на время, потом будет отправлять на главную страницу

} else {
    $_SESSION['message'] = 'Неверный логин или пароль';
    header('Location: index.php');
}