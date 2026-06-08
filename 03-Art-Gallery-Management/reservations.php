<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$sql = "SELECT r.res_id, c.col_name, a.art_name, r.res_type, r.res_year 
        FROM reservations r
        JOIN collectors c ON r.col_id = c.col_id
        JOIN artworks a ON r.art_id = a.art_id
        ORDER BY r.res_id";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reservations Management</title>
</head>

<body>
    <div>
        <a href="admin_home.php">Home</a> |
        <a href="collectors.php">Collectors</a> |
        <a href="artworks.php">Artworks</a> |
        <a href="reservations.php">Reservations</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h3>Reservations & Sales</h3>
    <p><a href="res_add.php">Add New Reservation</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>Res ID</th>
            <th>Collector Name</th>
            <th>Artwork Name</th>
            <th>Reservation Type</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['res_id']; ?></td>
                <td><?php echo $row['col_name']; ?></td>
                <td><?php echo $row['art_name']; ?></td>
                <td><?php echo $row['res_type']; ?></td>
                <td><?php echo $row['res_year']; ?></td>
                <td>
                    <a href="res_edit.php?id=<?php echo $row['res_id']; ?>">Edit</a> |
                    <a href="res_delete.php?id=<?php echo $row['res_id']; ?>" onclick="return confirm('Delete this reservation?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>