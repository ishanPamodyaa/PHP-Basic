<?php

    $host = "localhost";
    $username = "root";
    $password = "root";
    $db = "online";

    $con = mysqli_connect($host,$username,$password,$db);
    
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection successful!";

?>