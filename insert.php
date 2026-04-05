<?php
include 'dbconfig.php';

// SQL insert query
$sql = "INSERT INTO attendees (name, email, ticket_type, seat_number, concert_date)
        VALUES ('Sanhua', 'sanhua@example.com', 'Regular', 'C3', '2026-05-10')";

// Execute query
$conn->exec($sql);

echo "New record inserted successfully";
?>