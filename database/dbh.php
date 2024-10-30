<?php

$dbhost = 'localhost';
$dbuser = 'root';
$passKey = 'S0dHR0RLUEhFU09ZQU1BRVpBS01J';
$dbpass = base64_decode($passKey);
$dbname = 'minecorddb';

$conn = mysqli_pconnect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    require_once 'package/setLog.php';
    setLog("database queries", "Database connected successfully");
}
?>
