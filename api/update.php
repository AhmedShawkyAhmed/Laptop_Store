<?php
    require "connection.php";
    session_start();

    if(isset($_POST["saveUser"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $phone = $_POST["phone"];
        $loc = $_POST["location"];
        $state = $_POST["state"];
        $area = $_POST["area"];
        $street = $_POST["street"];
        $building = $_POST["building"];
        $sql = "INSERT INTO users (fname, lname, email, pass, phone, location, state, area, street, building)
         VALUES ('$fname','$lname','$email','$pass','$phone','$loc','$state','$area','$street','$building')";
        $result = mysqli_query($connection,$sql);
        if($result){
            header("location: ../pages/homeStores.php");
        }
    }
?>