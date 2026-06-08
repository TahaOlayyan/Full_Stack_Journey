<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM artworks ORDER BY art_id");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Artworks Management</title>
</head>

<body>
    <div>
        <a href="admin_home.php">Home</a> |
        <a href="collectors.php">Collectors</a> |
        <a href="artworks.php">Artworks</a> |
        <a href="reservations.php">Reservations</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h3>Artworks Gallery Management</h3>
    <p><a href="art_add.php">Add New Artwork</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Artwork Name</th>
            <th>Artist</th>
            <th>Description</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['art_id']; ?></td>
                <td><?php echo $row['art_name']; ?></td>
                <td><?php echo $row['artist_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><img src="uploads/<?php echo $row['art_image']; ?>" width="80"></td>
                <td>
                    <a href="art_edit.php?id=<?php echo $row['art_id']; ?>">Edit</a> |
                    <a href="art_delete.php?id=<?php echo $row['art_id']; ?>" onclick="return confirm('Delete this artwork?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>