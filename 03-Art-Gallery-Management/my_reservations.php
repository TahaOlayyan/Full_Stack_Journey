<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Collector') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$res = mysqli_query($conn, "SELECT col_id FROM collectors WHERE col_name = '$username'");
$collector = mysqli_fetch_assoc($res);
$col_id = $collector['col_id'];

$sql = "SELECT a.art_name, a.artist_name, r.res_type, r.res_year
        FROM reservations r
        JOIN artworks a ON r.art_id = a.art_id
        WHERE r.col_id = $col_id ORDER BY r.res_year";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Reserved Artworks</title>
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

        .card-custom {
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
                    <li class="nav-item"><a class="nav-link" href="user_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="my_reservations.php">My Artworks</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3 class="fw-bold mb-4" style="color: #0f6292;"><i class="bi bi-images"></i> My Reserved Artworks</h3>
        <div class="card card-custom bg-white p-4">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Artwork Name</th>
                        <th>Artist</th>
                        <th>Reservation Type</th>
                        <th>Year</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td class="fw-bold"><?php echo $row['art_name']; ?></td>
                            <td><?php echo $row['artist_name']; ?></td>
                            <td>
                                <?php
                                if ($row['res_type'] == 'Purchase') echo '<span class="badge bg-success">Purchase</span>';
                                elseif ($row['res_type'] == 'Auction') echo '<span class="badge bg-warning text-dark">Auction</span>';
                                else echo '<span class="badge bg-info text-dark">Viewing</span>';
                                ?>
                            </td>
                            <td class="fw-bold text-secondary"><?php echo $row['res_year']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>