<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO users (username, password, role, image)
            VALUES ('$username', '$password', 'Captain', '$image')";

    mysqli_query($conn, $sql);
    header("Location: captains.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Captain</title>
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
                    <li class="nav-item"><a class="nav-link active" href="captains.php">Captains</a></li>
                    <li class="nav-item"><a class="nav-link" href="tournaments.php">Tournaments</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrations.php">Registrations</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center">
        <div class="card p-4 w-100" style="max-width: 500px;">
            <h3 class="text-center mb-4" style="color: #66fcf1;">+ Add New Captain</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Username</label>
                    <input type="text" name="username" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Password</label>
                    <input type="text" name="password" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-4">
                    <label class="form-label" style="color: #45a29e;">Profile Image</label>
                    <input type="file" name="image" class="form-control bg-dark text-light border-info" required>
                </div>
                <button type="submit" name="add" class="btn btn-neon w-100 mb-3">Add Captain</button>
                <div class="text-center">
                    <a href="captains.php" class="text-muted text-decoration-none">← Back to Captains</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>