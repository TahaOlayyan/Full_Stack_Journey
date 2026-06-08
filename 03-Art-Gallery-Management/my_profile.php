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
        $_SESSION['image'] = $image; // تحديث الصورة بالجلسة الحالية
    }

    header("Location: my_profile.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>My Profile</title>
</head>

<body>
    <div>
        <a href="user_home.php">Home</a> |
        <a href="my_profile.php">My Profile</a> |
        <a href="my_reservations.php">My Artworks</a> |
        <a href="logout.php">Logout</a>
    </div>
    <h2>My Profile Information</h2>
    <table border="1" cellpadding="6">
        <tr>
            <td>Collector ID</td>
            <td><?php echo $row['col_id']; ?></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $row['col_name']; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $row['phone']; ?></td>
        </tr>
        <tr>
            <td>Art Preference</td>
            <td><?php echo $row['preference']; ?></td>
        </tr>
        <tr>
            <td>Budget ($)</td>
            <td><?php echo $row['budget']; ?></td>
        </tr>
    </table>
    <br>
    <img src="uploads/<?php echo $row['col_image']; ?>" width="120" style="border-radius:50%;">
    <hr>
    <h3>Update My Settings</h3>
    <form method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="6">
            <tr>
                <td>New Password</td>
                <td><input type="password" name="password"> <small>(leave empty if no change)</small></td>
            </tr>
            <tr>
                <td>New Profile Image</td>
                <td><input type="file" name="col_image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Save Changes"></td>
            </tr>
        </table>
    </form>
</body>

</html>