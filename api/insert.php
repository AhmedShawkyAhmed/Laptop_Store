<?php
    require "connection.php";

    session_start();

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $sql = "select * from users where email = '".$email."' and pass = '".$pass."' limit 1";
        $result = mysqli_query($connection,$sql);
        if(mysqli_num_rows($result) == 1){
            while($row = $result->fetch_assoc()){
                $_SESSION['id'] = $row['id'];
            }
            header("location: ../pages/user.php");
        }else{
            $sql = "select * from sellers where email = '".$email."' and pass = '".$pass."' limit 1";
            $result = mysqli_query($connection,$sql);
            if(mysqli_num_rows($result) == 1){
                while($row = $result->fetch_assoc()){
                    $_SESSION['id'] = $row['id'];
                }
                header("location: ../pages/store.php");
            }
        }
    }
    if(isset($_POST["register"])){
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
        $sql = "insert into users (fname, lname, email, pass, phone, location, state, area, street, building)
         values ('$fname','$lname','$email','$pass','$phone','$loc','$state','$area','$street','$building')";
        $result = mysqli_query($connection,$sql);
        if($result){
            header("location: ../pages/homeStores.php");
        }
    }
    if(isset($_POST["storeR"])){
        echo 'StoreR';
        $store = $_POST["store"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $phone = $_POST["phone"];
        $loc = $_POST["location"];
        $state = $_POST["state"];
        $area = $_POST["area"];
        $street = $_POST["street"];
        $building = $_POST["building"];
        $pic = addslashes(file_get_contents($_FILES["pic"]['tmp_name']));
        $sql = ("insert into sellers(storeName, pic, email, pass, phone, location, state, area, street, building)
        values('$store','$pic','$email','$pass','$phone','$loc','$state','$area','$street','$building')");
        $result = mysqli_query($connection,$sql);
        if($result){
            header("location: ../pages/admin.php");
        }
    }
    if(isset($_POST["add"])){
        $pname = $_POST["pname"];
        $company = $_POST["company"];
        $model = $_POST["model"];
        $color = $_POST["color"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $pro = $_POST["pro"];
        $sto = $_POST["sto"];
        $dic = $_POST["dic"];
        $ram = $_POST["ram"];
        $pic1 = addslashes(file_get_contents($_FILES["pic1"]['tmp_name']));
        $sql = "insert into product (storeID,name, company, yearModel, discription, color, quantity, price, processor, storage, ram, fImage)
         VALUES (".$_SESSION['id'].",'$pname','$company','$model','$dic','$color','$quantity','$price','$pro','$sto','$ram','$pic1')";
        $result = mysqli_query($connection,$sql);
        if($result){
            header("location: ../pages/admin.php");
        }else{
            echo mysqli_error($connection);
        }
    }
    if(isset($_GET['storeID']) && isset($_GET['userId'])){
        $storeID = $_GET["storeID"];
        $uname = $_GET["userId"];
        $itemid = $_GET["itemid"];
        $itemN = $_GET["itemN"];
        $price = $_GET["price"];
        $sql = "insert into cart(store,userId,itemId,itemName,price)
        values('$storeID','$uname','$itemid','$itemN',$price)";
        $result = mysqli_query($connection,$sql);
        if($result){
            header("location: ../pages/homeProduct.php");
        }
    }
    if(isset($_GET['userID'])){
        $userID = $_GET["userID"];
        $sotre = $_GET["sotre"];
        $item = $_GET["item"];
        $itemN = $_GET["itemN"];
        $price = $_GET["price"];
        $del = $_GET["del"];
        $sql = "select * from users where id = ".$userID."";
        $date = date("d - m - Y", strtotime("+2 day"));
        $result = mysqli_query($connection,$sql);
        if($result){
            while($row = $result->fetch_assoc()){
                $full = ($row['fname'].' '.$row['lname']);
                $address = $row['state'].','.$row['area'].','.$row['street'].','.$row['building'];
                $sql = "insert into bill(userId,itemId,itemName,fullName,price,shipDate,address)
                values(".$userID.",".$item.",'".$itemN."','".$full."',".$price.",'".$date."','".$address."')";
                $result = mysqli_query($connection,$sql);
                if($result){
                    $del = "delete from cart where id = ".$del."";
                    $result = mysqli_query($connection,$del);
                    if($result){
                        header("location: ../pages/bill.php");
                    }
                }
            }
        }
    }
?>