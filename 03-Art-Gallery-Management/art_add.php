<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

if (isset($_POST['add'])) {
    $name   = $_POST['art_name'];
    $artist = $_POST['artist_name'];
    $desc   = $_POST['description'];

    $image = $_FILES['art_image']['name'];
    move_uploaded_file($_FILES['art_image']['tmp_name'], "uploads/" . $image);

    $sql = "INSERT INTO artworks (art_name, artist_name, description, art_image)
            VALUES ('$name', '$artist', '$desc', '$image')";

    mysqli_query($conn, $sql);
    header("Location: artworks.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Artwork</title>
</head>

<body>
    <h3>Add New Artwork</h3>
    <form method="post" enctype="multipart/form-data">
        <table border="1" cellpadding="6">
            <tr>
                <td>Artwork Name</td>
                <td><input type="text" name="art_name" required></td>
            </tr>
            <tr>
                <td>Artist Name</td>
                <td><input type="text" name="artist_name" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input type="text" name="description" required></td>
            </tr>
            <tr>
                <td>Artwork Image</td>
                <td><input type="file" name="art_image" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="add" value="Add Artwork"></td>
            </tr>
        </table>
    </form>
    <br><a href="artworks.php">Back</a>
</body>

</html>