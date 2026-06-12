<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$collectors = mysqli_query($conn, "SELECT col_id, col_name FROM collectors WHERE role = 'Collector'");
$artworks   = mysqli_query($conn, "SELECT art_id, art_name FROM artworks");

if (isset($_POST['add'])) {
    $col_id   = $_POST['col_id'];
    $art_id   = $_POST['art_id'];
    $res_type = $_POST['res_type'];
    $res_year = $_POST['res_year'];

    $sql = "INSERT INTO reservations (col_id, art_id, res_type, res_year)
            VALUES ('$col_id', '$art_id', '$res_type', '$res_year')";

    mysqli_query($conn, $sql);
    header("Location: reservations.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Reservation</title>
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
                    <h3 class="fw-bold text-dark m-0">Add Reservation</h3>
                    <a href="reservations.php" class="btn btn-outline-secondary btn-sm fw-bold"><i class="bi bi-arrow-left"></i> Back</a>
                </div>

                <div class="card form-card bg-white p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Collector</label>
                            <select name="col_id" class="form-select bg-light" required>
                                <option value="">-- Select Collector --</option>
                                <?php while ($c = mysqli_fetch_assoc($collectors)) { ?>
                                    <option value="<?php echo $c['col_id']; ?>"><?php echo $c['col_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Artwork</label>
                            <select name="art_id" class="form-select bg-light" required>
                                <option value="">-- Select Artwork --</option>
                                <?php while ($a = mysqli_fetch_assoc($artworks)) { ?>
                                    <option value="<?php echo $a['art_id']; ?>"><?php echo $a['art_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold text-secondary">Type</label>
                            <select name="res_type" class="form-select bg-light" required>
                                <option value="Purchase">Purchase (Buy)</option>
                                <option value="Viewing">Viewing Only</option>
                                <option value="Auction">Auction Bid</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary">Year</label>
                            <select name="res_year" class="form-select bg-light" required>
                                <?php
                                for ($y = 2024; $y <= 2030; $y++) {
                                    echo "<option value='$y'>$y</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-success w-100 fw-bold py-2"><i class="bi bi-check-circle"></i> Confirm Reservation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>