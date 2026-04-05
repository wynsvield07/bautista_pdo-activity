<?php
// Database connection settings
$host = "localhost";
$dbname = "rockconcert_db";
$username = "root";
$password = "";

// Create PDO connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>