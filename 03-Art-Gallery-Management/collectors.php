<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$query = "SELECT col_id, col_name, phone, preference, budget, col_image, role FROM collectors ORDER BY col_id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Collectors Management</title>
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="collectors.php">Collectors</a></li>
                    <li class="nav-item"><a class="nav-link" href="artworks.php">Artworks</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.php">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark">Collectors Management</h3>
            <a href="col_add.php" class="btn btn-success fw-bold"><i class="bi bi-person-plus-fill"></i> Add New Collector</a>
        </div>

        <div class="card table-card bg-white p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Preference</th>
                            <th>Budget</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td class="fw-bold text-secondary">#<?php echo $row['col_id']; ?></td>
                                <td><img src="uploads/<?php echo $row['col_image']; ?>" width="45" height="45" class="rounded-circle shadow-sm" style="object-fit: cover;"></td>
                                <td class="fw-bold"><?php echo $row['col_name']; ?></td>
                                <td><?php echo $row['phone']; ?></td>
                                <td><span class="badge bg-secondary"><?php echo $row['preference']; ?></span></td>
                                <td class="text-success fw-bold">$<?php echo number_format($row['budget']); ?></td>
                                <td>
                                    <?php if ($row['role'] == 'Admin') echo '<span class="badge bg-danger">Admin</span>';
                                    else echo '<span class="badge bg-primary">Collector</span>'; ?>
                                </td>
                                <td class="text-center">
                                    <a href="col_edit.php?id=<?php echo $row['col_id']; ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                    <a href="col_delete.php?id=<?php echo $row['col_id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?');"><i class="bi bi-trash"></i></a>
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