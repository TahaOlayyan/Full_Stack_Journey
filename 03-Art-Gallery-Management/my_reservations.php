<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Collector') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

// بنجيب الـ ID تبع الزائر الحالي
$res = mysqli_query($conn, "SELECT col_id FROM collectors WHERE col_name = '$username'");
$collector = mysqli_fetch_assoc($res);
$col_id = $collector['col_id'];

// بنجيب الحجوزات الخاصة فيه هو بس (باستخدام WHERE r.col_id = $col_id)
$sql = "SELECT a.art_name, a.artist_name, r.res_type, r.res_year
        FROM reservations r
        JOIN artworks a ON r.art_id = a.art_id
        WHERE r.col_id = $col_id
        ORDER BY r.res_year";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Artworks</title>
</head>

<body>
    <div>
        <a href="user_home.php">Home</a> |
        <a href="my_profile.php">My Profile</a> |
        <a href="my_reservations.php">My Artworks</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h2>My Reserved Artworks</h2>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Artwork Name</th>
            <th>Artist</th>
            <th>Reservation Type</th>
            <th>Year</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['art_name']; ?></td>
                <td><?php echo $row['artist_name']; ?></td>
                <td><?php echo $row['res_type']; ?></td>
                <td><?php echo $row['res_year']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>