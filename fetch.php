<?php
include 'dbconfig.php';

// Prepare query
$stmt = $conn->prepare("SELECT * FROM attendees");
$stmt->execute();

// Fetch one row at a time
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}
?>