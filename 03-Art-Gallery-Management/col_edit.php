<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM collectors WHERE col_id = $id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name       = $_POST['col_name'];
    $phone      = $_POST['phone'];
    $preference = $_POST['preference'];
    $budget     = $_POST['budget'];

    if ($_FILES['col_image']['name'] != "") {
        $image = $_FILES['col_image']['name'];
        move_uploaded_file($_FILES['col_image']['tmp_name'], "uploads/" . $image);
    } else {
        $image = $row['col_image'];
    }

    $sql = "UPDATE collectors SET col_name='$name', phone='$phone', preference='$preference', budget='$budget', col_image='$image' WHERE col_id=$id";
    mysqli_query($conn, $sql);
    header("Location: collectors.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Collector</title>
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
                    <h3 class="fw-bold text-dark m-0">Edit Collector</h3>
                    <a href="collectors.php" class="btn btn-outline-secondary btn-sm fw-bold"><i class="bi bi-arrow-left"></i> Back</a>
                </div>

                <div class="card form-card bg-white p-4">
                    <form method="post" enctype="multipart/form-data">
                        <div class="text-center mb-4">
                            <img src="uploads/<?php echo $row['col_image']; ?>" width="100" height="100" class="rounded-circle shadow-sm" style="object-fit: cover;">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Name</label>
                            <input type="text" name="col_name" value="<?php echo $row['col_name']; ?>" class="form-control bg-light" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Phone</label>
                            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control bg-light" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Preference</label>
                                <select name="preference" class="form-select bg-light">
                                    <option <?php if ($row['preference'] == "Classic") echo "selected"; ?>>Classic</option>
                                    <option <?php if ($row['preference'] == "Modern") echo "selected"; ?>>Modern</option>
                                    <option <?php if ($row['preference'] == "Surrealism") echo "selected"; ?>>Surrealism</option>
                                    <option <?php if ($row['preference'] == "All") echo "selected"; ?>>All</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold text-secondary">Budget ($)</label>
                                <input type="number" name="budget" value="<?php echo $row['budget']; ?>" class="form-control bg-light" required>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Update Image (Optional)</label>
                            <input type="file" name="col_image" class="form-control bg-light">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary w-100 fw-bold py-2"><i class="bi bi-save"></i> Update Collector</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>