<?php
    $host = "localhost";
    $user = "lsrljm8011";
    $pass = "tpfls8011!";
    $db = "lsrljm8011";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf-8");

    if(mysqli_connect_errno() ){
        echo "Database Connect False";
    } else {
        // echo "Database Connect True";
    }
?>