<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
</head>

<body>
    <div>
        <a href="admin_home.php">Home</a> |
        <a href="collectors.php">Collectors</a> |
        <a href="artworks.php">Artworks</a> |
        <a href="reservations.php">Reservations</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h2>Admin Dashboard</h2>
    <p>Welcome <?php echo $_SESSION['username']; ?></p>
    <p><img src="uploads/<?php echo $_SESSION['image']; ?>" width="120" style="border-radius:50%;"></p>

    <?php
    $query = "SELECT COUNT(*) AS total_cols FROM collectors";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    echo "<br><b>Total Number of Collectors (Users): </b>" . $row['total_cols'];
    ?>
</body>

</html>