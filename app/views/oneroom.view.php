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
<html class = "oneRoomHtml" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="<?=ROOT?>assets/css/style.css">

    <title><?= $result->RoomName ?></title>

</head>
<body class = "oneRoomBody">

<a class = "backtoHomeA" href = "home"<button class = "backToHomeButton">Back to Homepage</button> </a>

<form class="roomBookingForm"  action="" method="POST">



    <h1 class = "oneRoomh1"><i class="far fa-calendar-alt"></i>Book a room</h1>
    <h3 class = "oneRoomh3">Room: <?= $result->RoomName ?></h3>


    <div class="areas">

        <div class="wrapper">
            <div>

                <label for="name">Name:</label>
                <div class="field">
                    <i class="fas fa-user"></i>
                    <input type="text" class = "oneRoomName"  id="name" name="name" required>
                </div>


                <label for="surname">Surname:</label>
                <div class="field">
                    <i class="fas fa-user"></i>

                    <input type="text" class = "oneRoomlastname"  id="surname" name="surname" required>


                </div>
                <div>
                <label for="address">Address:</label>
                <div class="field">
                    <i class="fas fa-map-pin"></i>
                    <input type="text" class = "oneRoomAddress" id="address" name="address" required>
                </div>
            </div>
                <div><label for="email">Email:</label>
                    <div class="field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" class = "oneRoomEmail" type="email" name="email" placeholder=" Email" required>
                    </div>
                </div>
                <div>
                    <label for="phone">Phone:</label>
                    <div class="field">
                        <i class="fas fa-phone"></i>
                        <input id="phone" class = "oneRoomPhone" type="tel" name="phone" placeholder="Phone Number" required>
                    </div>
                </div>
            </div>





            <div class="gap"></div>
            <div>
                <div class="wrapper">
                    <div>
                        <label for="checkin">Check-in date:</label>
                        <div class="field">
                            <input type="date" class = "oneRoomCheckin" id="checkin" name="checkin" required value="<?=$arrive_date?>" disabled>
                        </div>
                    </div>

                    <div class="gap"></div>
                    <div>
                        <label for="checkout">Check-out date:</label>
                        <div class="field">
                            <input type="date" class = "oneRoomCheckout" id="checkout" name="checkout" required value="<?=$departure_date?>" disabled>
                        </div>
                    </div>
                </div>

                <div class="wrapper">
                    <div>
                        <label for="gender">Gender:</label>
                        <div class="field">
                            <select id="gender" class = "oneRoomGender" name="gender" required>
                                <option value="">--Select--</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select><br>
                        </div>
                    </div>


                    <div class="gap"></div>
                    <div>
                        <label for="birthday">Birthday:</label>
                        <div class="field">
                            <input type="date" class = "oneRoomBirth" id="birthday" name="birthday" required>
                        </div>
                    </div>
                </div>






                <div class="wrapper">
                    <div>
                        <label for="adults">Number of Adults</label>
                        <div class="field">
                            <input type="number" class = "oneRoomAdults" id="adults" name="adults" min="1" max="6" required>
                        </div>
                    </div>
                    <div class="gap"></div>
                    <div>
                        <label for="children">Number of Children</label>
                        <div class="field">
                            <input type="number" class = "oneRoomChild" id="children" name="children" min="0" max="5" required>
                        </div>
                    </div>
                </div>
                <label for="special-requests">Special requests:</label>
                <div class="field">
                    <textarea id="special-requests" class = "oneRoomSpecial" name="special_requests" rows="4" cols="30"></textarea>
                    <input type="hidden" id="room_id" name="room_id" value="<?=$room_id?>">
                    <input type="hidden" name="price_per_night" value="<?=$result->PricePerNight?>">
                    <input type="hidden" name="arrive_date" value="<?=$arrive_date?>">
                    <input type="hidden" name="depart_date" value="<?=$departure_date?>">
                </div>
                <input class ="oneRoomSubmit" type="submit" value="Book" name="submit">
            </div>
</form>
<script>
    const adultSelect = document.getElementById('adults');
    const childSelect = document.getElementById('children');
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
            if (this.id === 'adults') {
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
            if (this.id === 'adults') {
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
</html>

