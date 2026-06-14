<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$sql = "SELECT r.id, u.username AS captain_name, t.title AS tournament_name, r.team_name, t.status
        FROM registrations r
        JOIN users u ON r.capt_id = u.id
        JOIN tournaments t ON r.tourn_id = t.id
        ORDER BY r.id";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registrations Management</title>
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
                    <li class="nav-item"><a class="nav-link" href="tournaments.php">Tournaments</a></li>
                    <li class="nav-item"><a class="nav-link active" href="registrations.php">Registrations</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 style="color: #66fcf1;">Teams Registrations</h2>
            <a href="reg_add.php" class="btn btn-neon">+ Register a Team</a>
        </div>

        <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>Reg ID</th>
                        <th>Captain Name</th>
                        <th>Tournament Title</th>
                        <th>Team Name</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td class="fw-bold" style="color: #45a29e;"><?php echo $row['captain_name']; ?></td>
                            <td><?php echo $row['tournament_name']; ?></td>
                            <td class="fw-bold text-light"><?php echo $row['team_name']; ?></td>
                            <td>
                                <?php
                                $badgeClass = $row['status'] == 'Finished' ? 'bg-danger' : ($row['status'] == 'Ongoing' ? 'bg-success' : 'bg-warning text-dark');
                                echo "<span class='badge $badgeClass'>" . $row['status'] . "</span>";
                                ?>
                            </td>
                            <td>
                                <a href="reg_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this registration?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>