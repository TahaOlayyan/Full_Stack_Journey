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
<html>

<head>
    <title>Edit Reservation</title>
</head>

<body>
    <h3>Edit Reservation</h3>
    <form method="post">
        <table border="1" cellpadding="6">
            <tr>
                <td>Collector</td>
                <td>
                    <select name="col_id" required>
                        <?php while ($c = mysqli_fetch_assoc($collectors)) { ?>
                            <option value="<?php echo $c['col_id']; ?>" <?php if ($c['col_id'] == $row['col_id']) echo "selected"; ?>>
                                <?php echo $c['col_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Artwork</td>
                <td>
                    <select name="art_id" required>
                        <?php while ($a = mysqli_fetch_assoc($artworks)) { ?>
                            <option value="<?php echo $a['art_id']; ?>" <?php if ($a['art_id'] == $row['art_id']) echo "selected"; ?>>
                                <?php echo $a['art_name']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="res_type" required>
                        <option value="Purchase" <?php if ($row['res_type'] == 'Purchase') echo "selected"; ?>>Purchase (Buy)</option>
                        <option value="Viewing" <?php if ($row['res_type'] == 'Viewing') echo "selected"; ?>>Viewing Only</option>
                        <option value="Auction" <?php if ($row['res_type'] == 'Auction') echo "selected"; ?>>Auction Bid</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Year</td>
                <td>
                    <select name="res_year" required>
                        <?php
                        for ($y = 2024; $y <= 2030; $y++) {
                            $sel = ($row['res_year'] == $y) ? "selected" : "";
                            echo "<option value='$y' $sel>$y</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
    <br><a href="reservations.php">Back</a>
</body>

</html>