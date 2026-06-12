<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $name   = $_POST['art_name'];
    $artist = $_POST['artist_name'];
    $desc   = $_POST['description'];
    $image = $_FILES['art_image']['name'];
    move_uploaded_file($_FILES['art_image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO artworks (art_name, artist_name, description, art_image) VALUES ('$name', '$artist', '$desc', '$image')";
    mysqli_query($conn, $sql);
    header("Location: artworks.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Artwork</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                    <h3 class="fw-bold text-dark m-0">Add New Artwork</h3>
                    <a href="artworks.php" class="btn btn-outline-secondary btn-sm fw-bold">← Back</a>
                </div>

                <div class="card form-card bg-white p-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Artwork Name</label>
                            <input type="text" name="art_name" class="form-control bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Artist Name</label>
                            <input type="text" name="artist_name" class="form-control bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Description</label>
                            <textarea name="description" class="form-control bg-light" rows="3" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Artwork Image</label>
                            <input type="file" name="art_image" class="form-control bg-light" required>
                        </div>
                        <button type="submit" name="add" class="btn btn-success w-100 fw-bold py-2">Save Artwork</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>