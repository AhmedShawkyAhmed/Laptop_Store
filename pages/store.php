<?php
    session_start();
?>
<html>
    <head>
        <title>My Store Panel</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="logincontainer">
            <label class="title">My Store Panel</label>
            <table>
                <tr>
                    <td class="td">
                    <a href="myProducts.php" target="_self"><input class="submitinput" type="submit" value="My Products"></a>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                    <a href="purchases.php" target="_self"><input class="submitinput" type="submit" value="Purchases"></a>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                    <a href="../api/delete.php?deleteStore=<?php echo $_SESSION['id'] ?>"><input class="del" type="submit" value="Delete Account" name="deleteStore"></a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>