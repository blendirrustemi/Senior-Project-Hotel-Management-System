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
<!--    <link rel="stylesheet" href="--<?php //= ADMIN ?><!--/assets/css/styles.css">-->
    <title><?= $result->RoomName ?></title>
<style>
/*   make it modern and colorful*/

body {
    background-color: #f2f2f2;
    font-family: Arial, Helvetica, sans-serif;
}

h1 {
    text-align: center;
    color: #4CAF50;
}

h3 {
    text-align: center;
    color: #364636;
}

form {
    border: 3px solid #f1f1f1;
    width: 50%;
    margin: auto;
}

input[type=text], input[type=email], input[type=tel], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

/*input number larger*/
input[type=number] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
    height: 50px;
    font-size: 20px;
}

</style>


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
<!--    <input type="number" id="guest_adult" name="adults" min="1" max="6" required><br>-->
    <select id="guest_adult" name="adults" required>
        <option value="">--Select--</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br>


    <label for="children">Number of children:</label>
<!--    <input type="number" id="guest_children" name="children" min="0" max="6" required><br>-->

    <select id="guest_children" name="children" required>
        <option value="">--Select--</option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br>

    <label for="special-requests">Special requests:</label>
    <textarea id="special-requests" name="special_requests" rows="4" cols="30"></textarea><br>

    <input type="hidden" id="room_id" name="room_id" value="<?=$room_id?>">
    <input type="hidden" name="price_per_night" value="<?=$result->PricePerNight?>">
    <input type="hidden" name="arrive_date" value="<?=$arrive_date?>">
    <input type="hidden" name="depart_date" value="<?=$departure_date?>">

    <input type="submit" value="Submit" name="submit">

</form>

<script>
    const adultSelect = document.getElementById('guest_adult');
    const childSelect = document.getElementById('guest_children');
    const roomIdInput = document.getElementById('room_id');

    function updateGuestCount() {
        const adultCount = parseInt(adultSelect.value);
        const childCount = parseInt(childSelect.value);
        const totalCount = adultCount + childCount;
        const roomId = parseInt(roomIdInput.value);
        let maxGuests = 0;
        if (roomId === 1 || roomId === 2) {
            maxGuests = 2;
        } else if (roomId === 3 || roomId === 4) {
            maxGuests = 6;
        }
        if (totalCount > maxGuests) {
            alert(`You cannot select more than ${maxGuests} guests for this room.`);
            // Reset the selection to the previous value
            if (this.id === 'guest_adult') {
                adultSelect.value = parseInt(adultSelect.dataset.previousValue);
            } else {
                childSelect.value = parseInt(childSelect.dataset.previousValue);
            }
        } else if (adultCount > maxGuests) {
            alert(`You cannot select more than ${maxGuests} adults for this room.`);
            // Reset the selection to the previous value
            adultSelect.value = parseInt(adultSelect.dataset.previousValue);
        } else {
            // Remember the previous value
            if (this.id === 'guest_adult') {
                adultSelect.dataset.previousValue = adultSelect.value;
            } else {
                childSelect.dataset.previousValue = childSelect.value;
            }
        }
    }

    adultSelect.addEventListener('change', updateGuestCount);
    childSelect.addEventListener('change', updateGuestCount);
    roomIdInput.addEventListener('change', updateGuestCount);
</script>



</body>

