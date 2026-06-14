<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$sql_select = "SELECT * FROM tournaments WHERE id = $id";
$result = mysqli_query($conn, $sql_select);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $title  = $_POST['title'];
    $game   = $_POST['game_name'];
    $prize  = $_POST['prize'];
    $status = $_POST['status'];

    if ($_FILES['t_image']['name'] != "") {
        $image = $_FILES['t_image']['name'];
        move_uploaded_file($_FILES['t_image']['tmp_name'], "uploads/" . $image);
    } else {
        $image = $row['t_image'];
    }

    $sql_update = "UPDATE tournaments SET title='$title', game_name='$game', prize='$prize', status='$status', t_image='$image' WHERE id=$id";
    mysqli_query($conn, $sql_update);
    header("Location: tournaments.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Tournament</title>
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
            <h3 class="text-center mb-4" style="color: #66fcf1;">Edit Tournament</h3>
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Tournament Title</label>
                    <input type="text" name="title" value="<?php echo $row['title']; ?>" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Game Name</label>
                    <input type="text" name="game_name" value="<?php echo $row['game_name']; ?>" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Prize Pool ($)</label>
                    <input type="number" name="prize" value="<?php echo $row['prize']; ?>" class="form-control bg-dark text-light border-info" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" style="color: #45a29e;">Status</label>
                    <select name="status" class="form-select bg-dark text-light border-info">
                        <option <?php if ($row['status'] == "Upcoming") echo "selected"; ?>>Upcoming</option>
                        <option <?php if ($row['status'] == "Ongoing") echo "selected"; ?>>Ongoing</option>
                        <option <?php if ($row['status'] == "Finished") echo "selected"; ?>>Finished</option>
                    </select>
                </div>
                <div class="mb-3 text-center">
                    <label class="form-label d-block" style="color: #45a29e;">Current Image</label>
                    <img src="uploads/<?php echo $row['t_image']; ?>" class="rounded border border-info mb-2" width="100">
                </div>
                <div class="mb-4">
                    <label class="form-label" style="color: #45a29e;">New Image <small class="text-muted">(Optional)</small></label>
                    <input type="file" name="t_image" class="form-control bg-dark text-light border-info">
                </div>
                <button type="submit" name="update" class="btn btn-neon w-100 mb-3">Update Tournament</button>
                <div class="text-center">
                    <a href="tournaments.php" class="text-muted text-decoration-none">← Back</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>