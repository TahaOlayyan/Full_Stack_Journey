<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($_FILES['image']['name'] != "") {
        $image = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/" . $image);
    } else {
        $image = $row['image'];
    }

    $sql = "UPDATE users SET username='$username', password='$password', image='$image' WHERE id=$id";
    mysqli_query($conn, $sql);
    header("Location: captains.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Captain</title>
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
            <h3 class="text-center mb-4" style="color: #66fcf1;">Edit Captain</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Username</label>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Password</label>
                    <input type="text" name="password" value="<?php echo $row['password']; ?>" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3 text-center">
                    <label class="form-label d-block" style="color: #45a29e;">Current Image</label>
                    <img src="uploads/<?php echo $row['image']; ?>" class="rounded-circle border border-info mb-2" width="80" height="80" style="object-fit: cover;">
                </div>
                <div class="mb-4">
                    <label class="form-label" style="color: #45a29e;">New Image <small class="text-muted">(Optional)</small></label>
                    <input type="file" name="image" class="form-control bg-dark text-light border-info">
                </div>
                <button type="submit" name="update" class="btn btn-neon w-100 mb-3">Update Captain</button>
                <div class="text-center">
                    <a href="captains.php" class="text-muted text-decoration-none">← Back</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>