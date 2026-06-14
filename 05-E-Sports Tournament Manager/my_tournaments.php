<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Captain') {
    header("Location: login.php");
    exit();
}

$capt_id = $_SESSION['user_id'];

$sql = "SELECT t.title, t.game_name, t.status, r.team_name 
        FROM registrations r
        JOIN tournaments t 
        ON r.tourn_id = t.id
        WHERE r.capt_id = '$capt_id'";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Tournaments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="captain_home.php">E-Sports Arena</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="captain_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link active" href="my_tournaments.php">My Tournaments</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2 style="color: #66fcf1;" class="mb-4">My Registered Tournaments</h2>

        <div class="table-responsive">
            <table class="table table-dark table-hover table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th>Tournament Title</th>
                        <th>Game Name</th>
                        <th>My Team Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="fw-bold text-light"><?php echo $row['title']; ?></td>
                            <td><?php echo $row['game_name']; ?></td>
                            <td style="color: #45a29e; font-weight: bold;"><?php echo $row['team_name']; ?></td>
                            <td>
                                <?php
                                $badgeClass = $row['status'] == 'Finished' ? 'bg-danger' : ($row['status'] == 'Ongoing' ? 'bg-success' : 'bg-warning text-dark');
                                echo "<span class='badge $badgeClass'>" . $row['status'] . "</span>";
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>