<?php
include 'dbconfig.php';

// Update record
$sql = "UPDATE attendees SET ticket_type='VIP' WHERE id=2";

// Execute query
$conn->exec($sql);

echo "Record updated successfully";
?>