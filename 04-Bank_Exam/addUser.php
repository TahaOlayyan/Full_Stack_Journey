<?php
include('config.php');
session_start();


if (!isset($_SESSION['username']) || $_SESSION['AccType'] != 'admin') {
    header("Location:login.php");
    exit();
}

if (isset($_POST['add_btn'])) {
    if ($_POST['pass'] != $_POST['confirm_pass']) {
        $error_not_matced = "Password Not Matched";
    } else {
        $name = $_POST['username'];
        $pass = $_POST['pass'];
        $country = $_POST['country'];
        $balance = $_POST['balance'];
        $AccType = $_POST['accType'];
        if ($country == 'jordan') {
            $currency = "JOD";
            $tax = $balance * 0.05;
        } else {
            $currency = "USD";
            $tax = $balance * 0.20;
        }
        $image = $_FILES['c_image']['name'];
        move_uploaded_file($_FILES['c_image']['tmp_name'], "Upload/" . $image);

        $sql_insert = "INSERT INTO `account`(`CName`,`password`, `Country`, `Balance`, `Currency`, `Tax`, `Photo`, `AccountType`) 
VALUES ('$name','$pass','$country','$balance','$currency','$tax','$image','$AccType')";
        $result_insert = mysqli_query($conn, $sql_insert);

        header("Location:index.php");
        exit();
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <center>
        <h2>Add User Form</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" name="username" id=""></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="pass" id=""></td>
                </tr>
                <tr>
                    <td>Confirm</td>
                    <td><input type="text" name="confirm_pass" id=""></td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <input type="radio" name="country" value="jordan" id="" checked>Jordan
                        <input type="radio" name="country" value="other" id="">Other
                    </td>
                </tr>
                <tr>
                    <td>Balance</td>
                    <td><input type="number" name="balance" id=""></td>
                </tr>
                <tr>
                    <td>Account Type</td>
                    <td><select name="accType" id="">
                            <option value="Save" selected>Save</option>
                            <option value="Daily">Daily</option>
                            <option value="Salary">Salary</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="file" name="c_image" id=""></td>
                </tr>
                <tr>

                    <td><input type="submit" value="Add" name="add_btn">
                        <a href="index.php">Back</a>
                    </td>

                </tr>
            </table>
        </form>
        <?php if (isset($error_not_matced)) {
            echo "<span style='color:red;'>$error_not_matced</span>";
        } ?>
    </center>
</body>

</html>