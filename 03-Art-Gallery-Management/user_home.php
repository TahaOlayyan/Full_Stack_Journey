<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Collector') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Collector Dashboard</title>
</head>

<body>
    <div>
        <a href="user_home.php">Home</a> |
        <a href="my_profile.php">My Profile</a> |
        <a href="my_reservations.php">My Artworks</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h2>Collector Dashboard</h2>
    <p>Welcome to the Gallery, <b><?php echo $_SESSION['username']; ?></b>!</p>
    <p>
        <img src="uploads/<?php echo $_SESSION['image']; ?>" width="120" style="border-radius:50%;">
    </p>
</body>

</html>