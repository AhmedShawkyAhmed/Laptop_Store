<html>
    <head>
        <title>LogIn</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="logincontainer">
        <form method="POST" action="../api/insert.php">
                <label class="title">Login</label>
                <table>
                    <tr>
                        <td><label>Email</label></td>
                        <td><input class="textinput" type="email" name="email"></td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                        <td><input class="textinput" type="password" name="password"></td>
                    </tr>
                </table>
                <br>
                <button class="submitinput" type="submit" name="login">Login</button>
            </form>
            <hr width="400">
            <a href="userRegister.php" target="_self"><button class="submitinput" type="submit">Join as Customer</button></a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="storeRegister.php" target="_self"><button class="submitinput" type="submit">Join as Store</button></a>
        </div>
    </body>
</html>