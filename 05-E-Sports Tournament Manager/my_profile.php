<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Captain') {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    if ($_POST['password'] != "") {
        $newpass = $_POST['password'];
        mysqli_query($conn, "UPDATE users SET password='$newpass' WHERE username='$username'");
    }

    if ($_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
        mysqli_query($conn, "UPDATE users SET image='$image' WHERE username='$username'");
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
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="captain_home.php">E-Sports Arena</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="captain_home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="my_profile.php">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="my_tournaments.php">My Tournaments</a></li>
                    <li class="nav-item"><a class="btn btn-sm btn-outline-danger ms-3 mt-1" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-4 mb-4">
                <div class="card p-4 text-center">
                    <h4 style="color: #66fcf1;" class="mb-3">My Info</h4>
                    <img src="uploads/<?php echo $row['image']; ?>" class="rounded-circle border border-info mx-auto mb-3" style="width: 120px; height: 120px; object-fit: cover;">
                    <h5 class="text-light">Captain: <span style="color: #45a29e;"><?php echo $row['username']; ?></span></h5>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card p-4">
                    <h4 style="color: #66fcf1;" class="mb-4">Update My Settings</h4>
                    <form method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" style="color: #45a29e;">New Password <small class="text-muted">(leave empty if no change)</small></label>
                            <input type="password" name="password" class="form-control bg-dark text-light border-info">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" style="color: #45a29e;">New Profile Image</label>
                            <input type="file" name="image" class="form-control bg-dark text-light border-info">
                        </div>
                        <button type="submit" name="update" class="btn btn-neon w-100">Save Changes</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</body>

</html>