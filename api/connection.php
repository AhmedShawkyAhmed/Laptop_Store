<?php

    $host = "localhost";
    $dbname = "laptop";
    $user = "root";
    $password = "";

    $connection = mysqli_connect($host,$user,$password);
    $db=mysqli_select_db($connection,$dbname);

    if(!$connection){
        echo 'Error';
    }

    $conn = new PDO ("mysql:host=$host;dbname=$dbname",$user,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>