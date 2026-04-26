<?php
include('config.php');
$id = $_GET['id'];

$sql_deleted = "DELETE FROM tasks where id = $id";
$del_result = mysqli_query($conn, $sql_deleted);

if ($del_result) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
