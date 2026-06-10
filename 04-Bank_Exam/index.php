<?php
include('config.php');
session_start();

if (!isset($_SESSION['username']) || $_SESSION['AccType'] != 'admin') {
    header("Location:login.php");
    exit();
}


$sql_select = "SELECT * FROM ACCOUNT ORDER BY id";
$result_select = mysqli_query($conn, $sql_select);

$sql_stats = "SELECT COUNT(*) AS c_count,Max(Balance) AS c_max , MIN(Balance) as c_min , avg(Balance) as c_avg FROM ACCOUNT";
$result_stats = mysqli_query($conn, $sql_stats);
$stats = mysqli_fetch_assoc($result_stats);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <h2>Admin Home</h2>
    <a href="logout.php">Logout</a><br><br>
    <a href="addUser.php">Add New User</a>
    <br><br>
    <center>
        <table border="1px">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Balance</th>
                    <th>Currency</th>
                    <th>Tax</th>
                    <th>Account Type</th>
                    <th>Photo</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($row = mysqli_fetch_assoc($result_select)) {
                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['CName'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['Country'] ?></td>
                        <td><?php echo $row['Balance'] ?></td>
                        <td><?php echo $row['Currency'] ?></td>
                        <td><?php echo $row['Tax'] ?></td>
                        <td><?php echo $row['AccountType'] ?></td>
                        <td><img src="Upload/<?php echo $row['Photo'] ?>" width="70" height="70" alt=""></td>
                        <td>
                            <a href="deleteUser.php?id=<?php echo $row['id'] ?>">Delete</a>
                            <a href="UpdateUser.php?id=<?php echo $row['id'] ?>">Update</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>

        </table>
        <h3>Total Number of Users = <?php echo $stats['c_count']; ?></h3>
        <h3>Maximum Balance = <?php echo $stats['c_max']; ?></h3>
        <h3>Minimum Balance = <?php echo $stats['c_min']; ?></h3>
        <h3>Average Balance = <?php echo $stats['c_avg']; ?></h3>

    </center>
</body>

</html>