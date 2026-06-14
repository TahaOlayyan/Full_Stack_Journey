<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

// Search Logic
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $sql = "SELECT * FROM tournaments WHERE title LIKE '%$search%' OR game_name LIKE '%$search%' ORDER BY id";
} else {
    $sql = "SELECT * FROM tournaments ORDER BY id";
}
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Tournaments</title>
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
                    <li class="nav-item"><a class="nav-link" href="captains.php">Captains</a></li>
                    <li class="nav-item"><a class="nav-link active" href="tournaments.php">Tournaments</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrations.php">Registrations</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="color: #66fcf1;">Tournaments Management</h2>
            <a href="tourn_add.php" class="btn btn-neon">+ Add New Tournament</a>
        </div>

        <div class="card p-3 mb-4">
            <form method="GET" action="tournaments.php" class="row g-2 align-items-center">
                <div class="col-md-9">
                    <input type="text" name="search" class="form-control bg-dark text-light border-info" placeholder="Search by Title or Game..." value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                </div>
                <div class="col-md-3 text-end">
                    <button type="submit" class="btn btn-neon w-45">Search</button>
                    <a href="tournaments.php" class="btn btn-outline-secondary w-45">Clear</a>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Tournament Title</th>
                        <th>Game Name</th>
                        <th>Prize ($)</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><img src="uploads/<?php echo $row['t_image']; ?>" width="60" class="rounded border border-info"></td>
                            <td class="fw-bold"><?php echo $row['title']; ?></td>
                            <td><?php echo $row['game_name']; ?></td>
                            <td class="text-success fw-bold">$<?php echo number_format($row['prize']); ?></td>
                            <td>
                                <?php
                                $badgeClass = $row['status'] == 'Finished' ? 'bg-danger' : ($row['status'] == 'Ongoing' ? 'bg-success' : 'bg-warning text-dark');
                                echo "<span class='badge $badgeClass'>" . $row['status'] . "</span>";
                                ?>
                            </td>
                            <td>
                                <a href="tourn_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-info">Edit</a>
                                <a href="tourn_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this tournament?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>