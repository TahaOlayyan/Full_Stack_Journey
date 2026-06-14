<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM users WHERE role = 'Captain' ORDER BY id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Captains Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="admin_home.php">E-Sports Admin</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="admin_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="captains.php">Captains</a></li>
                    <li class="nav-item"><a class="nav-link" href="tournaments.php">Tournaments</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrations.php">Registrations</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="color: #66fcf1;">Captains Management</h2>
            <a href="capt_add.php" class="btn btn-neon">+ Add New Captain</a>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Captain Username</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="uploads/<?php echo $row['image']; ?>" width="50" class="rounded-circle border border-info" style="height: 50px; object-fit: cover;"></td>
                            <td class="fw-bold text-light"><?php echo $row['username']; ?></td>
                            <td><span class="text-muted"><?php echo $row['password']; ?></span></td>
                            <td>
                                <a href="capt_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-info">Edit</a>
                                <a href="capt_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this captain?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>