<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM reservations WHERE res_id = $id");
$row = mysqli_fetch_assoc($result);

$collectors = mysqli_query($conn, "SELECT col_id, col_name FROM collectors WHERE role = 'Collector'");
$artworks   = mysqli_query($conn, "SELECT art_id, art_name FROM artworks");

if (isset($_POST['update'])) {
    $col_id   = $_POST['col_id'];
    $art_id   = $_POST['art_id'];
    $res_type = $_POST['res_type'];
    $res_year = $_POST['res_year'];

    $sql = "UPDATE reservations SET col_id='$col_id', art_id='$art_id', res_type='$res_type', res_year='$res_year' WHERE res_id=$id";
    mysqli_query($conn, $sql);
    header("Location: reservations.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Reservation</title>
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
                    <h3 class="fw-bold text-dark m-0">Edit Reservation #<?php echo $row['res_id']; ?></h3>
                    <a href="reservations.php" class="btn btn-outline-secondary btn-sm fw-bold"><i class="bi bi-arrow-left"></i> Back</a>
                </div>

                <div class="card form-card bg-white p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Collector</label>
                            <select name="col_id" class="form-select bg-light" required>
                                <?php while ($c = mysqli_fetch_assoc($collectors)) { ?>
                                    <option value="<?php echo $c['col_id']; ?>" <?php if ($c['col_id'] == $row['col_id']) echo "selected"; ?>>
                                        <?php echo $c['col_name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Artwork</label>
                            <select name="art_id" class="form-select bg-light" required>
                                <?php while ($a = mysqli_fetch_assoc($artworks)) { ?>
                                    <option value="<?php echo $a['art_id']; ?>" <?php if ($a['art_id'] == $row['art_id']) echo "selected"; ?>>
                                        <?php echo $a['art_name']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Type</label>
                            <select name="res_type" class="form-select bg-light" required>
                                <option value="Purchase" <?php if ($row['res_type'] == 'Purchase') echo "selected"; ?>>Purchase (Buy)</option>
                                <option value="Viewing" <?php if ($row['res_type'] == 'Viewing') echo "selected"; ?>>Viewing Only</option>
                                <option value="Auction" <?php if ($row['res_type'] == 'Auction') echo "selected"; ?>>Auction Bid</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Year</label>
                            <select name="res_year" class="form-select bg-light" required>
                                <?php
                                for ($y = 2024; $y <= 2030; $y++) {
                                    $sel = ($row['res_year'] == $y) ? "selected" : "";
                                    echo "<option value='$y' $sel>$y</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary w-100 fw-bold py-2"><i class="bi bi-save"></i> Update Reservation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>