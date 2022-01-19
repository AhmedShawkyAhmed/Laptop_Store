<?php
    require "../api/connection.php";
    session_start();

    $data = mysqli_query($connection,"select * from vill where userId = ".$_SESSION['id']."");
?>
<html>
    <head>
        <title>Bill</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="usercontainer">
            <label class="title">My Bill</label>
            <table>
                <thead>
                    <tr>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rows = mysqli_fetch_array($data)){?>
                    <tr>
                        <td><?php echo $rows['itemName']; ?></td>
                        <td><?php echo $rows['price']; ?> EGP</td>
                        <td><a href="../api/delete.php?delcart=<?php echo $rows['id']?>"><input class="delProduct" type="submit" value="Delete" name="delcart"></a></td>
                        <td><a href="../api/insert.php?userID=<?php echo $_SESSION['id']?>&&sotre=<?php echo $rows['store']?>
                        &&item=<?php echo $rows['itemId']?>&&price=<?php echo $rows['price']?>">
                        <input class="submitinput" type="submit" value="Check out" name="addbill"></a></td>
                    </tr>
                    <?php };?>
                </tbody>
            </table>
        </div>
    </body>
</html>