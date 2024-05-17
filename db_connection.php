<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exercises";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
