<?php
include('config.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $row['username'];
    $_SESSION['role']     = $row['role'];
    $_SESSION['image']    = $row['image'];
    $_SESSION['user_id']  = $row['id'];

    if ($row['role'] == 'Admin') {
        header("Location: admin_home.php");
    } else {
        header("Location: captain_home.php");
    }
    exit();
} else {
    echo "Wrong username or password! <a href='login.php'>Try Again</a>";
}
