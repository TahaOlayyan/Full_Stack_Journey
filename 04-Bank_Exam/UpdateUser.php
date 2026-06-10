<?php
include('config.php');
session_start();

if (!isset($_SESSION['username']) || $_SESSION['AccType'] != 'admin') {
    header("Location:login.php");
    exit();
}

$id = $_GET['id'];
$sql_select = "SELECT * FROM ACCOUNT WHERE id = $id";
$result_select = mysqli_query($conn, $sql_select);
$row_select = mysqli_fetch_assoc($result_select);

if (isset($_POST['update_btn'])) {
    $new_name = $_POST['uname'];
    $new_Email = $_POST['email'];
    $new_Country = $_POST['country'];
    $new_Balance = $_POST['balance'];
    $new_currency = $_POST['currency'];
    $new_Tax = $_POST['tax'];
    $new_accType = $_POST['accType'];

    if ($_FILES['new_image']['name'] != "") {
        $image_name = $_FILES['new_image']['name'];
        move_uploaded_file($_FILES['new_image']['tmp_name'], "Upload/" . $image_name);
        $final_image = $image_name; // الصورة الجديدة
    } else {
        $final_image = $row_select['Photo']; // الصورة القديمة
    }
    $sql_update = "UPDATE `account` SET `CName`='$new_name', `email`='$new_Email', `Country`='$new_Country',
`Balance`='$new_Balance', `Currency`='$new_currency', `Tax`='$new_Tax', `Photo`='$final_image', `AccountType`='$new_accType' WHERE id = $id";
    $result_update = mysqli_query($conn, $sql_update);
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="uname" id="" value="<?php echo $row_select['CName']  ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" id="" value="<?php echo $row_select['email']  ?>"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" id="" value="<?php echo $row_select['Country']  ?>"></td>
            </tr>
            <tr>
                <td>Balance</td>
                <td><input type="number" name="balance" id="" value="<?php echo $row_select['Balance']  ?>"></td>
            </tr>
            <tr>
                <td>Currency</td>
                <td><input type="text" name="currency" id="" value="<?php echo $row_select['Currency']  ?>"></td>
            </tr>
            <tr>
                <td>Tax</td>
                <td><input type="text" name="tax" id="" readonly value="<?php echo $row_select['Tax']  ?>"></td>
            </tr>
            <tr>
                <td>Account Type</td>
                <td><input type="text" name="accType" id="" value="<?php echo $row_select['AccountType']  ?>"></td>
            </tr>
            <tr>
                <td>Current Photo</td>
                <td><img src="Upload/<?php echo $row_select['Photo']; ?>" width="70" alt="Current Photo"></td>
            </tr>
            <tr>
                <td>New Photo</td>
                <td><input type="file" name="new_image" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update" name="update_btn"></td>
            </tr>
        </table>
    </form>
</body>

</html>