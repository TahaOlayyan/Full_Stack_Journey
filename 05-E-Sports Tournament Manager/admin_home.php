<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Admin') {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
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
                    <li class="nav-item"><a class="nav-link" href="registrations.php">Registrations</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mb-5 align-items-center">
            <div class="col-md-2 text-center">
                <img src="uploads/<?php echo $_SESSION['image']; ?>" class="img-fluid border border-info" style="border-radius: 50%; max-width: 120px; box-shadow: 0 0 15px #66fcf1;">
            </div>
            <div class="col-md-10">
                <h2 style="color: #66fcf1;">Welcome, Commander <?php echo $_SESSION['username']; ?>!</h2>
                <p class="text-muted">Manage your tournaments and captains from this dashboard.</p>
            </div>
        </div>

        <div class="row">
            <?php
            // الإحصائية الأولى
            $query = "SELECT COUNT(*) AS total_captains FROM users WHERE role='Captain'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            // الإحصائية الثانية
            $prize_query = "SELECT SUM(prize) AS total_prize FROM tournaments";
            $prize_result = mysqli_query($conn, $prize_query);
            $prize_row = mysqli_fetch_assoc($prize_result);
            $total = $prize_row['total_prize'] ? $prize_row['total_prize'] : 0;
            ?>

            <div class="col-md-6 mb-4">
                <div class="card text-center p-4">
                    <h4 class="card-title" style="color: #45a29e;">Total Captains</h4>
                    <h1 class="display-4" style="color: #66fcf1;"><?php echo $row['total_captains']; ?></h1>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card text-center p-4">
                    <h4 class="card-title" style="color: #45a29e;">Total Prize Pool</h4>
                    <h1 class="display-4" style="color: #66fcf1;">$<?php echo number_format($total); ?></h1>
                </div>
            </div>
        </div>
    </div>

</body>

</html>