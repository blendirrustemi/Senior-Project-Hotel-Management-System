<?php
    $url   = 'http://localhost:3000/bookings';
    $data  = file_get_contents($url);
    $bookings = json_decode($data, true);
?>

<html>
<head>

</head>
<body>

<table>
    <tr>
        <th style="padding-right: 20px">BookingID</th>
        <th style="padding-right: 20px">CustomerID</th>
        <th style="padding-right: 20px">RoomID</th>
        <th style="padding-right: 20px">CheckInDate</th>
        <th style="padding-right: 20px">CheckOutDate</th>
        <th style="padding-right: 20px">Adults</th>
        <th style="padding-right: 20px">Children</th>
        <th style="padding-right: 20px">Requests</th>
        <th style="padding-right: 20px">NightsToStay</th>
        <th style="padding-right: 20px">TotalPrice</th>
        <th>Action</th>
    </tr>
    <?php foreach ($bookings as $booking): ?>
        <tr>
            <td><?= $booking['BookingID'] ?></td>
            <td><?= $booking['CustomerID'] ?></td>
            <td><?= $booking['RoomID'] ?></td>
            <td><?= $booking['CheckInDate'] ?></td>
            <td><?= $booking['CheckOutDate'] ?></td>
            <td><?= $booking['Adults'] ?></td>
            <td><?= $booking['Children'] ?></td>
            <td><?= $booking['Requests'] ?></td>
            <td><?= $booking['NightsToStay'] ?></td>
            <td><?= $booking['TotalPrice'] ?></td>
            <td>
                <a href="update.php?id=<?= $booking['BookingID'] ?>">Edit</a>
                <a href="delete.php?id=<?= $booking['BookingID'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach ?>
</table>

<br>

<a href="create.php">Add new booking</a>

</body>
</html>
