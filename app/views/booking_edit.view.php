<?php

$customer_id = $_GET['id'];

$db = new Database();
$con = $db->connect();

$query = "SELECT * FROM Bookings, Customers WHERE 
                                      Bookings.CustomerID = Customers.CustomerID AND Bookings.CustomerID = $customer_id";
$result = $db->query($query);

$arrive_old_date = $result[0]->CheckInDate;
$depart_old_date = $result[0]->CheckOutDate;

$room_id = $result[0]->RoomID;

$room_query = "SELECT * FROM Rooms WHERE RoomID = $room_id";
$room_result = $db->query($room_query); // Could be optimised
$room_price = $room_result[0]->PricePerNight;

if (isset($_POST['update_values'])) {
    $name = $_POST['name'];
    $surname = $_POST['Lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    $room_name = $_POST['room'];
    $arrive_date = $_POST['arrive_date'];
    $depart_date = $_POST['depart_date'];
    $special_requests = $_POST['special_requests'];

    $total_price = $room_price * (floor(abs(strtotime($depart_date) - strtotime($arrive_date)) / (60 * 60 * 24)));

    $double_book_query = "SELECT * FROM Rooms where RoomID not in(SELECT RoomID from Bookings WHERE CheckInDate < '$depart_date' AND CheckOutDate > '$arrive_date' AND NOT (RoomID = $room_id AND CustomerID = $customer_id))";
    $booking_result = $db->query($double_book_query);

    $rooms = array();

    foreach ($booking_result as $room) {
        array_push($rooms, $room->RoomName);
    }

    $new_room_query = "SELECT RoomID FROM Rooms WHERE RoomName = '$room_name'";
    $new_room = $db->query($new_room_query);
    $new_room_id = $new_room[0]->RoomID;


    if (!in_array($room_name, $rooms)) {
        echo "Room $room_name is not available during those dates!";
    } else {
        $update_booking = "UPDATE Bookings SET RoomID = '$new_room_id', CheckInDate = '$arrive_date', CheckOutDate = '$depart_date', Adults = '$adults', Children = '$children', Requests = '$special_requests', NightsToStay = (SELECT DATEDIFF('$depart_date', '$arrive_date')), TotalPrice = $total_price WHERE CustomerID = '$customer_id'";
        $update_booking_result = $db->query($update_booking);
        header("Refresh:0");
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/styles.css">
    <title>Edit Booking</title><br><br>


</head>
<body class="adminBody">


<h1 class="adminh1">Edit Booking</h1>

<div class="admin-form">

<form method="POST" action="">


        <label for="name">First name:</label>
        <input type="text" id="name" name="name" required value="<?=$result[0]->FirstName?>"><br><br>
        <label for="lastName">Last name:</label>
        <input type="text" id="lastName" name="Lastname" required value="<?=$result[0]->LastName?>"><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required value="<?=$result[0]->Birthday?>"><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="<?=$result[0]->Gender?>"><?=$result[0]->Gender?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="phone" required value="<?=$result[0]->Phone?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?=$result[0]->Email?>"><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required value="<?=$result[0]->Address?>"><br><br>
        <label for="room">Room:</label>
        <select id="room" name="room" required>
            <option value="<?=$room_result[0]->RoomName?>"><?=$room_result[0]->RoomName?></option>
            <option value="Lodge Suite">Lodge Suite</option>
            <option value="Blue Room">Blue Room</option>
            <option value="Rose Suite">Rose Suite</option>
            <option value="Bolero Room">Bolero Room</option>
        </select><br><br>
        <label for="people">Adults:</label>
        <input type="number" id="adults" name="adults" required value="<?=$result[0]->Adults?>"><br><br>
        <label for="people">Children:</label>
        <input type="number" id="children" name="children" required value="<?=$result[0]->Children?>"><br><br>
        <label for="entryDate">Entry Date:</label>
        <input type="date" class=date-picker" id="entryDate" name="arrive_date" required value="<?=$result[0]->CheckInDate?>"><br><br>
        <label for="departureDate">Departure Date:</label>
        <input type="date" id="departureDate" class="departure" name="depart_date" required value="<?=$result[0]-> CheckOutDate?>"><br><br>
        <textarea class="special_requests" name="special_requests" cols="50" rows="15"><?=$result[0]->Requests?></textarea><br><br>

        <!--        <label for="time">Estimated Time Of Arrival:</label>-->
        <!--        <input type="time" id="time" name="time" required><br><br>-->
        <!--        <input class="checkboxAdmin" type="checkbox" name="checkin" value="checkin"> Checked in<br><br>-->
        <!--        <input class="checkboxAdmin" type="checkbox" name="notcheckin" value="notcheckin"> Not-Checked in<br><br><br>-->
        <!--    <a href="menu">-->
        <!--            <button class="adminMenu-button">Go to menu selection</button>-->
        <!--        </a><br><br>-->

    </div>
    <br><br>

    <div class="admin-save-container">
        <button type="submit" class="admin-button-save" name="update_values">Save</button>
        <button class="back-button-save"><a href="admin">Back to Admin Panel</a></button>
    </div>
</form>


</body>
</html>

