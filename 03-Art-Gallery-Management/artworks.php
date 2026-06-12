<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM artworks ORDER BY art_id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Artworks Management</title>
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="artworks.php">Artworks</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.php">Reservations</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-dark">Artworks Gallery</h3>
            <a href="art_add.php" class="btn btn-success fw-bold"><i class="bi bi-palette-fill"></i> Add New Artwork</a>
        </div>

        <div class="card table-card bg-white p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>Image</th>
                            <th>ID</th>
                            <th>Artwork Name</th>
                            <th>Artist</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><img src="uploads/<?php echo $row['art_image']; ?>" width="70" class="img-thumbnail shadow-sm"></td>
                                <td class="fw-bold text-secondary">#<?php echo $row['art_id']; ?></td>
                                <td class="fw-bold"><?php echo $row['art_name']; ?></td>
                                <td><i class="bi bi-person-badge"></i> <?php echo $row['artist_name']; ?></td>
                                <td class="text-muted small w-25"><?php echo $row['description']; ?></td>
                                <td class="text-center">
                                    <a href="art_edit.php?id=<?php echo $row['art_id']; ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
                                    <a href="art_delete.php?id=<?php echo $row['art_id']; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Delete this artwork?');"><i class="bi bi-trash"></i></a>
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