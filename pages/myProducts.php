<?php
    require "../api/connection.php";
    session_start();

    $data = mysqli_query($connection,"select * from product where storeID = ".$_SESSION['id']."");
?>
<html>
    <head>
        <title>My Products</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="myproductcontainer">
            <br>
            <a href="addproduct.php" target="_self"><input class="submitinput" type="submit" value="Add Product"></a>
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
                        <td><?php echo $rows['price']; ?></td>
                        <td><?php echo $rows['processor']; ?></td>
                        <td><?php echo $rows['storage']; ?></td>
                        <td><?php echo $rows['ram']; ?></td>
                        <td><a href="../api/delete.php?deleteProduct=<?php echo $rows['id'] ?>"><input class="delProduct" type="submit" value="Delete" name="deleteProduct"></a></td>
                    </tr>
                    <?php };?>
                </tbody>
            </table>
        </div>
    </body>
</html>