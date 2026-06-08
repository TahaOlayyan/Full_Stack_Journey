<?php
include('config.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM collectors WHERE col_name='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $row['col_name'];
    $_SESSION['role']     = $row['role'];
    $_SESSION['image']    = $row['col_image'];

    if ($row['role'] == 'Admin') {
        header("Location: admin_home.php");
    } else {
        header("Location: user_home.php");
    }
    exit();
} else {
    echo "Wrong username or password! <a href='login.php'>Try Again</a>";
}
