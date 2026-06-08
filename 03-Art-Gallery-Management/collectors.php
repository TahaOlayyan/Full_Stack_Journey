<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$query = "SELECT col_id, col_name, phone, preference, budget, col_image, role 
          FROM collectors ORDER BY col_id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Collectors Management</title>
</head>

<body>
    <div>
        <a href="admin_home.php">Home</a> |
        <a href="collectors.php">Collectors</a> |
        <a href="artworks.php">Artworks</a> |
        <a href="reservations.php">Reservations</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h3>Collectors (Users) Management</h3>
    <p><a href="col_add.php">Add New Collector</a></p>

    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Preference</th>
            <th>Budget ($)</th>
            <th>Image</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['col_id']; ?></td>
                <td><?php echo $row['col_name']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['preference']; ?></td>
                <td><?php echo $row['budget']; ?></td>
                <td><img src="uploads/<?php echo $row['col_image']; ?>" width="50" style="border-radius:50%;"></td>
                <td><?php echo $row['role']; ?></td>
                <td>
                    <a href="col_edit.php?id=<?php echo $row['col_id']; ?>">Edit</a> |
                    <a href="col_delete.php?id=<?php echo $row['col_id']; ?>" onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>