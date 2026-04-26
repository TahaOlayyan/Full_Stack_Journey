<?php
$host = "localhost";
$u_name = "root";
$pass = "";
$db_name = "todo_db";

$conn = mysqli_connect($host, $u_name, $pass, $db_name);

if (! $conn) {
    die("❌ Connection failed:" . mysqli_connect_error());
}
