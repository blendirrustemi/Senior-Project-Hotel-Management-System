<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $url     = 'http://localhost:3000/bookings';
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
                'method'  => 'POST',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode($data),
            ],
        ];
        $context = stream_context_create($options);
        $result  = file_get_contents($url, false, $context);
        header('Location: api.php');
    }
?>

<h2>Create new user</h2>
<form action="create.php" method="POST">
    
    <label for="CustomerID">CustomerID:</label>
    <input type="number" id="CustomerID" name="CustomerID" value=""><br>
    
    <label for="RoomID">RoomID:</label>
    <input type="number" id="RoomID" name="RoomID" value=""><br>
    
    <label for="CheckInDate">CheckInDate:</label>
    <input type="text" id="CheckInDate" name="CheckInDate" value=""><br>
    
    <label for="CheckOutDate">CheckOutDate:</label>
    <input type="text" id="CheckOutDate" name="CheckOutDate" value=""><br>
    
    <label for="Adults">Adults:</label>
    <input type="number" id="Adults" name="Adults" value=""><br>
    
    <label for="Children">Children:</label>
    <input type="number" id="Children" name="Children" value=""><br>
    
    <label for="Requests">Requests:</label>
    <input type="text" id="Requests" name="Requests" value=""><br>
    
    <label for="NightsToStay">NightsToStay:</label>
    <input type="number" id="NightsToStay" name="NightsToStay" value=""><br>
    
    <label for="TotalPrice">TotalPrice:</label>
    <input type="number" id="TotalPrice" name="TotalPrice" value=""><br>
    
    <input type="submit" value="Create">
</form>
