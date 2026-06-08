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
<html>

<head>
    <title>Add Reservation</title>
</head>

<body>
    <h3>Add Reservation</h3>
    <form method="post">
        <table border="1" cellpadding="6">
            <tr>
                <td>Collector</td>
                <td>
                    <select name="col_id" required>
                        <option value="">-- Select Collector --</option>
                        <?php while ($c = mysqli_fetch_assoc($collectors)) { ?>
                            <option value="<?php echo $c['col_id']; ?>"><?php echo $c['col_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Artwork</td>
                <td>
                    <select name="art_id" required>
                        <option value="">-- Select Artwork --</option>
                        <?php while ($a = mysqli_fetch_assoc($artworks)) { ?>
                            <option value="<?php echo $a['art_id']; ?>"><?php echo $a['art_name']; ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="res_type" required>
                        <option value="Purchase">Purchase (Buy)</option>
                        <option value="Viewing">Viewing Only</option>
                        <option value="Auction">Auction Bid</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Year</td>
                <td>
                    <select name="res_year" required>
                        <?php
                        for ($y = 2024; $y <= 2030; $y++) {
                            echo "<option value='$y'>$y</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="add" value="Add Reservation"></td>
            </tr>
        </table>
    </form>
    <br><a href="reservations.php">Back</a>
</body>

</html>