<?php

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli !';
} else {
    echo 'We have connection!';
}
    $connection = mysqli_connect('localhost', 'root', '', 'test_data_base');

    if ($connection) {
        echo "Success";
    } else {
        die((mysqli_error($connection)));
    }