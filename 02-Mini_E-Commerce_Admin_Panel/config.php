<?php

$user = "root";
$pass = "";
$host = "localhost";
$db_name = "store_db";

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("❌ Connection failed:" . mysqli_connect_error());
}
