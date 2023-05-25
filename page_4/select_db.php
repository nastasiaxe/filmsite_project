<?php
    require("../connect.php");
    // $u_id = $_GET['user_id'];

    $u_id = 8;
    $name = $connection->query("SELECT name FROM users WHERE user_id = $u_id");
    $user_name = $name->fetch_assoc();

?>