<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vopro";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 
?>