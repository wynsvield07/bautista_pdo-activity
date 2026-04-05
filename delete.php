<?php
include 'dbconfig.php';

// Delete record with id = 1
$sql = "DELETE FROM attendees WHERE id = 1";

// Execute query
$conn->exec($sql);

echo "Record deleted successfully";
?>