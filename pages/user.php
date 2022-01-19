<?php
    session_start();
?>
<html>
    <head>
        <title>My Account</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="logincontainer">
            <label class="title">My Account</label>
            <table>
                <tr>
                    <td class="td">
                    <a href="homeProduct.php" target="_self"><input class="submitinput" type="submit" value="Products"></a>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                    <a href="cart.php" target="_self"><input class="submitinput" type="submit" value="My Cart"></a>
                    </td>
                </tr>
                <tr>
                    <td class="td">
                    <a href="../api/delete.php?deleteAccount=<?php echo $_SESSION['id'] ?>"><input class="del" type="submit" value="Delete Account" name="deleteAccount"></a>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>