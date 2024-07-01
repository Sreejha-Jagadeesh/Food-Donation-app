<?php
ob_start();
session_start();

$host = "localhost";
$user = "root";
$password = "";
$dbname = "demo";
$port = 7777;

// Create connection
$connection = mysqli_connect($host, $user, $password, $dbname, $port);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
