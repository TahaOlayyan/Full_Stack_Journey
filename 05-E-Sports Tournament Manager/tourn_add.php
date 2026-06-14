<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $title  = $_POST['title'];
    $game   = $_POST['game_name'];
    $prize  = $_POST['prize'];
    $status = $_POST['status'];

    $image = $_FILES['t_image']['name'];
    move_uploaded_file($_FILES['t_image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO tournaments (title, game_name, prize, status, t_image)
            VALUES ('$title', '$game', '$prize', '$status', '$image')";

    mysqli_query($conn, $sql);
    header("Location: tournaments.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Tournament</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="admin_home.php">E-Sports Admin</a>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card p-4 w-100" style="max-width: 500px;">
            <h3 class="text-center mb-4" style="color: #66fcf1;">+ Add New Tournament</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Tournament Title</label>
                    <input type="text" name="title" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Game Name (e.g. Valorant)</label>
                    <input type="text" name="game_name" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Prize Pool ($)</label>
                    <input type="number" name="prize" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Status</label>
                    <select name="status" class="form-select bg-dark text-light border-info">
                        <option>Upcoming</option>
                        <option>Ongoing</option>
                        <option>Finished</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="form-label" style="color: #45a29e;">Game Image</label>
                    <input type="file" name="t_image" class="form-control bg-dark text-light border-info" required>
                </div>
                <button type="submit" name="add" class="btn btn-neon w-100 mb-3">Add Tournament</button>
                <div class="text-center">
                    <a href="tournaments.php" class="text-muted text-decoration-none">← Back</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>