<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body class="body">
        <div class="usercontainer">
        <form method="POST" action="../api/insert.php" enctype="multipart/form-data">
                <label class="title">Register Your Store</label>
                <table>
                    <tr>
                        <td><label>Store Name</label></td>
                        <td><input class="textinput" type="text" name="store" required></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td><input class="textinput" type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td>
                        <td><input class="textinput" type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td><label>Phone</label></td>
                        <td><input class="textinput" type="text" name="phone" required></td>
                    </tr>
                    <tr>
                        <td><label>location</label></td>
                        <td><input class="textinput" type="text" name="location" required></td>
                    </tr>
                    <tr>
                        <td><label>State</label></td>
                        <td><input class="textinput" type="text" name="state" required></td>
                    </tr>
                    <tr>
                        <td><label>Area</label></td>
                        <td><input class="textinput" type="text" name="area" required></td>
                    </tr>
                    <tr>
                        <td><label>Street</label></td>
                        <td><input class="textinput" type="text" name="street" required></td>
                    </tr>
                    <tr>
                        <td><label>Building</label></td>
                        <td><input class="textinput" type="text" name="building" required></td>
                    </tr>
                    <tr>
                        <td><label>Store Picture</label></td>
                        <td><input class="fileinput" type="file" name="pic" required></td>
                    </tr>
                </table>
                <input class="submitinput" type="submit" value="Register" name="storeR">
            </form>
        </div>
    </body>
</html>