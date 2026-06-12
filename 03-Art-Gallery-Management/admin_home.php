<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Admin') {
    header("Location: login.php");
    exit();
}

// جلب الإحصائيات
$query = "SELECT COUNT(*) AS total_cols FROM collectors";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Art Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar-custom {
            background-color: #2c3e50;
        }

        .stat-card {
            border-left: 5px solid #d35400;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .profile-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="admin_home.php">🎨 Art Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="admin_home.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="collectors.php">Collectors</a></li>
                    <li class="nav-item"><a class="nav-link" href="artworks.php">Artworks</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.php">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="card profile-card bg-white p-4 mb-5">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="uploads/<?php echo $_SESSION['image']; ?>" class="rounded-circle img-thumbnail shadow-sm" width="130" height="130" alt="Admin Profile" style="object-fit: cover;">
                </div>
                <div class="col-md-10 mt-3 mt-md-0">
                    <h2 class="fw-bold" style="color: #2c3e50;">Welcome Back, <?php echo $_SESSION['username']; ?>!</h2>
                    <p class="text-muted fs-5 mb-0">Here is the latest overview of your exclusive art gallery.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card stat-card bg-white p-3">
                    <div class="card-body">
                        <h6 class="text-uppercase text-muted fw-bold mb-2">Total Collectors</h6>
                        <h2 class="fw-black text-dark mb-0"><?php echo $row['total_cols']; ?> <span class="fs-6 text-muted fw-normal">Registered Users</span></h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>