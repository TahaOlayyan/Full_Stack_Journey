<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $name       = $_POST['col_name'];
    $phone      = $_POST['phone'];
    $preference = $_POST['preference'];
    $budget     = $_POST['budget'];
    $password   = $_POST['password'];

    $image = $_FILES['col_image']['name'];
    move_uploaded_file($_FILES['col_image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO collectors (col_name, phone, preference, budget, password, col_image, role)
            VALUES ('$name', '$phone', '$preference', '$budget', '$password', '$image', 'Collector')";

    mysqli_query($conn, $sql);
    header("Location: collectors.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Collector</title>
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

        .form-card {
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="admin_home.php">🎨 Art Gallery</a>
        </div>
    </nav>

    <div class="container pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="fw-bold text-dark m-0">Add New Collector</h3>
                    <a href="collectors.php" class="btn btn-outline-secondary btn-sm fw-bold"><i class="bi bi-arrow-left"></i> Back</a>
                </div>

                <div class="card form-card bg-white p-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Name</label>
                                <input type="text" name="col_name" class="form-control bg-light" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Phone</label>
                                <input type="text" name="phone" class="form-control bg-light" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Preference</label>
                                <select name="preference" class="form-select bg-light">
                                    <option>Classic</option>
                                    <option>Modern</option>
                                    <option>Surrealism</option>
                                    <option>All</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Budget ($)</label>
                                <input type="number" name="budget" class="form-control bg-light" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Password</label>
                            <input type="text" name="password" class="form-control bg-light" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Profile Image</label>
                            <input type="file" name="col_image" class="form-control bg-light" required>
                        </div>
                        <button type="submit" name="add" class="btn btn-success w-100 fw-bold py-2"><i class="bi bi-person-plus"></i> Save Collector</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>