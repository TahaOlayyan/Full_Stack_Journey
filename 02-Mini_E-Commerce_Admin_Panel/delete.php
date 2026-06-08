<?php
include('config.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql_delete = "DELETE FROM `products` WHERE id = $id";
    $result_delete = mysqli_query($conn, $sql_delete);

    if ($result_delete) {
        header("Location: index.php");
        exit();
    } else {
        echo ("Error" . mysqli_error($conn));
    }
} else {
    header("Location: index.php");
    exit();
}
