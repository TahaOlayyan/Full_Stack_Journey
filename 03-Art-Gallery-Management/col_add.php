<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $name       = $_POST['col_name'];
    $phone      = $_POST['phone'];
    $preference = $_POST['preference'];
    $budget     = $_POST['budget'];
    $password   = $_POST['password'];

    $image = $_FILES['col_image']['name'];
    move_uploaded_file($_FILES['col_image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO collectors (col_name, phone, preference, budget, password, col_image, role)
            VALUES ('$name', '$phone', '$preference', '$budget', '$password', '$image', 'Collector')";

    mysqli_query($conn, $sql);
    header("Location: collectors.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Collector</title>
</head>

<body>
    <h3>Add New Collector</h3>
    <form method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="6">
            <tr>
                <td>Name</td>
                <td><input type="text" name="col_name" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" required></td>
            </tr>
            <tr>
                <td>Preference</td>
                <td>
                    <select name="preference">
                        <option>Classic</option>
                        <option>Modern</option>
                        <option>Surrealism</option>
                        <option>All</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Budget ($)</td>
                <td><input type="number" name="budget" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" required></td>
            </tr>
            <tr>
                <td>Profile Image</td>
                <td><input type="file" name="col_image" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="add" value="Add Collector"></td>
            </tr>
        </table>
    </form>
    <br><a href="collectors.php">Back</a>
</body>

</html>