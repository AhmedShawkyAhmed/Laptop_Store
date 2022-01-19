<?php
    require "connection.php";
    session_start();

    if(isset($_GET["deleteAccount"])){
        $sql = "select * from users where id = ".$_SESSION['id']."";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result) == 1){
            $sql = "delete from users where id = ".$_SESSION['id']."";
            $result = mysqli_query($connection,$sql);
            header("location: ../pages/login.php");
        }
    }
    if(isset($_GET["deleteStore"])){
        $sql = "select * from sellers where id = ".$_SESSION['id']."";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result) == 1){
            $sql = "delete from sellers where id = ".$_SESSION['id']."";
            $result = mysqli_query($connection,$sql);
            header("location: ../pages/login.php");
        }
    }
    if(isset($_GET["delcart"])){
        $id = $_GET['delcart'];
        $sql = "delete from cart where id = $id";
        $result = mysqli_query($connection,$sql);
        header("location: ../pages/cart.php");
    }
    if(isset($_GET["deleteProduct"])){
        $id = $_GET['deleteProduct'];
        $sql = "delete from product where id = $id";
        $result = mysqli_query($connection,$sql);
        header("location: ../pages/myProducts.php");
    }
?>