<?php
?>

<html>
    <head>
        <title>Add Product</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="pcontainer">
            <table>
                <tr>
                    <td><label>Item Name</label></td>
                    <td><input class="textinput" type="text" name="iname"></td>
                </tr>
                <tr>
                    <td><label>Company</label></td>
                    <td><input class="textinput" type="text" name="company"></td>
                </tr>
                <tr>
                    <td><label>Year Model</label></td>
                    <td><input class="textinput" type="text" name="model"></td>
                </tr>
                <tr>
                    <td><label>Price</label></td>
                    <td><input class="textinput" type="text" name="price"></td>
                </tr>
                <tr>
                    <td><label>Quantity</label></td>
                    <td><input class="textinput" type="text" name="quantity"></td>
                </tr>
                <tr>
                    <td><label>Discription</label></td>
                    <td><textarea class="areainput" name="discription"></textarea></td>
                </tr>
                <tr>
                    <td><label>Image 1</label></td>
                    <td><input class="textinput" type="file" name="i1"></td>
                </tr>
                <tr>
                    <td><label>Image 2</label></td>
                    <td><input class="textinput" type="file" name="i2"></td>
                </tr>
            </table>
            <br>
            <input class="submitinput" type="submit" value="Save" name="savechange">
        </div>
    </body>
</html>