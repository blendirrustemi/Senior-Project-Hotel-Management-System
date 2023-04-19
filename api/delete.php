<?php
    $id   = $_GET['id'];
    $url  = 'http://localhost:3000/bookings/' . $id;
    $data = file_get_contents($url);
    $booking = json_decode($data, true);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $options = [
            'http' => [
                'method' => 'DELETE',
            ],
        ];
        $context = stream_context_create($options);
        $result  = file_get_contents($url, false, $context);
        header('Location: api.php');
    }
?>

<h2>Delete Booking</h2>
<p>Are you sure you want to delete this Booking?</p>
<p>BookingID: <?= $booking['BookingID'] ?></p>
<p>CheckInDate: <?= $booking['CheckInDate'] ?></p>
<p>CheckOutDate: <?= $booking['CheckOutDate'] ?></p>
<form action="delete.php?id=<?= $_GET['id'] ?>" method="POST">
    <input type="submit" value="Delete">
</form>
