<?php

$db = new Database();
$con = $db->connect();

$room_id = $_POST['room_id'];
$arrive_date = $_POST['arrive_date'];
$departure_date = $_POST['depart_date'];

$query = "SELECT * FROM Rooms WHERE RoomID = $room_id";
$result = $db->query($query);

$result = $result[0];


if (isset($_POST['submit'])){
    // Customers Table:
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $customer_query = "INSERT INTO Customers (FirstName, LastName, Birthday, Username, Gender, Email, Phone, Address, Password, IsAdmin)
            VALUES ('$name', '$surname', '$birthday', NULL, '$gender', '$email', '$phone', '$address', NULL, 0)";
    $customer = $db->query($customer_query);

// Bookings Table:
    $room_id = $_POST['room_id'];
    $checkin = $_POST['arrive_date'];
    $checkout = $_POST['depart_date'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $special_requests = $_POST['special_requests'];
    $price_per_night = $_POST['price_per_night'];

    $total_price = $price_per_night * (floor(abs(strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24)));

    $get_customer_id = "SELECT CustomerID FROM Customers WHERE Email = '$email'
                                   and FirstName = '$name' and LastName = '$surname' and birthday = '$birthday'";
    $customer_id = $db->query($get_customer_id);
    $customer_id=  $customer_id[0]->CustomerID;

    $booking_query = "INSERT INTO Bookings (CustomerID, RoomID, CheckInDate, CheckOutDate, Adults, Children, Requests, NightsToStay, TotalPrice)
            VALUES ('$customer_id', '$room_id', '$checkin', '$checkout',
                    '$adults', '$children', '$special_requests', (SELECT DATEDIFF('$checkout', '$checkin')), $total_price)";
    $booking = $db->query($booking_query);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/styles.css">
    <title><?= $result->RoomName ?></title>

</head>
<body>

<h1>Book your Room</h1>
<h3><?= $result->RoomName ?></h3>

<form action="" method="POST">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required><br>

    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday" required><br>

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="">--Select--</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br>

    <label for="checkin">Check-in date:</label>
    <input type="date" id="checkin" name="checkin" required value="<?=$arrive_date?>" disabled><br>

    <label for="checkout">Check-out date:</label>
    <input type="date" id="checkout" name="checkout" required value="<?=$departure_date?>" disabled><br>

    <label for="adults">Number of adults:</label>
    <input type="number" id="adults" name="adults" min="1" max="10" required><br>

    <label for="children">Number of children:</label>
    <input type="number" id="children" name="children" min="0" max="5" required><br>

    <label for="special-requests">Special requests:</label>
    <textarea id="special-requests" name="special_requests" rows="4" cols="30"></textarea><br>

    <input type="hidden" name="room_id" value="<?=$room_id?>">
    <input type="hidden" name="price_per_night" value="<?=$result->PricePerNight?>">

    <input type="submit" value="Submit" name="submit">

</form>

</body>

