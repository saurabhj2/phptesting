<?php
$servername = "localhost";
$username = "userFPR";
$password = "R1HppHgU4adqAQ31";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>