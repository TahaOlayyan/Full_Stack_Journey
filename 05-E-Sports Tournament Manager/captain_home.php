<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Captain') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Captain Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="captain_home.php">E-Sports Arena</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="captain_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_tournaments.php">My Tournaments</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="card p-5 mx-auto" style="max-width: 600px;">
            <img src="uploads/<?php echo $_SESSION['image']; ?>" class="rounded-circle border border-info mx-auto mb-4" style="width: 150px; height: 150px; object-fit: cover; box-shadow: 0 0 20px rgba(102, 252, 241, 0.5);">
            <h1 style="color: #66fcf1; text-transform: uppercase;">Welcome to the Arena</h1>
            <h3 class="text-light mt-3">Captain <span style="color: #45a29e;"><?php echo $_SESSION['username']; ?></span></h3>
            <p class="text-muted mt-3">Gear up, manage your teams, and dominate the tournaments!</p>

            <div class="mt-4">
                <a href="my_tournaments.php" class="btn btn-neon me-2">View My Tournaments</a>
                <a href="my_profile.php" class="btn btn-outline-info">Edit Profile</a>
            </div>
        </div>
    </div>

</body>

</html>