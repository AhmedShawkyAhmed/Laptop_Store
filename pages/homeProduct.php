<?php
    require "../api/connection.php";
    session_start();

    $data = mysqli_query($connection,"select * from product");
?>
<html>
    <head>
        <title>Home Products</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="myproductcontainer">
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Item Name</th>
                        <th>Company</th>
                        <th>Year Model</th>
                        <th>Color</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Processor</th>
                        <th>Storage</th>
                        <th>RAM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($rows = mysqli_fetch_array($data)){?>
                    <tr>
                        <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($rows['fImage']).'"width="100">'?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['company']; ?></td>
                        <td><?php echo $rows['yearModel']; ?></td>
                        <td><?php echo $rows['color']; ?></td>
                        <td><?php echo $rows['quantity']; ?></td>
                        <td><?php echo $rows['price']; ?> EGP</td>
                        <td><?php echo $rows['processor']; ?></td>
                        <td><?php echo $rows['storage']; ?></td>
                        <td><?php echo $rows['ram']; ?></td>
                        <td><a href="../api/insert.php?storeID=<?php echo $rows['storeID']?>
                            &&userId=<?php echo $_SESSION['id']?>
                            &&itemid=<?php echo $rows['id']?>
                            &&itemN=<?php echo $rows['name']?>
                            &&price=<?php echo $rows['price']?>">
                            <input class="addcart" type="submit" value="Add To Cart" name="addCart"></a></td>
                    </tr>
                    <?php };?>
                </tbody>
            </table>
        </div>
    </body>
</html>