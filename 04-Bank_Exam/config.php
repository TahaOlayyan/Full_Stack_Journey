<?php
$username = "root";
$host = "localhost";
$password = "";
$db_name = "Bank_db";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connection Failed" . mysqli_connect_error());
}
