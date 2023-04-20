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

    $customer_query = "INSERT INTO Customers (FirstName, LastName, Birthday, Username, Gender, Email, Phone, Address, password_hash, password_salt, IsAdmin)
            VALUES ('$name', '$surname', '$birthday', NULL, '$gender', '$email', '$phone', '$address', NULL, NULL, 0)";
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
    
    header("Location: rooms");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="<?=ROOT?>assets/css/style.css">
    <script src="<?=ROOT?>assets/js/script.js" defer></script>
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>assets/images/icons/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <title><?= $result->RoomName ?></title>

</head>
<body>

<header>
    <div class="contact-info">
        <div class="social-icons">
            <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>assets/images/icons/facebook.svg" alt="facebook"></a>
            <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>assets/images/icons/instagram.svg" alt="instagram"></a>
            <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>assets/images/icons/yelp.svg" alt="yelp"></a>
        </div>
        <div class="phone-number">
            <img class="phone-icon" src="<?=ROOT?>assets/images/icons/phone.svg" alt="phone">
            <p>315-548-9675</p>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo">
            <a href="<?=ROOT?>">
                <img src="<?=ROOT?>assets/images/icons/logo.svg" alt="The Yorkshire Inn">
            </a>
        </div>

        <div class="navbar-links">
            <ul>
                <li><a href="rooms">Rooms</a></li>
                <li><a href="history">History</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="fingerlakes">Finger Lakes</a></li>
                <li><a href="contact">Contact & Policies</a></li>
            </ul>
        </div>
        <img src="<?=ROOT?>assets/images/icons/menu.svg" alt="menu icon" class="menu-icon">
    </nav>
</header>

<section class="container one-room">

    <!--<?php if($result->RoomName == "Blue Room"): ?>
        <img src="<?=ROOT?><?=$result->Picture?>" alt="<?=$result->RoomName?>">
    <?php endif; ?>

    <?php if($result->RoomName == "Bolero Room"): ?>
        <img src="<?=ROOT?><?=$result->Picture?>" alt="<?=$result->RoomName?>">
    <?php endif; ?>

    <?php if($result->RoomName == "Rose Suite"): ?>
        <img src="<?=ROOT?><?=$result->Picture?>" alt="<?=$result->RoomName?>">
    <?php endif; ?>

    <?php if($result->RoomName == "Lodge Suite"): ?>
        <img src="<?=ROOT?><?=$result->Picture?>" alt="<?=$result->RoomName?>">
    <?php endif; ?>-->

    <form class="booking-form section-title" action="" method="POST">

        <h2>Booking: <?= $result->RoomName ?></h2>

        <div class="booking-form-content">

            <div class="booking-form-content-left">

                <div class="booking-form-content-item">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>


                <div class="booking-form-content-item">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>


                <div class="booking-form-content-item">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>


                <div class="booking-form-content-item">
                    <label for="email">Email:</label>
                    <input id="email" type="email" name="email" placeholder="yourname@example.com" required>
                </div>


                <div class="booking-form-content-item">
                    <label for="phone">Phone:</label>
                    <input id="phone" type="tel" name="phone" placeholder="123-456-7890" required>
                </div>

            </div>

            <div class="booking-form-content-right">

                <div class="booking-form-content-item-group">

                    <div class="booking-form-content-item">
                        <label for="checkin">Arrival date:</label>
                        <input type="date" id="checkin" name="checkin" required value="<?=$arrive_date?>" disabled>
                    </div>

                    <div class="booking-form-content-item">
                        <label for="checkout">Departure date:</label>
                        <input type="date" id="checkout" name="checkout" required value="<?=$departure_date?>" disabled>
                    </div>

                </div>

                <div class="booking-form-content-item">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">-- Select --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="booking-form-content-item birthday">
                    <label for="birthday">Birthday:</label>
                    <input type="date" id="birthday" name="birthday" required>
                </div>


                <div class="booking-form-content-item-group">
                    <div class="booking-form-content-item">
                        <label for="adults">Number of Adults</label>
                        <input type="number" id="adults" name="adults" min="1" max="6" required>
                    </div>

                    <div class="booking-form-content-item">
                        <label for="children">Number of Children</label>
                        <input type="number" id="children" name="children" min="0" max="5" required>
                    </div>
                </div>

                <div class="booking-form-content-item">
                    <label for="special-requests">Special requests:</label>
                    <textarea id="special-requests" name="special_requests" rows="4" cols="30"></textarea>
                    <input type="hidden" id="room_id" name="room_id" value="<?=$room_id?>">
                    <input type="hidden" name="price_per_night" value="<?=$result->PricePerNight?>">
                    <input type="hidden" name="arrive_date" value="<?=$arrive_date?>">
                    <input type="hidden" name="depart_date" value="<?=$departure_date?>">
                </div>

            </div>
        </div> <!--areas-->

        <input class="booking-form-button" type="submit" value="BOOK ROOM" name="submit">

    </form>

</section>

<footer class="full-bleed">

    <div class="footer-container">

        <div class="footer-socials">
            <p class="footer-title">Follow the Yorkshire Inn</p>
            <div class="footer-socials-icons">
                <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>assets/images/icons/facebook-white.svg" alt="facebook"></a>
                <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>assets/images/icons/instagram-white.svg" alt="instagram"></a>
                <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>assets/images/icons/yelp-white.svg" alt="yelp"></a>
            </div>
        </div>

        <div class="footer-contact">
            <p class="footer-title">Contact us</p>
            <p>315-548-9675</p>
            <p>innkeeper@theyorkshireinn.com</p>
        </div>

    </div>

    <p class="copyright">© 2023 THE YORKSHIRE INN - ALL RIGHTS RESERVED</p>

</footer>

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
