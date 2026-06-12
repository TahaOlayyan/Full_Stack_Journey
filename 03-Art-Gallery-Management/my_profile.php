<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Collector') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM collectors WHERE col_name = '$username'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    if ($_POST['password'] != "") {
        $newpass = $_POST['password'];
        mysqli_query($conn, "UPDATE collectors SET password='$newpass' WHERE col_name='$username'");
    }
    if ($_FILES['col_image']['name'] != "") {
        $image = $_FILES['col_image']['name'];
        move_uploaded_file($_FILES['col_image']['tmp_name'], "uploads/" . $image);
        mysqli_query($conn, "UPDATE collectors SET col_image='$image' WHERE col_name='$username'");
        $_SESSION['image'] = $image;
    }
    header("Location: my_profile.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
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
                    <li class="nav-item"><a class="nav-link active fw-bold" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_reservations.php">My Artworks</a></li>
                    <li class="nav-item"><a class="nav-link text-warning fw-bold ms-3" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-5 mb-4">
                <div class="card card-custom p-4 text-center h-100">
                    <h4 class="fw-bold text-secondary mb-4">My Information</h4>
                    <img src="uploads/<?php echo $row['col_image']; ?>" class="rounded-circle mx-auto shadow-sm mb-3" width="130" height="130" style="object-fit: cover;">
                    <h3 class="fw-bold" style="color: #0f6292;"><?php echo $row['col_name']; ?></h3>
                    <p class="text-muted mb-4"><i class="bi bi-telephone-fill"></i> <?php echo $row['phone']; ?></p>

                    <ul class="list-group list-group-flush text-start">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <b>Preference</b> <span class="badge bg-secondary rounded-pill"><?php echo $row['preference']; ?></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <b>Budget</b> <span class="text-success fw-bold">$<?php echo number_format($row['budget']); ?></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-7 mb-4">
                <div class="card card-custom p-4 h-100">
                    <h4 class="fw-bold text-secondary mb-4"><i class="bi bi-gear-fill"></i> Update Settings</h4>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-4">
                            <label class="form-label fw-bold">New Password</label>
                            <input type="password" name="password" class="form-control bg-light">
                            <div class="form-text text-muted">Leave empty if you don't want to change it.</div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold">New Profile Image</label>
                            <input type="file" name="col_image" class="form-control bg-light">
                        </div>
                        <button type="submit" name="update" class="btn text-white w-100 fw-bold" style="background-color: #0f6292; padding: 10px;">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>