<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$sql = "SELECT r.res_id, c.col_name, a.art_name, r.res_type, r.res_year 
        FROM reservations r
        JOIN collectors c ON r.col_id = c.col_id
        JOIN artworks a ON r.art_id = a.art_id
        ORDER BY r.res_id";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reservations Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', sans-serif;
        }

        .navbar-custom {
            background-color: #2c3e50;
        }

        .table-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="admin_home.php">🎨 Art Gallery</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="admin_home.php">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="collectors.php">Collectors</a></li>
                    <li class="nav-item"><a class="nav-link" href="artworks.php">Artworks</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="reservations.php">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark">Reservations & Sales</h3>
            <a href="res_add.php" class="btn btn-success fw-bold"><i class="bi bi-bookmark-plus-fill"></i> Add Reservation</a>
        </div>

        <div class="card table-card bg-white p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Res ID</th>
                            <th>Collector Name</th>
                            <th>Artwork Name</th>
                            <th>Type</th>
                            <th>Year</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold text-secondary">#<?php echo $row['res_id']; ?></td>
                                <td class="fw-bold"><i class="bi bi-person"></i> <?php echo $row['col_name']; ?></td>
                                <td class="fw-bold"><i class="bi bi-palette"></i> <?php echo $row['art_name']; ?></td>
                                <td>
                                    <?php
                                    if ($row['res_type'] == 'Purchase') echo '<span class="badge bg-success">Purchase</span>';
                                    elseif ($row['res_type'] == 'Auction') echo '<span class="badge bg-warning text-dark">Auction</span>';
                                    else echo '<span class="badge bg-info text-dark">Viewing</span>';
                                    ?>
                                </td>
                                <td><?php echo $row['res_year']; ?></td>
                                <td class="text-center">
                                    <a href="res_edit.php?id=<?php echo $row['res_id']; ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                    <a href="res_delete.php?id=<?php echo $row['res_id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this reservation?');"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>