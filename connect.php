<?php

$servername = 'localhost';
$username = 'root';
$passworddb = '';

// if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//     echo 'We don\'t have mysqli !';
// } else {
//     echo 'We have connection!';
// }
    $connection = mysqli_connect($servername, $username, $passworddb, 'filmsite');

    if (!$connection) {
        die((mysqli_error($connection)));
    }