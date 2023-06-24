<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "votingsystem";
$connection = new mysqli($servername, $username, $password, $database);
if ($connection->connect_errno != 0) {
    die("Connection Failed: " . $connection->$connect_error);
} else {
    return;
}
?>