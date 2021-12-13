<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database_name = "cracker";

    // build connection
    $connection = mysqli_connect($host, $username, $password, $database_name); 

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>