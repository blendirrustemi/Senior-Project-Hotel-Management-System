<?php

$db = new Database();
$con = $db->connect();

// Customers Table:
$name = $_POST['name'];
$surname = $_POST['surname'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

$customer_query = "INSERT INTO Customers 
            VALUES (NULL, '$name', '$surname', '$birthday', NULL, '$gender', '$email', '$phone', '$address', NULL, 0)";
$customer = $db->query($customer_query);

// Bookings Table:
$room_id = $_POST['room_id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$special_requests = $_POST['special_requests'];
$price_per_night = $_POST['price_per_night'];

$total_price = $price_per_night * (strtotime($checkout) - strtotime($checkin));

$get_customer_id = "SELECT CustomerID FROM Customers WHERE Email = '$email' 
                                   and FirstName = '$name' and LastName = '$surname' and birthday = '$birthday'";
$customer_id = $db->query($get_customer_id);

$booking_query = "INSERT INTO Bookings 
            VALUES (NULL, '$customer_id[0]->CustomerID', '$room_id', '$checkin', '$checkout', 
                    '$adults', '$children', '$special_requests', (SELECT DATEDIFF('$checkout', '$checkin')), $total_price)";


?>