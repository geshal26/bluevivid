<?php
    define('DB_SERVER','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_DATABASE','hotel');
    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die(mysqli_connect_error());
    $db_select = mysqli_select_db($conn,DB_DATABASE) or die(mysqli_connect_error());
?>