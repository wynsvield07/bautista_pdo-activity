<?php
include 'dbconfig.php';

// Prepare SQL query
$stmt = $conn->prepare("SELECT * FROM attendees");
$stmt->execute();

// Fetch all records
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display using print_r
echo "<pre>";
print_r($result);
echo "</pre>";
?>