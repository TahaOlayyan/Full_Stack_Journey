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
<html>

<head>
    <title>Edit Collector</title>
</head>

<body>
    <h3>Edit Collector</h3>
    <form method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="6">
            <tr>
                <td>Name</td>
                <td><input type="text" name="col_name" value="<?php echo $row['col_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" required></td>
            </tr>
            <tr>
                <td>Preference</td>
                <td>
                    <select name="preference">
                        <option <?php if ($row['preference'] == "Classic") echo "selected"; ?>>Classic</option>
                        <option <?php if ($row['preference'] == "Modern") echo "selected"; ?>>Modern</option>
                        <option <?php if ($row['preference'] == "Surrealism") echo "selected"; ?>>Surrealism</option>
                        <option <?php if ($row['preference'] == "All") echo "selected"; ?>>All</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Budget ($)</td>
                <td><input type="number" name="budget" value="<?php echo $row['budget']; ?>" required></td>
            </tr>
            <tr>
                <td>Current Image</td>
                <td><img src="uploads/<?php echo $row['col_image']; ?>" width="60" style="border-radius:50%;"></td>
            </tr>
            <tr>
                <td>New Image</td>
                <td><input type="file" name="col_image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Update Collector"></td>
            </tr>
        </table>
    </form>
    <br><a href="collectors.php">Back</a>
</body>

</html>