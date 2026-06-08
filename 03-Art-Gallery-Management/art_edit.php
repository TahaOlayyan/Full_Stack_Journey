<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM artworks WHERE art_id = $id");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name   = $_POST['art_name'];
    $artist = $_POST['artist_name'];
    $desc   = $_POST['description'];

    if ($_FILES['art_image']['name'] != "") {
        $image = $_FILES['art_image']['name'];
        move_uploaded_file($_FILES['art_image']['tmp_name'], "uploads/" . $image);
    } else {
        $image = $row['art_image']; // احتفظ بالصورة القديمة لو ما رفع جديدة
    }

    $sql = "UPDATE artworks SET art_name='$name', artist_name='$artist', description='$desc', art_image='$image' WHERE art_id=$id";
    mysqli_query($conn, $sql);
    header("Location: artworks.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Artwork</title>
</head>

<body>
    <h3>Edit Artwork</h3>
    <form method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="6">
            <tr>
                <td>Artwork Name</td>
                <td><input type="text" name="art_name" value="<?php echo $row['art_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Artist Name</td>
                <td><input type="text" name="artist_name" value="<?php echo $row['artist_name']; ?>" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description" value="<?php echo $row['description']; ?>" required></td>
            </tr>
            <tr>
                <td>Current Image</td>
                <td><img src="uploads/<?php echo $row['art_image']; ?>" width="80"></td>
            </tr>
            <tr>
                <td>New Image</td>
                <td><input type="file" name="art_image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="update" value="Update Artwork"></td>
            </tr>
        </table>
    </form>
    <br><a href="artworks.php">Back</a>
</body>

</html>