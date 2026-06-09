<?php
session_start();
include('config.php');

if (!isset($_SESSION['username']) || $_SESSION['AccType'] != 'admin') {
    header("Location:login.php");
    exit();
}

$id = $_GET['id'];
$sql_delete = "DELETE FROM `account` WHERE id = $id";
$result_delete = mysqli_query($conn, $sql_delete);

header("Location: index.php");
exit();
