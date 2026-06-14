<?php
session_start();
include("config.php");

if (!isset($_SESSION['username']) || $_SESSION['role'] != 'Admin') {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$sql_delete = "DELETE FROM tournaments WHERE id = $id";
mysqli_query($conn, $sql_delete);
header("Location: tournaments.php");
exit();
