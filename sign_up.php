<?php
session_start();
require_once('connect.php');

$name = $_POST['name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$email = $_POST['email'];

if ($password != $confirm_password) {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: sign_up_form.php');
} else {
    $path = 'uploads/' . time() . $_FILES['pic']['name'];
    if (!move_uploaded_file($_FILES['pic']['tmp_name'], $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке изображения';
        header('Location: sign_up_form.php');
    }
   
    mysqli_query($connection, "INSERT INTO `users` (`user_id`, `name`, `password`, `email`, `user_pic`) 
    VALUES (NULL, '$name', '$password', '$email', '$path')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: index.php');

}

?>