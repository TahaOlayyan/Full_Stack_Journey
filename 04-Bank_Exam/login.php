<?php
include('config.php');
session_start();

if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql_select = "SELECT * FROM ACCOUNT WHERE CName = '$username' AND password = '$pass'";
    $result_select = mysqli_query($conn, $sql_select);

    if (mysqli_num_rows($result_select) == 1) {
        $row = mysqli_fetch_assoc($result_select);

        if ($row['AccountType'] != 'admin') {
            $error = "invalid login account information";
        } else {
            $_SESSION['username'] = $row['CName'];
            $_SESSION['AccType'] = $row['AccountType'];
            $_SESSION['Image'] = $row['Photo'];

            header("Location: index.php");
            exit();
        }
    } else {
        $error = "invalid login account information";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <center>
        <form action="" method="post">
            <h1>Login</h1>
            <table>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Login" name="login_btn"></td>
                </tr>
            </table>
            <br>
            <?php if (isset($error)) {
                echo "<span style='color:red;'>$error</span>";
            } ?>
        </form>
    </center>
</body>

</html>