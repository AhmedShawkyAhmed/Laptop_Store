<html>
    <head>
        <title>Add Product</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="productcontainer">
            <form method="POST" action="../api/insert.php" enctype="multipart/form-data">
                <label class="title">Add New Product</label>
                <table>
                    <tr>
                        <td><label>Product Name</label></td>
                        <td><input class="textinput" type="text" name="pname" required></td>
                        <td><label>Company</label></td>
                        <td><input class="textinput" type="text" name="company" required></td>
                    </tr>
                    <tr>
                        <td><label>Model Year</label></td>
                        <td><input class="textinput" type="text" name="model" required></td>
                        <td><label>Color</label></td>
                        <td><input class="textinput" type="text" name="color" required></td>
                    </tr>
                    <tr>
                        <td><label>Quantity</label></td>
                        <td><input class="textinput" type="text" name="quantity" required></td>
                        <td><label>Price</label></td>
                        <td><input class="textinput" type="text" name="price"></td>
                    </tr>
                    <tr>
                        <td><label>Proccessor</label></td>
                        <td><input class="textinput" type="text" name="pro" required></td>
                        <td><label>Storage</label></td>
                        <td><input class="textinput" type="text" name="sto" required></td>
                    </tr>
                    <tr>
                        <td><label>RAM</label></td>
                        <td><input class="textinput" type="text" name="ram" required></td>
                        <td><label>Picture 1</label></td>
                        <td><input class="fileinput" type="file" name="pic1" required></td>
                    </tr>
                    <tr>
                        <td><label>Discription</label></td>
                        <td><textarea class="areainput" type="text" name="dic" required></textarea></td>
                        <td></td>
                        <td><input class="submitinput" type="submit" value="Add Product" name="add"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>