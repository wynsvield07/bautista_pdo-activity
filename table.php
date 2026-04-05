<?php
include 'dbconfig.php';

$stmt = $conn->prepare("SELECT * FROM attendees");
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Attendees Table</title>
</head>
<body>

<h2>Rock Concert Attendees</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Ticket Type</th>
        <th>Seat</th>
        <th>Date</th>
    </tr>

    <?php foreach($result as $row): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['ticket_type'] ?></td>
        <td><?= $row['seat_number'] ?></td>
        <td><?= $row['concert_date'] ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>