<?php
    $id   = $_GET['id'];
    $url  = 'http://localhost:3000/bookings/' . $id;
    $data = file_get_contents($url);
    $booking = json_decode($data, true);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $data    = [
            'BookingID' => $_POST['BookingID'],
            'CustomerID' => $_POST['CustomerID'],
            'RoomID' => $_POST['RoomID'],
            'CheckInDate'  => $_POST['CheckInDate'],
            'CheckOutDate'  => $_POST['CheckOutDate'],
            'Adults'  => $_POST['Adults'],
            'Children'  => $_POST['Children'],
            'Requests' => $_POST['Requests'],
            'NightsToStay' => $_POST['NightsToStay'],
            'TotalPrice' => $_POST['TotalPrice'],
        ];
        $options = [
            'http' => [
                'method'  => 'PUT',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode($data),
            ],
        ];
        $context = stream_context_create($options);
        $result  = file_get_contents($url, false, $context);
        header('Location: api.php');
    }
?>

<h2>Edit User</h2>
<form action="update.php?id=<?= $id ?>" method="POST">
    <label for="BookingID">BookingID:</label>
    <input type="number" id="BookingID" name="BookingID" value="<?php echo $id ?>"><br>
    
    <label for="CustomerID">CustomerID:</label>
    <input type="number" id="CustomerID" name="CustomerID" value="<?= $booking['CustomerID'] ?>"><br>
    
    <label for="RoomID">RoomID:</label>
    <input type="number" id="RoomID" name="RoomID" value="<?= $booking['RoomID'] ?>"><br>
    
    <label for="CheckInDate">CheckInDate:</label>
    <input type="text" id="CheckInDate" name="CheckInDate" value="<?= $booking['CheckInDate'] ?>"><br>
    
    <label for="CheckOutDate">CheckOutDate:</label>
    <input type="text" id="CheckOutDate" name="CheckOutDate" value="<?= $booking['CheckOutDate'] ?>"><br>
    
    <label for="Adults">Adults:</label>
    <input type="number" id="Adults" name="Adults" value="<?= $booking['Adults'] ?>"><br>
    
    <label for="Children">Children:</label>
    <input type="number" id="Children" name="Children" value="<?= $booking['Children'] ?>"><br>
    
    <label for="Requests">Requests:</label>
    <input type="text" id="Requests" name="Requests" value="<?= $booking['Requests'] ?>"><br>
    
    <label for="NightsToStay">NightsToStay:</label>
    <input type="number" id="NightsToStay" name="NightsToStay" value="<?= $booking['NightsToStay'] ?>"><br>
    
    <label for="TotalPrice">TotalPrice:</label>
    <input type="number" id="TotalPrice" name="TotalPrice" value="<?= $booking['TotalPrice'] ?>"><br>
    
    <input type="submit" value="Update">
</form>
