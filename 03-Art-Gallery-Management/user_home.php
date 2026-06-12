<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Collector') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Collector Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-user {
            background-color: #0f6292;
        }

        /* لون مختلف للمستخدم */
        .profile-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-user shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="user_home.php">🖼️ Collector Portal</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active fw-bold" href="user_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_reservations.php">My Artworks</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="card profile-card bg-white p-5 text-center">
            <div class="mb-4">
                <img src="uploads/<?php echo $_SESSION['image']; ?>" class="rounded-circle shadow" width="150" height="150" style="object-fit: cover; border: 4px solid #0f6292;">
            </div>
            <h1 class="fw-bold" style="color: #0f6292;">Welcome to the Gallery, <?php echo $_SESSION['username']; ?>!</h1>
            <p class="text-muted fs-5 mt-3">Explore your private art collection, manage your reservations, and update your profile seamlessly.</p>

            <div class="mt-4">
                <a href="my_reservations.php" class="btn btn-lg text-white" style="background-color: #0f6292;"><i class="bi bi-images"></i> View My Collection</a>
                <a href="my_profile.php" class="btn btn-lg btn-outline-secondary ms-2"><i class="bi bi-gear"></i> Settings</a>
            </div>
        </div>
    </div>

</body>

</html>