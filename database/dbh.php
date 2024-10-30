<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'S0dHR0RLUEhFU09ZQU1BRVpBS01J';
$dbname = 'minecorddb';

$conn = mysqli_connect($dbhost, $dbuser, base64_decode($dbpass), $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    require_once 'package/setLog.php';
    setLog("database queries", "Database connected successfully");
}
?>
