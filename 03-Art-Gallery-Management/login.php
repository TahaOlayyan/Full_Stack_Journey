<!DOCTYPE html>
<html>

<head>
    <title>Gallery Login</title>
</head>

<body>
    <center>
        <h2>Art Gallery Management - Login</h2>
        <form method="post" action="checklogin.php">
            <table border="1" cellpadding="6">
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>