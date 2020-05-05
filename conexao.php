<?php
    //Sample Database Connection Syntax for PHP and MySQL.

    //Connect To Database

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="bdteste";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        echo "Connected successfully";
    }

?>